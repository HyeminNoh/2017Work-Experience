<?
$filename = "your_catalogue1.pdf";
$reail_filename = urldecode("your_catalogue1.pdf");
$file_dir = "./Catalogue/your_catalogue1.pdf";

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

?>
