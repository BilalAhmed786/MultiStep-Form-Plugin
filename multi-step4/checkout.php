<?php
session_start();

if (isset($_POST['consultation'])) {

    $time = $_POST['datetimeconsultation'];

    $file = $_FILES['imagefile']['name'];
    $path = $_FILES['imagefile']['tmp_name'];


    $_SESSION['time4'] = $time;

    $_SESSION['image4'] = $file;


    move_uploaded_file($path, '../images/' . $file);
}

if (isset($_POST['appointment'])) {

    $dateopintment = $_POST['appointmentdate'];

    $_SESSION['time4'] = $dateopintment;

    $_SESSION['image4'] = '';
}



if (isset($_POST['finalprocedure'])) {

    $date = $_POST['finalproceduredate'];
    $imagename = $_FILES['imagefinalpro']['name'];
    $imagepath = $_FILES['imagefinalpro']['tmp_name'];



    $_SESSION['image4'] = $imagename;

    $_SESSION['time4'] = $date;


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
        <input id="date" type=text value="<?php echo $_SESSION['time4'] ?>" readonly>
    </div>    

        <input type=hidden value="<?php echo $_SESSION['image4'] ?>">

        </div>
        <input class='btnorder' type=submit name=submit value=submit>

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