<?php
function getEgenskapstyper($id) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://nvdbapiles-v3.atlas.vegvesen.no/vegobjekttyper/$id");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Client:php_test'));
    $result = curl_exec($ch);
    curl_close($ch);
    
    $result = json_decode($result);
    $result = array_map(function($val) {return $val->navn;}, $result->egenskapstyper);
    

    return $result;
};
?>

