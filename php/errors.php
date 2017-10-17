<?php 
include('loginproc.php');
if (count($errors)> 0) ?>
    <div class="errors">
        <?php foreach($errors as $error){;
            echo "</br>{$error}";} ?>
       
        </div>