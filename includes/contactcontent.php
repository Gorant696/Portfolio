<?php
include 'phpscript/classfile.php';


if (isset($_POST['submit'])) {

    if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['text'])) {

        $text = $_POST['text'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        

        if (file_exists("notes/$name.txt")) {

            $file->edit("notes/$name.txt", $text);
            $file->mail("notes/$name.txt", $email);
        } else {

            $file->write("notes/$name.txt", $text);
            $file->mail("notes/$name.txt", $email);
        }
    } // end if/empty statement
    else {

        header("Location: contact.php");
    }
} //end if isset statement
?>

<div class="flexcontact">

    <div class="panel panel-default" style="width: 100% !important;">
        <div class="panel-heading">
            <h3 class="panel-title"><span style="font-size: 82%;">Do you like my work? Or you have some good advice in order to improve myself? Send me a note!</span></h3>
        </div>
        <div class="panel-body">


            <form method="POST" action="#">
                <br>
                <div class="form-group">
                    <label for="email">Your e-mail address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="name">Your name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                    <textarea class="form-control" id="text" name="text" placeholder="Message" rows="6" required></textarea>
                </div>


                <input type="submit" class="btn btn-primary" name="submit" value="Send">
            </form>


        </div>
    </div>

</div> <!--flexcontact-->

<p style="color: #e0e0d1; "></p>