<?php
namespace App\Controller\Pharmacien;

use App\Controller\AppController;

/**
 * Adminpharmacienrapports Controller
 *
 * @property \App\Model\Table\AdminpharmacienrapportsTable $Adminpharmacienrapports
 *
 * @method \App\Model\Entity\Adminpharmacienrapport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminpharmacienrapportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $rapports=$this->Adminpharmacienrapports->find('all', ['limite'=>200]);


        $this->loadModel('Users');



        foreach ($rapports as $rapport){
            $user=$this->Users->find('all', array(
                'conditions'=>array('id'=> $rapport->admin_id)
            ))->First();




            $rapport['user']=$user;




        }

        $this->set(compact('rapports'));
    }

    /**
     * View method
     *
     * @param string|null $id Adminpharmacienrapport id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminpharmacienrapport = $this->Adminpharmacienrapports->get($id, [
            'contain' => []
        ]);

        $this->set('adminpharmacienrapport', $adminpharmacienrapport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminpharmacienrapport = $this->Adminpharmacienrapports->newEntity();

        if ($this->request->is('post')) {
            $adminpharmacienrapport = $this->Adminpharmacienrapports->patchEntity($adminpharmacienrapport, $this->request->getData());
            $adminpharmacienrapport->admin_id=6;
            $adminpharmacienrapport->pharmacien_id=$user=$this->request->session()->read('Auth.User.id');;

            if ($this->Adminpharmacienrapports->save($adminpharmacienrapport)) {
                $this->Flash->success(__('The adminpharmacienrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adminpharmacienrapport could not be saved. Please, try again.'));
        }
        $this->set(compact('adminpharmacienrapport'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adminpharmacienrapport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminpharmacienrapport = $this->Adminpharmacienrapports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminpharmacienrapport = $this->Adminpharmacienrapports->patchEntity($adminpharmacienrapport, $this->request->getData());
            if ($this->Adminpharmacienrapports->save($adminpharmacienrapport)) {
                $this->Flash->success(__('The adminpharmacienrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adminpharmacienrapport could not be saved. Please, try again.'));
        }
        $this->set(compact('adminpharmacienrapport'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adminpharmacienrapport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminpharmacienrapport = $this->Adminpharmacienrapports->get($id);
        if ($this->Adminpharmacienrapports->delete($adminpharmacienrapport)) {
            $this->Flash->success(__('The adminpharmacienrapport has been deleted.'));
        } else {
            $this->Flash->error(__('The adminpharmacienrapport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
