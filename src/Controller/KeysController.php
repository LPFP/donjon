<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Keys Controller
 *
 * @property \App\Model\Table\KeysTable $Keys
 */
class KeysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $keys = $this->paginate($this->Keys);

        $this->set(compact('keys'));
        $this->set('_serialize', ['keys']);
    }

    /**
     * View method
     *
     * @param string|null $id Key id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $key = $this->Keys->get($id, [
            'contain' => ['KeyBorrows']
        ]);

        $this->set('key', $key);
        $this->set('_serialize', ['key']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $key = $this->Keys->newEntity();
        if ($this->request->is('post')) {
            $key = $this->Keys->patchEntity($key, $this->request->data);
            if ($this->Keys->save($key)) {
                $this->Flash->success(__('The key has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The key could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('key'));
        $this->set('_serialize', ['key']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Key id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $key = $this->Keys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $key = $this->Keys->patchEntity($key, $this->request->data);
            if ($this->Keys->save($key)) {
                $this->Flash->success(__('The key has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The key could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('key'));
        $this->set('_serialize', ['key']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Key id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $key = $this->Keys->get($id);
        if ($this->Keys->delete($key)) {
            $this->Flash->success(__('The key has been deleted.'));
        } else {
            $this->Flash->error(__('The key could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
