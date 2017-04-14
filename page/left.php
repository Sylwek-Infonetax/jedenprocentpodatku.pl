<?php
if ($p=='dla_opp') {
	include('left_dla_opp.php');
}
elseif ($p=='jeden_procent') {
	include('left_1_procent.php');
}
elseif ($p=='faq') {
	include('left_faq.php');
}
elseif ($p=='statystyki') {
	include('left_statystyki.php');
}
elseif ($p=='kontakt') {
	include('left_kontakt.php');
}
else {
include('left_dla_opp.php');
}
?>