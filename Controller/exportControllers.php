<?php
use League\Csv\Writer;
use Dompdf\Dompdf;

function csvAction() {
	$resultats = getAllContacts(); 
	$csv = Writer::createFromFileObject(new SplTempFileObject());
	$csv->setDelimiter(';');
	$csv->insertOne(['id', 'prenom', 'nom', 'age']);
	$csv->insertAll($resultats);

	$csv->output('users.csv');
	die;
}

function pdfAction() {
	
	$contacts = getAllContacts();
	$dompdf = new Dompdf();
	ob_start(); ?>
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
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$dompdf->stream();
}