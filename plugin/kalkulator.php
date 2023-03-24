<?php
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
    <title>Kalkulator</title>
</head>
<body>
    <main>
        <div class="cislo_otazky">1/5</div>
        <p class="otazka">Jak se mas?</p>
        <form method="post" action="process.php">
            <ul class="odpovedi">
                <li><input name="odpoved" type="radio" value="1"/>nejlip</li>
                <li><input name="odpoved" type="radio" value="1"/>dobre</li>
                <li><input name="odpoved" type="radio" value="1"/>jde to</li>
                <li><input name="odpoved" type="radio" value="1"/>spatne</li>
            </ul>
            <input type="submit" value="next" />
        </form>

    </main>
</body>
</html>
