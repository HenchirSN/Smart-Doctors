<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Secretaireprofiles Controller
 *
 * @property \App\Model\Table\SecretaireprofilesTable $Secretaireprofiles
 *
 * @method \App\Model\Entity\Secretaireprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SecretaireprofilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Docteurs']
        ];
        $secretaireprofiles = $this->paginate($this->Secretaireprofiles);

        $this->set(compact('secretaireprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Secretaireprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secretaireprofile = $this->Secretaireprofiles->get($id, [
            'contain' => ['Docteurs']
        ]);

        $this->set('secretaireprofile', $secretaireprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secretaireprofile = $this->Secretaireprofiles->newEntity();
        if ($this->request->is('post')) {
            $secretaireprofile = $this->Secretaireprofiles->patchEntity($secretaireprofile, $this->request->getData());
            if ($this->Secretaireprofiles->save($secretaireprofile)) {
                $this->Flash->success(__('The secretaireprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secretaireprofile could not be saved. Please, try again.'));
        }
        $docteurs = $this->Secretaireprofiles->Docteurs->find('list', ['limit' => 200]);
        $this->set(compact('secretaireprofile', 'docteurs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Secretaireprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secretaireprofile = $this->Secretaireprofiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secretaireprofile = $this->Secretaireprofiles->patchEntity($secretaireprofile, $this->request->getData());
            if ($this->Secretaireprofiles->save($secretaireprofile)) {
                $this->Flash->success(__('The secretaireprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secretaireprofile could not be saved. Please, try again.'));
        }
        $docteurs = $this->Secretaireprofiles->Docteurs->find('list', ['limit' => 200]);
        $this->set(compact('secretaireprofile', 'docteurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Secretaireprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secretaireprofile = $this->Secretaireprofiles->get($id);
        if ($this->Secretaireprofiles->delete($secretaireprofile)) {
            $this->Flash->success(__('The secretaireprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The secretaireprofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
