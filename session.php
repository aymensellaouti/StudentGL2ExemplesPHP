<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 07/11/2017
 * Time: 13:45
 */

session_start();

$_SESSION['glVar']=array('sellaouti'=>'aymen');
$_SESSION['glVar']['new']='p';
var_dump($_SESSION);