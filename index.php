<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;1,200&display=swap" rel="stylesheet">
    <!-- /Font -->

    <title>Paragraph</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section>
            <h1>
                <?php echo ucwords('paragrafo originale') ?>
            </h1>
            <p><?php echo $_POST['paragraph'] ?></p>
            <small class="length"><?php echo ucfirst('lunghezza testo: ') ?><?php echo strlen($_POST['paragraph']) ?></small>
        </section>
        <section>
            <h1>
                <?php echo ucwords('paragrafo censurato') ?>
            </h1>
            <p><?php echo str_replace($_POST['bad_word'], '***', $_POST['paragraph']) ?></p>
        </section>
    </main>
</body>
</html>