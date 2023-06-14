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
    <title>Kalkulator</title>
</head>
<body>
<header>
            <div class="container">
                <h1>Kalkulátor pro vyhodnocení Williamsova syndromu</h1>
            </div>
        </header>
    <main>
        <!--<div class="cislo_otazky">1/7</div>-->
        <p class="otazka"><h2>1.Růst (dříve nebo v současnosti)</h2></p>
        <form method="post" action="vyhodnoceni.php">
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved1[]" value="1"/>Narození po termínu > 41 týden těhotenství</li>
                <li><input type="checkbox" name="odpoved1[]" value="2"/>Neprospívání/výška a hmotnost < 5. percentil</li>
                <li><input type="checkbox" name="odpoved1[]" value="3"/>Zvracení nebo gastroezofageální reflux</li>
                <li><input type="checkbox" name="odpoved1[]" value="4"/>Dlouhodobé koliky, dráždivost > 4 měsíce</li>
                <li><input type="checkbox" name="odpoved1[]" value="5"/>Chronická zácpa</li>
            </ul>

            <!--<div class="cislo_otazky">2/7</div>-->
        <p class="otazka"><h2>2.Chování a vývoj</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved2[]" value="1"/>Příliš přátelská osobnost</li>
                <li><input type="checkbox" name="odpoved2[]" value="2"/>Přecitlivělost na zvuky</li>
                <li><input type="checkbox" name="odpoved2[]" value="3"/>Úzkost</li>
                <li><input type="checkbox" name="odpoved2[]" value="4"/>Vývojové opoždění nebo mentální retardace</li>
                <li><input type="checkbox" name="odpoved2[]" value="5"/>Zrakově prostorové problémy</li>
                <li><input type="checkbox" name="odpoved2[]" value="6"/>Opožděné osvojení si řeči, následované mnohomluvností</li>
            </ul>

            <!--<div class="cislo_otazky">3/7</div>-->
        <p class="otazka"><h2>3.Obličejové rysy</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved3[]" value="1"/>Zúžení bitemporálního rozměru</li>
                <li><input type="checkbox" name="odpoved3[]" value="2"/>Epikantální záhyby nebo plochý kořen nosu </li>
                <li><input type="checkbox" name="odpoved3[]" value="3"/>Strabismus (nyní nebo v minulosti) </li>
                <li><input type="checkbox" name="odpoved3[]" value="4"/>Krátký nos nebo anteverze nosních dírek</li>
                <li><input type="checkbox" name="odpoved3[]" value="5"/>Plné tváře</li>
                <li><input type="checkbox" name="odpoved3[]" value="6"/>Dlouhé philtrum</li>
                <li><input type="checkbox" name="odpoved3[]" value="7"/>Malé, široce umístěné zuby</li>
                <li><input type="checkbox" name="odpoved3[]" value="8"/>Široká ústa</li>
                <li><input type="checkbox" name="odpoved3[]" value="9"/>Odstávající ušní lalůčky</li>
                <li><input type="checkbox" name="odpoved3[]" value="10"/>Široké čelo</li>
                <li><input type="checkbox" name="odpoved3[]" value="11"/>Plná periorbitální oblast</li>
                <li><input type="checkbox" name="odpoved3[]" value="12"/>Hvězdicovitý “krajkový” vzor na duhovce</li>
                <li><input type="checkbox" name="odpoved3[]" value="13"/>Bulbózní nebo plná špička nosu</li>
                <li><input type="checkbox" name="odpoved3[]" value="14"/>Malární hypoplazie (ploché lícní kosti)</li>
                <li><input type="checkbox" name="odpoved3[]" value="15"/>Plné výrazné rty</li>
                <li><input type="checkbox" name="odpoved3[]" value="16"/>Malokluze</li>
                <li><input type="checkbox" name="odpoved3[]" value="17"/>Malá čelist</li>
            </ul>

            <!--<div class="cislo_otazky">4/7</div>-->
        <p class="otazka"><h2>4.Kardiovaskulární problémy (podle echokardiografie) (a)</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved4[]" value="1"/>SVAS**</li>
                <li><input type="checkbox" name="odpoved4[]" value="2"/>Periferní stenóza plicní arterie</li>
            </ul>

            <!--<div class="cislo_otazky">5/7</div>-->
        <p class="otazka"><h2>5.Kardiovaskulární problémy (b)</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved5[]" value="1"/>Jiné kongenitální onemocnění srdce</li>
                <li><input type="checkbox" name="odpoved5[]" value="2"/>Srdeční šelest</li>
                <li><input type="checkbox" name="odpoved5[]" value="3"/>Hypertenze</li>
            </ul>

            <!--<div class="cislo_otazky">6/7</div>-->
        <p class="otazka"><h2>6.Abnormality vazivové tkáně</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved6[]" value="1"/>Hrubý hlas</li>
                <li><input type="checkbox" name="odpoved6[]" value="2"/>Tříselná kýla</li>
                <li><input type="checkbox" name="odpoved6[]" value="3"/>Divertikly močového měchýře nebo střeva</li>
                <li><input type="checkbox" name="odpoved6[]" value="4"/>Dlouhý krk nebo skleslá ramena</li>
                <li><input type="checkbox" name="odpoved6[]" value="5"/>Omezení nebo laxita kloubů</li>
                <li><input type="checkbox" name="odpoved6[]" value="6"/>Výhřez rekta</li>
            </ul>

            <!--<div class="cislo_otazky">7/7</div>-->
        <p class="otazka"><h2>7.Vyšetření kalcia</h2></p>
            <ul class="odpovedi">
                <li><input type="checkbox" name="odpoved7[]" value="1"/>Hyperkalcémie</li>
                <li><input type="checkbox" name="odpoved7[]" value="2"/>Hyperkalciurie</li>
            </ul>

        <!-- <p class="otazka">Email</p>
            <ul class="odpovedi">
                <li><input type="email" name="email1" placeholder="Zadejte svůj email" autocomplete="off"/></li>
            </ul> -->

            
            <input type="submit" value="vyhodnotit" name="submit"/>
        </form>

    </main>
    <footer>
            <div class="container">
                ČVUT 2023, Kalkulátor pro vyhodnocení Williamsova syndromu
        </footer>
</body>
</html>