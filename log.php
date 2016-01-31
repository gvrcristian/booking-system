<script type="text/javascript" src="js/jquery.1.4.min.js"></script><script>
$(function(){
				$('a.log-reg').click(function()
				{
					$.get('p.php?p=' + $(this).attr('discount'), function(data)
					{
						$('.result').html(data);
					});
				});
			});
</script><?php
					if($ban >= 3)
					{
						echo "<div class='canlog'>Ne pare rau dar ati primit ban deoarece ati gresit email-ul/parola de 3 ori. Timp de 10 minute nu va mai puteti autentifica.</div>";
					} else {
					?>
					<span class="result"></span>
						<div class="login"><a discount="login" class="log-reg">Login</a></div>
						<div class="register"><a discount="register" class="log-reg">Register</a></div>
				<?php
					}
				?>