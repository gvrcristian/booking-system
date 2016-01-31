$(document).ready(function()
{
	$('#name').focus();
	$('#register').click(function()
	{
		var name= $("#name");
		var email = $('#email');
		var password = $('#password');
		var rpassword = $('#rpassword');
		var lang = $("#lang");
		var register_result = $('.register_result');
		register_result.html('loading..');

			var UrlToPass = 'action=register&name='+name.val()+'&email='+email.val()+'&password='+password.val()+'&rpassword='+rpassword.val()+'&lang='+lang.val();
			$.ajax({
				type : 'POST',
				data : UrlToPass,
				url  : 'includes/register.php',
				success: function(responseText)
				{
					if(responseText == 2)
					{
						name.focus();
						name.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Field 'Name' must be completed!</span>");
						$("#name").attr("placeholder", "Field 'Name' must be completed!");
					} else if(responseText == 3)
					{
						name.focus();
						name.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>This name aleardy exist in our database!</span>");
						$("#email").attr("placeholder", "This name aleardy exist in our database!");
					} else if(responseText == 4)
					{
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Field 'Email' must be completed!");
						$("#email").attr("placeholder", "Field 'Email' must be completed!");
					} else if(responseText == 5)
					{
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Sorry, but this email address it's invalid!</span>");
						$("#email").attr("placeholder", "Sorry, but this email address it's invalid!");
					} else if(responseText == 6)
					{
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>This email aleardy exist in our database!</span>");
						$("#email").attr("placeholder", "This email aleardy exist in our database!");
					} else if(responseText == 7)
					{
						password.focus();
						password.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Field 'Password' must be completed!</span>");
						$("#password").attr("placeholder", "Field 'Password' must be completed!");
					} else if(responseText == 8)
					{
						rpassword.focus();
						rpassword.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Field 'Repeat password' must be completed!</span>");
						$("#rpassword").attr("placeholder", "Field 'Repeat password' must be completed!");
					} else if(responseText == 9)
					{
						password.focus();
						rpassword.focus();
						password.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						rpassword.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//register_result.html("<span class='error'>Sorry, but the passwords doesn't match!</span>");
						$("#password").attr("placeholder", "Sorry, but the passwords doesn't match!");
						$("#rpassword").attr("placeholder", "Sorry, but the passwords doesn't match!");
					} else if(responseText == 1)
					{
						//register_result.html("Te-ai inregistrat cu succes!");
						$("#name").attr("placeholder", "Te-ai inregistrat cu succes!");
						$("#email").attr("placeholder", "Te-ai inregistrat cu succes!");
						$("#password").attr("placeholder", "Te-ai inregistrat cu succes!");
						$("#rpassword").attr("placeholder", "Te-ai inregistrat cu succes!");
					} else {
						alert('Problem with sql query');
					}
				}
			});
		return false;
	});
});