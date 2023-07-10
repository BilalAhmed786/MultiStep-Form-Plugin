<?php
if (isset($_POST['submit'])) {

    $time = $_POST['date-time-procedure'];
   
print_r($time);

    $file = $_FILES['img']['name'];
    $path = $_FILES['img']['tmp_name'];
print_r($file);

    

    $_SESSION['time3'] = $time;

    if($file){

    $_SESSION['image3']= $file;

    }




}

?>