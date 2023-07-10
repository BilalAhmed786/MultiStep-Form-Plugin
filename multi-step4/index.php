<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-12 ">
            <form id="msform" method="post" action="checkout.php"  enctype="multipart/form-data">
                <fieldset>
                    <h3 class="fs-subtitle-start">Select an area</h3>
                    <div class="field">
                        <div class="option" data-target="Brows">

                            <input class="ming" type='text' value="Brows">
                        </div>
                        <div class="option" data-target="Eyeliners">

                            <input class="ming" type='text' value="Eyeliners">
                        </div>
                        <div class="option" data-target="Scalp-Hairlines-consultation">

                            <input class="ming" type='text' value="Scalp & Hairlines">
                        </div>
                        <div class="option" data-target="services-lips">

                            <input class="ming" type='text' value="Lips">
                        </div>
                    </div>

                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Brows Start -->
                <fieldset id="Brows">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">which option applies to you</h3>
                    <div class="field">

                        <div class="option" data-target="new-treatment-brows">

                            <input class="browstreat" type='text' value="New Brow treatment">
                        </div>
                        <div class="option" data-target="brow-touch-up">

                            <input class="browstreat" type='text' value="Brow touch-up(existing client only)">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="new-treatment-brows">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="services-brows">
                            <input class="brows-ming" type='text' value="No, I have not">

                        </div>
                        <div class="option" data-target="final-photo-consultation">

                            <input class="brows-ming" type='text' value="Yes, I have">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="brow-touch-up">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-brows-no">

                            <input class="lastprocedure2" type='text' value="Less than 6 weeks ago (free)">

                        </div>
                        <div class="option" data-target="artist-brows-no">

                            <input class="lastprocedure2" type='text' value="7-12 month ago ($300-$350)">
                        </div>
                        <div class="option" data-target="artist-brows-no">


                            <input class="lastprocedure2" type='text' value="13-18 month ago ($400-$450)">
                        </div>
                        <div class="option" data-target="artist-brows-no">

                            <input class="lastprocedure2" type='text' value="19-24 month ago ($500-$550)">


                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="services-brows">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a Service</h3>
                    <div class="field">
                        <div class="option" data-target="consultation">
                            <input class="servicesbrows" type='text' value="Microblading">

                        </div>
                        <div class="option" data-target="consultation">
                            <input class="servicesbrows" type='text' value="Combination brows">

                        </div>
                        <div class="option" data-target="consultation">
                            <input class="servicesbrows" type='text' value="Nano needling">

                        </div>
                        <div class="option" data-target="consultation">
                            <input class="servicesbrows" type='text' value="Powder ombre">

                        </div>
                        <div class="option" data-target="artist-brows-no">
                            <input class="servicesbrows" type='text' value="General consultation (free)">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>


                <fieldset id="consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-brows-yes">

                            <input class="consultation" type='text' value="Yes,please">


                        </div>
                        <div class="option" data-target="artist-brows-no">

                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-brows-no">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect1" type='text' value="Any available">
                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect1" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect1" type='text' value="Gloria Solano">
                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect1" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-brows-yes">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation">
                            <input class="artistselect2" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-consultation">
                            <input class="artistselect2" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-consultation">
                            <input class="artistselect2" type='text' value="Gloria Solano">

                        </div>
                        <div class="option" data-target="final-consultation">
                            <input class="artistselect2" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>


                <!--Brows End-->

                <!-- Used For Different Categories-->

                <!--Used For Different Categories End-->

                <!--Eyeliner Start-->
                <fieldset id="Eyeliners">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="Eyeliner-consultation">

                            <input class="browstreat2" type='text' value="New Brow treatment">
                        </div>
                        <div class="option" data-target="Eyeliner-touchup">

                            <input class="browstreat2" type='text' value="Brow touch-up(existing client only)">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="Eyeliner-consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-eyeliner">

                            <input class="consultation2" type='text' value="Yes,please">
                        </div>
                        <div class="option" data-target="artist-eyeliner">

                            <input class="consultation2" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="Eyeliner-touchup">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-eyeliner">


                            <input class="lastprocedure" type='text' value=" Less than 6 weeks ago (free)">
                        </div>
                        <div class="option" data-target="artist-eyeliner">

                            <input class="lastprocedure" type='text' value="6 weeks - 7 months ago">
                        </div>
                        <div class="option" data-target="artist-eyeliner">

                            <input class="lastprocedure" type='text' value="7 - 12  month ago">
                        </div>
                        <div class="option" data-target="artist-eyeliner">

                            <input class="lastprocedure" type='text' value="13 - 18  month ago">
                        </div>
                        <div class="option" data-target="artist-eyeliner">

                            <input class="lastprocedure" type='text' value="19 - 24  month ago">
                        </div>
                        <div class="option" data-target="artist-eyeliner">
                            <input class="lastprocedure" type='text' value="25 - 30  month ago">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-eyeliner">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect3" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect3" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect3" type='text' value="Fatimah Francia">


                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Eyeliner End-->

                <!--Scalp-Hairlines-->
                <fieldset id="Scalp-Hairlines-consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-scalp">
                            <input class="consultation3" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="artist-scalp">
                            <input class="consultation3" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-scalp">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect4" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect4" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect4" type='text' value="Gloria">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!--Scalp-Hairlines End-->

                <!--Lips Start-->
                <fieldset id="services-lips">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target="lips-consultation">

                            <input class="lipsming" type='text' value="Lip brushing">
                        </div>
                        <div class="option" data-target="lips-consultation">

                            <input class="lipsming" type='text' value="Lip color-correction">
                        </div>
                        <div class="option" data-target="artist-lips">
                            <input class="lipsming" type='text' value="General Consultation">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />

                </fieldset>

                <fieldset id="lips-consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-lips">
                            <input class="consultation4" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="artist-lips">

                            <input class="consultation4" type='text' value="No thanks.I know what I want">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-lips">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect5" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect5" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect5" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="final-photo-consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">We will need to evaluate your brows to determine the best procedure for you.</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="img">Select image:</label>
                            <input type="file" id="img-consultation" name="imagefile" accept="image/*">
                            <label class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                            <input id="date-time-consultation" type="datetime-local" name="datetimeconsultation" required>
                            <p style=color:red>Please select the date first</p> 

                            <input type="submit" name="consultation" value="Book appointment" id="Book-appointment-consultation" class="submit-button">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>


                <fieldset id="final-consultation">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                            <input type="datetime-local" id="date-time-final-consultation" name="appointmentdate">

                            <input type="submit" name="appointment" value="Book consultation session" id="book-consultation-session" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="final-procedure">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Procedure (date and time):</label>
                            <input type="datetime-local" id="date-time-final-procedure" name="finalproceduredate" required>
                            <p style=color:red>Please select the date first</p> 

                            <div class="image-preview">
                                <input id="img-consultation" type="file" name="imagefinalpro" accept="image/*" onchange="previewImage(event)" />
                                <img id="thumbnail" alt="Thumbnail">
                            </div>
                            <input type="submit" name="finalprocedure" value="Book appointment" id="book-appointment-procedure" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>


                <!--Lips End-->
            </form>

        </div>
    </div>
    <!-- /.MultiStep Form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        // jQuery time
        var current_fs, next_fs, previous_fs; // fieldsets
        var previous_fs_stack = []; // stack to store previous fieldsets

        $(".next").click(function() {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            // activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            // show the next fieldset
            next_fs.show();
            // hide the current fieldset
            current_fs.hide();

            previous_fs_stack.push(current_fs); // store previous fieldset
        });

        $(".previous").click(function() {
            current_fs = $(this).parent();
            previous_fs = previous_fs_stack.pop(); // get previous fieldset from stack

            // de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            // show the previous fieldset
            previous_fs.show();
            // hide the current fieldset
            current_fs.hide();

            next_fs = current_fs; // update next_fs
        });

        $(".submit").click(function() {
            return false;
        });

        $(".option").click(function() {
            $(this).siblings(".option").removeClass('selected');
            $(this).addClass('selected');
            $(this).parent('.field').siblings('.next').click();

            var target = $(this).data('target');
            $('fieldset').hide();
            $("#" + target).show();
        });

        $(".arrow-back").click(function() {
            $(this).siblings('.previous').click();
        });

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('thumbnail');
                output.src = reader.result;
                output.style.display = 'block'; // Show the thumbnail
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script src="sessionsdata.js"></script>
</body>

</html>