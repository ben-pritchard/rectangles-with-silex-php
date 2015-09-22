<?php
    class Rectangle {
        private $length;
        private $width;

        function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }

        function isSquare()
        {
            if ($this->length == $this->width) {
                return true;
            } else {
                return false;
            }
        }

        function getArea()
        {
            return $this->length * $this->width;
        }

        function getLength() {
            return $this->length;
        }

        function setLength($length) {
            $this->length = $length;
        }

        function getWidth() {
            return $this->width;
        }

        function setWidth($width) {
            $this->width = $width;
        }
    }

?>
