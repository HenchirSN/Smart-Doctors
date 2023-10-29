<?php
namespace App\Controller\Docteur;

use App\Controller\AppController;

/**
 * Admindocteurrapports Controller
 *
 * @property \App\Model\Table\AdmindocteurrapportsTable $Admindocteurrapports
 *
 *
 * @method \App\Model\Entity\Admindocteurrapport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdmindocteurrapportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rapports=$this->Admindocteurrapports->find('all', ['limite'=>200]);


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
     * @param string|null $id Admindocteurrapport id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admindocteurrapport = $this->Admindocteurrapports->get($id, [
            'contain' => []
        ]);

        $this->set('admindocteurrapport', $admindocteurrapport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {


        $admindocteurrapport = $this->Admindocteurrapports->newEntity();
        if ($this->request->is('post')) {
            $admindocteurrapport = $this->Admindocteurrapports->patchEntity($admindocteurrapport, $this->request->getData());

            $admindocteurrapport->admin_id=6;
            $admindocteurrapport->docteur_id=$user=$this->request->session()->read('Auth.User.id');;

            if ($this->Admindocteurrapports->save($admindocteurrapport)) {
                $this->Flash->success(__('The admindocteurrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admindocteurrapport could not be saved. Please, try again.'));
        }
        $this->set(compact('admindocteurrapport'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admindocteurrapport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admindocteurrapport = $this->Admindocteurrapports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admindocteurrapport = $this->Admindocteurrapports->patchEntity($admindocteurrapport, $this->request->getData());
            if ($this->Admindocteurrapports->save($admindocteurrapport)) {
                $this->Flash->success(__('The admindocteurrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admindocteurrapport could not be saved. Please, try again.'));
        }
        $this->set(compact('admindocteurrapport'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admindocteurrapport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admindocteurrapport = $this->Admindocteurrapports->get($id);
        if ($this->Admindocteurrapports->delete($admindocteurrapport)) {
            $this->Flash->success(__('The admindocteurrapport has been deleted.'));
        } else {
            $this->Flash->error(__('The admindocteurrapport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
