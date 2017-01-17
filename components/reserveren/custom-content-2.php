<?php
$jaar = date('Y');
$maandNr = date('m');
$maandNaam = date('F');
$dag = date('j');

$dagenInMaand = cal_days_in_month(CAL_GREGORIAN, $maandNr, $jaar);

echo <<<'MONTH'

<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
MONTH;
echo $maandNaam;
echo <<<'SPANSTART'
<br>
            <span style="font-size:18px">
SPANSTART;
 echo $jaar; echo <<<'SPANEND'
</span>
        </li>
    </ul>
</div>
SPANEND;



echo '<ul class="days">';
for($i = 1; $i < $dagenInMaand + 1; $i++) {
    if ($dag != $i) {
        echo '<li>';
        echo $i;
        echo '</li>';
    } else {
        echo '<li><span class="active">';
        echo $i;
        echo '</span></li>';
    };
}
    echo '</ul>';
?>