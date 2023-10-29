<?php
namespace App\Controller\Docteur;

use App\Controller\AppController;

/**
 * Docprofiles Controller
 *
 * @property \App\Model\Table\DocprofilesTable $Docprofiles
 *
 * @method \App\Model\Entity\Docprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocprofilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $docprofiles = $this->paginate($this->Docprofiles);

        $this->set(compact('docprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Docprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docprofile = $this->Docprofiles->get($id, [
            'contain' => []
        ]);

        $this->set('docprofile', $docprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docprofile = $this->Docprofiles->newEntity();
        if ($this->request->is('post')) {
            $docprofile = $this->Docprofiles->patchEntity($docprofile, $this->request->getData());
            if ($this->Docprofiles->save($docprofile)) {
                $this->Flash->success(__('The docprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docprofile could not be saved. Please, try again.'));
        }
        $this->set(compact('docprofile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Docprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docprofile = $this->Docprofiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docprofile = $this->Docprofiles->patchEntity($docprofile, $this->request->getData());
            if ($this->Docprofiles->save($docprofile)) {
                $this->Flash->success(__('The docprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docprofile could not be saved. Please, try again.'));
        }
        $this->set(compact('docprofile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Docprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docprofile = $this->Docprofiles->get($id);
        if ($this->Docprofiles->delete($docprofile)) {
            $this->Flash->success(__('The docprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The docprofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
