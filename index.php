<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <main>
        <form action="print.php" method="GET">
            <!-- Paragrafo da inviare -->
            <textarea name="insert-text" minlength='20'>

            </textarea>

            <!-- Parola da inviare -->
            <input type="text" name="censored-word">

            <button type="submit">
                Invia
            </button>
        </form>

        <div>
            <a href="print.php">
                Vai nell'altra pagina
            </a>
        </div>


    </main>
</body>
</html>