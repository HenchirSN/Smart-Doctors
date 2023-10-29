<?php
namespace App\Controller\Docteur;

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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */


    public function indexsec($type=null)
    {
        $querry=$this->Users->Roles->findByAlias($type)->first();
        $typeid=$querry->id;

        if ($type == 'secretaire') {
            $msg='Liste des secretaires';
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


    public function index()
    {



          $msg='Liste des patient';




        $users=$this->Users->find('all', array(
            'conditions'=>array('role_id'=> 4)
        ));


        $this->loadModel('Patientprofiles');
        $this->loadModel('Qrcode');
        $this->loadModel('Regions');

        foreach ($users as $user){
            $patient=$this->Patientprofiles->find('all', array(
                'conditions'=>array('id'=> $user->profile_id)
            ))->First();




            $user['patient']=$patient;

            $qrcode=$this->Qrcode->find('all', array(
                'conditions'=>array('id'=> $patient['qrcode_id'])
            ))->First();
            $user['qrcode']=$qrcode;


            $region=$this->Regions->find('all', array(
                'conditions'=>array('id'=> $user->region_id)
            ))->First();
            $user['region']=$region;


        }




        $this->set(compact('users','msg'));
    }




public function addpa()
    {

      $user = $this->Users->newEntity();
       if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        $user->token=$this->Users->generateToken();
        $user->active=0;

        

        $user->role_id=4;
        $user->emailres="vide";


        

          $this->loadmodel('Patientprofiles');
          $this->loadmodel('Qrcode');
          $profile=$this->Patientprofiles->newEntity();
           $data =$this->request->getData();


           // generer qrcode
           $qrcode=$this->Qrcode->newEntity();
           $qrcode->code=$this->Users->generateToken();

           $saveqrcode=$this->Qrcode->save($qrcode);


            $patientprofile = $this->Patientprofiles->newEntity();
            $patientprofile->cin=$data['data']['cin'];
            $patientprofile->datenaissance=$data['data']['datenaissance'];
            $patientprofile->mobile=$data['data']['mobile'];
            $patientprofile->profession=$data['data']['profession'];
            $patientprofile->adresse=$data['data']['adresse'];
            $patientprofile->codepostal=$data['data']['codepostal'];
            $patientprofile->situationfamiliale=$data['data']['situationfamiliale'];
           $patientprofile->qrcode_id=$saveqrcode->id;


          $saveprofile=$this->Patientprofiles->save($patientprofile);

          $user->profile_id=$saveprofile->id;
          $destemail= $user->email;

            $email = new Email('default');

            if($email->to($destemail)
            ->subject('Votre Code')
            ->send($user->token)){
            if($this->Users->save($user)){

                    $this->Flash->adminsuccess(__('The user has been saved.'));
                return $this->redirect(['controller'=>'Users','action' => 'index']);
                }
                else{
                    $this->Flash->adminerror(__('The user could not be saved. Please, try again.'));
                }
              }
          
      
 
       }
      
      $regions = $this->Users->Regions->find('list', ['limit' => 200]);
      
      $this->set(compact('user','regions'));
    } 




















     public function indexpatient()
    {
            $idconnecte=$this->Auth->user('id');
            
            

            
            
        $this->paginate = [
            'contain' => ['Roles', 'Profiles', 'Regions']
        ];
        $users = $this->paginate($this->Users);
                
        $this->set(compact('users'));
        $this->set(compact('idconnecte'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Profiles', 'Regions']
        ]);

        $this->set('user', $user);
    }
     public function profile()
    {
        $this->loadmodel('Docprofiles');
        $idc=$this->Auth->user('id');

        $user = $this->Users->get($idc, [
            'contain' => ['Roles' , 'Regions',]
        ]);

        $profileid=$user->profile_id;


        
        $profile=$this->Docprofiles->get($profileid);

        $user['profile']=$profile;

        if ($this->request->is(['patch', 'post', 'put'])) {

           $data= $this->request->getData();

            $user->firstname=$data['firstname'];
            $user->lastname=$data['lastname'];
            $user->url=$data['url'];
           // debug($user->firstname);die;
            $this->Users->save($user);
            $profile->cin=$data['profile']['cin'];
            $profile->specialité=$data['profile']['specialité'];
            $profile->datenaissance=$data['profile']['datenaissance'];
            $profile->mobile=$data['profile']['mobile'];
            $profile->mobileautre=$data['profile']['mobileautre'];
            $profile->telephonecabinet=$data['profile']['telephonecabinet'];
            $profile->telephonecabinetautre=$data['profile']['telephonecabinetautre'];
            $profile->adresse=$data['profile']['adresse'];
            $profile->adressepro=$data['profile']['adressepro'];
            $profile->modeexercice=$data['profile']['modeexercice'];
            $profile->codepostal=$data['profile']['codepostal'];
            $profile->situationfamiliale=$data['profile']['situationfamiliale'];
          //  debug($profile->adressepro);die;

          // debug($data);die;
            if ($this->Docprofiles->save($profile)) {

                $this->Flash->adminsuccess(__('Votre profile a été modifier avec succée.'));



                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->adminerror(__('Votre profile n a pas été enregistré. Essayez de nouveau.'));


        }




        $this->set('user', $user);
        
        $this->set(compact('profile'));

       // debug($profileid);die;
      
        //debug($profile);die;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */


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

                $secprofile->docteur_id=$this->request->session()->read('Auth.User.id');



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


     public function addpatient()

     {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->token=$this->Users->generateToken();
            $user->active=0;
            $user->tokenpass=$this->Users->generateToken();
            $this->loadmodel('Patientprofiles');

            $user->role_id=4;
            $patientprofile = $this->Patientprofiles->newEntity();
            $patientprofile->datenaissance=0;
            $patientprofile->mobile=null;
            $patientprofile->proffesion=null;
            $patientprofile->adresse=null;
            $patientprofile->codepostal=null;
            $patientprofile->situationfamiliale=null;


            $savedprofile = $this->Patientprofiles->save($patientprofile);

            $user->profile_id= $savedprofile->id ;


            $destemail= $user->email;

            $email = new Email('default');

            if($email->to($destemail)
            ->subject('Votre Code')
            ->send($user->token))

            {
            
             if($this->Users->save($user)){
                                $user->profile_id= $savedprofile->id ;

                    $this->Flash->adminsuccess(__('The user has been saved.'));
                return $this->redirect(['controller'=>'Patientprofiles','action' => 'edita',$user->profile_id]);
                }
                else{
                    $this->Flash->adminerror(__('The user could not be saved. Please, try again.'));
                }
            }


            else{
                 $this->Flash->adminerror(__('try another mail.'));
                 return $this->redirect(['controller' => 'Users','action'=>'add']);

            } 
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'profiles', 'regions'));
    }



    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->loadModel('Patientprofiles');
        $profiles = $this->Patientprofiles->find('list', ['limit' => 200]);
        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'profiles', 'regions'));
    }


    public function settings()
    {
         $this->loadmodel('Docprofiles'); 
          $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => []
        ]);



        $idpd=$user->profile_id;

         $docprofile = $this->Docprofiles->get($idpd, [
            'contain' => []
        ]);



        //debug($docprofile);die;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $docprofile = $this->Docprofiles->patchEntity($docprofile, $this->request->getData());
            if ( $this->Users->save($user) ) {
                  
                $docprofile->cin=343434;
                $this->save->Docprofiles($docprofile);
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        
        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles',  'regions'));
    }



    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
              
              //debug($c->password);die;

            if( $data['pass2'] == $passancien  )
            {  

                debug('kinda');die; 
                

                

               // debug($c->password);die;


                             
                    //debug($ida);die;
                    
                    //debug($c);die;

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

         //   debug($c->token);die;

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
