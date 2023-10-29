<?php
namespace App\Controller\Docteur;

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

        $docteurrapports=$this->Docteurrapports->find('all', ['limite'=>200]);


        $this->loadModel('Users');



        foreach ($docteurrapports as $docteurrapport){
            $user=$this->Users->find('all', array(
                'conditions'=>array('id'=> $docteurrapport->user_id)
            ))->First();




            $docteurrapport['user']=$user;




        }

        $this->set(compact('docteurrapports'));
    }

    /**
     * View method
     *
     * @param string|null $id Docteurrapport id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docteurrapport = $this->Docteurrapports->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('docteurrapport', $docteurrapport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {



        $this->loadModel('Users');



        $docteurrapport = $this->Docteurrapports->newEntity();
        if ($this->request->is('post')) {
            $docteurrapport = $this->Docteurrapports->patchEntity($docteurrapport, $this->request->getData());
            $docteurrapport->docteur_id= $user=$this->request->session()->read('Auth.User.id');

            if ($this->Docteurrapports->save($docteurrapport)) {
                $this->Flash->success(__('The docteurrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docteurrapport could not be saved. Please, try again.'));
        }
        $users = $this->Docteurrapports->Users->find('list',array(
            'conditions'=>array('role_id'=>4)
        ));
        $this->set(compact('docteurrapport', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Docteurrapport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docteurrapport = $this->Docteurrapports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docteurrapport = $this->Docteurrapports->patchEntity($docteurrapport, $this->request->getData());
            if ($this->Docteurrapports->save($docteurrapport)) {
                $this->Flash->success(__('The docteurrapport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docteurrapport could not be saved. Please, try again.'));
        }
        $users = $this->Docteurrapports->Users->find('list', ['limit' => 200]);
        $this->set(compact('docteurrapport', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Docteurrapport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docteurrapport = $this->Docteurrapports->get($id);
        if ($this->Docteurrapports->delete($docteurrapport)) {
            $this->Flash->success(__('The docteurrapport has been deleted.'));
        } else {
            $this->Flash->error(__('The docteurrapport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
