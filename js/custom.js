 
jQuery(document).ready(function($) {
    $('#msform').validate({
rules:{datetimeconsultation:'required',
	   appointmentdate:'required',
	   finalproceduredate:'required',
	   imagefile:{
            required: true,
            extension: "jpg|jpeg|png|ico|bmp"
        },
	   imagefinalpro:{
		    required: true,
            extension: "jpg|jpeg|png|ico|bmp"
		   
	   },   
	  },
	  messages: {
       	imagefile: {
            required: "Please upload file.",
            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."
        },
			imagefinalpro: {
            required: "Please upload file.",
            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."
        },  
	  }
    });
 });