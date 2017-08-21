<?php

class file {

    function write($a) {

        $file = fopen($a, "x");
        fwrite($file, "Hello World. Testing!");
        fclose($file);
    }

    function edit($a) {

        $file = fopen($a, "a");
        fwrite($file, "nadopuna!!!!");
        fclose($file);
    }

} //end of class file

$file = new file;


?> 
