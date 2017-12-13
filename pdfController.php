<?php

	use Dompdf\Dompdf;
	
	include('vendor/autoload.php');
	include("model/model.php");

	$contacts = getAllContacts();
// reference the Dompdf namespace
	
	
// instantiate and use the dompdf class
	$dompdf = new Dompdf();

	ob_start();
?>

<h1>Employé du mois </h1>
<strong>vincent bonnier</strong><br/>

<h1> Les autres employé.e.s</h1>
<ul>
	<?php foreach($contacts as $contact) { ?>
		<li>
			<?=$contact['prenom']?> <?=$contact['nom']?> (<?=$contact['age']?>)
		</li>
	<?php } ?>
</ul>
<?php 
	$content=ob_get_clean();

	$dompdf->loadHtml($content);

// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
	$dompdf->render();

// Output the generated PDF to Browse	
	$dompdf->stream();
		

