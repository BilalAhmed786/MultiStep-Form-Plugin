<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/testtheme/wp-config.php'); //require bcz its not core file   

    session_start();

  
    if(isset($_POST['orderplace'])){


        $firstitem= $_POST['firstitem'];
        $date = $_POST['date'];

        
      global $wpdb;

       $wpdb->query("INSERT INTO wp_bookopitment(consultation,date) VALUES ('$firstitem','$date')");
   
    
   


    $orderdplace='<p>Order place successfully</p>';

    header('Location:http://localhost/testtheme/checkout?orderplace='.$orderdplace);

}


//step 2 orderplaced

if (isset($_POST['consultation'])) {

  $sesvalue = $_POST['session'];

  $date = $_SESSION['time2'];


  $image = $_SESSION['image2'];

  foreach ($sesvalue as $ses) {

  global $wpdb;

    $wpdb->query("INSERT INTO bookconsltation(opitment1,date) VALUES('$ses','$date')");
      
  }

  if ($image) {

    global $wpdb;

      $wpdb->query("INSERT INTO images(image,date) VALUES ('$image','$date')");

         
      }

      echo  '<script>sessionStorage.clear()</script>'; 
        
      $orderdplace='<p>Order place successfully</p>';

      header('Location:http://localhost/testtheme/checkout?orderplace='.$orderdplace);

}

//step 3 orderplaced

if (isset($_POST['opitment'])) {

  $sesvalue = $_POST['session'];

  $date = $_SESSION['time3'];


  $image = $_SESSION['image3'];

  foreach ($sesvalue as $ses) {
    
    global $wpdb;

    $wpdb->query("INSERT INTO bookconsltation(opitment1,date) VALUES('$ses','$date')");
    
  }

  if ($image) {

global $wpdb;
    
    $wpdb->query("INSERT INTO images(image,date) VALUES ('$image','$date')");

  }

    echo '<script>sessionStorage.clear()<script>';


    $orderdplace='<p>Order place successfully</p>';

    header('Location:http://localhost/testtheme/checkout?orderplace='.$orderdplace);


}


//step 4 orderplaced

if (isset($_POST['lastprocedure'])) {

$sesvalue = $_POST['session'];

$date = $_SESSION['time4'];


$image = $_SESSION['image4'];

foreach ($sesvalue as $ses) {

  global $wpdb;

    $wpdb->query("INSERT INTO bookconsltation(opitment1,date) VALUES('$ses','$date')");
    
}

if ($image) {

  global $wpdb;
    
  $wpdb->query("INSERT INTO images(image,date) VALUES ('$image','$date')");
 
}

  
    echo '<script>sessionStorage.clear()<script>';


    $orderdplace='<p>Order place successfully</p>';

    header('Location:http://localhost/testtheme/checkout?orderplace='.$orderdplace);

}

?>










