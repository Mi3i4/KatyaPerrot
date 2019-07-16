<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
   
    <title></title>
</head>
<body>
    <div>
        <b>Имя:</b> <?php echo e($data['name']); ?>

    </div>

    <div>
        <b>Email:</b> <?php echo e($data['email']); ?>

    </div>
    <div>
        <b>Текст сообщения:</b> <?php echo e($data['text']); ?>

    </div>
</body>