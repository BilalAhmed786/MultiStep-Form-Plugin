<?php
    session_start();

    if (isset($_POST['bookconultation'])) {

    $time = $_POST['date-time-consultation'];

    $_SESSION['time'] = $time;


?>
    <input id="time" type="hidden" value=<?php echo $_SESSION['time']; ?>>
<?php


};



//step 2 checkout data


if (isset($_POST['consultation'])) {

    $time = isset($_POST['datetimeconsultation']);

    $file = isset($_FILES['imagefile']);


    $filename =isset($_FILES['name']);

    // Get the destination path for the uploaded file
    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
    
    $file_path = $upload_dir . basename(isset($file['name']));

    // Move the uploaded file to the destination folder
    move_uploaded_file(isset($file['tmp_name']), $file_path);


    $_SESSION['time2'] = $time;

    $_SESSION['image2'] = isset($file['name']);

    
}

if (isset($_POST['appointment'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time2'] = $dateopintment;

    $_SESSION['image2'] = '';
}



if (isset($_POST['finalprocedure'])) {

    $date = $_POST['finalproceduredate'];
    
    $file = $_FILES['imagefinalpro'];


    
    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
  
    
    $file_path = $upload_dir . basename($file['name']);

    // Move the uploaded file to the destination folder
    move_uploaded_file($file['tmp_name'], $file_path);
    

    $_SESSION['image2'] = $file['name'];

    $_SESSION['time2'] = $date;

    

   
}


//step 3 checkout data

if (isset($_POST['consul-tation'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile'];
    

    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
    
    $file_path = $upload_dir . basename($file['name']);

    // Move the uploaded file to the destination folder
    move_uploaded_file($file['tmp_name'], $file_path);




    $_SESSION['time3'] = $time;

    $_SESSION['image3'] = $file['name'];


   
}

if (isset($_POST['appoint-ment'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time3'] = $dateopintment;

    $_SESSION['image3'] = '';
}



if (isset($_POST['final-procedure'])) {

    $date = $_POST['finalproceduredate'];
    $file = $_FILES['imagefinalpro'];
   

    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
    
    $file_path = $upload_dir . basename($file['name']);

    // Move the uploaded file to the destination folder
    move_uploaded_file($file['tmp_name'], $file_path);




    $_SESSION['image3'] = $file['name'];

    $_SESSION['time3'] = $date;

  
}


//step 4 checkout data

if (isset($_POST['consultation-final'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile'];
   

    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
    
    $file_path = $upload_dir . basename($file['name']);

    // Move the uploaded file to the destination folder
    move_uploaded_file($file['tmp_name'], $file_path);




    $_SESSION['time4'] = $time;

    $_SESSION['image4'] = $file['name'];

        echo $_SESSION['image4'];
   
}

if (isset($_POST['appointment-final'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time4'] = $dateopintment;

    $_SESSION['image4'] = '';
}



if (isset($_POST['finalprocedure-final'])) {

    $date = $_POST['finalproceduredate'];
    $file = $_FILES['imagefinalpro'];
   

    $upload_dir = plugin_dir_path(__FILE__) . 'images/';
    
    $file_path = $upload_dir . basename($file['name']);

    // Move the uploaded file to the destination folder
    move_uploaded_file($file['tmp_name'], $file_path);


  
   $_SESSION['image4'] = $file['name'];

    $_SESSION['time4'] = $date;


  
}

//step 4 checkout data
?>


<?php

function multi_form_step_checkout()
{
    //step 1 form data
?>
    <?php if (isset($_POST['bookconultation'])) {

    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        </head>

        <body>


            <script>
                var a = sessionStorage.getItem('step1');

                var b = document.getElementById('time');
            </script>






            <div class="checkoutcontainer">
                <h4 style=margin-top:8px;font-family:Montserrat;>
                    Checkout List
                </h4>

                <?php if (isset($_GET['orderplace'])) {

                    echo $_GET['orderplace'];
                }
                ?>


                <div class="checkoutlist">
                    <form id="ordersubmitform" action="<?php echo plugins_url( 'ordersubmit.php' , __FILE__ );?>" method="post">
                        
                            <div class="form-group">
                                <input id="firstitem" name="firstitem" type=text readonly>
                            </div>
                            <div class="form-group">
                                <input id="date" name="date" value="<?php echo $_SESSION['time'] ?>" type=text readonly>
                            </div>
                        
                        <input class='btnorder' type=submit name="orderplace" value="Order place">
                </div>
                </form>
            </div>




            <script>
                //for display sessionStorage value to client

                $('#firstitem').val(a);


                //    form stop to submit on page refresh

                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>




            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>





        <?php

    } elseif (isset($_POST['consultation']) || isset($_POST['appointment']) || isset($_POST['finalprocedure'])) {
        //step 2 form data
        ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

            </head>

            <body>


                <div class="checkoutcontainer">
                    <h4 style=margin-top:100px;font-family:Montserrat;>
                        Checkout List
                    </h4>
                    <div class="checkoutlist">
                        <form method=post action="<?php echo plugins_url( 'ordersubmit.php' , __FILE__ );?>">

                            <!-- sessionvalues send through javasc -->
                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                                <input id="date" type="text" name='date' value="<?php echo $_SESSION['time2'] ?>" readonly>

                            </div>

                            <div class="form-group">
                                
                                <input type="hidden" name='image' value="<?php if (isset($_SESSION['image2'])) {
                                                                echo $_SESSION['image2'];
                                                            } ?>">
                            </div>
                            <input class='btnorder' type=submit name="consultation" value=submit>
                    </div>

                    </form>


                </div>




                <script>
                    var step2 = sessionStorage.getItem('step2');
                    var step2b = sessionStorage.getItem('sstep2b');
                    var borwstreat = sessionStorage.getItem('borwstreat');
                    var service = sessionStorage.getItem('service');
                    var consultation = sessionStorage.getItem('consultation');
                    var lastprocedure = sessionStorage.getItem('lastprocedure');


                    var arra = [

                        step2,
                        step2b,
                        borwstreat,
                        service,
                        consultation,
                        lastprocedure


                    ]


                    //remove null values from from array
                    var filtered = arra.filter(Boolean);

                    //remove duplicates

                    var uniq = [...new Set(filtered)];




                    var html = '';
                    for (i = 0; i < uniq.length; i++) {

                        html += "<div class=checkoutcontainer>"
                        html += "<div class=checkoutlist>"
                        html += "<div class=formgroup>"
                        html += "<input id=firstitem type=text name=session[] value='" + uniq[i] + "' readonly>"
                        html += "</div>"
                        html += "</div>"
                        html += "</div>"

                        $("#valueshow").html(html);

                    }
                </script>
                


            </body>

            </html>


        <?php
    } elseif (isset($_POST['consul-tation']) || isset($_POST['appoint-ment']) || isset($_POST['final-procedure'])) {
        //step 3 form data show
        ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

            </head>

            <body>


                <div class="checkoutcontainer">
                    <h4 style=margin-top:100px;font-family:Montserrat;>
                        Checkout List
                    </h4>
                    <div class="checkoutlist">

                        <form method=post action="<?php echo plugins_url( 'ordersubmit.php' , __FILE__ );?>">

                            <!-- sessionvalues send through javasc -->
                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                                <input id="date" type=text name='date' value="<?php echo $_SESSION['time3'] ?>" readonly>
                            </div>
                            <input type=hidden name='image' value="<?php echo $_SESSION['image3'] ?>">

                    </div>
                    <input class='btnorder' type=submit name="opitment" value=submit>



                    </form>
                </div>

                <script>
                    var ming = sessionStorage.getItem('step3');
                    var browsming = sessionStorage.getItem('brows-ming');
                    var browsming2 = sessionStorage.getItem('brows-ming2');
                    var artistselect1 = sessionStorage.getItem('artistselect1');
                    var artistselect2 = sessionStorage.getItem('artistselect2');
                    var artistselect3 = sessionStorage.getItem('artistselect3');
                    var artistselect4 = sessionStorage.getItem('artistselect4');
                    var artistselect5 = sessionStorage.getItem('artistselect5');
                    var artistselect6 = sessionStorage.getItem('artistselect6');
                    var artistselect7 = sessionStorage.getItem('artistselect7');
                    var artistselect8 = sessionStorage.getItem('artistselect8');
                    var lastprocedure = sessionStorage.getItem('lastpro');
                    var consultation1 = sessionStorage.getItem('consultation1');
                    var consultation2 = sessionStorage.getItem('consultation2');
                    var consultation3 = sessionStorage.getItem('consultation3');






                    var arra = [

                        ming,
                        browsming,
                        browsming2,
                        artistselect1,
                        artistselect2,
                        artistselect3,
                        artistselect4,
                        artistselect5,
                        artistselect6,
                        artistselect7,
                        artistselect8,
                        lastprocedure,
                        consultation1,
                        consultation2,
                        consultation3,


                    ]


                    //remove null values from from array
                    var filtered = arra.filter(Boolean);

                    //remove duplicates

                    var uniq = [...new Set(filtered)];




                    var html = '';
                    for (i = 0; i < uniq.length; i++) {


                        html += "<div class=checkoutcontainer>"
                        html += "<div class=checkoutlist>"
                        html += "<div class=formgroup>"
                        html += "<input id=firstitem type=text name=session[] value='" + uniq[i] + "' readonly>"
                        html += "</div>"
                        html += "</div>"
                        html += "</div>"


                        $("#valueshow").html(html);

                    }
                </script>
                


            </body>

            </html>

        <?php
        //step 4 form data show
    }elseif (isset($_POST['consultation-final']) || isset($_POST['appointment-final']) || isset($_POST['finalprocedure-final'])) {

        ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <link rel="stylesheet" href="style.css">
            </head>

            <body>



                <div class="checkoutcontainer">
                    <h4 style=margin-top:100px;font-family:Montserrat;>
                        Checkout List
                    </h4>
                    <div class="checkoutlist">
                        <form method=post action="<?php echo plugins_url('ordersubmit.php' , __FILE__ );?>">

                            <!-- sessionvalues send through javasc -->

                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                            <input id="date" type=text name='date' value="<?php echo $_SESSION['time4'] ?>" readonly>
                            </div>

                            <input type=hidden  name="image" value="<?php echo $_SESSION['image4'] ?>">

                            </div>
                    <input class='btnorder' type=submit name=lastprocedure value=submit>

                    </form>

                </div>




                <script>
                    var ming = sessionStorage.getItem('step4', ming);
                    var browstreat = sessionStorage.getItem('browstreat');
                    var borwstreat2 = sessionStorage.getItem('browstreat2');
                    var consultation = sessionStorage.getItem('consult');
                    var consultation2 = sessionStorage.getItem('consultation2');
                    var consultation4 = sessionStorage.getItem('consultation4');
                    var lastprocedure = sessionStorage.getItem('selfprocedure');
                    var lastprocedure2 = sessionStorage.getItem('lastprocedure2');
                    var artistselect1 = sessionStorage.getItem('artistselect1');
                    var artistselect2 = sessionStorage.getItem('artistselect2');
                    var artistselect3 = sessionStorage.getItem('artistselect3');
                    var artistselect4 = sessionStorage.getItem('artistselect4');
                    var artistselect5 = sessionStorage.getItem('artistselect5');
                    var servicesbrows = sessionStorage.getItem('servicesbrows');
                    var lipsming = sessionStorage.getItem('lipsming');
                    var browsming = sessionStorage.getItem('browsming');






                    var arra = [

                        ming,
                        browstreat,
                        borwstreat2,
                        consultation,
                        consultation2,
                        consultation4,
                        lastprocedure,
                        lastprocedure2,
                        artistselect1,
                        artistselect2,
                        artistselect3,
                        artistselect4,
                        artistselect5,
                        servicesbrows,
                        lipsming,
                        browsming


                    ]


                    //remove null values from from array
                    var filtered = arra.filter(Boolean);

                    //remove duplicates

                    var uniq = [...new Set(filtered)];




                    var html = '';
                    for (i = 0; i < uniq.length; i++) {


                        html += "<div class=checkoutcontainer>"
                        html += "<div class=checkoutlist>"
                        html += "<div class=formgroup>"
                        html += "<input id=firstitem type=text name=session[] value='" + uniq[i] + "' readonly>"
                        html += "</div>"
                        html += "</div>"
                        html += "</div>"


                        $("#valueshow").html(html);

                    }
                </script>
            </body>

            </html>




    <?php

    }elseif(isset($_GET['orderplace'])){

            
            $orderplace = $_GET['orderplace'];

            
            echo '<p style=color:red;text-align:center>'.$orderplace.'</p>';

    }
}


add_shortcode('checkout', 'multi_form_step_checkout');
