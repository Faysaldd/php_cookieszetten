<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    <h1>Visit Counter</h1>
    <?php
    if (isset($_COOKIE['visit_count'])) {
        $visit_count = $_COOKIE['visit_count'] + 1;
    } else {
        $visit_count = 1;
    }

    setcookie('visit_count', $visit_count, time() + (365 * 24 * 60 * 60));

    echo "<p>Je hebt deze pagina $visit_count keer bezocht!</p>";
    ?>
</body>
</html>
