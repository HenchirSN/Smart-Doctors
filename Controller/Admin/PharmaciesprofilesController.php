<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Pharmaciesprofiles Controller
 *
 * @property \App\Model\Table\PharmaciesprofilesTable $Pharmaciesprofiles
 *
 * @method \App\Model\Entity\Pharmaciesprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PharmaciesprofilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pharmaciesprofiles = $this->paginate($this->Pharmaciesprofiles);

        $this->set(compact('pharmaciesprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Pharmaciesprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pharmaciesprofile = $this->Pharmaciesprofiles->get($id, [
            'contain' => []
        ]);

        $this->set('pharmaciesprofile', $pharmaciesprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pharmaciesprofile = $this->Pharmaciesprofiles->newEntity();
        if ($this->request->is('post')) {
            $pharmaciesprofile = $this->Pharmaciesprofiles->patchEntity($pharmaciesprofile, $this->request->getData());
            if ($this->Pharmaciesprofiles->save($pharmaciesprofile)) {
                $this->Flash->success(__('The pharmaciesprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pharmaciesprofile could not be saved. Please, try again.'));
        }
        $this->set(compact('pharmaciesprofile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pharmaciesprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pharmaciesprofile = $this->Pharmaciesprofiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pharmaciesprofile = $this->Pharmaciesprofiles->patchEntity($pharmaciesprofile, $this->request->getData());
            if ($this->Pharmaciesprofiles->save($pharmaciesprofile)) {
                $this->Flash->success(__('The pharmaciesprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pharmaciesprofile could not be saved. Please, try again.'));
        }
        $this->set(compact('pharmaciesprofile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pharmaciesprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pharmaciesprofile = $this->Pharmaciesprofiles->get($id);
        if ($this->Pharmaciesprofiles->delete($pharmaciesprofile)) {
            $this->Flash->success(__('The pharmaciesprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The pharmaciesprofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
