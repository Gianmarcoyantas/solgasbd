<?php

class Cliente {
    public $codCli;
    public $nomCli;
    public $dir;
    public $dis;
    public $correo;
    public $pas;
    public $check;
    
    function __construct($codCli, $nomCli,$dir,$dis, $correo, $pas, $check) {
        $this->codCli = $codCli;
        $this->nomCli = $nomCli;
        $this->dir = $dir;
        $this->dis = $dis;
        $this->correo = $correo;
        $this->pas = $pas;
        $this->check= $check;
    }

    
    function getCodCli() {
        return $this->codCli;
    }

    function getNomCli() {
        return $this->nomCli;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPas() {
        return $this->pas;
    }
    function getcheck() {
        return $this->check;
    }

    function setCodCli($codCli) {
        $this->codCli = $codCli;
    }

    function setNomCli($nomCli) {
        $this->nomCli = $nomCli;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPas($pas) {
        $this->pas = $pas;
    }
    function setcheck($check) {
        $this->check = $check;
    }

    function getDir() {
        return $this->dir;
    }

    function getDis() {
        return $this->dis;
    }

    function setDir($dir) {
        $this->dir = $dir;
    }

    function setDis($dis) {
        $this->dis = $dis;
    }

    

}
