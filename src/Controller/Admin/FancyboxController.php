<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class FancyboxController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function removeDisplayedCalendar() {
        
    }

    public function close() {
        $this->viewBuilder()->layout("empty");
        return;
    }

}
