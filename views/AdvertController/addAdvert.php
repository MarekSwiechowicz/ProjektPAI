<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__).'/head.html'); ?>

<body onload="getAdvertsById('<?php echo $_GET['id']; ?>')">
<?php include(dirname(__DIR__).'/navbar.php'); ?>


<div class="container adv">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6 motto">
            <h1>Uzupełnij formularz ogłoszenia</h1>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>


<div class="container addadvert">
    <div class="row">
        <div class="col-12">
            <form method="post" action="/views/AdvertController/addAdvertConfirm.php">
                <div class="form-group">
                    <label for="title">Tytuł</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Tytuł" required>

                </div>
                <div class="form-group">
                    <label for="description">Opis</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Opis" required>
                </div>
                <div class="form-group">
                    <label for="price">Cena</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Cena" required>
                </div>
                <div class="form-group">
                    <label for="category">Kategoria</label>
                    <select class="form-control" name="category" id="category" required>
                        <option>Budownictwo</option>
                        <option>Transport</option>
                        <option>Programowanie</option>
                        <option>Korepetycje</option>
                        <option>Muzyka</option>
                        <option>Pomoc domowa</option>
                        <option>Fotografia</option>
                        <option>Prawo</option>
                        <option>Księgowość</option>
                        <option>Marketing</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj ogłoszenie</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>