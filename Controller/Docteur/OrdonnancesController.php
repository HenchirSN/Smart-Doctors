<?php
namespace App\Controller\Docteur;

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

 $ordonnances=$this->Ordonnances->find('all',array(
     'conditions'=>array('docteur_id'=>$user=$this->request->session()->read('Auth.User.id'))
 ));
 
 // pour envoyer les données du user 
 
  foreach ($ordonnances as $ordonnance){
            $user=$this->Users->find('all',array(
                'conditions'=>array('id'=>$ordonnance->user_id)
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




    public function ordonnancepat($id=null)
    {
        $this->loadModel('Users');
        $this->loadModel('Medicaments');


        $this->paginate = [
            'contain' => ['Medicaments', 'Users']
        ];

        $user=$id;


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



    /**
     * View method
     *
     * @param string|null $id Ordonnance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordonnance = $this->Ordonnances->get($id, [
            'contain' => ['Medicaments', 'Users']
        ]);

        $this->set('ordonnance', $ordonnance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Users');




        $ordonnance = $this->Ordonnances->newEntity();
        
        $this->loadmodel('Medicaments');


        if ($this->request->is('post')) {
                      $data =$this->request->getData();






            $docprofile = $this->Medicaments->newEntity();
            $docprofile->label=$data['label'];
          $saveprofile=$this->Medicaments->save($docprofile);



            $ordonnance = $this->Ordonnances->patchEntity($ordonnance, $this->request->getData());
            $ordonnance->medicament_id=$this->request->getData()['medicament_id'][0];

            $ordonnance->docteur_id=$this->request->session()->read('Auth.User.id');


            if ($this->Ordonnances->save($ordonnance)) {
                $this->Flash->success(__('The ordonnance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordonnance could not be saved. Please, try again.'));
        }

        $medicaments = $this->Ordonnances->Medicaments->find('list', ['limit' => 200]);

        $users = $this->Ordonnances->Users->find('list',array(
            'conditions'=>array('role_id'=>4)
        ));
        $this->set(compact('ordonnance', 'medicaments', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordonnance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordonnance = $this->Ordonnances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordonnance = $this->Ordonnances->patchEntity($ordonnance, $this->request->getData());
            if ($this->Ordonnances->save($ordonnance)) {
                $this->Flash->success(__('The ordonnance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordonnance could not be saved. Please, try again.'));
        }
        $medicaments = $this->Ordonnances->Medicaments->find('list', ['limit' => 200]);
        $users = $this->Ordonnances->Users->find('list', ['limit' => 200]);
        $this->set(compact('ordonnance', 'medicaments', 'users','qrcodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordonnance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordonnance = $this->Ordonnances->get($id);
        if ($this->Ordonnances->delete($ordonnance)) {
            $this->Flash->success(__('The ordonnance has been deleted.'));
        } else {
            $this->Flash->error(__('The ordonnance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
