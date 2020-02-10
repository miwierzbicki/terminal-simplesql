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
                    <li><a href="modify.php" class="menu-item active">Modyfikuj</a></li>
                    <li><a href="remove.php" class="menu-item">Usuń</a></li>

                </ul>
            </nav>
        </div>

            <form action="#" method="post">
                <fieldset>
                    <legend>Modyfikuj produkt po ID</legend>
                    <div class="main-form">
                        <input type="number" name="id" id="" placeholder="id" required>
                        <input type="text" name="product" id="" placeholder="Nowa nazwa" required>
                        <input type="number" name="quantity" id="" placeholder="Nowa ilość" required>
                        <input type="number" name="price" id="" placeholder="Nowa cena" required>
                        <button type="submit" class="btn btn-default">Modyfikuj</button>
                    </div>
                </fieldset>
            </form>
            <div class="terminal-alert">Uwaga! Wszystkie pola muszą być wypełnione</div>
            <?php
            error_reporting(0);
                @$polaczenie = mysqli_connect("localhost","root","","terminal");
                if(!$polaczenie) {
                    echo "<div class=\"terminal-alert terminal-alert-error\">⚠ Błąd połączenia z bazą SQL</div>";
                }
                else {
                    echo "<div class=\"terminal-alert terminal-alert-primary\">✔ Ustanowiono połączenie z bazą SQL</div>";
                }
                    @$id = $_POST['id'];
                    @$name = $_POST['product'];
                    @$quantity = $_POST['quantity'];
                    @$price = $_POST['price'];



                    $mod_produkt = "UPDATE produkty SET nazwa='$name', ilosc=$quantity, cena=$price WHERE id=$id";
                    $wynik = mysqli_query($polaczenie, $mod_produkt);





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

                    <?php

                        $wyswietl_produkty = "SELECT * FROM produkty";
                    $wynik_wyswietl = mysqli_query($polaczenie, $wyswietl_produkty);
                    while($row=mysqli_fetch_array($wynik_wyswietl)) {
                        echo "<tr>";
                        echo "<td>".($row['id'])."</td><td>".($row['nazwa'])."</td><td>".($row['ilosc'])."</td><td>".($row['cena'])."</td></tr>";
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
</body>
</html>