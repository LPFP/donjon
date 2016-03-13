<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * GroupsUsers Controller
 *
 * @property \App\Model\Table\GroupsUsersTable $GroupsUsers
 */
class GroupsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Users']
        ];
        $groupsUsers = $this->paginate($this->GroupsUsers);

        $this->set(compact('groupsUsers'));
        $this->set('_serialize', ['groupsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupsUser = $this->GroupsUsers->get($id, [
            'contain' => ['Groups', 'Users']
        ]);

        $this->set('groupsUser', $groupsUser);
        $this->set('_serialize', ['groupsUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupsUser = $this->GroupsUsers->newEntity();
        if ($this->request->is('post')) {
            $groupsUser = $this->GroupsUsers->patchEntity($groupsUser, $this->request->data);
            if ($this->GroupsUsers->save($groupsUser)) {
                $this->Flash->success(__('The groups user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The groups user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->GroupsUsers->Groups->find('list', ['limit' => 200]);
        $users = $this->GroupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('groupsUser', 'groups', 'users'));
        $this->set('_serialize', ['groupsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupsUser = $this->GroupsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupsUser = $this->GroupsUsers->patchEntity($groupsUser, $this->request->data);
            if ($this->GroupsUsers->save($groupsUser)) {
                $this->Flash->success(__('The groups user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The groups user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->GroupsUsers->Groups->find('list', ['limit' => 200]);
        $users = $this->GroupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('groupsUser', 'groups', 'users'));
        $this->set('_serialize', ['groupsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupsUser = $this->GroupsUsers->get($id);
        if ($this->GroupsUsers->delete($groupsUser)) {
            $this->Flash->success(__('The groups user has been deleted.'));
        } else {
            $this->Flash->error(__('The groups user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
