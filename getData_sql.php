<?php
    require_once 'MC/Google/Visualization.php';
    
    $user = 'admin';
    $db = new PDO('pgsql:host=localhost;dbname=test',$user,'');
    $vis = new MC_Google_Visualization($db,'admin');
    
    $vis->addEntity('temp1', array('fields' => array('date' => array('field' => 'date', 'type' => 'datetime'),'temp' => array('field' => 'temp', 'type' => 'number'))
                                   ));
    
    $vis->setDefaultEntity('temp1');
    $vis->handleRequest();
    ?>