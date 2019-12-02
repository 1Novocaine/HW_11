<?php 
require_once('php/task.php');
require_once('php/task_instance.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/background.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="background">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> <img src="images/nav_image.png" width="30" height="30" class="d-inline-block align-top" alt="logo"> Список задач </a>
        </nav>
    </header>
    <div class="container">
        <table class="table table-striped table-dark table_style_1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Информация</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scienceTest as $key => $subject):?>
                    <tr>
                        <td>
                            <?= $key +1 .'.' ?>
                        </td>
                        <td>
                            <?= $subject->title ?>
                        </td>
                        <td>
                            <?= $subject->showStatus () ?>
                        </td>
                        <td>
                        	<a href="page_2.php?id=<?=$key;?>">Подробнее</a> 
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
    <div class="card recently-watched">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Недавно просмотренные: </li>
            <?php if (!empty($_COOKIE['taskId'])): ?>
                <?php $taskId = unserialize($_COOKIE['taskId']); ?>
                    <?php foreach ($taskId as $id): ?>
                        <li class="list-group-item"><a href="page_2.php?id=<?=$key;?>"><?= $scienceTest[$id]->title ?></a></li>
           		<?php endforeach ?>
            <?php endif?>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

