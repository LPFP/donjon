<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function removeDisplayedCalendar() {
        
    }

    public function getCalendarsEvents() {
        $calendars = $this->request->query('calendars');
        $events    = [];
        #
        if ($calendars === null) {
            $calendars = [];
        }
        if (!empty($calendars)) {
            $events = $this->Events
            ->find('all')
            ->where('1=1')
            ->andWhere(['calendar_id IN' => $calendars])
            ->andWhere(['start BETWEEN :start AND :end'])
            ->bind(':start', new \DateTime($this->request->query('start') . ' 00:00:00'), 'date')
            ->bind(':end', new \DateTime($this->request->query('end') . ' 23:59:59'), 'date')
            ;
        }

        $this->set([
            'events' => $events
        ]);

        /*
          "id": 1,
          "title": "test",
          "content": "qfdsfqsdfqsd q sfqfsdqfsd ",
          "begin": "2016-03-16T23:10:00+0000",
          "end": "2016-03-16T23:10:00+0000",
          "created": "2016-03-16T23:10:55+0000",
          "modified": "2016-03-16T23:10:55+0000",
          "calendar_id": 1
         */
        $this->request->session()->write('calendars.displayed', array_unique($calendars));
        $this->RequestHandler->renderAs($this, 'json');
        $this->response->type('application/json');
        $this->set('_serialize', ['events']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        if (!$this->request->session()->check('calendars.displayed')) {
            $this->request->session()->write('calendars.displayed', []);
        }
        $this->paginate = [
            'contain' => ['Calendars']
        ];
        $events         = $this->paginate($this->Events);

        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $event = $this->Events->get($id, [
            'contain' => ['Calendars']
        ]);

        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $calendars = $this->Events->Calendars->find('list', ['limit' => 200]);
        $this->set(compact('event', 'calendars'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $calendars = $this->Events->Calendars->find('list', ['limit' => 200]);
        $this->set(compact('event', 'calendars'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
