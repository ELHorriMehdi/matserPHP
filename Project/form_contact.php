<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <title>Document</title>
</head>
<body class="container">
<?php include_once('header.php'); ?>
<form action="submit_contact.php" method="post">
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div class="mb-3">
        <label class="mb-3" for="message">Votre message</label>
        <textarea class="mb-3" placeholder="Exprimez vous" name="message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>