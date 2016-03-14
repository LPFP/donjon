<?php

namespace App\Event;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;
use Cake\Log\Log;
use Proffer\Lib\ProfferPath;

class ProfferInputOutputListener implements EventListenerInterface {

    public function implementedEvents() {
        return [
            'Proffer.afterCreateImage'  => 'createImage',
            'Proffer.beforeDeleteImage' => 'deleteImage',
        ];
    }

    public function createImage(Event $event, ProfferPath $path, $imagePath) {
        return;
    }

    public function deleteImage(Event $event, ProfferPath $path) {
        return;
    }

}
