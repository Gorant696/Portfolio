<?php

class file {

    function write($a, $b) {

        $file = fopen($a, "x");
        fwrite($file, "-- poruka -->$b<-- poruka --");
        fclose($file);
    }

    function edit($a, $b) {

        $file = fopen($a, "a");
        fwrite($file, "-- poruka -->$b<-- poruka --");
        fclose($file);
    }
    
    function mail($a, $b) {
        
        $file=fopen($a, "a");
        fwrite($file, "-- @email -->$b<-- email@ --");
        fclose($file);
        
    }

} //end of class file

$file = new file;


?> 
