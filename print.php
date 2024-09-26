<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo e parola</title>
</head>
<body>
    <main>
        <div>
            <div>
                Paragrafo:
            </div>
            <?php 
                $paragrafo = $_GET ['insert-text'];
                echo $paragrafo ;   
            ?>
        </div>
        <div>
            Lunghezza paragrafo:
            <?php echo strlen ($paragrafo); ?>
        </div>
        <div>
            <div>
                Parolaccia:
            </div>
            <?php 
                

                $parolaccia = $_GET ['censored-word'];

                echo str_replace('puttana', '***', $parolaccia);

                
             ?>
        </div>
    </main>
</body>
</html>