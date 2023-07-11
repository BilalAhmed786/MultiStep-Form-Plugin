<?php

function multi_form_step1($image)
{ //step-1 

    $image = plugins_url('../images/arrow-back.png', __FILE__);

?>

    <div class="row">
        <div class="col-md-12 ">
            <form id="msform" method="post" action='http://localhost/testtheme/checkout/'>
                <!-- Book free consultation -->
                <fieldset id="artist-all">
                    <!-- <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">-->
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">

                        <div class="option" data-target="final-consultation-all">
                            <!-- <a> Any available</a> -->
                            <input class="anyavailable" type='text' value="Any available">
                        </div>

                        <div class="option" data-target="final-consultation-all">
                            <!-- <a> Any available</a> -->
                            <input class="anyavailable" type='text' value="Ming Ng">
                        </div>

                        <div class="option" data-target="final-consultation-all">

                            <!-- Goloria Solano -->
                            <input class="anyavailable" type='text' value="Goloria">
                        </div>
                        <div class="option" data-target="final-consultation-all">

                            <input class="anyavailable" type='text' value="Fatima Francia">

                        </div>

                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="final-consultation-all">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                            <input type="datetime-local" id="date-time-final-consultation" name="date-time-consultation" required>
                            <p style=color:red>Please select the date first</p>
                            <input type="submit" name="bookconultation" value="Book consultation session" id="book-consultation-session" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>
            </form>
        </div>
    </div>
    <!--/.MultiStep Form-->
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


        //first form session data
        $(document).ready(function() {
            $(".anyavailable").click(function() {
                var str = $(this).val();
                sessionStorage.setItem('step1', str);

            });
        });

        var sstep1 = sessionStorage.getItem('step1');

        $("#sstep1").val(sstep1);
    </script>


<?php


}


add_shortcode('form-1', 'multi_form_step1');





function multi_form_step2()
{

    $image = plugins_url('../images/arrow-back.png', __FILE__);

?>

    <div class="row">
        <div class="col-md-12 ">
            <form id="msform" method="post" action='http://localhost/testtheme/checkout' enctype="multipart/form-data" novalidate>
                <fieldset>
                    <h3 class="fs-subtitle-start">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="areas-all-ming">

                            <input class="ming" type='text' value="Ming">
                        </div>

                        <div class="option" data-target="areas-all-fatimah">

                            <input class="ming" type='text' value="Fatimah">

                        </div>
                        <div class="option" data-target="gloria">

                            <input class="ming" type='text' value="Gloria Solano">

                        </div>

                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!--Ming Option-->
                <fieldset id="areas-all-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an area</h3>
                    <div class="field">
                        <div class="option" data-target="option-brows-ming">

                            <input class="brows" type='text' value="Brows">


                        </div>
                        <div class="option" data-target="option-eyeliner-ming">
                            <input class="brows" type='text' value="Eyeliners">

                        </div>
                        <div class="option" data-target="Consultation-Scalp-ming">
                            <input class="brows" type='text' value="Scalp & hairlines">

                        </div>
                        <div class="option" data-target="services-lips-ming">
                            <input class="brows" type='text' value="Lips">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Brows Start-->
                <fieldset id="option-brows-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="new-treatment-brows-ming">

                            <input class="browstreat" type='text' value="New Brow treatment">


                        </div>
                        <div class="option" data-target="touchup-brows-ming">

                            <input class="browstreat" type='text' value="Brow touch-up(existing client only)">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="new-treatment-brows-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="services-brows-ming ">
                            <input class="lastprocedure" type='text' value="No, I have not">

                        </div>
                        <div class="option" data-target="final-photo-consultation">
                            <input class="lastprocedure" type='text' value="Yes, I have">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="services-brows-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-brows-ming">

                            <input class="service" type='text' value=" Microblading">
                        </div>
                        <div class="option" data-target="Consultation-brows-ming">
                            <input class="service" type='text' value="Combination brows">

                        </div>
                        <div class="option" data-target="Consultation-brows-ming">
                            <input class="service" type='text' value="Nano needling">

                        </div>
                        <div class="option" data-target="Consultation-brows-ming">
                            <input class="service" type='text' value="Powder ombre">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="service" type='text' value="General consultation">

                        </div>


                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-brows-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="consultation" type='text' value="No thanks. I know what I want">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="touchup-brows-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" Less than 6 weeks ago (free)">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="7-12 month ago ($300-$350)">
                        </div>
                        <div class="option" data-target="final-procedure">


                            <input class="lastprocedure" type='text' value=" 13-18 month ago ($400-$450)">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="19-24 month ago ($500-$550)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Brows end -->

                <!--Eyeliner Start-->
                <fieldset id="option-eyeliner-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-eyeliner-ming">
                            <input class="browstreat" type='text' value=" New eyeliner treatment">

                        </div>
                        <div class="option" data-target="touchup-eyeliner-ming">
                            <input class="browstreat" type='text' value="Eyeliner touch-up(existing client only)">


                        </div>


                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-eyeliner-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="touchup-eyeliner-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">


                            <input class="lastprocedure" type='text' value="Less than 6 weeks ago (free)">

                        </div>
                        <div class="option" data-target="final-procedure">


                            <input class="lastprocedure" type='text' value=" 6 weeks - 7 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" 7-12 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" 13-18 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" 19-24 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="25-30 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="More than 31 month ago">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Eyeliner end -->

                <!--Scalp & hairlines-->
                <fieldset id="Consultation-Scalp-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">

                            <input class="consultation" type='text' value="Yes,please">
                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Scalp & hairlines-->

                <!--Lips Start-->
                <fieldset id="services-lips-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-lip-ming">

                            <input class="browstreat" type='text' value="Lip brushing">

                        </div>
                        <div class="option" data-target="Consultation-lip-ming">


                            <input class="browstreat" type='text' value=" Lip color-correction">
                        </div>
                        <div class="option" data-target="final-procedure">


                            <input class="browstreat" type='text' value=" General consultation">
                        </div>
                        <input id="sstep2l" type='text'>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-lip-ming">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">

                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!-- Lips end -->
                <!-- Ming End -->
                <!--Fatimah start-->
                <fieldset id="areas-all-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an area</h3>
                    <div class="field">
                        <div class="option" data-target="option-brows-fatimah">
                            <input class="brows" type='text' value="Brows">

                        </div>
                        <div class="option" data-target="option-eyeliner-fatimah">
                            <input class="brows" type='text' value=" Eyeliners">

                        </div>
                        <div class="option" data-target="services-lips-fatimah">
                            <input class="brows" type='text' value="Lips">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Brows Start-->
                <fieldset id="option-brows-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="new-treatment-brows-fatimah">
                            <input class="browstreat" type='text' value="New Brow treatment">

                        </div>
                        <div class="option" data-target="touchup-brows-fatimah">

                            <input class="browstreat" type='text' value="Brow touch-up(existing client only)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="new-treatment-brows-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="services-brows-fatimah ">
                            <input class="lastprocedure" type='text' value="No, I have not">

                        </div>
                        <div class="option" data-target="final-photo-consultation">
                            <input class="lastprocedure" type='text' value=" Yes, I have">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="services-brows-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-brows-fatimah">
                            <input class="service" type='text' value="Microblading">

                        </div>
                        <div class="option" data-target="Consultation-brows-fatimah">
                            <input class="service" type='text' value="Combination brows">

                        </div>
                        <div class="option" data-target="Consultation-brows-fatimah">

                            <input class="service" type='text' value="Nano needling">

                        </div>
                        <div class="option" data-target="Consultation-brows-fatimah">

                            <input class="service" type='text' value="Powder ombre">

                        </div>
                        <div class="option" data-target="final-consultation-service">

                            <input class="service" type='text' value="General consultation (free)">

                        </div>
                        <input id="sstep2q" type='text'>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-brows-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="consultation" type='text' value="No thanks. I know what I want">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="touchup-brows-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="Less than 6 weeks ago (free)">


                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="lastprocedure" type='text' value="7-12 month ago ($300-$350)">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="13-18 month ago ($400-$450)">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="lastprocedure" type='text' value="19-24 month ago ($500-$550)">

                        </div>


                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Brows end -->

                <!--Eyeliner Start-->
                <fieldset id="option-eyeliner-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-eyeliner-fatimah">
                            <input class="browstreat" type='text' value="New eyeliner treatment">

                        </div>
                        <div class="option" data-target="touchup-eyeliner-fatimah">
                            <input class="browstreat" type='text' value="Eyeliner touch-up(existing client only)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />

                </fieldset>

                <fieldset id="Consultation-eyeliner-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Eyeliner touch-up(existing client only)">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="touchup-eyeliner-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">


                            <input class="lastprocedure" type='text' value="Less than 6 weeks ago (free)">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="6 weeks - 7 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="7-12 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">


                            <input class="lastprocedure" type='text' value="13-18 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="19-24 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" 25-30 month ago">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value="More than 31 month ago">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Eyeliner end -->

                <!--Scalp & hairlines-->
                <fieldset id="Consultation-Scalp-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">

                            <input class="consultation" type='text' value=" Yes,please">


                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="consultation" type='text' value="No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Scalp & hairlines-->

                <!--Lips Start-->
                <fieldset id="services-lips-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target="Consultation-lip-fatimah">
                            <input class="browstreat" type='text' value=" Lip brushing">

                        </div>
                        <div class="option" data-target="Consultation-lip-fatimah">
                            <input class="browstreat" type='text' value="Lip color-correction">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="browstreat" type='text' value="General consultation">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-lip-fatimah">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="browstreat" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="browstreat" type='text' value="No thanks. I know what I want">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!-- Lips end -->

                <!-- Fatimah End -->

                <!--Gloria Solano Option-->
                <fieldset id="gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>
                    " width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an area</h3>
                    <div class="field">
                        <div class="option" data-target="option-brows-gloria">
                            <input class="brows" type='text' value="Brows">

                        </div>
                        <div class="option" data-target="Consultation-Scalp-ming">
                            <input class="brows" type='text' value="Scalp & hairlines">

                        </div>


                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Brows Start-->
                <fieldset id="option-brows-gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Which option applies to you</h3>
                    <div class="field">
                        <div class="option" data-target="new-treatment-brows-gloria">
                            <input class="browstreat" type='text' value="New Brow treatment">

                        </div>
                        <div class="option" data-target="touchup-brows-gloria">
                            <input class="browstreat" type='text' value="Brow touch-up(existing client only)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="new-treatment-brows-gloria">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="services-brows-gloria ">
                            <input class="lastprocedure" type='text' value="No, I have not">

                        </div>
                        <div class="option" data-target="final-photo-consultation">
                            <input class="lastprocedure" type='text' value="Yes, I havet">


                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="services-brows-gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select a service</h3>
                    <div class="field">
                        <div class="option" data-target=" Microblading">
                            <input class="service" type='text' value="Microblading">

                        </div>
                        <div class="option" data-target="Consultation-brows-gloria">
                            <input class="service" type='text' value="Combination brows">

                        </div>
                        <div class="option" data-target="Consultation-brows-gloria">
                            <input class="service" type='text' value="Nano needling">

                        </div>
                        <div class="option" data-target="Consultation-brows-gloria">
                            <input class="service" type='text' value="Powder ombre">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="service" type='text' value="General consultation (free)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="Consultation-brows-gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="consultation" type='text' value=" No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="touchup-brows-gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">
                            <input class="lastprocedure" type='text' value="Less than 6 weeks ago (free)">

                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="lastprocedure" type='text' value=" 7-12 month ago ($300-$350)">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="lastprocedure" type='text' value="13-18 month ago ($400-$450)">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="lastprocedure" type='text' value=" 19-24 month ago ($500-$550)">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Brows end -->

                <!--Scalp & hairlines-->
                <fieldset id="Consultation-Scalp-gloria">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="consultation" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="consultation" type='text' value=" No thanks. I know what I want">

                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Scalp & hairlines-->

                <!-- gloria End -->

                <!-- used for different categories Finalphoto Consultation -->
                <fieldset id="final-photo-consultation">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">We will need to evaluate your brows to determine the best procedure for you.
                    </h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="img">Select image:</label>
                            <input type="file" id="img-consultation" name="imagefile" accept="image/*">
                            <label style="padding-top: 15px;" class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                            <input type="datetime-local" id="date-time-field" name="datetimeconsultation" required>
                            <p style=color:red>Please select the date first</p>

                            <input type="submit" name='consultation' value="Book appointment" id="Book-appointment-field" class="submit-button">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>

                <!-- Used For Different Categories-->
                <fieldset id="final-consultation-service">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Consultation (date and time):</label>
                            <input type="datetime-local" name="appointmentdate" id="date-time-final-consultation-service" required>
                            <p style=color:red>Please select the date first</p>

                            <input type="submit" name='appointment' value="Book appointment" id="book-appoinment-service" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>
                <!--Used For Different Categories End-->

                <!-- Used For Different Categories-->
                <fieldset id="final-procedure">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Procedure (date and time):</label>
                            <input id="date-time-final-procedure" type="datetime-local" name="finalproceduredate" required>
                            <p style=color:red>Please select the date first</p>

                            <div class="image-preview">

                                <input id="img-consultation" type="file" name='imagefinalpro' accept="image/*  onchange=" previewImage(event)" />
                                <img id="thumbnail" alt="">
                            </div>
                            <input type="submit" name='finalprocedure' value="Book appointment" id="book-appointment-procedure" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>
                <!--Used For Different Categories End-->
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


        //multisteps form values stored into database


        $(document).ready(function() {
            // Get value on button click and show alert
            $("#step1").click(function() {
                var Gol = $("#step1").val();
                sessionStorage.setItem('step1', Gol);
            });
        });

        $(document).ready(function() {
            $("#step2").click(function() {
                var st = $("#step2").val();
                sessionStorage.setItem('step2', st);
            });
        });

        //session data storage



        //second form session data
        $(document).ready(function() {
            $(".ming").click(function() {
                var ming = $(this).val();
                sessionStorage.setItem('step2', ming);

            });
        });






        $(document).ready(function() {
            $(".brows").click(function() {
                var brows = $(this).val();
                sessionStorage.setItem('sstep2b', brows);

            });
        });






        $(document).ready(function() {
            $(".browstreat").click(function() {
                var browstreat = $(this).val();
                sessionStorage.setItem('borwstreat', browstreat);


            });
        });



        $(document).ready(function() {
            $(".service").click(function() {
                var services = $(this).val();
                sessionStorage.setItem('service', services);

            });
        });



        $(document).ready(function() {
            $(".consultation").click(function() {
                var consultation = $(this).val();
                sessionStorage.setItem('consultation', consultation);


            });
        });




        $(document).ready(function() {
            $(".lastprocedure").click(function() {
                var lastprocedure = $(this).val();
                sessionStorage.setItem('lastprocedure', lastprocedure);

            });
        });





        //session destroy on back
        $(document).ready(function() {
            $(".arrow-back").click(function() {

                sessionStorage.clear();

                window.location = "http://localhost/testtheme/form-2";


            });
        });
    </script>

    </body>

    </html>


<?php

}


add_shortcode('form-2', 'multi_form_step2');





function multi_form_step3()
{  //multi step form 3
    $image = plugins_url('../images/arrow-back.png', __FILE__);
?>

    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-12 ">
            <form id="msform" method="post" action='http://localhost/testtheme/checkout' enctype="multipart/form-data" novalidate>
                <fieldset>
                    <h3 class="fs-subtitle-start">Select an area</h3>
                    <div class="field">
                        <div class="option" data-target="microblading-combinationbrows-nanoneedling-powderombre">

                            <input class="ming" type='text' value="Microblading">
                        </div>
                        <div class="option" data-target="microblading-combinationbrows-nanoneedling-powderombre">

                            <input class="ming" type='text' value="Combination brows">
                        </div>
                        <div class="option" data-target="microblading-combinationbrows-nanoneedling-powderombre">

                            <input class="ming" type='text' value=" Nano needling">
                        </div>
                        <div class="option" data-target="microblading-combinationbrows-nanoneedling-powderombre">

                            <input class="ming" type='text' value="Powder ombre">
                        </div>
                        <div class="option" data-target="old-brow-tatto-correction">

                            <input class="ming" type='text' value="Old brow tatto correction">
                        </div>
                        <div class="option" data-target="brows-touchup">

                            <input class="ming" type='text' value="Brow touch-up">


                        </div>
                        <div class="option" data-target="micropigmentation">

                            <input class="ming" type='text' value="Micropigmentation">
                        </div>
                        <div class="option" data-target="tightline">

                            <input class="ming" type='text' value="Tightline tattoo">
                        </div>
                        <div class="option" data-target="lipbrushing-lipcolorcorrection">

                            <input class="ming" type='text' value="Lip brushing">
                        </div>
                        <div class="option" data-target="lipbrushing-lipcolorcorrection">

                            <input class="ming" type='text' value="Lip color correction">
                        </div>

                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- Microblading, Combination brows, Nano needling, Powder ombre, Start -->
                <fieldset id="microblading-combinationbrows-nanoneedling-powderombre">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="new-treatment-consultation">


                            <input class="brows-ming" type='text' value="No, I have not">
                        </div>
                        <div class="option" data-target="old-brow-tatto-correction">

                            <input class="brows-ming" type='text' value="Yes, I have">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="new-treatment-consultation">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Have you ever had permanent makeup, microblading, or eyebrow tattooing?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-brows-yes">

                            <input class="brows-ming2" type='text' value="Yes, please">
                        </div>
                        <div class="option" data-target="artist-touchup">

                            <input class="brows-ming2" type='text' value="No thanks. I know what I want">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-brows-yes">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">

                            <input class="artistselect1" type='text' value="Any available">
                        </div>
                        <div class="option" data-target="final-consultation-service">

                            <input class="artistselect1" type='text' value="Ming Ng">
                        </div>
                        <div class="option" data-target="final-consultation-service">

                            <input class="artistselect1" type='text' value="Gloria Solano">
                        </div>
                        <div class="option" data-target="final-consultation-service">

                            <input class="artistselect1" type='text' value="Fatimah Francia">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- also used for old brow tatoo correction-->


                <!--Used For Different Categories End-->

                <!--Touchup Brows-->
                <fieldset id="brows-touchup">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">When was your last procedure?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-touchup">

                            <input class="lastprocedure" type='text' value=" Less than 6 weeks ago (free)">
                        </div>
                        <div class="option" data-target="artist-touchup">

                            <input class="lastprocedure" type='text' value="7-12 month ago ($300-$350)">
                        </div>
                        <div class="option" data-target="artist-touchup">

                            <input class="lastprocedure" type='text' value=" 13-18 month ago ($400-$450)">
                        </div>
                        <div class="option" data-target="artist-touchup">

                            <input class="lastprocedure" type='text' value="19-24 month ago ($500-$550)">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-touchup">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect2" type='text' value="Any available">
                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect2" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect2" type='text' value="Gloria Solano">


                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect2" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Brows touchup End-->

                <!--Micropigmentation-->
                <fieldset id="micropigmentation">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-micropigmentation-yes">
                            <input class="consultation1" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="artist-micropigmentation-no">
                            <input class="consultation1" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-micropigmentation-yes">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect3" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect3" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-consultation-service">

                            <input class="artistselect3" type='text' value="Gloria Solano">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-micropigmentation-no">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect4" type='text' value="Any available">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect4" type='text' value="Ming Ng">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect4" type='text' value="Gloria Solano">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Micropigmentation End-->

                <!--Tightline tattoo-->
                <fieldset id="tightline">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-tightline-yes">
                            <input class="consultation2" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="artist-tightline-no">
                            <input class="consultation2" type='text' value="No thanks. I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-tightline-yes">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect5" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect5" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect5" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="artist-tightline-no">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect6" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect6" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect6" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Tightline tattoo end-->

                <!--Lipbrushing-->
                <fieldset id="lipbrushing-lipcolorcorrection">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Do you need a complementary consultation session?</h3>
                    <div class="field">
                        <div class="option" data-target="artist-lipbrushing-yes">
                            <input class="consultation3" type='text' value="Yes,please">

                        </div>
                        <div class="option" data-target="artist-lipbrushing-no">
                            <input class="consultation3" type='text' value="No thanks.I know what I want">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="artist-lipbrushing-yes">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect7" type='text' value="Any available">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect7" type='text' value="Ming Ng">

                        </div>
                        <div class="option" data-target="final-consultation-service">
                            <input class="artistselect7" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="artist-lipbrushing-no">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an artist</h3>
                    <div class="field">
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect8" type='text' value="Any available">
                        </div>
                        <div class="option" data-target="final-procedure">

                            <input class="artistselect8" type='text' value="Ming Ng">
                        </div>
                        <div class="option" data-target="final-procedure">
                            <input class="artistselect8" type='text' value="Fatimah Francia">

                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="old-brow-tatto-correction">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">We will need to evaluate your brows to determine the best procedure for you.</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="img">Select image:</label>
                            <input type="file" id="img-consultation" name="imagefile" accept="image/*">
                            <label style="padding-top: 15px;" class="fs-subtitle-start" for="date-time-brows">Consultation (date and time):</label>
                            <input type="datetime-local" id="date-time-field" name="datetimeconsultation" required>
                            <p style=color:red>Please select the date first</p>


                            <input type="submit" name="consul-tation" value="Book appointment" id="Book-appointment-field" class="submit-button">
                        </div>

                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>

                <!-- Used For Different Categories-->
                <fieldset id="final-consultation-service">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Consultation (date and time):</label>

                            <input type="datetime-local" id="date-time-final-consultation-service" name="appointmentdate" required>

                            <p style=color:red>Please select the date first</p>

                            <input type="submit" name='appoint-ment' value="Book appointment" id="book-appoinment-service" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>
                <!--Used For Different Categories End-->

                <!-- Used For Different Categories-->
                <fieldset id="final-procedure">
                    <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Procedure (date and time):</label>
                            <input type="datetime-local" id="date-time-final-procedure" name="finalproceduredate" required>
                            <p style=color:red>Please select the date first</p>

                            <div class="image-preview">
                                <input id="img-consultation" type="file" name='imagefinalpro' accept="image/*" onchange="previewImage(event)" />
                                <img id="thumbnail" alt="">
                            </div>
                            <input type="submit" name='final-procedure' value="Book appointment" id="book-appointment-procedure" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                </fieldset>
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





        //third form session data
        $(document).ready(function() {
            $(".ming").click(function() {
                var ming = $(this).val();
                sessionStorage.setItem('step3', ming);

            });
        });


        $(document).ready(function() {
            $(".brows-ming").click(function() {
                var browsming = $(this).val();
                sessionStorage.setItem('brows-ming', browsming);


            });
        });


        $(document).ready(function() {
            $(".brows-ming2").click(function() {
                var browsming2 = $(this).val();
                sessionStorage.setItem('brows-ming2', browsming2);

            });
        });


        $(document).ready(function() {
            $(".artistselect1").click(function() {
                var artistselect1 = $(this).val();
                sessionStorage.setItem('artistselect1', artistselect1);

            });
        });


        $(document).ready(function() {
            $(".artistselect2").click(function() {
                var artistselect2 = $(this).val();
                sessionStorage.setItem('artistselect2', artistselect2);

            });
        });


        $(document).ready(function() {
            $(".artistselect3").click(function() {
                var artistselect3 = $(this).val();
                sessionStorage.setItem('artistselect3', artistselect3);

            });
        });


        $(document).ready(function() {
            $(".artistselect4").click(function() {
                var artistselect4 = $(this).val();
                sessionStorage.setItem('artistselect4', artistselect4);

            });
        });


        $(document).ready(function() {
            $(".artistselect5").click(function() {
                var artistselect5 = $(this).val();
                sessionStorage.setItem('artistselect5', artistselect5);

            });
        });


        $(document).ready(function() {
            $(".artistselect6").click(function() {
                var artistselect6 = $(this).val();
                sessionStorage.setItem('artistselect6', artistselect6);

            });
        });

        $(document).ready(function() {
            $(".artistselect7").click(function() {
                var artistselect7 = $(this).val();
                sessionStorage.setItem('artistselect7', artistselect7);

            });
        });


        $(document).ready(function() {
            $(".artistselect8").click(function() {
                var artistselect8 = $(this).val();
                sessionStorage.setItem('artistselect8', artistselect8);

            });
        });



        $(document).ready(function() {
            $(".lastprocedure").click(function() {
                var lastprocedure = $(this).val();
                sessionStorage.setItem('lastprocedure', lastprocedure);




            });
        });



        $(document).ready(function() {
            $(".consultation1").click(function() {
                var consultation1 = $(this).val();
                sessionStorage.setItem('consultation1', consultation1);

            });
        });



        $(document).ready(function() {
            $(".consultation2").click(function() {
                var consultation2 = $(this).val();
                sessionStorage.setItem('consultation2', consultation2);

            });
        });


        $(document).ready(function() {
            $(".consultation3").click(function() {
                var consultation3 = $(this).val();
                sessionStorage.setItem('consultation3', consultation3);

            });
        });




        //session destroy on back
        $(document).ready(function() {
            $(".arrow-back").click(function() {

                sessionStorage.clear();

                window.location = "http://localhost/testtheme/form-3";


            });
        });
    </script>

    </body>

    </html>

<?php


}

add_shortcode('form-3', 'multi_form_step3');




function multi_form_step4()
{   //multi step form 4
    $image = plugins_url('../images/arrow-back.png', __FILE__);
?>


    <body>
        <!-- MultiStep Form -->
        <div class="row">
            <div class="col-md-12 ">
                <form id="msform" method="post" action="http://localhost/testtheme/checkout" enctype="multipart/form-data" novalidate>
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
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
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                        <h3 class="fs-subtitle">We will need to evaluate your brows to determine the best procedure for you.</h3>
                        <div class="field">
                            <div class="data-picker">
                                <label class="fs-subtitle-start" for="img">Select image:</label>
                                <input type="file" id="img-consultation" name="imagefile" accept="image/*">
                                <label class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                                <input id="date-time-consultation" type="datetime-local" name="datetimeconsultation" required>
                                <p style=color:red>Please select the date first</p>

                                <input type="submit" name="consultation-final" value="Book appointment" id="Book-appointment-consultation" class="submit-button">
                            </div>

                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                    </fieldset>


                    <fieldset id="final-consultation">
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                        <h3 class="fs-subtitle">Select an appointment</h3>
                        <div class="field">
                            <div class="data-picker">
                                <label class="fs-subtitle-start" for="date-time-consultation">Consultation (date and time):</label>
                                <input type="datetime-local" id="date-time-final-consultation" name="appointmentdate">

                                <input type="submit" name="appointment-final" value="Book consultation session" id="book-consultation-session" class="submit-button">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                    </fieldset>

                    <fieldset id="final-procedure">
                        <img class="arrow-back" src="<?php echo $image; ?>" width="40px" height="40px">
                        <h3 class="fs-subtitle">Select an appointment</h3>
                        <div class="field">
                            <div class="data-picker">
                                <label class="fs-subtitle-start" for="date-time-procedure">Final Procedure (date and time):</label>
                                <input type="datetime-local" id="date-time-final-procedure" name="finalproceduredate" required>
                                <p style=color:red>Please select the date first</p>

                                <div class="image-preview">
                                    <input id="img-consultation" type="file" name="imagefinalpro" accept="image/*" onchange="previewImage(event)" />
                                    <img id="thumbnail" alt="">
                                </div>
                                <input type="submit" name="finalprocedure-final" value="Book appointment" id="book-appointment-procedure" class="submit-button">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

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

            
            
            
            
            $(document).ready(function() {
                $(".ming").click(function() {
                    var ming = $(this).val();
                    sessionStorage.setItem('step4', ming);

                });
            });


            $(document).ready(function() {
                $(".browstreat").click(function() {
                    var browstreat = $(this).val();
                    sessionStorage.setItem('browstreat', browstreat);

                });
            });


            $(document).ready(function() {
                $(".browstreat2").click(function() {
                    var browstreat2 = $(this).val();
                    sessionStorage.setItem('browstreat2', browstreat2);

                });
            });



            $(document).ready(function() {
                $(".consultation").click(function() {
                    var consultation = $(this).val();
                    sessionStorage.setItem('consultation', consultation);

                });
            });


            $(document).ready(function() {
                $(".consultation2").click(function() {
                    var consultation2 = $(this).val();
                    sessionStorage.setItem('consultation2', consultation2);

                });
            });


            $(document).ready(function() {
                $(".consultation3").click(function() {
                    var consultation3 = $(this).val();
                    sessionStorage.setItem('consultation3', consultation3);

                });
            });



            $(document).ready(function() {
                $(".consultation4").click(function() {
                    var consultation4 = $(this).val();
                    sessionStorage.setItem('consultation4', consultation4);

                });
            });


            $(document).ready(function() {
                $(".lastprocedure").click(function() {
                    var lastprocedure = $(this).val();
                    sessionStorage.setItem('lastprocedure', lastprocedure);

                });
            });


            $(document).ready(function() {
                $(".lastprocedure2").click(function() {
                    var lastprocedure2 = $(this).val();
                    sessionStorage.setItem('lastprocedure2', lastprocedure2);

                });
            });



            $(document).ready(function() {
                $(".artistselect1").click(function() {
                    var artistselect1 = $(this).val();
                    sessionStorage.setItem('artistselect1', artistselect1);

                });
            });

            $(document).ready(function() {
                $(".artistselect2").click(function() {
                    var artistselect2 = $(this).val();
                    sessionStorage.setItem('artistselect2', artistselect2);

                });
            });



            $(document).ready(function() {
                $(".artistselect3").click(function() {
                    var artistselect3 = $(this).val();
                    sessionStorage.setItem('artistselect3', artistselect3);

                });
            });



            $(document).ready(function() {
                $(".artistselect4").click(function() {
                    var artistselect4 = $(this).val();
                    sessionStorage.setItem('artistselect4', artistselect4);

                });
            });



            $(document).ready(function() {
                $(".artistselect5").click(function() {
                    var artistselect5 = $(this).val();
                    sessionStorage.setItem('artistselect5', artistselect5);

                });
            });



            $(document).ready(function() {
                $(".servicesbrows").click(function() {
                    var servicesbrows = $(this).val();
                    sessionStorage.setItem('servicesbrows', servicesbrows);

                });
            });


            $(document).ready(function() {
                $(".lipsming").click(function() {
                    var lipsming = $(this).val();
                    sessionStorage.setItem('lipsming', lipsming);

                });
            });



            $(document).ready(function() {
                $(".brows-ming").click(function() {
                    var browsming = $(this).val();
                    sessionStorage.setItem('browsming', browsming);

                });
            });





            //session destroy on back
            $(document).ready(function() {
                $(".arrow-back").click(function() {

                    sessionStorage.clear();

                    window.location = "http://localhost/testtheme/form-4";


                });
            });
        </script>


    </body>

    </html>




<?php
}


add_shortcode('form-4', 'multi_form_step4');
