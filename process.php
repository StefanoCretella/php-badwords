<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Risultato Censura</title>
</head>
<body>
    <h1>Risultato Censura</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paragraph = $_POST['paragraph'];
        $badword = $_POST['badword'];
        
        // Stampa il paragrafo originale e la sua lunghezza
        echo "<h2>Paragrafo Originale:</h2>";
        echo "<p>$paragraph</p>";
        echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";
        
        // Sostituzione della parola da censurare con ***
        // I '***' vengono segnati come 3 caratteri
        $censoredParagraph = str_replace($badword, '***', $paragraph);
        
        // Stampa il paragrafo censurato e la sua lunghezza
        echo "<h2>Paragrafo Censurato:</h2>";
        echo "<p>$censoredParagraph</p>";
        echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
    } else {
        echo "<p>Richiesta non valida.</p>";
    }
    ?>
</body>
</html>
