<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>
    <main>
        <p><?php echo $_POST['paragraph'] ?></p>
        <div><?php echo strlen($_POST['paragraph']) ?></div>
    </main>
</body>
</html>