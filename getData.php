<?php
echo "<h1> My name is Dank</h1>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://nvdbapiles-v3.atlas.vegvesen.no/vegobjekttyper/37");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Client:php_test'));
$result = curl_exec($ch);

print_r($result);
curl_close($ch);
?>