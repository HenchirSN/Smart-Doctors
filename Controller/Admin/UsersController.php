<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    


    public function index($type=null)
    {
        $querry=$this->Users->Roles->findByAlias($type)->first();
        $typeid=$querry->id;

        if ($type == 'docteur') {
          $msg='Liste des docteurs';
        }elseif ($type == 'pharmacien') {
          $msg='Liste des pharmaciens';
        }elseif ($type == 'secretaire') {
            $msg='Liste des secretaires';
        }else{
          $msg='Liste des patients';
        }
        

        $this->paginate = [
            'contain' => ['Roles', 'Regions']
        ];

        $users=$this->Users->find('all', array(
            'conditions'=>array('role_id'=>$typeid)
        ));

        $users = $this->paginate($users);

        $this->set(compact('users','type','msg'));
    }




    public function delete($id = null)
    {   $iduser=$id;
        $this->request->allowMethod(['post','save']);
        $user = $this->Users->get($id);
        $type=$user->role_id;
        if($type==2)
        {
            $t='docteur';
        }
        if($type==3)
        {
            $t='pharmacien';
        }
        if ($user->active == 1 ){
            $user->active=0;

            //debug($t);die;

            //debug($profile);die;
            if ($this->Users->save($user)) {
                $this->Flash->adminsuccess(__('Le compte a été désactivé avec succès .'));
            } else {
                $this->Flash->adminerror(__('Le compte est encore active .'));
            }

            if ($t=='docteur'){
                return $this->redirect(['controller'=>'Admindocteurrapports','action' => 'add',$iduser]);
            }
            else {
                return $this->redirect(['controller'=>'Adminpharmacienrapports','action' => 'add',$iduser]);

            }
        }
        else {
            $this->redirect(['controller'=>'Users','action' => 'index', $t]);
            $this->Flash->adminerror('Ce compte est déjà inactive.');
        }


    }


    public function reactive($id = null)
    {   $iduser=$id;
        $this->request->allowMethod(['post','save']);
        $user = $this->Users->get($id);
        $user->active=1;
        $type=$user->role_id;
        if($type==2)
        {
            $t='docteur';
        }
        if($type==3)
        {
            $t='pharmacien';
        }
        //debug($t);die;

        //debug($profile);die;


        if ($this->Users->save($user)) {
            $this->Flash->adminsuccess(__('Le compte a été réactivé avec succès .'));






        } else {
            $this->Flash->adminerror(__('Le compte est encore inactive .'));
        }

        if ($t=='docteur'){
            return $this->redirect(['controller'=>'Admindocteurrapports','action' => 'add',$iduser]);
        }
        else {
            return $this->redirect(['controller'=>'Adminpharmacienrapports','action' => 'add',$iduser]);

        }
    }


    public function block($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $this->loadmodel('Docprofiles');
        $userprofileid=$user->profile_id;
        $profile =$this->Docprofiles->get($userprofileid);
        //debug($profile);die;
        if ($this->Users->delete($user) && $this->Docprofiles->delete($profile) ) {
            $this->Flash->success(__('The Doctor has been deleted.'));
        } else {
            $this->Flash->error(__('The Doctor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Dashboard','action' => 'index']);
    }




    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    



    public function add($type=null)
    {

             

        if ($type == 'docteur') {
          
          $this->redirect(['controller'=>'Users','action' => 'addm',$type]);
        }
        
        elseif ($type == 'pharmacien') {

            $this->redirect(['controller'=>'Users','action' => 'addp',$type]);

        
 
       } elseif ($type == 'secretaire') {

            $this->redirect(['controller'=>'Users','action' => 'addsec',$type]);



        }


    }









public function addm($type=null)
    {

      $user = $this->Users->newEntity();
       if ($this->request->is('post')) {

        $user = $this->Users->patchEntity($user, $this->request->getData());

        $user->token=$this->Users->generateToken();
        $user->active=0;

        $querry=$this->Users->Roles->findByAlias($type)->first();
        $typeid=$querry->id;

        $user->role_id=$typeid;

           $user->emailres="vide";

        
          $this->loadmodel('Docprofiles');
          $profile=$this->Docprofiles->newEntity();
          if($this->request->is('post'))
          {
          $data =$this->request->getData();

          $docprofile = $this->Docprofiles->newEntity();

            $docprofile->mobileautre=$data['data']['mobileautre'];
            $docprofile->telephonecabinet=$data['data']['telephonecabinet'];
            $docprofile->telephonecabinetautre=$data['data']['telephonecabinetautre'];
            $docprofile->specialité=$data['data']['specialité'];
            $docprofile->modeexercice=$data['data']['modeexercice'];

            $docprofile->adressepro=$data['data']['adressepro'];

         

          $saveprofile=$this->Docprofiles->save($docprofile);
          $user->profile_id=$saveprofile->id;
          $destemail= $user->email;

            $email = new Email('default');

            if($email->to($destemail)
            ->subject('Votre Code')
            ->send($user->token)){
                $user->url="url";
              if($this->Users->save($user)){

                    $this->Flash->adminsuccess(__('Compte docteur est enregistré avec succès.'));
                return $this->redirect(['controller'=>'Users','action' => 'index',$type]);
                }
                else{
                    $this->Flash->adminerror(__('Compte docteur non enregistré.'));
                }
              }

          }
          
        }
        
        
      
      $regions = $this->Users->Regions->find('list', ['limit' => 200]);
      
      $this->set(compact('user','regions'));
    }




public function addp($type=null)
    {

      $user = $this->Users->newEntity();
       if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        $user->token=$this->Users->generateToken();
        $user->active=0;

        $querry=$this->Users->Roles->findByAlias($type)->first();
        $typeid=$querry->id;

        $user->role_id=$typeid;
           $user->emailres="vide";

        
 

          $this->loadmodel('Pharmaciesprofiles');
          $profile=$this->Pharmaciesprofiles->newEntity();
           $data =$this->request->getData();

          $pharmacieprofil = $this->Pharmaciesprofiles->newEntity();


            $pharmacieprofil->mobileautre=$data['data']['mobileautre'];

            $pharmacieprofil->telephonepharmacie=$data['data']['telephonepharmacie'];
            $pharmacieprofil->telephonepharmacieautre=$data['data']['telephonepharmacieautre'];
            $pharmacieprofil->adressepharmacie=$data['data']['adressepharmacie'];
            $pharmacieprofil->mode=$data['data']['mode'];
            

          $saveprofile=$this->Pharmaciesprofiles->save($pharmacieprofil);
          $user->profile_id=$saveprofile->id;
          $destemail= $user->email;

            $email = new Email('default');

            if($email->to($destemail)
            ->subject('Votre Code')
            ->send($user->token)){
                $user->url="url";
            if($this->Users->save($user)){

                    $this->Flash->adminsuccess(__('Compte pharmacien est enregistré avec succès.'));
                return $this->redirect(['controller'=>'Users','action' => 'index',$type]);
                }
                else{
                    $this->Flash->adminerror(__('Compte pharmacien non enregistré.'));
                }
              }
          
      
 
       }
      
      $regions = $this->Users->Regions->find('list', ['limit' => 200]);
      
      $this->set(compact('user','regions'));
    }





    public function addsec($type=null)
    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->token=$this->Users->generateToken();
            $user->active=0;

            $querry=$this->Users->Roles->findByAlias($type)->first();
            $typeid=$querry->id;

            $user->role_id=$typeid;
            $user->emailres="vide";


            $this->loadmodel('Secretaireprofiles');
            $profile=$this->Secretaireprofiles->newEntity();
            if($this->request->is('post'))
            {
                $data =$this->request->getData();

                $secprofile = $this->Secretaireprofiles->newEntity();

                $secprofile->docteur_id=$data['data']['docteur_id'];



                $saveprofile=$this->Secretaireprofiles->save($secprofile);

                $user->profile_id=$saveprofile->id;
                $destemail= $user->email;
                $email = new Email('default');

                if($email->to($destemail)
                    ->subject('Votre Code')
                    ->send($user->token)){
                    $user->url="url";


                    if($this->Users->save($user)){

                        $this->Flash->adminsuccess(__('Compte secretaire est enregistré avec succès.'));
                        return $this->redirect(['controller'=>'Users','action' => 'index',$type]);
                    }
                    else{
                        $this->Flash->adminerror(__('Compte secretaire non enregistré.'));
                    }
                }

            }

        }



        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $users = $this->Users->find('list', ['limit' => 200]);


        $this->set(compact('user','regions','users'));
    }







 

    

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /* public function delete($id = null)
    {
        $this->request->allowMethod(['post','save']);
        $user = $this->Users->get($id);
        $user->active=0;
        $type=$user->role_id;
        if($type==2)
        {
          $t='docteur';
        }
        if($type==3)
        {
          $t='pharmacien';
        }
        //debug($t);die;
        
        //debug($profile);die;
        if ($this->Users->save($user)) {
            $this->Flash->adminsuccess(__('Le compte a été désactivé avec succès .'));
        } else {
            $this->Flash->adminerror(__('Le compte est encore active .'));
        }

        return $this->redirect(['controller'=>'Users','action' => 'index',$t]);
    }




    public function block($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $this->loadmodel('Docprofiles');
        $userprofileid=$user->profile_id;
        $profile =$this->Docprofiles->get($userprofileid);
        //debug($profile);die;
        if ($this->Users->delete($user) && $this->Docprofiles->delete($profile) ) {
            $this->Flash->success(__('The Doctor has been deleted.'));
        } else {
            $this->Flash->error(__('The Doctor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Dashboard','action' => 'index']);
    }

*/
   

    public function settings()
    {
        $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->adminsuccess(__('Les modifications sont enregistrés avec succès.'));

                return $this->redirect(['controller'=>'Users','action' => 'profile','prefix'=>'admin']);
            }
            $this->Flash->adminerror(__('Les modifications ne sont pas enregistrés.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        
        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles',  'regions'));
    }


      public function profile()
    {   
        $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => ['Roles',  'Regions']
        ]);



        if ($this->request->is(['patch', 'post', 'put'])) {


            $data= $this->request->getData();
            $user->firstname=$data['firstname'];
            $user->lastname=$data['lastname'];
            $user->url=$data['url'];

        if ($this->Users->save($user)) {

            $this->Flash->adminsuccess(__('Votre profile a été modifier avec succée.'));



            return $this->redirect(['action' => 'profile']);
        }
        $this->Flash->adminerror(__('Votre profile n a pas été enregistré. Essayez de nouveau.'));


    }

        $this->set('user', $user);
    }



      



      


    public function changepassword()
    {

        if($this->request->is('post')){

              $data=$this->request->getData();
              
              $ida=$this->Auth->user('id');


              $c=$this->Users->find('all',array(

                    'conditions' =>array('id'=> $ida)

                    ))->first();


              $passancien=$c->password ;
              debug($passancien);die;
              
            
            if( $data['pass2'] == $passancien  )
            {  

                debug('kinda');die; 
                

                


                             if(isset($c)){


                                $adm=$this->Users->get( $c->id );

                                $adm->password=$data['pass2'];
                                 $this->Users->save($adm);
                                $this->redirect(array( 'controller'=> 'Users', 'action' =>'index')); 
                                 }

                         }
                    


        




            else {
                debug('thabet');die;
            }


         

          
        

     

          }
        }



    public function changemail()
    {

        if($this->request->is('post')){

            $idc=$this->Auth->user('id');
            $data=$this->request->getData();
            //debug($data['mail1']);die;

            //$data['token'];
            //debug($data);die;



            $c=$this->Users->find('all',array(

                'conditions' =>array('id'=> $idc)


            ))->first();

            //debug($c);die;






            $doc=$this->Users->get($c->id );

            $doc->emailres=$data['mail1'];
            $destemail=$doc->emailres;
            $email = new Email('default');
            $doc->token=$this->Users->generateToken();
            $this->Users->save($doc);



            if($email->to($destemail)
                ->subject('Votre Code Reset Email')
                ->send($doc->token))
            {
                $this->Users->save($doc);
                $this->redirect(array( 'controller'=> 'Users', 'action' =>'veriftoken'));


            }

        }

        else
        {

            //debug('l mail na pas été envoyé');die;

        }


    }









    public function veriftoken()
    {



        if($this->request->is('post')){

            $data=$this->request->getData();
            $idc=$this->Auth->user('id');
            //debug($data['tokenmail']);die;



            $c=$this->Users->find('all',array(

                'conditions' =>array('id'=> $idc )


            ))->first();

            // debug($c->token);die;

            if( $data['tokenmail']==$c->token   )
            {

                //debug($c->emailres);die;

                $c->email=$c->emailres;
                $c->emailres="vide";

                $this->Users->save($c);
                $this->redirect(array( 'controller'=> 'Users', 'action' =>'profile'));
                $this->Flash->adminsuccess(__('Votre E-mail a été changé avec succèss.'));


            }
            else {
                $this->Flash->adminerror(__('Code incorrecte. Vérifier votre code de vérification.'));
            }




        }
    }
}
