<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/testtheme/wp-config.php'); //require bcz its not core file  



print_r($_POST);

    require('stripe-php-master/init.php');
  
  \stripe\stripe::setApiKey('sk_test_51NcvwgKgFXig68gSM8sYK2D4knXvMrB75jt57Bv0SqpT76apOiMaugJqHTbByQMXkd7Wc93LzMHnpVJlvlObTs9D00sRrTnLzJ');
  
  $token = $_POST['stripeToken'];


  \stripe\stripe::setVerifySslCerts(false);


  $data=\Stripe\Charge::create(array(

  "amount"=>500,
  "currency"=>'usd',
  "description"=>'paid',
  "source"=>$token

));





//     session_start();

//   if(isset($_POST['orderplace'])){


//         $firstitem= $_POST['firstitem'];
        
//         $date = $_POST['date'];

        
//       global $wpdb;

//        $wpdb->query("INSERT INTO wp_bookopitment(consultation,date) VALUES ('$firstitem','$date')");
   
    
//      }


// step 2 orderplaced

// if (isset($_POST['consultation'])) {

//   $sesvalue = $_POST['session'];
  
//   $image = $_POST['image'];

//   $date =$_POST['date'] ;

//  foreach ($sesvalue as $ses) {

//   global $wpdb;

//     $wpdb->query("INSERT INTO wp_bookopitment(consultation,date) VALUES('$ses','$date')");
      
//   }

//   if ($image) {

//     global $wpdb;

//       $wpdb->query("INSERT INTO wp_images(image,date) VALUES ('$image','$date')");

         
//       }

    

// }

// //step 3 orderplaced

// if (isset($_POST['opitment'])) {

//   $sesvalue = $_POST['session'];

//   $date=$_POST['date'];

//   $image=$_POST['image'];


//   foreach ($sesvalue as $ses) {
    
//     global $wpdb;

//     $wpdb->query("INSERT INTO wp_bookopitment(consultation,date) VALUES('$ses','$date')");
    
//   }

//   if ($image) {

//     global $wpdb;
    
//     $wpdb->query("INSERT INTO wp_images(image,date) VALUES('$image','$date')");

//   }

   
// }


//   //step 4 orderplaced


//   if (isset($_POST['lastprocedure'])) {

// $sesvalue = $_POST['session'];

// $date = $_POST['date'];


// $image = $_POST['image'];



// foreach ($sesvalue as $ses) {

//   global $wpdb;

//     $wpdb->query("INSERT INTO wp_bookopitment(consultation,date) VALUES('$ses','$date')");
    
// }

// if ($image) {

//   global $wpdb;
    
//   $wpdb->query("INSERT INTO wp_images(image,date) VALUES('$image','$date')");
 
// }

  
// }


// ?>



// <script>

// //remove session from session storage
// sessionStorage.clear()
    
// window.location = "http://localhost/testtheme/checkout?orderplace=Thanks for your order"

// </script> 



