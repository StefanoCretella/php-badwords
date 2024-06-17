<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Badwords Filter</title>
</head>
<body>
    <!-- Titolo pagina index.php -->
    <h1>Filtro Parole Censurate</h1>

    <!-- Il form invia i dati a process.php utilizzando il metodo POST -->
    <form action="process.php" method="post">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="10" cols="50" required></textarea><br><br>
        
        <label for="badword">Parola da censurare:</label><br>
        <input type="text" id="badword" name="badword" required><br><br>
        
        <input type="submit" value="Invia">
    </form>

</body>
</html>
