<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/terminal.css@0.7.1/dist/terminal.min.css" />
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
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
                    @$polaczenie = mysqli_connect("localhost","root","","terminal");
                if(!$polaczenie) {
                    echo "<div class=\"terminal-alert terminal-alert-error\">Err: Cannot connect to sql</div>";
                }
                else {
                    echo "<div class=\"terminal-alert terminal-alert-primary\">OK: Connected successfully</div>";
                }
                        $wyswietl_produkty = "SELECT * FROM produkty";
                    $wynik_wyswietl = mysqli_query($polaczenie, $wyswietl_produkty);
                    while($row=mysqli_fetch_array($wynik_wyswietl)) {
                        echo "<tr>";
                        echo "<td>".($row['id'])."</td><td>".($row['nazwa'])."</td><td>".($row['ilosc'])."</td><td>".($row['cena'])."</td></tr>";
                    }

                    ?>

                </tbody>
            </table>
            </div>
</body>
</html>