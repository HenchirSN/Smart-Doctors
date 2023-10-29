<?php
namespace App\Controller\Docteur;

use App\Controller\AppController;

/**
 * Medicaments Controller
 *
 * @property \App\Model\Table\MedicamentsTable $Medicaments
 *
 * @method \App\Model\Entity\Medicament[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicamentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $medicaments = $this->paginate($this->Medicaments);

        $this->set(compact('medicaments'));
    }

    /**
     * View method
     *
     * @param string|null $id Medicament id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicament = $this->Medicaments->get($id, [
            'contain' => ['Ordonnances']
        ]);

        $this->set('medicament', $medicament);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicament = $this->Medicaments->newEntity();
        if ($this->request->is('post')) {
            $medicament = $this->Medicaments->patchEntity($medicament, $this->request->getData());
            if ($this->Medicaments->save($medicament)) {
                $this->Flash->success(__('The medicament has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medicament could not be saved. Please, try again.'));
        }
        $this->set(compact('medicament'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medicament id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicament = $this->Medicaments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicament = $this->Medicaments->patchEntity($medicament, $this->request->getData());
            if ($this->Medicaments->save($medicament)) {
                $this->Flash->success(__('The medicament has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medicament could not be saved. Please, try again.'));
        }
        $this->set(compact('medicament'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medicament id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicament = $this->Medicaments->get($id);
        if ($this->Medicaments->delete($medicament)) {
            $this->Flash->success(__('The medicament has been deleted.'));
        } else {
            $this->Flash->error(__('The medicament could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
