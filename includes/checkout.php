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

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile']['name'];
    
    $path = $_FILES['imagefile']['tmp_name'];


    $_SESSION['time2'] = $time;

    $_SESSION['image2'] = $file;

    $fil = plugins_url('images/'. $file, __FILE__);


    move_uploaded_file($_SERVER['DOCUMENT_ROOT'].$path,$_SERVER['DOCUMENT_ROOT'].$fil);
}

if (isset($_POST['appointment'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time2'] = $dateopintment;

    $_SESSION['image2'] = '';
}



if (isset($_POST['finalprocedure'])) {

    $date = $_POST['finalproceduredate'];
    
    $imagename = $_FILES['imagefinalpro']['name'];
        
    $imagepath = $_FILES['imagefinalpro']['tmp_name'];

    

    $_SESSION['image2'] = $imagename;

    $_SESSION['time2'] = $date;

    $imagenam=plugins_url('images/'. $imagename, __FILE__);



    move_uploaded_file($_SERVER['DOCUMENT_ROOT'].$imagepath,$imagenam);
}


//step 3 checkout data

if (isset($_POST['consul-tation'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile']['name'];
    $path = $_FILES['imagefile']['tmp_name'];


    $_SESSION['time3'] = $time;

    $_SESSION['image3'] = $file;


    move_uploaded_file($path, '../images/' . $file);
}

if (isset($_POST['appoint-ment'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time3'] = $dateopintment;

    $_SESSION['image3'] = '';
}



if (isset($_POST['final-procedure'])) {

    $date = $_POST['finalproceduredate'];
    $imagename = $_FILES['imagefinalpro']['name'];
    $imagepath = $_FILES['imagefinalpro']['tmp_name'];



    $_SESSION['image3'] = $imagename;

    $_SESSION['time3'] = $date;

    plugins_url('images/'. $imagename, __FILE__);
    //move_uploaded_file($imagepath, '../images/'. $imagename);
}


//step 4 checkout data

if (isset($_POST['consultation-final'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile']['name'];
    $path = $_FILES['imagefile']['tmp_name'];


    $_SESSION['time4'] = $time;

    $_SESSION['image4'] = $file;


    //move_uploaded_file($path, '../images/'. $file);
}

if (isset($_POST['appointment-final'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time4'] = $dateopintment;

    $_SESSION['image4'] = '';
}



if (isset($_POST['finalprocedure-final'])) {

    $date = $_POST['finalproceduredate'];
    $imagename = $_FILES['imagefinalpro']['name'];
    $imagepath = $_FILES['imagefinalpro']['tmp_name'];



    $_SESSION['image4'] = $imagename;

    $_SESSION['time4'] = $date;


    move_uploaded_file($imagepath, '../images/'. $imagename);
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
                    <form id="ordersubmitform" action="http://localhost/testtheme/wp-content/plugins/moaibeauty/includes/ordersubmit.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input id="firstitem" name="firstitem" type=text readonly>
                            </div>
                            <div class="form-group">
                                <input id="date" name="date" value="<?php echo $_SESSION['time'] ?>" type=text readonly>
                            </div>
                        </fieldset>
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
                        <form method=post action="http://localhost/testtheme/wp-content/plugins/moaibeauty/includes/ordersubmit.php">

                            <!-- sessionvalues send through javasc -->
                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                                <input id="date" type="text" value="<?php echo $_SESSION['time2'] ?>" readonly>

                            </div>

                            <div class="form-group">
                                <input type="hidden" value="<?php if (isset($_SESSION['image2'])) {
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
                <script src='sessionsdata.js'></script>


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

                        <form method=post action="http://localhost/testtheme/wp-content/plugins/moaibeauty/includes/ordersubmit.php">

                            <!-- sessionvalues send through javasc -->
                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                                <input id="date" type=text value="<?php echo $_SESSION['time3'] ?>" readonly>
                            </div>
                            <input type=hidden value="<?php echo $_SESSION['image3'] ?>">

                    </div>
                    <input class='btnorder' type=submit name="opitment" value=submit>



                    </form>
                </div>

                <script>
                    var ming = sessionStorage.getItem('step3');
                    var browsming = sessionStorage.getItem('brows-ming');
                    var artistselect1 = sessionStorage.getItem('artistselect1');
                    var artistselect2 = sessionStorage.getItem('artistselect2');
                    var artistselect3 = sessionStorage.getItem('artistselect3');
                    var artistselect4 = sessionStorage.getItem('artistselect4');
                    var artistselect5 = sessionStorage.getItem('artistselect5');
                    var artistselect6 = sessionStorage.getItem('artistselect6');
                    var artistselect7 = sessionStorage.getItem('artistselect7');
                    var artistselect8 = sessionStorage.getItem('artistselect8');
                    var lastprocedure = sessionStorage.getItem('lastprocedure');
                    var consultation1 = sessionStorage.getItem('consultation1');
                    var consultation2 = sessionStorage.getItem('consultation2');
                    var consultation3 = sessionStorage.getItem('consultation3');






                    var arra = [

                        ming,
                        browsming,
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
                <script src='sessionsdata.js'></script>


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
                        <form method=post action="http://localhost/testtheme/wp-content/plugins/moaibeauty/includes/ordersubmit.php">

                            <!-- sessionvalues send through javasc -->

                            <div class="form-group">
                                <div id=valueshow></div>
                            </div>
                            <div class="form-group">
                                <input id="date" type=text value="<?php echo $_SESSION['time4'] ?>" readonly>
                            </div>

                            <input type=hidden value="<?php echo $_SESSION['image4'] ?>">

                    </div>
                    <input class='btnorder' type=submit name=lastprocedure value=submit>

                    </form>

                </div>




                <script>
                    var ming = sessionStorage.setItem('step4', ming);
                    var browstreat = sessionStorage.getItem('browstreat');
                    var borwstreat2 = sessionStorage.getItem('browstreat2');
                    var consultation = sessionStorage.getItem('consultation');
                    var consultation2 = sessionStorage.getItem('consultation2');
                    var consultation4 = sessionStorage.getItem('consultation4');
                    var lastprocedure = sessionStorage.getItem('lastprocedure');
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

    }else{

            echo '<p style=color:red;text-align:center;background:light-gray>No item in the checkout </p>';

    }
}


add_shortcode('checkout', 'multi_form_step_checkout');
