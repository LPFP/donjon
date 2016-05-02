<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
use App\Model\Entity\Calendar;
use App\Form\FullCalendarParametersForm;
use App\Validation\ColorValidation;

/**
 * Calendars Controller
 *
 * @property \App\Model\Table\CalendarsTable $Calendars
 */
class CalendarsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        if (!$this->request->session()->check('calendars.displayed')) {
            $this->request->session()->write('calendars.displayed', []);
        }
        $calendars = $this->Calendars->find('all')->order('name');
        $this->set([
            'calendars' => $calendars
        ]);
        #$this->set('_serialize', ['calendars']);
    }

    /**
     * View method
     *
     * @param string|null $id Calendar id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $calendar = $this->Calendars->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('calendar', $calendar);
        $this->set('_serialize', ['calendar']);
    }

    public function parseParameters() {
        foreach ($this->request->data as $k => $v) {
            if (strstr($k, "parameters") !== false) {
                $this->request->data['params'][lcfirst(str_replace('parameters', '', $k))] = $v;
                unset($this->request->data[$k]);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $isEdit     = !( $id === null);
        $posted     = $this->request->is(['patch', 'post', 'put']);
        $calendar   = new Calendar();
        $parameters = new FullCalendarParametersForm();

        if ($isEdit) {
            $calendar = $this->Calendars->get($id);
            if (!$calendar) {
                throw new NotFoundException(__("Unable to find calendar object with id %s", $id));
            }
        }
        $this->set([
            'parameters' => $parameters,
            'calendar'   => $calendar,
            'isEdit'     => $isEdit,
            '_serialize' => ['calendar']
        ]);
        if (!$posted) {
            return;
        }
        $this->parseParameters();

        $calendar = $this->Calendars->patchEntity($calendar, $this->request->data);

        if (!$this->Calendars->save($calendar) && $parameters->execute($this->request->data)) {
            $this->set([
                'parameters' => $parameters,
                'calendar'   => $calendar,
                'isEdit'     => $isEdit,
                '_serialize' => ['calendar']
            ]);
            $this->Flash->error(__('The calendar could not be saved. Please, try again.'));
            return;
        }
        $this->set([
            'parameters' => $parameters,
            'calendar'   => $calendar,
            'isEdit'     => $isEdit,
            '_serialize' => ['calendar']
        ]);
        $this->Flash->success(__('The calendar has been saved.'));
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $calendar = $this->Calendars->get($id);
        if ($this->Calendars->delete($calendar)) {
            $this->Flash->success(__('The calendar has been deleted.'));
        } else {
            $this->Flash->error(__('The calendar could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
