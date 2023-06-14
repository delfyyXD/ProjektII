<?php 
include 'database.php';
if(isset($_POST['subvyhodnoceni'])) {
    $email2=$_POST['email2'];
    $vysledek2=$_POST['vysledek2'];
    $willik2=$_POST['willik2'];
    $allwillik2=implode($willik2);

    $sql="insert into `vyhodnoceni` (pocetbodu,williamsuvsyndrom,email) values ('$vysledek2','$allwillik2','$email2')";

    $result=mysqli_query($dab,$sql);
    if($result){
        //echo 'Data odeslana';
    } else{
        die(mysqli_error($dab));
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Vyhodnocení</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
<body>
    <header>
            <div class="container">
                <h1>Kalkulátor pro vyhodnocení Willimsova syndromu</h1>
            </div>
        </header>
    <main>
        <h1>Výsledek testu</h1>
        <form method="post">

        <?php
        $vysledek=0;

        if(isset($_POST["odpoved1"])) {
            $vyber=$_POST["odpoved1"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
                if($vyber[$i]==3){
                    $bod=$bod+1;
                }
                if($vyber[$i]==4){
                    $bod=$bod+1;
                }
                if($vyber[$i]==5){
                    $bod=$bod+1;
                }
            }

            if ($bod>=3) {
                $vysledek=$vysledek+1;
            }

            
        }

        else {
            echo "Nevyplnena 1. otazka <br>";
        }

        if(isset($_POST["odpoved2"])) {
            $vyber=$_POST["odpoved2"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
                if($vyber[$i]==3){
                    $bod=$bod+1;
                }
                if($vyber[$i]==4){
                    $bod=$bod+1;
                }
                if($vyber[$i]==5){
                    $bod=$bod+1;
                }
                if($vyber[$i]==6){
                    $bod=$bod+1;
                }
            }

            if ($bod>=3) {
                $vysledek=$vysledek+1;
            }

            
        }

        else {
            echo "Nevyplnena 2. otazka <br>";
        }

        if(isset($_POST["odpoved3"])) {
            $vyber=$_POST["odpoved3"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
                if($vyber[$i]==3){
                    $bod=$bod+1;
                }
                if($vyber[$i]==4){
                    $bod=$bod+1;
                }
                if($vyber[$i]==5){
                    $bod=$bod+1;
                }
                if($vyber[$i]==6){
                    $bod=$bod+1;
                }
                if($vyber[$i]==7){
                    $bod=$bod+1;
                }
                if($vyber[$i]==8){
                    $bod=$bod+1;
                }
                if($vyber[$i]==9){
                    $bod=$bod+1;
                }
                if($vyber[$i]==10){
                    $bod=$bod+1;
                }
                if($vyber[$i]==11){
                    $bod=$bod+1;
                }
                if($vyber[$i]==12){
                    $bod=$bod+1;
                }
                if($vyber[$i]==13){
                    $bod=$bod+1;
                }
                if($vyber[$i]==14){
                    $bod=$bod+1;
                }
                if($vyber[$i]==15){
                    $bod=$bod+1;
                }
                if($vyber[$i]==16){
                    $bod=$bod+1;
                }
                if($vyber[$i]==17){
                    $bod=$bod+1;
                }
            }

            if ($bod>=8) {
                $vysledek=$vysledek+3;
            }

            
        }

        else {
            echo "Nevyplnena 3. otazka <br>";
        }

        if(isset($_POST["odpoved4"])) {
            $vyber=$_POST["odpoved4"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
            }

            if ($bod>=1) {
                $vysledek=$vysledek+5;
            }
        }

        else {
            echo "Nevyplnena 4. otazka <br>";
        }

        if(isset($_POST["odpoved5"])) {
            $vyber=$_POST["odpoved5"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
                if($vyber[$i]==3){
                    $bod=$bod+1;
                }
            }   

            if ($bod>=1) {
                $vysledek=$vysledek+1;
            }

            
        }

        else {
            echo "Nevyplnena 5. otazka <br>";
        }

        if(isset($_POST["odpoved6"])) {
            $vyber=$_POST["odpoved6"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
                if($vyber[$i]==3){
                    $bod=$bod+1;
                }
                if($vyber[$i]==4){
                    $bod=$bod+1;
                }
                if($vyber[$i]==5){
                    $bod=$bod+1;
                }
                if($vyber[$i]==6){
                    $bod=$bod+1;
                }
            }   

            if ($bod>=2) {
                $vysledek=$vysledek+2;
            }

            
        }

        else {
            echo "Nevyplnena 6. otazka <br>";
        }

        if(isset($_POST["odpoved7"])) {
            $vyber=$_POST["odpoved7"];
            $c=count($vyber);
            $bod=0;

            for($i=0;$i<$c;$i++) {
                if($vyber[$i]==1){
                    $bod=$bod+1;
                }
                if($vyber[$i]==2){
                    $bod=$bod+1;
                }
            }   

            if ($bod>=1) {
                $vysledek=$vysledek+2;
            }

            
        }

        else {
            echo "Nevyplnena 7. otazka <br><br>";
        }

        echo "Počet bodů: " .$vysledek. "<br>";

        if($vysledek<3) {
            echo "Diagnóza Williamsova syndromu je nepravděpodobná.<br><br>";
            $willik="Ne";
        }
        else if($vysledek>=3) {
            echo "Je třeba zvážit provedení FISH testu.<br><br>";
            $willik="Ano";
        }

        ?>

            <p>Email: <input type="email" name="email2" placeholder="Zadejte svůj email" autocomplete="off"/> </p>
            <p>Počet bodů: <input type="number" name="vysledek2" placeholder="Zadejte počet bodů" autocomplete="off"/> </p>
            <p>Zvažujete provedení FISH testu: Ano<input type="checkbox" name="willik2[]" value="Ano"/>
                                                Ne<input type="checkbox" name="willik2[]" value="Ne"/></p>
                                                <br>
        <input type="submit" class="start" value="odeslat vyhodnoceni" name="subvyhodnoceni"/>
        <br><br><br> </form>

        <!-- <p>shodujete se v: %i/7 bodech ws</p> -->
        <a href="kalkulator.php?n=1" class="start">Udělat si test znovu</a>
        <br>
        <a href="index.php" class="start">Hlavní strana</a>
    </main>
    <footer>
            <div class="container">
                ČVUT 2023, Kalkulátor pro vyhodnocení Willimsova syndromu
                <br>
                Copyright © <a href="https://www.spolek-willik.cz/wp-content/uploads/2018/09/Williams-syndrom_cz_Pediatrics.pdf">spolek-willik.cz</a>
        </footer>
</body>
</html>
