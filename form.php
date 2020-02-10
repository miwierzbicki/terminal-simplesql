<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.1/dist/terminal.min.css" />
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <div class="container">
        <nav class="terminal-nav">
            <div class="terminal-logo">
            <a href="#">Strona główna</a>
            </div>
            <div class="terminal-menu">
                <a href="#" class="menu-item">Produkty</a>
                <a href="#" >Klienci</a>
                <a href="#" >Raport</a>
            </div>
        </nav>

            <form action="#" method="post">
                <fieldset>
                    <legend>Dodaj produkt</legend>
                    <div class="main-form">
                        <input type="text" name="product" id="" placeholder="Nazwa produktu">
                        <input type="number" name="quantity" id="" placeholder="Ilość">
                        <input type="number" name="value" id="" placeholder="Cena">
                        <button type="submit" class="btn btn-default">Dodaj</button>
                    </div>
                </fieldset>
            </form>
            <form action="#" method="post">
                <fieldset>
                    <legend>Edytuj produkt</legend>
                    <div class="main-form">
                        <input type="number" name="id" placeholder="id">
                        <input type="text" name="product" id="" placeholder="Nazwa produktu">
                        <input type="number" name="quantity" id="" placeholder="Ilość">
                        <input type="number" name="price" id="" placeholder="Cena">
                        <button type="submit" class="btn btn-default">Edytuj</button>
                    </div>
                </fieldset>
            </form>
            <form action="#" method="post">
                <fieldset>
                    <legend>Usuń produkt</legend>
                    <div class="main-form">
                        <input type="number" name="id" placeholder="id">
                        <button type="submit" class="btn btn-default">Usuń</button>
                    </div>
                </fieldset>
            </form>
            <?php
                @$polaczenie = mysqli_connect("localhost","root","","terminal");
                if(!$polaczenie) {
                    echo "<div class=\"terminal-alert terminal-alert-error\">Err: Cannot connect to sql</div>";
                }
                else {
                    echo "<div class=\"terminal-alert terminal-alert-primary\">OK: Connected successfully</div>";
                }

                @$name = $_POST['product'];
                @$quantity = $_POST['quantity'];
                @$price = $_POST['price'];
                if(isset($_POST)) {
                $dodaj_produkt = "INSERT INTO produkty VALUES(NULL, '$name', '$quantity','$price') ";
                $wynik = mysqli_query($polaczenie, $dodaj_produkt);
                $wyswietl_produkty = "SELECT * FROM produkty";
                $wynik_wyswietl = mysqli_query($polaczenie, $wyswietl_produkty);
                while($row=mysqli_fetch_array($wynik_wyswietl)) {
                    echo @$row['product'];
                }
            }
            ?>


            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>produkt</th>
                        <th>ilość</th>
                        <th>cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NULL</td>
                        <td>NULL</td>
                        <td>NaN</td>
                        <td>NaN</td>
                    </tr>
                    <?php


                    ?>
                </tbody>
            </table>

    </div>
</body>
</html>