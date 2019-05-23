<?
$filename = "Matrikon_Industrial_Connectivity_Experts.pdf";
$reail_filename = urldecode("Matrikon_Industrial_Connectivity_Experts.pdf");
$file_dir = "./Catalogue/Matrikon_Industrial_Connectivity_Experts.pdf";

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

?>
