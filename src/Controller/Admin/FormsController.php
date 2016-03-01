<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Forms Controller
 *
 * @property \App\Model\Table\FormsTable $Forms
 */
class FormsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $forms = $this->paginate($this->Forms);

        $this->set(compact('forms'));
        $this->set('_serialize', ['forms']);
    }

    /**
     * View method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => []
        ]);

        $this->set('form', $form);
        $this->set('_serialize', ['form']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $form = $this->Forms->newEntity();
        if ($this->request->is('post')) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('form'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('form'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $form = $this->Forms->get($id);
        if ($this->Forms->delete($form)) {
            $this->Flash->success(__('The form has been deleted.'));
        } else {
            $this->Flash->error(__('The form could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
