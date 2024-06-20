<?php
require './getEgenskapstypenavn.php';
$result = getEgenskapstyper(37);
?>
<script>
    console.log(<?= json_encode($result); ?>);
</script>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h2>NVDB Gimmick</h2>
            <h3>Finn VT fra ET</h3>
        </header>
        <section>
            Egenskapstyper her:
            Her:
            <p> <?php foreach($result as $key => $value) {echo $value . "<br>";} ?> </p>
        </section>
        <footer>
            Diverse
        </footer>
    </body>
</html>