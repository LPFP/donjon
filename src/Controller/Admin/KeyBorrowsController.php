<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * KeyBorrows Controller
 *
 * @property \App\Model\Table\KeyBorrowsTable $KeyBorrows
 */
class KeyBorrowsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fabmanagers']
        ];
        $keyBorrows = $this->paginate($this->KeyBorrows);

        $this->set(compact('keyBorrows'));
        $this->set('_serialize', ['keyBorrows']);
    }

    /**
     * View method
     *
     * @param string|null $id Key Borrow id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keyBorrow = $this->KeyBorrows->get($id, [
            'contain' => ['Fabmanagers']
        ]);

        $this->set('keyBorrow', $keyBorrow);
        $this->set('_serialize', ['keyBorrow']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keyBorrow = $this->KeyBorrows->newEntity();
        if ($this->request->is('post')) {
            $keyBorrow = $this->KeyBorrows->patchEntity($keyBorrow, $this->request->data);
            if ($this->KeyBorrows->save($keyBorrow)) {
                $this->Flash->success(__('The key borrow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The key borrow could not be saved. Please, try again.'));
            }
        }
        $fabmanagers = $this->KeyBorrows->Fabmanagers->find('list', ['limit' => 200]);
        $this->set(compact('keyBorrow', 'fabmanagers'));
        $this->set('_serialize', ['keyBorrow']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Key Borrow id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keyBorrow = $this->KeyBorrows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keyBorrow = $this->KeyBorrows->patchEntity($keyBorrow, $this->request->data);
            if ($this->KeyBorrows->save($keyBorrow)) {
                $this->Flash->success(__('The key borrow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The key borrow could not be saved. Please, try again.'));
            }
        }
        $fabmanagers = $this->KeyBorrows->Fabmanagers->find('list', ['limit' => 200]);
        $this->set(compact('keyBorrow', 'fabmanagers'));
        $this->set('_serialize', ['keyBorrow']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Key Borrow id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keyBorrow = $this->KeyBorrows->get($id);
        if ($this->KeyBorrows->delete($keyBorrow)) {
            $this->Flash->success(__('The key borrow has been deleted.'));
        } else {
            $this->Flash->error(__('The key borrow could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
