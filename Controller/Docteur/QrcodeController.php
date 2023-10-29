<?php
namespace App\Controller\Docteur;

use App\Controller\AppController;

/**
 * Qrcode Controller
 *
 * @property \App\Model\Table\QrcodeTable $Qrcode
 *
 * @method \App\Model\Entity\Qrcode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QrcodeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $qrcode = $this->paginate($this->Qrcode);

        $this->set(compact('qrcode'));
    }

    /**
     * View method
     *
     * @param string|null $id Qrcode id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qrcode = $this->Qrcode->get($id, [
            'contain' => ['Patientprofiles']
        ]);

        $this->set('qrcode', $qrcode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qrcode = $this->Qrcode->newEntity();
        if ($this->request->is('post')) {
            $qrcode = $this->Qrcode->patchEntity($qrcode, $this->request->getData());
            if ($this->Qrcode->save($qrcode)) {
                $this->Flash->success(__('The qrcode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qrcode could not be saved. Please, try again.'));
        }
        $this->set(compact('qrcode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Qrcode id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qrcode = $this->Qrcode->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qrcode = $this->Qrcode->patchEntity($qrcode, $this->request->getData());
            if ($this->Qrcode->save($qrcode)) {
                $this->Flash->success(__('The qrcode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qrcode could not be saved. Please, try again.'));
        }
        $this->set(compact('qrcode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Qrcode id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qrcode = $this->Qrcode->get($id);
        if ($this->Qrcode->delete($qrcode)) {
            $this->Flash->success(__('The qrcode has been deleted.'));
        } else {
            $this->Flash->error(__('The qrcode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
