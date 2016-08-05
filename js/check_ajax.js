$(document).ready(function() {

	$('#feedback-valid-1').validate({
		rules:{
			"texta":{required:true}
		},
		messages:{
			"texta":{required:""}
		},
		submitHandler: function(form){
			$(form).ajaxSubmit({
				success: function(data) {
					if (data == "true")
					{
						$(':input','#feedback-valid-1')
						.not(':button, :submit, :reset, :hidden')
						.val('')
						.removeAttr('checked')
						.removeAttr('selected');
						 window.location.href = "thx1.html";
							// $.fancybox.close()
							// var message = $('.modal');
							// $.fancybox(message);

						}
					}  
				}); 
		}
	});

});
