<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
    <link rel="stylesheet" href="../static/css/main.css">
    <link rel="stylesheet" href="../static/css/jquery-ui.css">

    <noscript>
        <style>
            #messagebox {display:none;}
            .fontsizing {display:none;}
            #save {display:none;}
            #btnFact {display:none;}
        </style>
    </noscript>


</head>
<body id = "body">
    <header id="header">
        <nav class="title">
            <a href="/">
                <img class="ball" src="../static/img/ball.png" alt="logo">
            </a>
            <h1>Blog piłkarski</h1>
        </nav>
        
        <div class="col-3"></div>

        <div id="saveFont">
            <select onchange="fontSize(this);" size="4" class="col-6 fontsizing">
                <option>14px</option>
                <option>16px</option>
                <option>18px</option>
                <option>20px</option>
            </select>
            <input type="button" id="save" class="col-12 save" value="Zapisz czcionke">
        </div>
    </header>

    <div id="messagebox">
        <p>Czcionka została zapisana</p>
    </div>

    <?php include 'login.php'; ?>

    <nav class="col-12 menu">
        <ol>
            <li><a href="/">Strona główna</a></li>
            <li><a href="../../tabels">Tabele Mundial</a>
                <ul>
                    <li><a href="../../tabels/grupaA">Grupa A</a></li>
                    <li><a href="../../tabels/grupaB">Grupa B</a></li>
                </ul>
            </li>
            <li><a href="../../form/new">Formularz</a></li>
            <li><a href="../../gallery">Galeria</a></li>
            <li><a href="#top">Powrót na góre</a></li>
        </ol>
    </nav>

    <main class="row">
        <aside class="col-3 left">
            <div class="card">
                <div id="matches">
                    <h3>Terminarz Polski na Mundial</h3>
                    <p>Meksyk - <span>Polska</span> <br> 22.11, 17:00</p>
                    <p><span>Polska</span> - Arabia Sau. <br> 26.11, 14:00</p>
                    <p><span>Polska</span> - Argentyna <br> 30.11, 20:00</p>
                </div>
            </div>
        </aside>

        
    <article class="col-6">
            <form action="/deleteChoice" method="POST">
                <div class="card formstyle">
                    <?php if ($total_pages != 0) { ?>
                        <input type="submit" value="Usuń zaznaczone z zapamiętanych">
                    <?php } else { ?>
                        <p>Nie dodałeś żadnych zdjęć<p>
                    <?php } ?>
                </div>
                
                <?php foreach($gallery as $photo): ?>
                    <div class="card">
                        <div class="formstyle">
                            <label for="cart[]">Usuń
                                <input type="checkbox" name="cart[]" value="<?php echo $photo->_id; ?>">  
                            </label>
                        </div>
                        <h3>Tytuł: <?= $photo->title ?></h3>
                        <a href="/images/<?=$photo->WatermarkImageName?>"><img src="/images/<?=$photo->SmallImageName?>"></a>
                        <h3>Autor: <?= $photo->author ?></h3>
                    </div>
                <?php endforeach; ?>
            </form>
    </article>
        <nav class="col-3 right">
            <div class="card">
                <div class="tabelschoice">
                    <ol>
                        <li><a href="/gallery">Powrót do galerii</a></li>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li><a href="/gallery/chosen?page=<?php echo $i; ?>">Strona <?php echo $i?></a></li>
                        <?php endfor; ?>
                    </ol>
                </div>
            </div>
        </nav>
    </main>
    
    <footer class="col-12">  
        <p>Piotr Sulewski</p>    
    </footer>

    <script src="../static/js/jquery-3.6.1.js"></script>
    <script src="../static/js/jquery-ui.js"></script>
    <script src="../static/js/script.js"></script>
</body>
</html>