<?php
require './getEgenskapstypenavn.php';

$vegobjekttyper_array = array();
$vegobjekttyper = fopen("vegobjekttyper.txt", "r");
while ($line = fgets($vegobjekttyper)) {
    $line = preg_replace('~[\r\n]+~', '', $line);
    $elements = explode(" ", $line);
    $vegobjekttyper_array[$elements[0]] = $elements[1];
};
fclose($vegobjekttyper);

$random_id = array_rand($vegobjekttyper_array, 1);
$result = getEgenskapstyper($random_id);
?>
<script>
    console.log(<?= json_encode($vegobjekttyper_array); ?>);
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
            <div>
                Egenskapstyper her:
                Her:
                <p> <?php foreach($result as $key => $value) {echo $value . "<br>";} ?> </p>
            </div>
            <div>
                <select name="vegobjekttype"><option selected value="">Velg vegobjekttype</option>
                <?php
                foreach ($vegobjekttyper_array as $key => $value) {echo '<option value="'.$key.'">'.$key." - ".$value.'</option>';}
                ?>
                </select>
            </div>
        </section>
        <footer>
            Diverse
        </footer>
    </body>
</html>