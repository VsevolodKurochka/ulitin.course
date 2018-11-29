$(document).ready(function(){
	$('#landing-form-1').submit(function(e){
		//e.preventDefault();
		var form = $(this);
		var phoneVal = form.find('#phone').val();

		var custom_mobile_phone = "input[name='custom_mobile_phone']";
		var custom_mobile_phone_value = phoneVal.replace(' ', '');
		custom_mobile_phone_value = custom_mobile_phone_value.replace('-', '');
		custom_mobile_phone_value = custom_mobile_phone_value.replace('(', '');
		custom_mobile_phone_value = custom_mobile_phone_value.replace(')', '');
		custom_mobile_phone_value = custom_mobile_phone_value.replace('-', '');
		custom_mobile_phone_value = custom_mobile_phone_value.replace(' ', '');
	});
});