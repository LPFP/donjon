<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TransactionTypes Controller
 *
 * @property \App\Model\Table\TransactionTypesTable $TransactionTypes
 */
class TransactionTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $transactionTypes = $this->paginate($this->TransactionTypes);

        $this->set(compact('transactionTypes'));
        $this->set('_serialize', ['transactionTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactionType = $this->TransactionTypes->get($id, [
            'contain' => ['Transactions']
        ]);

        $this->set('transactionType', $transactionType);
        $this->set('_serialize', ['transactionType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactionType = $this->TransactionTypes->newEntity();
        if ($this->request->is('post')) {
            $transactionType = $this->TransactionTypes->patchEntity($transactionType, $this->request->data);
            if ($this->TransactionTypes->save($transactionType)) {
                $this->Flash->success(__('The transaction type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('transactionType'));
        $this->set('_serialize', ['transactionType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactionType = $this->TransactionTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactionType = $this->TransactionTypes->patchEntity($transactionType, $this->request->data);
            if ($this->TransactionTypes->save($transactionType)) {
                $this->Flash->success(__('The transaction type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('transactionType'));
        $this->set('_serialize', ['transactionType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactionType = $this->TransactionTypes->get($id);
        if ($this->TransactionTypes->delete($transactionType)) {
            $this->Flash->success(__('The transaction type has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
