<?php
$json = file_get_contents('product.json');
$arr = json_decode($json, true);
?>

<!doctype html>
<html lang="en">
<head>
<!--     Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--     Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>WebBooster</title>
</head>
<body>

<!--Карточки товара-->
<div class="container">
    <div class="row align-items-start">
        <?php foreach ($arr as $item): ?>
            <?php foreach ($item as $value): ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= $value['img']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['name']; ?></h5>
                            <p class="card-price"><?= $value['price']; ?></p>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Купить</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <div class="col">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">===Форма===</a>
        </div>
    </div>
</div>

<!--Модальное окно-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="form.php" method="post">
                    <div class="form-group">
                        <label for="myInputName1">Имя</label>
                        <input type="text" class="form-control" name="myInputName1" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="myInputPhone1">Номер телефона</label>
                        <input type="tel" class="form-control" name="myInputPhone1" placeholder="Введите номер телефона">
                    </div>
                    <div class="form-group">
                        <label for="myInputEmail1">Email</label>
                        <input type="email" class="form-control" name="myInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                    </div>
                    <div class="form-group">
                        <label for="myInputText1">Название товара</label>
                        <input type="text" class="form-control" name="myInputText1" placeholder="Введите название товара">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>