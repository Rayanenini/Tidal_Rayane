<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Akatsuki</title>
    <link rel="stylesheet" href="<?= PATH_ASSETS ?>index.css">
    <?php
    if (isset($extraJs)) {
    ?>
        <script src="<?= PATH_ASSETS . $extraJs ?>"> </script>
    <?php
    }
    ?>
</head>

<body>
    <?php require_once(PATH_VIEWS . 'navbar.php'); ?>