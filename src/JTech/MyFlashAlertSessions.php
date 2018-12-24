<?php

namespace Jchegenye\MyFlashAlert\JTech;

use Jchegenye\MyFlashAlert\JTech\MyFlashAlerts;

    /**
     * Collection of messages and level from session.
     * 
     * @author Jackson A. Chegenye
     * @return MyFlashAlertSessions collection
     */
    class MyFlashAlertSessions
    {

        public function myalertsession($message, $level){

            if (!$message instanceof MyFlashAlertMessages) {
                $message = new MyFlashAlertMessages(compact('message', 'level'));
            }

            session()->put('myflashalert_session', $message);

            return back();
            
        }

    }