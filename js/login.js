$(document).ready(function()
{
	$('#email').focus();
	$('#login').click(function()
	{
		var email = $('#email');
		var password = $('#password');
		var login_result = $('.login_result');
		login_result.html('');

			var UrlToPass = 'action=login&email='+email.val()+'&password='+password.val();
			$.ajax({
				type : 'POST',
				data : UrlToPass,
				url  : 'includes/login.php',
				success: function(responseText)
				{
					if(responseText == 2)
					{
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//login_result.html("<span class='error'>Field 'Email' must be completed!</span>");
						$("#email").attr("placeholder", "Field 'Email' must be completed!");
					} else if(responseText == 3)
					{
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//login_result.html("<span class='error'>Sorry, but this email address it's invalid!</span>");
						$("#email").attr("placeholder", "Sorry, but this email address it's invalid!");
					} else if(responseText == 4)
					{
						password.focus();
						password.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//login_result.html("<span class='error'>Field 'Password' must be completed!");
						$("#password").attr("placeholder", "Field 'Password' must be completed!");
					} else if(responseText == 11)
					{
						window.location = 'index.php';
					} else if(responseText == 0)
					{
						//login_result.html('<span class="error">Username or Password Incorrect!</span>');
						email.focus();
						email.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						$("#email").attr("placeholder", "Username or Password Incorrect!");
						$("#password").attr("placeholder", "Username or Password Incorrect!");
						password.focus();
						password.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
					} else if(responseText == 1)
					{
						window.location = 'profile.php';
					} else {
						alert('Problem with sql query');
					}
				}
			});
		return false;
	});
});