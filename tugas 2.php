<?php
    abstract class hewan {
        protected $nama;
        protected $jenis;

        public function __construct($nama, $jenis) {
            $this->nama = $nama;
            $this->jenis = $jenis;
        }

        abstract public function berjalan();

        public function makan() {
            echo $this->nama . " suka makan pisang." . "<br>";
        }

        public function bersuara() {
            echo $this->nama . " suaranya 'uu aa'." . "<br>";
        }

        public function getJenis() {
            return $this->jenis;
        }
    }

    interface kendaraan {
        public function berkendara();
    }

    class monyet extends hewan implements kendaraan {
        public function berjalan() {
            echo $this->nama . " berjalan menggunakan kedua kaki & kedua tangannya." . "<br>";   
        }

        public function berkendara() {
            echo $this->nama . " bisa berkendara menggunakan sepeda." . "<br>";
        }
    }

    $monyet = new monyet("monyet", "Primata");

    $monyet->berjalan();
    $monyet->makan();
    $monyet->bersuara();
    $monyet->berkendara();
    echo $monyet->getJenis();

?>