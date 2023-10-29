<?php
namespace App\Controller\Pharmacien;

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
        $this->loadModel('Qrcode');
        $this->loadModel('Patientprofiles');
        $this->paginate = [
            'contain' => ['Medicaments', 'Users']
        ];



        $ordonnances=$this->Ordonnances->find('all',['limite'=>200]);

        // pour envoyer les données du docteur et du patient

        foreach ($ordonnances as $ordonnance){
            $user=$this->Users->find('all',array(
                'conditions'=>array('id'=>$ordonnance->docteur_id)
            ))->First();

            $ordonnance['user']=$user;

            $patient=$this->Users->find('all',array(
                'conditions'=>array('id'=>$ordonnance->user_id)
            ))->First();

            $ordonnance['patient']=$patient;



            $pat=$this->Patientprofiles->find('all',array(
                'conditions'=>array('id'=>$patient->profile_id)
            ))->First();

            $qrcode=$this->Qrcode->find('all', array(
                'conditions'=>array('id'=> $pat['qrcode_id'])
            ))->First();


            $ordonnance['qrcode']=$qrcode;




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
