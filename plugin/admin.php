<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <main>
        <h1>Pridat otazku</h1>
        <form method="post" action="admin.php">
            <p>
                <label>Cislo otazky</label>
                <input type="number" name="question_number" />
            </p>
            <p>
                <label>Otazka</label>
                <input type="text" name="question_text" />
            </p>
            <p>
                <label>Odpoved c.1</label>
                <input type="text" name="choice1" />
            </p>
            <p>
                <label>Odpoved c.2</label>
                <input type="text" name="choice2" />
            </p>
            <p>
                <label>Odpoved c.3</label>
                <input type="text" name="choice3" />
            </p>
            <p>
                <label>Odpoved c.4</label>
                <input type="text" name="choice4" />
            </p>
            <p>
                <label>Cislo spravne odpovedi</label>
                <input type="number" name="choice_corr" />
            </p>
            <p>
                <input type="submit" name="submit" value="ulozit" />
            </p>
        </form>
    </main>
</body>
</html>
