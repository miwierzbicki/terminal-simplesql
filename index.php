<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terminal</title>
    <link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.1/dist/terminal.min.css" />
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    <!-- <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
    </label>
    <em>Enable Dark Mode!</em>
    </div> -->
    <div class="container">
        <div class="terminal-nav">
            <header class="terminal-logo">
                <div class="logo terminal-prompt">
                    <a href="index.php" class="no-style">Strona główna</a>
                </div>
            </header>
            <nav class="terminal-menu">
                <ul>
                    <li><a href="add.php" class="menu-item">Dodaj produkt</a></li>
                    <li><a href="modify.php" class="menu-item">Modyfikuj</a></li>
                    <li><a href="remove.php" class="menu-item">Usuń</a></li>

                </ul>
            </nav>
        </div>



            <?php
                error_reporting(0);
                @$polaczenie = mysqli_connect("localhost","root","","terminal");
                if(!$polaczenie) {
                    echo "<div class=\"terminal-alert terminal-alert-error\">⚠ Błąd połączenia z bazą SQL</div>";
                }
                else {
                    echo "<div class=\"terminal-alert terminal-alert-primary\">✔ Ustanowiono połączenie z bazą SQL</div>";
                }

            ?>


            <table>
                <caption>produkty</caption>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>produkt</th>
                        <th>ilość</th>
                        <th>cena</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $wyswietl_produkty = "SELECT * FROM produkty";
                        $wynik_wyswietl = mysqli_query($polaczenie, $wyswietl_produkty);

                        while($row=mysqli_fetch_array($wynik_wyswietl)) {
                            echo "<tr>";
                            echo "<td>".($row['id'])."</td><td>".($row['nazwa'])."</td><td>".($row['ilosc'])."</td><td>".($row['cena'])."</td></tr>";
                        }


                    ?>

                </tbody>

            </table>
            <table>
                <caption>klienci</caption>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>imię</th>
                        <th>nazwisko</th>
                        <th>e-mail</th>
                        <th>konto firmowe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $wyswietl_klientow = "SELECT * FROM klienci";
                        $wynik_wyswietl_klientow = mysqli_query($polaczenie, $wyswietl_klientow);

                        while($row2=mysqli_fetch_array($wynik_wyswietl_klientow)) {
                            echo "<tr>";
                            echo "<td>".($row2['id'])."</td><td>".($row2['imie'])."</td><td>".($row2['nazwisko'])."</td><td>".($row2['email'])."</td><td>".($row2['konto_firmowe'])."</td></tr>";
                        }


                    ?>
                </tbody>
            </table>
            <table>
                <caption>zamówienia</caption>
                <thead>
                    <tr>
                        <th>id zamówienia</th>
                        <th>id klienta</th>
                        <th>kwota</th>
                        <th>metoda płatności</th>
                        <th>data zamówienia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $wyswietl_zamowienia = "SELECT * FROM zamowienia";
                        $wynik_wyswietl_zamowienia = mysqli_query($polaczenie, $wyswietl_zamowienia);

                        while($row3=mysqli_fetch_array($wynik_wyswietl_zamowienia)) {
                            echo "<tr>";
                            echo "<td>".($row3['zamowienie_id'])."</td><td>".($row3['klient_id'])."</td><td>".($row3['kwota'])."</td><td>".($row3['metoda_platnosci'])."</td><td>".($row3['data_zamowienia'])."</td></tr>";
                        }

                        mysqli_close($polaczenie);
                    ?>
                </tbody>
            </table>
    <footer>
        <hr>
        <p>Autor: Mirosław Wierzbicki</p>
    </footer>
    </div>
    <script src="toggle.js"></script>
</body>
</html>