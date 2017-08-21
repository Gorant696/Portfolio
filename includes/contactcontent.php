<div>

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
        

    }    //end of defining class
    
    $file = new file;

    if (file_exists("text.txt")) {

        $file->edit("text.txt");
    } else {

        $file->write("text.txt");
    }// end else statement
    ?> 

</div>