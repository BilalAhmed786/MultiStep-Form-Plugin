<?php

session_start();

if (isset($_POST['consultation'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile']['name'];
    $path = $_FILES['imagefile']['tmp_name'];


    $_SESSION['time2'] = $time;

    $_SESSION['image2'] = $file;


    move_uploaded_file($path, '../images/' . $file);
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


    move_uploaded_file($imagepath, '../images/' . $imagename);
}


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
    <script src='sessionsdata.js'></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>


<div class="checkoutcontainer">
        <h4 style=margin-top:100px;font-family:Montserrat;>
            Checkout List
        </h4>
    <div class="checkoutlist" >
    <form method=post action=ordersubmit.php>

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
        <input class='btnorder' type=submit name=submit value=submit>
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

            html+="<div class=checkoutcontainer>"
            html+="<div class=checkoutlist>"
            html+= "<div class=formgroup>"
            html += "<input id=firstitem type=text name=session[] value='" + uniq[i] + "' readonly>"
            html+="</div>"
            html+="</div>"
            html+="</div>"

            $("#valueshow").html(html);

        }
    </script>
    <script src='sessionsdata.js'></script>


</body>

</html>