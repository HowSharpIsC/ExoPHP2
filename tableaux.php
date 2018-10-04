<?php

$tab = array();
$compteur = 0;
//$compteurTotal = 0;

for($i = 0; $i < 100; $i++)
{
    $tab[] = rand(0,100);
}

for($i = 0; $i <= 100; $i++)
{
    $compteur = 0;

    for($j = 0; $j < 100; $j++)
    {
        if($i == $tab[$j])
        {
            $compteur++;
        }
    }

    //$compteurTotal += $compteur;

    echo "La valeur " . $i . " est présente " . $compteur . " fois.";
    echo "<br>";
}

//echo $compteurTotal;

?>