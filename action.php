<?php

// Variablen fuer POST-Request
$url = 'https://norse-tribes.de/kampf';

// aktuellen Wert auf Formulardaten setzen
$att_s = (int)$_POST['att_s'];
$att_v = (int)$_POST['att_v'];
$att_b = (int)$_POST['att_b'];

$def_s = (int)$_POST['def_s'];
$def_v = (int)$_POST['def_v'];
$def_b = (int)$_POST['def_b'];

$kampftick = (int)$_POST['kampfticks'];
$gens = (int)$_POST['gens'];

$attackingArmies = array(
  "s" => $att_s,
  "v" => $att_v,
  "b" => $att_b,
);

$defendingArmies = array(
  "s" => $def_s,
  "v" => $def_v,
  "b" => $def_b,
);
$values = array(
  "attackingArmies" => $attackingArmies,
  "defendingArmies" => $defendingArmies,
  "gens"  =>  $gens,
);

function sendValues($values, $url) {
  echo "DEBUG " . json_encode($values) . " DEBUG </br>";
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($values),
    )
  );

/*
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  if ($result === FALSE) { echo "wasletzteerror</br> Handle error </br>}
  var_dump($result);
  ...magic um die Werte im array zu ersetzen
*/
}

echo "Berechne " . $kampftick . " Kampfticks </br>";

for ($i = 1; $i <= $kampftick; $i++) {
  echo "Kampftick ". $i . "</br>";
  echo "</br>";
  sendValues($values);
  echo "</br>";
}
?>
