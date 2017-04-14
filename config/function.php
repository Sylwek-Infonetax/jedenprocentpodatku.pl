<?php

//Left navigation
function navigation() {
	if ($_GET['p']=='dla_opp') {
		echo '<a href="index.php?p=dla_opp" title="Dla OPP">Dla OPP</a>';
		if ($_GET['a']=='opp' || !$_GET['a']) {echo '<span style="color: #666666;">Czym jest OPP ?</span>';}
		if ($_GET['a']=='status') {echo '<span style="color: #666666;">Uzyskanie statusu OPP</span>';}
		if ($_GET['a']=='obowiazki') {echo '<span style="color: #666666;">Obowiązki OPP</span>';}
		if ($_GET['a']=='przywileje') {echo '<span style="color: #666666;">Przywileje OPP</span>';}
		if ($_GET['a']=='utrata') {echo '<span style="color: #666666;">Utrata statusu OPP</span>';}
		if ($_GET['a']=='sprawozdawcze') {echo '<span style="color: #666666;">Obowiązki sprawozdawcze OPP</span>';}
		if ($_GET['a']=='nadzor') {echo '<span style="color: #666666;">Nadzór ministra nad OPP</span>';}
	}
}

?>