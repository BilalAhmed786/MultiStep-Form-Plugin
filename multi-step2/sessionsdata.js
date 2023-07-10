//second form session data
$(document).ready(function(){
    $(".ming").click(function(){
        var ming = $(this).val();
        sessionStorage.setItem('step2',ming);

       });
});






$(document).ready(function(){
    $(".brows").click(function(){
        var brows = $(this).val();
        sessionStorage.setItem('sstep2b',brows);

       });
});






$(document).ready(function(){
    $(".browstreat").click(function(){
        var browstreat = $(this).val();
        sessionStorage.setItem('borwstreat',browstreat);
        

       });
});



$(document).ready(function(){
    $(".service").click(function(){
        var services = $(this).val();
        sessionStorage.setItem('service',services);

       });
});



$(document).ready(function(){
    $(".consultation").click(function(){
        var consultation = $(this).val();
        sessionStorage.setItem('consultation',consultation);
        

       });
});




$(document).ready(function(){
    $(".lastprocedure").click(function(){
        var lastprocedure = $(this).val();
        sessionStorage.setItem('lastprocedure',lastprocedure);

       });
});





//session destroy on back
$(document).ready(function(){
    $(".arrow-back").click(function(){
     
    sessionStorage.clear();

    window.location = "http://localhost/testtheme/form-2";


    });
  });
