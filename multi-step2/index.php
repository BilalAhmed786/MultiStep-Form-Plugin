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

    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-12 ">
            <form id="msform" method="post" action='checkout.php' enctype="multipart/form-data">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!-- Used For Different Categories-->
                <fieldset id="final-consultation-service">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
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
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!--Used For Different Categories End-->

                <!-- Used For Different Categories-->
                <fieldset id="final-procedure">
                    <img class="arrow-back" src="arrow-back.png" width="40px" height="40px">
                    <h3 class="fs-subtitle">Select an appointment</h3>
                    <div class="field">
                        <div class="data-picker">
                            <label class="fs-subtitle-start" for="date-time-procedure">Final Procedure (date and time):</label>
                            <input id="date-time-final-procedure" type="datetime-local" name="finalproceduredate" required>
                            <p style=color:red>Please select the date first</p> 
                            
                            <div class="image-preview">

                                <input id="img-consultation" type="file" name='imagefinalpro' accept="image/*  onchange=" previewImage(event)" />

                            </div>
                            <input type="submit" name='finalprocedure' value="Book appointment" id="book-appointment-procedure" class="submit-button">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
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
    </script>


    <script src='sessionsdata.js'></script>
</body>

</html>