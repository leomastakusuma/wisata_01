<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author leomasta
 */
function views($title,$body,$foter){
    ?>
<html>
    <head>
        <title><?php echo $title ?></title></head>
    <body>
        <?php echo $body?>
        <?php echo $foter?>
    </body>
        
</html>
    <?php
    
}