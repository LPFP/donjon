<?php

namespace App\Event;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;
use Proffer\Lib\ProfferPath;

class ProfferUploadFilenameListener implements EventListenerInterface {

    public function implementedEvents() {
        return [
            'Proffer.afterPath' => 'change',
        ];
    }

    public function change(Event $event, ProfferPath $path) {
        // Detect and select the right file extension
        $type = $event->subject()[$path->getField()]['type'];
        switch ($type) {
            default:
            case "image/jpeg":
                $ext = '.jpg';
                break;
            case "image/png":
                $ext = '.png';
                break;
            case "image/gif":
                $ext = '.gif';
                break;
        }
        $newFilename = md5(uniqid(true)) . $ext;
        $path->setFilename($newFilename);
        $event->subject()[$path->getField()]['name'] = $newFilename;
        return $path;
    }

}
