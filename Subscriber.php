<?php
    class Subscriber{
        private $name;
        private $email;
        private $dateRegister;

        /**
         * @param $name
         * @param $email
         * @param $dateRegister
         */
        public function __construct($name, $email, $dateRegister)
        {
            $this->name = $name;
            $this->email = $email;
            $this->dateRegister = $dateRegister;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getDateRegister()
        {
            return $this->dateRegister;
        }

        /**
         * @param mixed $dateRegister
         */
        public function setDateRegister($dateRegister)
        {
            $this->dateRegister = $dateRegister;
        }

        public function __toString()
        {
            return 'Nombre= ' .$this->name.
            '<BR> Email= ' .$this->email.
            '<BR> Fecha= '.$this->dateRegister;
            // Function to string is wierd.
        }


    }