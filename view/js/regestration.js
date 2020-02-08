$("#registration-block").on("click", function(){
	$('#registration').slideToggle('medium', function(){
		if($(this).is(':visible'))
			$(this).css("display", 'block');
		});	;
});
$("#authorization-block").on("click", function(){
	$('#authorization').slideToggle('medium', function(){
		if($(this).is(':visible'))
			$(this).css("display", 'block');
		});	
});
$("#button-registration").on("click", function(){
	var params={};	
	params['registration_email']=$("#registration-email").val();
	params['registration_password']=$("#registration-password").val();
	params['registration_password2']=$("#registration-password2").val();
	//if(params['registration-block'] = params['registration-block2']){
	data='params=' + encodeURIComponent(JSON.stringify(params));//Зашифровать данные

	$.ajax({
        url: '?controller=registration&method=check_for_mail',
		data:data,
		type: 'POST',	
		success: function(data) {
			alert(data)		
			arr=$.parseJSON(data);//розшифровка данных
			alert(arr['message']);			
			console.log(arr);

		}	
	});	
/* 	}else{
		alert('Пароли не совпадают');
	} */
});
	$('#authorization-button').on('click', function(){
		var params={};
		params['authorization_email'] = $("#authorization_email").val();
		params['authorization_password'] = $("#authorization_password").val();
		data='params=' + encodeURIComponent(JSON.stringify(params));
		$.ajax({
			url: "?controller=authorization&method=authorization_user",
			data: data,
			type: 'POST',
			success: function(data){
			arr=$.parseJSON(data);//розшифровка данных возвращает массив
			alert(arr['message']);			
			console.log(arr);
			}
		});
	});
