<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 14/11/2017
 * Time: 14:16
 */

function autoload($nomClasse){
    include 'classes/'.$nomClasse.'.php';
}

spl_autoload_register('autoload');
