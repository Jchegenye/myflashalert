<?php

namespace Jchegenye\MyFlashAlert\JTech;

    /**
     * Collection of messages and level from user.
     * 
     * @author Jackson A. Chegenye
     * @return MyFlashAlertMessages collection
     */
    class MyFlashAlertMessages implements \ArrayAccess
    {

        /**
         * Body message.
         *
         * @var string
         */
        public $message;

        /**
         * Default message level (Info).
         *
         * @var string
         */
        public $level = 'info';

        /**
         * Message auto-hide option.
         *
         * @var bool
         */
        public $important = false;

        /**
         * Create a new message instance.
         *
         * @param array $attributes
         */
        public function __construct($attributes = [])
        {
            $this->update($attributes);
        }

        /**
         * Update the attributes.
         *
         * @param  array $attributes
         * @return $this
         */
        public function update($attributes = [])
        {
            $attributes = array_filter($attributes);

            foreach ($attributes as $key => $attribute) {
                $this->$key = $attribute;
            }

            return $this;
        }

        /**
         * Offset exists option.
         *
         * @param  mixed $offset
         * @return bool
         */
        public function offsetExists($offset)
        {
            return isset($this->$offset);
        }

        /**
         * Fetch the offset.
         *
         * @param  mixed $offset
         * @return mixed
         */
        public function offsetGet($offset)
        {
            return $this->$offset;
        }

        /**
         * Assign the offset.
         *
         * @param  mixed $offset
         * @return void
         */
        public function offsetSet($offset, $value)
        {
            $this->$offset = $value;
        }

        /**
         * Unset the offset.
         *
         * @param  mixed $offset
         * @return void
         */
        public function offsetUnset($offset)
        {
            
        }
    }
