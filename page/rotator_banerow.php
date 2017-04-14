<!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
		
<?php
define("ADRES_SERWERA", "http://www.opp.aid.pl");

function db_lacz_polecane_opp () {

	//Zmienne:
	$db_host = '91.198.137.39';
	$db_user = 'kkf_user';
	$db_password = 'h:6Xc{RGV(x3};aYxkE>';
	$db_select = 'kkf_database';
	
 	$db = mysql_pconnect("$db_host", "$db_user", "$db_password");
	if ($db) {
		mysql_select_db("$db_select") or die ("Nie znaleziono bazy danych");
		mysql_query("SET NAMES utf8");
		return $db;
		}
	else {
		echo 'Problem z pobraniem polecanych OPP';
	}
}

function slides_polecane_opp() {
		
		$polaczenie_polecane_opp  = db_lacz_polecane_opp();
		$zapytanie = "SELECT * FROM wspierane_opp ORDER BY RAND()";
		$wynik = mysql_query ($zapytanie, $polaczenie_polecane_opp);
		$opp = '';
		if (mysql_num_rows($wynik)>0) {
		$opp = '
		<div class="slider-container">
			<ul id="slider">';
		while ($wiersz = mysql_fetch_array($wynik)) {
		$opp .= '
				<li style="background: none; padding: 0 0 0 1px;">
					<a href="'.$wiersz['url'].'" target="_blank" style="border: none;" title="'.$wiersz['nazwa'].', KRS: '.$wiersz['krs'].'">
						<img src="'.ADRES_SERWERA.'/wspierane_opp/'.$wiersz['id_wspierane_opp'].'.'.$wiersz['plik_ext'].'" width="230" height="120" alt="'.$wiersz['nazwa'].', KRS: '.$wiersz['krs'].'" />
					</a>
				</li>';
		}
		$opp .= '
			</ul>				
		</div>';
		
		}
echo $opp;
}
?>