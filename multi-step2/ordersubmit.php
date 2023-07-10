<?php
include("../multi-step1/Database/database.php");

session_start();

if (isset($_POST['submit'])) {

    $sesvalue = $_POST['session'];

    $date = $_SESSION['time2'];


    $image = $_SESSION['image2'];

    foreach ($sesvalue as $ses) {

        $q = "INSERT INTO bookconsltation(opitment1,date)
    VALUES ('$ses','$date');";
        mysqli_query($conn, $q);
    }

    if ($image) {

        $q = "INSERT INTO images(image,date)
    
    VALUES ('$image','$date');";

        mysqli_query($conn, $q);
    }
}

?>


<script>
    sessionStorage.clear()


    window.location = "http://localhost/moaibeauty/multi-step2/index.php"
</script>