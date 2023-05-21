<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/jquery-ui.css">

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
                <img class="ball" src="static/img/ball.png" alt="logo">
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
            <li><a href="tabels">Tabele Mundial</a>
                <ul>
                    <li><a href="tabels/grupaA">Grupa A</a></li>
                    <li><a href="tabels/grupaB">Grupa B</a></li>
                </ul>
            </li>
            <li><a href="form/new">Formularz</a></li>
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
            <div class="card">
                <h2>Dramat Bartłomieja Drągowskiego. Nie jedzie na MŚ 2022. Pilna zmiana w polskiej kadrze</h2>
                <p>
                    Dramat Bartłomieja Drągowskiego! 
                    W ostatnim meczu przed mistrzostwami świata bramkarz Spezii doznał poważnej kontuzji i nie ma szans, by pojechać na MŚ 2022.
                    Drągowski, powołany kilka dni temu przez Czesława Michniewicza na MŚ 2022, wydał głośny krzyk i złapał się za nogę, a chwilę potem ukrył twarz w ramionach.
                     Jego stopa wygięła się nienaturalnie. Pierwsze doniesienia mówią, że doszło do złamania. 
                     Został zniesiony z boiska na noszach. 
                     Pozostali piłkarze pocieszali Drągowskiego, ale chyba żadne słowa na świecie nie będą w stanie ukoić bólu, który musi odczuwać Drągowski. 
                    Stracił mundial w ostatnim momencie. Również inni piłkarze zdawali się być w szoku.
                </p>
                <a href="https://www.sport.pl/pilka/7,65037,29135648,dramat-bartlomieja-dragowskiego-nie-jedzie-na-ms-2022-pilna.html" target="_blank">Źródło</a>

            </div>

            <div class="card">
                <h2>Hiszpanie przekonani. Lewandowskiego czeka surowa kara i długie zawieszenie</h2>
                <p>
                    Nad Robertem Lewandowskim zebrały się czarne chmury. Jak podał w sobotę "AS", w Barcelonie panuje przekonanie, że jej napastnik zostanie zawieszony i nie zagra w aż trzech najbliższych meczach ligowych Dumy Katalonii. 
                    Jest to pokłosie czerwonej kartki, którą otrzymał w ostatnim spotkaniu przeciwko Osasunie. 
                    Przypomnijmy, w miniony wtorek 34-letni snajper zakończył mecz w Pampelunie już po 31 minutach. 
                    Trafił wtedy rywala łokciem w twarz i otrzymał drugą żółtą, a w konsekwencji czerwoną kartkę. 
                    Choć powtórki telewizyjne wykazały, że do uderzenia rzeczywiście doszło, to Polak długo nie mógł pogodzić się z decyzją sędziego. 
                    Choć regulamin La Liga mówi, że po otrzymaniu dwóch żółtych kartek w meczu piłkarza czeka jedno spotkanie zawieszenie, to "AS" przekonuje, że Lewandowskiego czego dłuższa przerwa. 
                    Wszystko dlatego, że schodząc z boisku wykonał gest dezaprobaty wobec decyzji sędziego Gila Manzano. 
                </p>
                <a href="https://eurosport.tvn24.pl/pilka-nozna,105/as-robert-lewandowski-zostanie-zawieszony-na-trzy-mecze-nie-zagra-z-espanyolem-atletico-i-betisem-pilka-nozna-la-liga,1124405.html" target="_blank">Źródło</a>

            </div>

            <div class="card">
                <h2>Raków kroczy po mistrzostwo Polski. Kolejne ważne zwycięstwo podopiecznych Papszuna</h2>
                <p>
                    Raków Częstochowa ograł dziś Zagłębie Lubin 2:1 (2:0). Marek Papszun ma mnóstwo powodów do zadowolenia - jego podopieczni umocnili się na pierwszym miejscu w tabeli.
                    Raków Częstochowa przystępował do dzisiejszego spotkania z nadzieją na udane zakończenie rundy. Rywalem "Medalików" było Zagłębie Lubin.
                    Liderzy Ekstraklasy szybko chcieli wyjść na prowadzenie, gwarantujące im spokój przez resztę spotkania. W 18. minucie starania zrealizował Sorescu, który popisał się piękną akcją indywidualną.
                    Niestety dla "Miedziowych", pierwszą bramkę udało się zdobyć w 87. minucie. Wówczas to pewnie rzut karny wykorzystał Chodyna i zrobiło się 1:2.
                    Czasu było jednak zbyt mało, aby ponownie zaskoczyć defensywę częstochowian. Tym samym Zagłębie Lubin przegrało 1:2 (0:2) i zajmuje 14. miejsce w tabeli. Raków jest pierwszy i ma 10 punktów przewagi nad Legią, która zagrała jedno spotkanie mniej.
                </p>
                <a href="https://www.meczyki.pl/newsy/rakow-kroczy-po-mistrzostwo-polski-kolejne-wazne-zwyciestwo-podopiecznych-papszuna-wideo/200053-n" target="_blank">Źródło</a>

            </div>

            <div class="card">
                <h2>MŚ 2022. Kacper Tobiasz poleci do Kataru z reprezentacją Polski. Będzie brał udział tylko w treningach</h2>
                <p>
                    A jednak czterech bramkarzy! Rzecznik PZPN Jakub Kwiatkowski poinformował za pośrednictwem Twittera, że Czesław Michniewicz powołał dodatkowo do kadry Kacpra Tobiasza. Bramkarz Legii Warszawa poleci do Kataru, ale będzie brał udział wyłącznie w treningach reprezentacji.
                    Przed ogłoszeniem powołań selekcjoner zapewniał, że chce zabrać do Kataru czterech bramkarzy. Na oficjalnej liście znalazło się jednak jedynie trzech: Wojciech Szczęsny, Łukasz Skorupski i Bartłomiej Drągowski. Jak się jednak okazuje, znajdzie się też miejsce dla czwartego – i tym golkiperem będzie Tobiasz.
                    Zawodnik Legii poleci z reprezentacją na mundial, jednak będzie z nią tylko trenował. Wszystko jest pokłosiem słów trenera o tym, że czwarty bramkarz jest mu potrzebny do treningów.
                    "Decyzją selekcjonera Czesława Michniewicza bramkarz Legii Kacper Tobiasz dołączy do reprezentacji Polski i poleci z nią do Kataru. Tobiasz nie znajdzie się jednak w oficjalnej 26-osobowej kadrze na mundial, a jedynie będzie trenował z reprezentacją" – napisał na Twitterze Kwiatkowski.
                </p>
                <a href="https://sport.tvp.pl/64486614/mistrzostwa-swiata-2022-kacper-tobiasz-leci-do-kataru-bramkarz-legii-warszawa-bedzie-trenowal-z-reprezentacja-polski" target="_blank">Źródło</a>

            </div>
        </article>
        
        <aside class="col-3 right">
            <input onClick="buttonClick(); nowy()" id="btnFact" type="button" name="jajco" value="Ciekawostki">

            <div class="col-12 facts">
            </div>
        </aside>
    </main>
    
    <footer class="col-12">  
        <p>Piotr Sulewski</p>    
    </footer>

    <script src="static/js/jquery-3.6.1.js"></script>
    <script src="static/js/jquery-ui.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>