<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/jquery-ui.css">
    <title>Tabele</title>

    <noscript>
        <style>
            #messagebox {display:none;}
            .fontsizing {display:none;}
            #save {display:none;}
            #btnFact {display:none;}
        </style>
    </noscript>
</head>
<body>
    <header>
        <nav class="title">
            <a href="/">
                <img src="../static/img/ball.png" alt="logo">
            </a>
            <h1>Tabele Mundial</h1>
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
            <li><a href="../tabels">Tabele Mundial</a>
                <ul>
                    <li><a href="../tabels/grupaA">Grupa A</a></li>
                    <li><a href="../tabels/grupaB">Grupa B</a></li>
                </ul>
            </li>
            <li><a href="../form/new">Formularz</a></li>
            <li><a href="../../gallery">Galeria</a></li>
            <li><a href="#top">Powrót na góre</a></li>
        </ol>
    </nav>

    <main class="row">
        <aside class="col-3 left">
            <div class="card">
                <div class="tabelschoice">
                    <h3>Wybór grupy </h3>
                    <ol>
                        <li><a href="../tabels/grupaA">Grupa A</a></li>
                        <li><a href="../tabels/grupaB">Grupa B</a></li>
                    </ol>
                </div>
            </div>
        </aside>

        
        <div class="col-6">
            <div class="card">
                <h2>Mundial Katar 2022</h2>
                <p> 
                    Mistrzostwa świata w Katarze w 2022 roku będą pod kilkoma względami wyjątkowe. 
                    Przede wszystkim pierwszy raz gospodarzem jest kraj z Bliskiego Wschodu, a ze względu na panujące tam latem upały, rozgrywki przeniesiono na jesień.
                </p>

                <p>   Mundial 2022 rozpocznie się 21 listopada od meczu Senegal – Holandia (11:00 na Al Thumama Stadium w stolicy, czyli Dosze, wszystkie podawane godziny w czasie środkowoeuropejskim). 
                    XXII turniej o tytuł najlepszej drużyny na świecie zakończy finał, który zacznie się 18 grudnia o 16:00 na Lusail Stadium w mieście Lusajl.
                </p>

                
                   <p>Mecz będę rozgrywane łącznie na 8 stadionach położonych w 5 różnych miastach, czyli: </p>
                    <ul>
                        <li>Lusail Stadium (Lusajl);</li>
                        <li>Al Bayt Stadium (Al-Chaur);</li>
                        <li>Stadium 974 (Doha);</li>
                        <li>Al Thumama Stadium (Doha);</li>
                        <li>Education City Stadium (Ar-Rajjan);</li>
                        <li>Ahmed bin Ali Stadium (Ar-Rajjan);</li>
                        <li>Khalifa International Stadium (Ar-Rajjan);</li>
                        <li>Al Janoub Stadium (Al-Wakra).</li>
                    </ul>
            </div>
        </div>
        
        <aside class="col-3 right">
            <div class="card">
                <div id="qatar">
                    <img src="../static/img/qatar.jpg" alt=""> 
                </div>
            </div>
        </aside>
    </main>
    
    <footer class="col-12">  
        <p>Piotr Sulewski</p>
    </footer>
    
    <script src="../static/js/jquery-3.6.1.js"></script>
    <script src="../static/js/jquery-ui.js"></script>
    <script src="../static/js/script.js"></script>
</body>
</html>

