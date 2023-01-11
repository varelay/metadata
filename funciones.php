<?php

if (isset($_POST['enviar_meta'])) {

    $container = $_POST['container'];
    if (empty($container)){
        echo 'null'; 
    } else {
        echo $container;
    }
    

  }
