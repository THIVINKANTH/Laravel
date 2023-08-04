<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= url('userdata') ?>" method="POST">
        <h4><?=$tittle  ?></h4>

        <label for="name">Name :<input type="text" id="name" name="name"></label><br>
        <label for="email">Email :<input type="email" id="email" name="email"></label><br>
        <label for="age">age :<input type="age" id="age" name="age"></label><br>
        <input type="hidden" name="_token" value="<?=csrf_token() ?>">
        <input type="submit" value="send">

    </form>
    <?=session('message') ?>
</body>
</html>
