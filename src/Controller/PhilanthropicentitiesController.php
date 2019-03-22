<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Philanthropicentities Controller
 *
 * @property \App\Model\Table\PhilanthropicentitiesTable $Philanthropicentities
 *
 * @method \App\Model\Entity\Philanthropicentity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhilanthropicentitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $philanthropicentities = $this->paginate($this->Philanthropicentities);

        $this->set(compact('philanthropicentities'));
    }

    /**
     * View method
     *
     * @param string|null $id Philanthropicentity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $philanthropicentity = $this->Philanthropicentities->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('philanthropicentity', $philanthropicentity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $philanthropicentity = $this->Philanthropicentities->newEntity();
        if ($this->request->is('post')) {
            $philanthropicentity = $this->Philanthropicentities->patchEntity($philanthropicentity, $this->request->getData());
            if ($this->Philanthropicentities->save($philanthropicentity)) {
                $this->Flash->success(__('The philanthropicentity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The philanthropicentity could not be saved. Please, try again.'));
        }
        $users = $this->Philanthropicentities->Users->find('list', ['limit' => 200]);
        $this->set(compact('philanthropicentity', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Philanthropicentity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $philanthropicentity = $this->Philanthropicentities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $philanthropicentity = $this->Philanthropicentities->patchEntity($philanthropicentity, $this->request->getData());
            if ($this->Philanthropicentities->save($philanthropicentity)) {
                $this->Flash->success(__('The philanthropicentity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The philanthropicentity could not be saved. Please, try again.'));
        }
        $users = $this->Philanthropicentities->Users->find('list', ['limit' => 200]);
        $this->set(compact('philanthropicentity', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Philanthropicentity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $philanthropicentity = $this->Philanthropicentities->get($id);
        if ($this->Philanthropicentities->delete($philanthropicentity)) {
            $this->Flash->success(__('The philanthropicentity has been deleted.'));
        } else {
            $this->Flash->error(__('The philanthropicentity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
