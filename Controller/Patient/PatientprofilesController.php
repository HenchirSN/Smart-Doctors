<?php
namespace App\Controller\Patient;

use App\Controller\AppController;

/**
 * Patientprofiles Controller
 *
 * @property \App\Model\Table\PatientprofilesTable $Patientprofiles
 *
 * @method \App\Model\Entity\Patientprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PatientprofilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $patientprofiles = $this->paginate($this->Patientprofiles);

        $this->set(compact('patientprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Patientprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patientprofile = $this->Patientprofiles->get($id, [
            'contain' => []
        ]);

        $this->set('patientprofile', $patientprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patientprofile = $this->Patientprofiles->newEntity();
        if ($this->request->is('post')) {
            $patientprofile = $this->Patientprofiles->patchEntity($patientprofile, $this->request->getData());
            if ($this->Patientprofiles->save($patientprofile)) {
                $this->Flash->success(__('The patientprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patientprofile could not be saved. Please, try again.'));
        }
        $this->set(compact('patientprofile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Patientprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    

    public function edit()
    {
        $this->loadmodel('Users');
        $idc=$this->Auth->user('id');
        $user = $this->Users->get($idc, [
            'contain' => []
        ]);
        
        $profileid=$user->profile_id;


        $patientprofile = $this->Patientprofiles->get($profileid, [
            'contain' => []
        ]); 
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patientprofile = $this->Patientprofiles->patchEntity($patientprofile, $this->request->getData());
            if ($this->Patientprofiles->save($patientprofile)) {
                $this->Flash->adminsuccess(__('Les modification ont été enregistré avec succèss.'));

                return $this->redirect(['controller'=>'Users', 'action' => 'profile']);
            }
            $this->Flash->adminerror(__('Les modification ne sont pas enregistrées.'));
        }
        $this->set(compact('patientprofile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Patientprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patientprofile = $this->Patientprofiles->get($id);
        if ($this->Patientprofiles->delete($patientprofile)) {
            $this->Flash->success(__('The patientprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The patientprofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
