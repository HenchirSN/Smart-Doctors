<?php
namespace App\Controller\Patient;

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

        
 
       } 
      
     
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


   

    public function settings()
    {
        $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->adminsuccess(__('The modifications has been saved.'));

                return $this->redirect(['controller'=>'Users','action' => 'profile']);
            }
            $this->Flash->adminerror(__('Les modifications ont été .'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        
        $regions = $this->Users->Regions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles',  'regions'));
    }


    /*  public function profile()
    {   
        $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => ['Roles',  'Regions']
        ]);

        $this->set('user', $user);
    } */


      public function profile()
    {
        $this->loadmodel('Patientprofiles');
        $idc=$this->Auth->user('id');

        $user = $this->Users->get($idc, [
            'contain' => ['Roles' , 'Regions',]
        ]);

        $profileid=$user->profile_id;


        
        $profile=$this->Patientprofiles->get($profileid);

        $user['profile']=$profile;

        if ($this->request->is(['patch', 'post', 'put'])) {

            $data= $this->request->getData();

            $user->firstname=$data['firstname'];
            $user->lastname=$data['lastname'];
            $user->url=$data['url'];
            // debug($user->firstname);die;
            $this->Users->save($user);
            $profile->cin=$data['profile']['cin'];

            $profile->datenaissance=$data['profile']['datenaissance'];
            $profile->mobile=$data['profile']['mobile'];

            $profile->adresse=$data['profile']['adresse'];
          
            $profile->profession=$data['profile']['profession'];
            $profile->codepostal=$data['profile']['codepostal'];
            $profile->situationfamiliale=$data['profile']['situationfamiliale'];
            //  debug($profile->adressepro);die;

            // debug($data);die;
            if ($this->Patientprofiles->save($profile)) {

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
                 $this->Flash->adminerror(__('Code incorrecte. Vérifier votre code'));
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
