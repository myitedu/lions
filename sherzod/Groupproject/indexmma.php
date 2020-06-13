
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../..>
</head>
<body>
<?php
include "backendmma.php";
?>
<div class="container-fluid">
    <form method="get">
        <div class="input-group mb-3">
            <input name="mma" value="<?=$news?>"  type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>
    <!--
    <table class="table table-bordered">
        <tr><td>Title: </td><td><?=$News->latestNews[1]->title?></td></tr>
        <tr><td>description: </td><td><?=$News->latestNews[1]->description?></td></tr>
        <tr><td>imgUrl: </td><td><?=$News->latestNews[1]->imgUrl?></td></tr>
        <tr><td>thumbnail: </td><td><?=$News->latestNews[1]->thumbnail?></td></tr>
        <tr><td>sourceUrl: </td><td><?=$News->latestNews[1]->sourceUrl?></td></tr>
        <tr><td>publishedAt: </td><td><?=$News->latestNews[1]->publishedAt?></td></tr>
        <tr><td>author: </td><td><?=$News->latestNews[1]->author?></td></tr>
    </table>
    -->
    <div class="mycards">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ytimg.com/vi/pZwPILaudgY/maxresdefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[1]->title?></h5>
                <p class="card-text">Wow watch this news</p>
                <a href="https://www.google.com/search?q=ufc+images&source=lmns&tbm=nws&bih=724&biw=769&hl=en&ved=2ahUKEwjkjcS89P7pAhWQn-AKHSNKBl0Q_AUoAnoECAEQAg" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://i.insider.com/5718eb6552bcd044008be1ab?width=1100&format=jpeg&auto=webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[1]->description?></h5>
                <p class="card-text">Khabib and Conor fight</p>
                <a href="https://www.youtube.com/watch?v=iu6n_Xja8mU" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[1]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[4]->description?></h5>
                <a href="<?=$News->latestNews[1]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[2]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[2]->description?></h5>
                <a href="<?=$News->latestNews[2]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[5]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[5]->description?></h5>
                <a href="<?=$News->latestNews[5]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
    </div>
</div>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    html, body{
        width: 100%;
        height: 100%;
    }
    .mycards{
        width: 100%;
        height: auto;
        background-color: red;
        display: inline-flex;
    }
    .card-img-top{
        width: 100%;
        height: 200px;
    }
</style>
</body>
</html>
