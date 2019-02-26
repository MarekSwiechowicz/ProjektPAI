<div class="absolute">
    <div class="container">
        <div class="row" style="margin-top: 10px;">
            <div class="col-6 nav-bar">
                <?php
                if(isset($_SESSION['id']) == false)
                {
                    echo '<form method="post" action="?page=?login" style="font-size: 14px;">
                            <p><a href="?page=index"><i class="fas fa-h-square"></i></a>
                            Login: <input type="text" name="email" id="email">
                            Hasło: <input type="password" name="password" id="password">
                            <button type="submit" class="btn btn-primary">Zaloguj</button></p>
                        </form>';
                }
                else
                {
                    echo '<a href="?page=index"><i class="fas fa-h-square"></i></a>';
                    echo '<p>'.$_SESSION['id'].'</p>';
                }
                ?>
            </div>
            <?php
            if(isset($_SESSION['id']))
            {
                echo '        
                        <div class="col-6" style="padding-left:10%;">
                            <ul>                    
                                <li><a class="active" href="?page=logout">Wyloguj</a></li>';
            }
            else
            {
                echo '        
                        <div class="col-6" style="padding-left:10%;">
                            <ul>
                                <li><a class="active" href="?page=register">Zarejestruj</a></li>';

            }
            ?>

            <li><a class="active" href="?page=user">Moje konto</a></li>
            <li><a class="active" href="?page=myAdvert">Moje ogłoszenia</a></li>
            <li><a class="active" href="?page=admin">AdminPanel</a></li>
            </ul>
        </div>
    </div>
</div>
</div>