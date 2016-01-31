$(document).ready(function(){
$("#search_query").watermark("Cauta dupa tara, judet, oras, nume");
$("#search_query2").watermark("Cauta dupa pret (doar EURO)");
$("#search_results").slideUp();
$("#left2").hide();
$("#button_find").click(function(event){
event.preventDefault();
search_ajax_way();
});
$("#search_query").keyup(function(event){

event.preventDefault();
search_ajax_way();
});
$("#search_query2").keyup(function(event){
event.preventDefault();
search_ajax_way();
});
});



function search_ajax_way(){
$("#search_results").show();
$("#left2").show();
var search_this=$("#search_query").val();
var search_this2=$("#search_query2").val();
$.post("search2.php", {searchit : search_this, price : search_this2}, function(data){
$("#display_results").html(data);
if(data == '') $("#left2").hide();
})
}