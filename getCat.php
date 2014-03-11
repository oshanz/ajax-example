<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getCat
 *
 * @author Waruna Oshan Wisumperuma
 * @contact warunaoshan@gmail.com
 */
require_once './medoo.min.php';
$database = new medoo();

$data = $database->query("SELECT distinct CATCODE FROM subjectmaster")->fetchAll();
echo json_encode($data);
