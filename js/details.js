$(document).ready(function()
{
	$('#aname').focus();
	$('#detailscg').click(function()
	{
		var aname = $('#aname');
		var lang = $('#lang');
		var det_result = $('.det_result');
		login_result.html('');

			var UrlToPass = 'action=details&aname='+aname.val()+'&lang='+lang.val();
			$.ajax({
				type : 'POST',
				data : UrlToPass,
				url  : 'includes/details.php',
				success: function(responseText)
				{
					if(responseText == 1)
					{
						aname.focus();
						aname.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//login_result.html("<span class='error'>Field 'Email' must be completed!</span>");
						$("#aname").attr("placeholder", "Field 'Email' must be completed!");
					} else if(responseText == 2)
					{
						lang.focus();
						lang.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						//login_result.html("<span class='error'>Sorry, but this email address it's invalid!</span>");
						$("#lang").attr("placeholder", "Sorry, but this email address it's invalid!");
					} else if(responseText == 3)
					{
						//login_result.html('<span class="error">Username or Password Incorrect!</span>');
						aname.focus();
						aname.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
						$("#aname").attr("placeholder", "Username or Password Incorrect!");
						$("#lang").attr("placeholder", "Username or Password Incorrect!");
						lang.focus();
						lang.css({"border":"2px solid red","box-shadow":"0 0 3px red"});
					} else if(responseText == 4)
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