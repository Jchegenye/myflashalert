<?php

namespace Jchegenye\MyFlashAlert\JTech;

use Jchegenye\MyFlashAlert\JTech\MyFlashAlertSessions;

    class MyFlashAlerts
    {
        
        /**
         * Flash a success message.
         * 
         * @author Jackson A. Chegenye
         * @param  string|null $message
         * @return $this
         */
        public function success($message = null)
        {
            return $this->message($message, 'success');
        }

        /**
         * Flash error message.
         * 
         * @author Jackson A. Chegenye
         * @param  string|null $message
         * @return $this
         */
        public function error($message = null)
        {
            return $this->message($message, 'danger');   
        }

        /**
         * Flash a warning message.
         * 
         * @author Jackson A. Chegenye
         * @param  string|null $message
         * @return $this
         */
        public function warning($message = null)
        {
            return $this->message($message, 'warning');   
        }

        /**
         * Flash info message.
         * 
         * @author Jackson A. Chegenye
         * @param  string|null $message
         * @return $this
         */
        public function info($message = null)
        {
            return $this->message($message, 'info');   
        }

        /**
         * Flash a general message.
         * 
         * @author Jackson A. Chegenye
         * @param  string|null $message
         * @param  string|null $level
         * @return $sessinon
         */
        public function message($message = null, $level = null)
        {
            $data = new MyFlashAlertSessions();
            $sessinon = $data->myalertsession($message, $level);

            return $sessinon;
        }

    }