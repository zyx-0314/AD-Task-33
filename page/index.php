<!DOCTYPE html>
<html>
<head>
    <title>Garage</title>
    <link rel="stylesheet" href="/page/assets/css/example.css">
</head>
<body>
    <h1>Cars in the Garage</h1>
    <?php
    $car_names = ["Taycan", "Mustang GT", "Civic Type R", "Cybertruck", "Landcruiser", "F250 Raptor"];
    $car_brands = ["Porsche", "Ford", "Honda", "Tesla", "Toyota", "Ford"];
    $car_years = [2020, 2024, 2024, 2023, 2022, 2020];
    $car_fuel = ["Electric", "Gasoline", "Gasoline", "Electric", "Diesel", "Diesel"];
    $car_image = ["/page/assets/img/taycan.png", "/page/assets/img/mustang.png", "/page/assets/img/civic.png", "/page/assets/img/cybertruck.png", "/page/assets/img/landcruiser.png", "/page/assets/img/f250.png"];

            echo "<h2>Gasoline Cars</h2>";
        echo "<div class='container'>";    
    for ($i = 0; $i < 6; $i++) {
        if ($car_fuel[$i] == 'Gasoline') {
        echo "<div class ='box'>";
        echo "<img src = '$car_image[$i]'>";
        echo "<p><strong>$car_brands[$i]</strong><br><br><span>$car_names[$i] ($car_years[$i])</span><br><br>$car_fuel[$i]</p>";
        echo "</div>";
        }
    }
    echo "</div>";

             echo "<h2>Diesel Cars</h2>";
        echo "<div class='container'>";    
    for ($i = 0; $i < 6; $i++) {
        if ($car_fuel[$i] == 'Diesel') {
        echo "<div class ='box'>";
        echo "<img src = '$car_image[$i]'>";
        echo "<p><strong>$car_brands[$i]</strong><br><br><span>$car_names[$i] ($car_years[$i])</span><br><br>$car_fuel[$i]</p>";
        echo "</div>";
        }
       
    }
    echo "</div>";
    
    
    
    ?>
    
    <a href="/index.php" class="button">Go back to home page</a>
</body>
</html>
