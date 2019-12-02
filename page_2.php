<?php 
require_once('php/task.php');
require_once('php/task_instance.php');

$cookieValue = []; 
    // Если куки отсутствует - создает куки и присваивает ему массив со значением $_GET
    if (!isset($_COOKIE['taskId'])) {
        array_push($cookieValue, $_GET['id']);
        setcookie('taskId', serialize($cookieValue), time() + 24 * 60 * 60);
        }
    /* Вытаскивает значение из куки, 
    добавляет ему значение $_GET,
    удаляет повторяющийся элемент, 
    после чего присваивает массив обратно в куки. 
    */   
            else {
            $cookieValue = unserialize($_COOKIE['taskId']);
            array_push($cookieValue, $_GET['id']);
            $uniqueCookieValue = array_unique($cookieValue);
			setcookie('taskId', serialize($uniqueCookieValue), time() + 24 * 60 * 60);
           }
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

<body>

    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> <img src="images/nav_image.png" width="30" height="30" class="d-inline-block align-top" alt="logo"> Список задач </a>
        </nav>
    </header>

        <div class="background-second">
            <div class="container">
                <div class="card-deck">
                    <div class="row">
                        <?php if (!empty($_GET)):  ?>
                        
                            <div class="card-body">
                                <div class="card w-75">
                                    <ul class="list-group list-group-flush">
                                        <li class="card-title list-group-item bg-success">
                                            <h5><?= $scienceTest[$_GET['id']]->title ?></h5> </li>
                                        <li class="list-group-item text-white bg-dark">
                                            <p class="card-text">Условие:
                                                <?= $scienceTest[$_GET['id']]->description ?></p>
                                        </li>
                                        <li class="list-group-item text-white bg-dark">
                                            <p class="card-text">Уровень сложности:
                                                <?= $scienceTest[$_GET['id']]->level ?>.</p>
                                        </li>
                                        <li class="list-group-item text-white bg-dark">
                                            <p class="card-text">Состояние задачи:
                                                <?= $scienceTest[$_GET['id']]->isDone ?>
                                            </p>
                                        </li>
                                       <li class="list-group-item text-white bg-dark"> <a href="index.php"><h5  style="text-align: center;">Назад</h5></a></li>
                                    </ul>
                                </div>
                            </div>
                        
                    <?php endif?>
                    </div>
                </div>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>