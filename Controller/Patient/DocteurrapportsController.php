<?php
namespace App\Controller\Patient;

use App\Controller\AppController;

/**
 * Docteurrapports Controller
 *
 * @property \App\Model\Table\DocteurrapportsTable $Docteurrapports
 *
 * @method \App\Model\Entity\Docteurrapport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocteurrapportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadModel('Users');




        $user=$this->request->session()->read('Auth.User.id');


        $docteurrapports=$this->Docteurrapports->find('all',array(
            'conditions'=>array('user_id'=>$user)
        ));

        // pour envoyer les données du docteur

        foreach ($docteurrapports as $docteurrapport){
            $user=$this->Users->find('all',array(
                'conditions'=>array('id'=>$docteurrapport->docteur_id)
            ))->First();

            $docteurrapport['user']=$user;

        }












        $this->set(compact('docteurrapports'));
    }

   
}
