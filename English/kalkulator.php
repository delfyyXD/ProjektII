<?php 
include 'database.php';
if(isset($_POST['submit'])) {
    $odpoved1=$_POST['odpoved1'];
    $allodpoved1=implode(",",$odpoved1);
    $odpoved2=$_POST['odpoved2'];
    $allodpoved2=implode(",",$odpoved2);
    $odpoved3=$_POST['odpoved3'];
    $allodpoved3=implode(",",$odpoved3);
    $odpoved4=$_POST['odpoved4'];
    $allodpoved4=implode(",",$odpoved4);
    $odpoved5=$_POST['odpoved5'];
    $allodpoved5=implode(",",$odpoved5);
    $odpoved6=$_POST['odpoved6'];
    $allodpoved6=implode(",",$odpoved6);
    $odpoved7=$_POST['odpoved7'];
    $allodpoved7=implode(",",$odpoved7);
    //$email=$_POST['email1'];

    $sql="insert into `tabulkaws` (otazka1,otazka2,otazka3,otazka4,otazka5,otazka6,otazka7,) values ('$allodpoved1','$allodpoved2','$allodpoved3',
    '$allodpoved4','$allodpoved5','$allodpoved6','$allodpoved7')";

    $result=mysqli_query($dab,$sql);
    if($result){
        //echo 'Data odeslana';
    } else{
        die(mysqli_error($dab));
    }
}
/*
 * Plugin Name:       Kalkulator pro vyhodnoceni Willimsova syndromu
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Calculator</title>
</head>
<body>
<header>
            <div class="container">
                <h1>Calculator for evaluating Williams syndrome</h1>
            </div>
        </header>
    <main>
        <!--<div class="cislo_otazky">1/7</div>-->
        <p class="otazka"><h2>1.Growth (previously or currently)</h2></p>
        <form method="post" action="vyhodnoceni.php">
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved1[]" value="1"/>Postterm birth > 41 weeks of pregnancy</li>
                <li><input type="checkbox" name="odpoved1[]" value="2"/>Failure to thrive/height and weight < 5th percentile</li>
                <li><input type="checkbox" name="odpoved1[]" value="3"/>Vomiting or gastroesophageal reflux</li>
                <li><input type="checkbox" name="odpoved1[]" value="4"/>Long-term colic, irritability > 4 months</li>
                <li><input type="checkbox" name="odpoved1[]" value="5"/>Chronic constipation</li>
            </ul>

            <!--<div class="cislo_otazky">2/7</div>-->
        <p class="otazka"><h2>2.Behavior and development</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved2[]" value="1"/>Too friendly personality</li>
                <li><input type="checkbox" name="odpoved2[]" value="2"/>Hypersensitivity to sounds</li>
                <li><input type="checkbox" name="odpoved2[]" value="3"/>Anxiety</li>
                <li><input type="checkbox" name="odpoved2[]" value="4"/>Developmental delay or mental retardation</li>
                <li><input type="checkbox" name="odpoved2[]" value="5"/>Visual spatial problems</li>
                <li><input type="checkbox" name="odpoved2[]" value="6"/>Delayed acquisition of speech, followed by verbosity</li>
            </ul>

            <!--<div class="cislo_otazky">3/7</div>-->
        <p class="otazka"><h2>3.Facial features</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved3[]" value="1"/>Bitemporal Dimension Narrowing</li>
                <li><input type="checkbox" name="odpoved3[]" value="2"/>Epicanthal folds or flat root of the nose </li>
                <li><input type="checkbox" name="odpoved3[]" value="3"/>Strabismus (current or past) </li>
                <li><input type="checkbox" name="odpoved3[]" value="4"/>Short nose or anteversion of the nostrils</li>
                <li><input type="checkbox" name="odpoved3[]" value="5"/>Full faces</li>
                <li><input type="checkbox" name="odpoved3[]" value="6"/>Long philtrum</li>
                <li><input type="checkbox" name="odpoved3[]" value="7"/>Small, widely spaced teeth</li>
                <li><input type="checkbox" name="odpoved3[]" value="8"/>Wide mouth</li>
                <li><input type="checkbox" name="odpoved3[]" value="9"/>Protruding earlobes</li>
                <li><input type="checkbox" name="odpoved3[]" value="10"/>Broad forehead</li>
                <li><input type="checkbox" name="odpoved3[]" value="11"/>Full periorbital area</li>
                <li><input type="checkbox" name="odpoved3[]" value="12"/>A star-shaped "lace" pattern on the iris</li>
                <li><input type="checkbox" name="odpoved3[]" value="13"/>A bulbous or full tip of the nose</li>
                <li><input type="checkbox" name="odpoved3[]" value="14"/>Malar hypoplasia (flat cheekbones)</li>
                <li><input type="checkbox" name="odpoved3[]" value="15"/>Full expressive lips</li>
                <li><input type="checkbox" name="odpoved3[]" value="16"/>Malocclusion</li>
                <li><input type="checkbox" name="odpoved3[]" value="17"/>Small jaw</li>
            </ul>

            <!--<div class="cislo_otazky">4/7</div>-->
        <p class="otazka"><h2>4.Cardiovascular problems (according to echocardiography) (a)</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved4[]" value="1"/>supravalvular aortic stenosis</li>
                <li><input type="checkbox" name="odpoved4[]" value="2"/>Peripheral stenosis of the pulmonary artery</li>
            </ul>

            <!--<div class="cislo_otazky">5/7</div>-->
        <p class="otazka"><h2>5.Cardiovascular problems (b)</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved5[]" value="1"/>Other congenital heart disease</li>
                <li><input type="checkbox" name="odpoved5[]" value="2"/>Heart murmur</li>
                <li><input type="checkbox" name="odpoved5[]" value="3"/>Hypertension</li>
            </ul>

            <!--<div class="cislo_otazky">6/7</div>-->
        <p class="otazka"><h2>6.Abnormalities of fibrous tissue</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved6[]" value="1"/>Rough voice</li>
                <li><input type="checkbox" name="odpoved6[]" value="2"/>Inguinal hernia</li>
                <li><input type="checkbox" name="odpoved6[]" value="3"/>Bladder or bowel diverticula</li>
                <li><input type="checkbox" name="odpoved6[]" value="4"/>Long neck or slumped shoulders</li>
                <li><input type="checkbox" name="odpoved6[]" value="5"/>Joint restriction or laxity</li>
                <li><input type="checkbox" name="odpoved6[]" value="6"/>Rectal prolapse</li>
            </ul>

            <!--<div class="cislo_otazky">7/7</div>-->
        <p class="otazka"><h2>7.Calcium examination</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved7[]" value="1"/>Hypercalcemia</li>
                <li><input type="checkbox" name="odpoved7[]" value="2"/>Hypercalciuria</li>
            </ul>

        <!-- <p class="otazka">Email</p>
            <ul class="odpovedi">
                <li><input type="email" name="email1" placeholder="Zadejte svůj email" autocomplete="off"/></li>
            </ul> -->

            
            <input type="submit" value="submit" name="submit"/>
        </form>

    </main>
    <footer>
            <div class="container">
            CTU 2023, Calculator for evaluating Williams syndrome
        </footer>
</body>
</html>