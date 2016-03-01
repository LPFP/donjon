<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Fabmanagers Controller
 *
 * @property \App\Model\Table\FabmanagersTable $Fabmanagers
 */
class FabmanagersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fabmanagers = $this->paginate($this->Fabmanagers);

        $this->set(compact('fabmanagers'));
        $this->set('_serialize', ['fabmanagers']);
    }

    /**
     * View method
     *
     * @param string|null $id Fabmanager id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabmanager = $this->Fabmanagers->get($id, [
            'contain' => ['KeyBorrows']
        ]);

        $this->set('fabmanager', $fabmanager);
        $this->set('_serialize', ['fabmanager']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabmanager = $this->Fabmanagers->newEntity();
        if ($this->request->is('post')) {
            $fabmanager = $this->Fabmanagers->patchEntity($fabmanager, $this->request->data);
            if ($this->Fabmanagers->save($fabmanager)) {
                $this->Flash->success(__('The fabmanager has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fabmanager could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fabmanager'));
        $this->set('_serialize', ['fabmanager']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabmanager id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabmanager = $this->Fabmanagers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabmanager = $this->Fabmanagers->patchEntity($fabmanager, $this->request->data);
            if ($this->Fabmanagers->save($fabmanager)) {
                $this->Flash->success(__('The fabmanager has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fabmanager could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fabmanager'));
        $this->set('_serialize', ['fabmanager']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabmanager id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fabmanager = $this->Fabmanagers->get($id);
        if ($this->Fabmanagers->delete($fabmanager)) {
            $this->Flash->success(__('The fabmanager has been deleted.'));
        } else {
            $this->Flash->error(__('The fabmanager could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
