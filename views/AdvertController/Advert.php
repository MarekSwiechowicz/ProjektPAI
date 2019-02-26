<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body onload="getAdvertsById('<?php echo $_GET['id']; ?>')">
<?php include(dirname(__DIR__).'/navbar.php'); ?>

<div style="background-image: url('/views/DefaultController/images/background.jpg');">
    <div class="container adv">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6 motto">
                <h1>Informacje o ogłoszeniu</h1>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12" style="float:left; min-height: 730px; background-image: url('/views/DefaultController/images/note.png');  background-repeat: no-repeat; background-position: center; ">
                <h2 class="title"></h2>
                <p class="description"></p>
                <p class="date"></p>
                <p class="price"></p>
                <p class="author"></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>