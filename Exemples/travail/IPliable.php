<?php
interface IPliable {
    public function plier();
    public function deplier();
}

interface IRechargeable {
    public function recharger();
}

class Chaise implements IPliable {

    public $couleur;

    public function plier() {

    }

    public function deplier() {

    }
}

class OrdinateurPortable implements IPliable, IRechargeable {
    public $couleur;
    public function plier() {

    }

    public function deplier() {

    }

    public function recharger() {

    }
}

class AvionPapier implements IPliable {
    public function plier() {

    }

    public function deplier() {

    }
}


function ranger(IPliable $obj) {
    $obj->plier();
    $obj->deplier();
}