<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/main.css">
    <link rel="stylesheet" href="../static/css/jquery-ui.css">
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
            <h1>Grupa B</h1>
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
                        <li><a href="../tabels">Powrót</a></li>
                    </ol>
                </div>
            </div>
        </aside>

        
        <div class="col-6">
            <div class="card">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Mistrzostwa Świata, Gr.B</th>
                        <th>W</th>
                        <th>R</th>
                        <th>P</th>
                        <th>Pkt</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Anglia</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Iran</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>USA</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Walia</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <aside class="col-3 right">
            <div class="card">
                <div class="legend">
                    <ul>
                        <li><span>W</span> - Wygrane</li>
                        <li><span>R</span> - Remisy</li>
                        <li><span>P</span> - Porażki</li>
                        <li><span>Pkt</span> - Punkty</li>
                    </ul>
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

