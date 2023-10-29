<?php
namespace App\Controller\Secretaire;

use App\Controller\AppController;

/**
 * Rendezvous Controller
 *
 * @property \App\Model\Table\RendezvousTable $Rendezvous
 *
 * @method \App\Model\Entity\Rendezvous[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RendezvousController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadModel('Secretaireprofiles');
        $this->loadModel('Users');

        // id du secretaire connecté
        $sec_id=$this->request->session()->read('Auth.User.id');

        //recupérer les données  du secretaire de la table users
        $sec=$this->Users->find('all',array(
            'conditions'=>array('id'=>$sec_id)
        ))->first();

        //recupérer le profile id du secretaire
        $idprofile=$sec['profile_id'];

        //recupérer les données  du secretaire de la table Profile
        $profile=$this->Secretaireprofiles->find('all',array(
            'conditions'=>array('id'=>$idprofile)
        ))->first();

        // récuperer l'id du docteur  du secretaire
        $doc_id=$profile['docteur_id'];

        // Récuperer les rendez-vous du docteur du secretaire

        $rendezvous=$this->Rendezvous->find('all',array(
            'conditions'=>array('docteur_id'=>$doc_id)
        ));

        // recupérer les données du patient de la table users de chaque rendez-vous

        foreach ($rendezvous as $rendezvou){

        $user=$this->Users->find('all',array(
            'conditions'=>array('id'=>$rendezvou->user_id)
        ))->first();

        $rendezvou['user']=$user;

         }



        $this->set(compact('rendezvous'));
    }




    public function calendrier()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $rendezvous = $this->paginate($this->Rendezvous);

        $this->set(compact('rendezvous'));
    }

    /**
     * View method
     *
     * @param string|null $id Rendezvous id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {


        $rendezvous = $this->Rendezvous->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('rendezvous', $rendezvous);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {



        $this->loadModel('Users');
        $this->loadModel('Secretaireprofiles');


        $rendezvous = $this->Rendezvous->newEntity();
        if ($this->request->is('post')) {

            $rendezvous = $this->Rendezvous->patchEntity($rendezvous, $this->request->getData());

            // id du secretaire connecté
            $sec_id=$this->request->session()->read('Auth.User.id');

            //recupérer les données  du secretaire de la table users
            $sec=$this->Users->find('all',array(
                'conditions'=>array('id'=>$sec_id)
            ))->first();

            //recupérer le profile id du secretaire
            $idprofile=$sec['profile_id'];

            //recupérer les données  du secretaire de la table Profile
            $profile=$this->Secretaireprofiles->find('all',array(
                'conditions'=>array('id'=>$idprofile)
            ))->first();

            // récuperer l'id du docteur  du secretaire
            $doc_id=$profile['docteur_id'];

            // enregistrer l'id du docteur dans la table rendez-vous
            $rendezvous->docteur_id=$doc_id;

            if ($this->Rendezvous->save($rendezvous)) {
                $this->Flash->success(__('The rendezvous has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rendezvous could not be saved. Please, try again.'));
        }
        $users = $this->Rendezvous->Users->find('list', array(
            'conditions'=>array('role_id'=>4)
        ));




        $this->set(compact('rendezvous', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rendezvous id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rendezvous = $this->Rendezvous->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rendezvous = $this->Rendezvous->patchEntity($rendezvous, $this->request->getData());
            if ($this->Rendezvous->save($rendezvous)) {
                $this->Flash->success(__('The rendezvous has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rendezvous could not be saved. Please, try again.'));
        }
        $users = $this->Rendezvous->Users->find('list', ['limit' => 200]);
        $this->set(compact('rendezvous', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rendezvous id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rendezvous = $this->Rendezvous->get($id);
        if ($this->Rendezvous->delete($rendezvous)) {
            $this->Flash->success(__('The rendezvous has been deleted.'));
        } else {
            $this->Flash->error(__('The rendezvous could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
