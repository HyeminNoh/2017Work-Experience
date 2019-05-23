<?
$filename = "2017HoneywellCatalogue.pdf";
$reail_filename = urldecode("2017HoneywellCatalogue.pdf");
$file_dir = "./Catalogue/2017HoneywellCatalogue.pdf";

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

?>
