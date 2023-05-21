<div class="col-12 menu">
    <ol>
        <?php
        if (isset($_SESSION['user_id'])) { ?>
            <li><a href="/logout">Wyloguj się</a></li>
        <?php } else { ?>
            <li><a href="/user/login">Zaloguj się</a></li>
            <li><a href="/user/register">Zarejestruj się</a></li>
        <?php } ?>
    </ol>
</div>

<div class="col-12"><div>