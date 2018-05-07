<?php
$happinessVal = $_GET['happinessVal'];
$tiredVal = $_GET['tiredVal'];
$fearlessVal = $_GET['fearlessVal'];
$calmnessVal = $_GET['calmnessVal'];

//defining mood based on slider value

$happinessVal = ($happinessVal < 25) ? 'happy' : 'sad';
$tiredVal = ($tiredVal > 25) ? 'awake' : 'tired';
$fearlessVal = ($fearlessVal > 25) ? 'fearless' : 'scared';
$calmnessVal = ($calmnessVal > 25) ? 'calm' : 'agitated';

//displaying programmes as cards

$numOfCols = 5;
$bootstrapColWidth = 12 / $numOfCols;
$i = 0;

?>
<div class="row">
    <?php

    $xmlProgrammes = simplexml_load_file('uploads/programmes.xml', 'SimpleXMLElement', LIBXML_NOWARNING)
    or die ('<div class="container"><img src="images/minion.jpg"><br><p>Remember to upload the file</p><A HREF="javascript:history.go(0)">Click to refresh the page</A>
</div>');

    foreach ($xmlProgrammes->children() as $programme) {
        if ((strcmp($happinessVal, $programme->mood) == 0) || (strcmp($tiredVal, $programme->mood) == 0) ||
            (strcmp($fearlessVal, $programme->mood) == 0) || (strcmp($calmnessVal, $programme->mood)) == 0) {
    ?>
    <div class="col-md-<?php echo $bootstrapColWidth; ?>">
        <div class="card">
            <img src="<?php echo $programme->img_path; ?>">
            <h5><?php echo $programme->name; ?></h5>
        </div>
    </div>
     <?php
       $i++;
        if ($i >= 5) {
            break;
}
}
}
?>