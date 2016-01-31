<?php
    header("Content-type: text/javascript");

echo '<script>$(document).ready(function() {
	$("#search_input").watermark("Nume");
	$("#search_price").watermark("Pret");
	$(".right input[type=text]").keyup(function(){
		var search_input = $("#search_input").val();
		var search_price = $("#search_price").val();
		var dataString = {keyword: search_input, price: search_price};

			if ($("#searchresultdata").length ==0 ) {
				$(\'<div id="searchresultdata" class="srch-results"></div>\').appendTo(".srch-content");
			}
			//AJAX POST
			$.ajax({
				type: "POST",
				url: "ajax-search.php",
				data: dataString,
				beforeSend: function() {
					$("input#search_input").addClass("loading");
					$("input#search_price").addClass("loading");
				},
				success: function(response){
					$("#searchresultdata").html(response).show();
					if ($("input#search_input").hasClass("loading")) {
						$("input#search_input").removeClass("loading");
					}
					if ($("input#search_price").hasClass("loading")) {
						$("input#search_price").removeClass("loading");
					}
				}
			});
	});
});</script>';
?>