<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getItm
 *
 * @author Waruna Oshan Wisumperuma
 * @contact warunaoshan@gmail.com
 */
require_once './medoo.min.php';
$database = new medoo();

$word = $_REQUEST['term'];
$cat = $_REQUEST['cat'];

$datas = $database->query("SELECT SUBJECTCODE as label,DESCRIPTION FROM subjectmaster where CATCODE='$cat' and SUBJECTCODE like '%$word%' limit 10")->fetchAll();
echo json_encode($datas);
