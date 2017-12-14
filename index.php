<?php
// index.php
//Load and initialyz a y global libraries
include ('vendor/autoload.php');
require_once 'model/model.php';
require_once 'controller/contactControllers.php';
require_once 'controller/exportControllers.php';
//route the request internally
//http://localhost:4242/entite/index.php
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//die($uri)

//ROUTINGGGGGG

if('/entite/index.php'==$uri) {
	listContactAction();
} else if('/index.php/detail'==$uri&&isset($_GET['id'])) {
	showContactAction($GET['id']);
}  else if('/entite/index.php/csv'==$uri) {
	csvAction();
} else if('/entite/index.php/pdf'==$uri) {
	pdfAction();
} else {
	header('Status: 404 Not Found');
	?><html><body><h1>Page Not Found</h1></body>
	</html><?php
}
?>


