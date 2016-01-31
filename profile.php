<?php
include('templates/boca/header_p.php');


if(check_login())
{
		echo "<div class='result2'>";
		?>
<div class="cent">
<div class="ntitle">
<div class="nt">
<span class="title">Idei meniu</span>
</div></div>
<div class="ntext">
Profile - Informatii despre profil/hotel<br />
Ce mai e de facut: - Cristi<br />
-galerie aici trebuie ceva mai complex sa fie si usor de editat da cred ca gasim pe net usor<br />
-wirte post trebuie sa ne gandim cum integram imaginile in posturi<br />
-booking aicea e o problema cum sa-l anunte pe administrator ca are o comanda noua<br />
-camerele si aici e ceva de lucrat<br />
-pe prima pagina am putea face o sectiune de review cu hoteluri asa putem sa ne scoatem parleala mai repede sa ne cheme bajetii sa le facem review-uri:))<br />
</div>
</div>
<?php
		pnews(2);
		echo "</div>";

} else {
?>
<div class="cent">
	<div class="ntext">
		<?=LOGIN_ERROR;?>
	</div>
</div>
<?php
}
include('templates/boca/footer_p.php');

?>