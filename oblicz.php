<?php

function wypisz_dzień_tygodnia($data)
{
    $dzien = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
    echo $dzien[date("w", mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data["rok"]))];
}

function oblicz_dni($data)
{
    $czas = (time() - mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok'])) /60/60/24;
    return $czas;
}

$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

echo wypisz_dzień_tygodnia($data)." "."to dzień Twoich urodzin"."."."\n";

echo "Od dnia Twoich urodziń upłynęło"." ".round(oblicz_dni($data))." "."godzin/y".".";

?>