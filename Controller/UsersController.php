<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Collection\Collection;

class UsersController extends AppController
{

    /***** FONCTION LOGIN ******/

   public function login()
    {
      if ($this->request->is('post')) {
          $user = $this->Auth->identify();
          

          if  ($user) {


                          if ( $user['active'] == 1) {
           
                             $this->Auth->setUser($user); 
                            

                            return $this->redirect($this->Auth->redirectUrl());
                            }

                            else {


                              return $this->redirect(array( 'controller'=> 'Users', 'action' =>'activate'));
                            }
          
      }else {

        
        
        $this->Flash->adminerror('Adresse E-mail ou mot de passe incorrecte');
      }
    }
  }

     /***** FONCTION LOGIN ******/

  


    

    public function register()
    {

      /** nouvelle instance user et profiles et balance **/
      $user = $this->Users->newEntity();
     
      if ($this->request->is('post')){
         /** récupérer les donnée du formulaire **/
         $data =$this->request->getData();

         if($data['password'] == $data['password1']){
         
           $user=$this->Users->patchEntity($user, $data);
           $user->token=$this->Users->generateToken();
           $user->active=1;
           $user->region_id=1;
           $user->role_id=1;
           $user->profile_id=2;
           $user->tokenpass="tokenreset";

            


           

          if($this->Users->save($user)){
           return $this->redirect(array('prefix'=> false , 'controller'=> 'Users', 'action' =>'login'));
          }



         }else{
          return $this->redirect($this->Auth->register());
         }

       

      }
           
      /** envoyer les donnée a la vue **/
      $this->set(compact('user'));

    }

    
    
    /* rediriger chaque utilisateur à son pack spécifique */
    public function dispatcher()
    {
      $roleid=$this->Auth->user('role_id');



      $role=$this->Users->Roles->get($roleid,array('fields'=>'alias'));
    //debug($role);die;

      $prefix=$role->alias;

      
      return $this->redirect(array('prefix'=> $prefix , 'controller'=> 'Dashboard', 'action' =>'index'));
    }
     /* rediriger chaque utilisateur à son pack spécifique */





    /* se déconnecter */
    public function logout()
    {

        $this->Flash->adminsuccess('Vous êtes déconnecté');

        return $this->redirect($this->Auth->logout());
    }

    /* se déconnecter */







    /* Activer le compte en vérifiant le mail*/


  /*  public function activate()
    {

      if($this->request->is('post')){

              $data=$this->request->getData();
              $t=$data['token'];

              //debug($t);die;


          $c=$this->Users->findByToken($t)->first();
         
          //debug($c);die;

          
         if(isset($c)){


            $doc=$c;
            
            $doc->active=1;
            $doc->token="null";
              //debug($doc);die;
            $this->Users->save($doc);
            $this->redirect(array( 'controller'=> 'Users', 'action' =>'login')); 
          }

          }
        }
*/

        /******  ACTIVATE ACCOUNT ******/
        public function activate()
    {

        if($this->request->is('post')){

              $data=$this->request->getData();
              
          

          $c=$this->Users->find('all',array(

            'conditions' =>array('token'=> $data['token'])


          ))->first();


         
         if(isset($c)){


            $doc=$this->Users->get($c->id);

            $doc->active=1;
            
            $this->Users->save($doc);
            $this->redirect(array( 'controller'=> 'Users', 'action' =>'login')); 
          }else {

            $this->Flash->adminerror('Invalid code. Please verify your code.');
          }


     

          }
        }

        /******    ACTIVATE ACCOUNT   ******/









  /****** RESET PASSWORD *******/ 

  /****** FIND  MAIL *******/

public function recherchemail()
    {
      if($this->request->is('post')){

              $data=$this->request->getData();

              $mail=$data['mail'];



          if ($c=$this->Users->findByEmail($mail)->first())
          {
            $userid=$c->id;
          }

          //debug($c);die;



         if(isset($c)){

            $doc=$c;

            $doc->token=$this->Users->generateToken();

            $destemail=  $doc->email;

            $email = new Email('default');
            $email->to($destemail)
            ->subject('Votre Code Reset password');


            if($email->send($doc->token))
              {
            $this->Users->save($doc);
            $this->redirect(array( 'controller'=> 'Users', 'action' =>'veriftoken',$userid));


            }}

          else
          {

            $this->Flash->adminerror('Adresse e-mail non trouvé');

          }


    }



}


/****** FIND MAIL *******/ 


    

/****** VERIFY TOKEN *******/ 
 

public function veriftoken($userid=null)
    {

      $userid=$userid;

      $user=$this->Users->get($userid);
     //debug($user);die;
      if($this->request->is('post')){

              $data=$this->request->getData();
              //debug($data);die;
              $token=$user->token;
              $tokenpass=$data['tokenpass'];

             if ($token == $tokenpass) {
               $this->redirect(array( 'controller'=> 'Users', 'action' =>'resetpassword',$userid));
               
             } else 
             {
              //debug('verifier votre code');die;
              $this->Flash->adminerror('Code incorrecte. Vérifier votre code.');
             }
     }
 
    
}

/****** VERIFY TOKEN *******/ 



/****** RESET PASSWORD *******/ 


  public function resetpassword($userid=null)
    {

      $userid=$userid;
      $user=$this->Users->get($userid);
    //debug($user);die;

      if($this->request->is('post')){

              $data=$this->request->getData();
              //debug($user);die;

              if($data['pass1'] == $data['pass2'])
              {
              $user=$this->Users->get($userid);
               //debug($user);die;
               $user->password=$data['pass1'];
               
               $this->Users->save($user);
               $this->redirect(array( 'controller'=> 'Users', 'action' =>'login'));


              }
              else {

                $this->Flash->adminerror('Mot de passe de confirmation incorrecte.');
              }
              

            }

         
       
    }


   
    

   /****** RESET PASSWORD *******/ 



/****** RESET PASSWORD *******/ 



}
