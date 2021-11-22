<?php 
if (isset($_POST["obr"])) {
	echo join(array_unique(preg_split("//u", $_POST["prhase"])));
}
	


// подсчет символов
if (isset($_POST["secondButton"])) {
	$mass = str_split($_POST["prhase2"]);
	$firstSymbol = $_POST["firstSymbol"];
	$secondSymbol = $_POST["secondSymbol"];
	$sumFirst = 0;
	$sumSecond = 0;
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $firstSymbol) {
			$sumFirst++;
		}
	}
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $secondSymbol) {
			$sumSecond++;
		}
	}

	echo "Количество символа". $firstSymbol . " = " . $sumFirst . "<br> Количество символа ". $secondSymbol . " = " . $sumSecond ;
}

if (isset($_POST["thirdButton"])) {
	$mass = str_split($_POST["prhase3"]);
	$CountUpp = 0;
	$CountDown = 0;
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] === strtoupper($mass[$i])) {
			$CountUpp++;
		} else {
			$CountDown++;
		}
	}
	if ($CountUpp > $CountDown) {
		echo mb_strtoupper($_POST["prhase3"]);
	} elseif ($CountUpp < $CountDown) {
		echo mb_strtolower($_POST["prhase3"]);
	} else {
		echo $_POST["prhase3"];
	}
}

	
 ?>