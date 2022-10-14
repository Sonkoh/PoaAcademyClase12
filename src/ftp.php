<?php
    class ftp {
        public $conn;

        public function __construct($host, $port = 21, $timeout = 91)
        {
            $this->conn = ftp_connect($host, $port, $timeout);
        }

        public function __call($func, $arguments)
        {
            $func = "ftp_" . $func;
            if (function_exists($func)) {
                array_unshift($arguments, $this->conn);
                return call_user_func_array($func, $arguments);
            } else {
                die("La función no existe");
            }
        }
    }
?>