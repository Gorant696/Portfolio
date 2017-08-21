<?php include 'phpscript/classfile.php'; ?>

<div>

   <?php
   
   
   

if (file_exists("notes/text.txt")) {

    $file->edit("notes/text.txt");
} else {

    $file->write("notes/text.txt");
}// end else statement
   
   ?>

 
</div>