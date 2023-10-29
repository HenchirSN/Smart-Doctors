<?php
namespace App\Controller\Patient;

use App\Controller\AppController;

/**
 * Ordonnances Controller
 *
 * @property \App\Model\Table\OrdonnancesTable $Ordonnances
 *
 * @method \App\Model\Entity\Ordonnance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdonnancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadModel('Users');
        $this->loadModel('Medicaments');


        $this->paginate = [
            'contain' => ['Medicaments', 'Users']
        ];

        $user=$this->request->session()->read('Auth.User.id');


        $ordonnances=$this->Ordonnances->find('all',array(
            'conditions'=>array('user_id'=>$user)
        ));

        // pour envoyer les données du docteur

        foreach ($ordonnances as $ordonnance){
            $user=$this->Users->find('all',array(
                'conditions'=>array('id'=>$ordonnance->docteur_id)
            ))->First();

            $ordonnance['user']=$user;

        }







        // pour envoyer les données du medicament

        foreach ($ordonnances as $ordonnance){
            $medicament=$this->Medicaments->find('all',array(
                'conditions'=>array('id'=>$ordonnance->medicament_id)
            ))->First();

            $ordonnance['medicament']=$medicament;

        }





        $this->set(compact('ordonnances'));
    }



}
