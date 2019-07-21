<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])){
        echo $_POST['name'];
        viewTable();
    }

function viewTable(){
    echo $_POST["Name"];

    /*Параметры подключения*/
    $host = 'localhost'; 
    $user = 'root'; 
    $password = ''; 
    $dbName = 'countries'; 
    
    $conn = mysqli_connect($host, $user, $password, $dbName);
    $res = mysqli_query($conn, "insert into `countries`(`Name`, `Capital`, `Peoples`) VALUES ('".addslashes($_POST['name'])."', ' ".addslashes($_POST['capital'])."', ".((int) $_POST['peoples']).');');
    
    $res = mysqli_query($conn, "select * from countries");

    /*Выводим на экран содержимое таблицы стран*/
    echo "<table id='countries'><tr><th>Страна</th><th>Столица</th><th>Численность населения</th></tr>
    <tr>";
    echo "<tr>";
    
    while ($row = mysqli_fetch_assoc($res)){
        echo "<td>";
        echo "<div>".htmlspecialchars(stripcslashes($row['Name']))."</div>";
        echo "</td>";
    
        echo "<td>";
        echo "<div>".htmlspecialchars(stripcslashes($row['Capital']))."</div>";
        echo "</td>";
    
        echo "<td>";
        echo "<div>".htmlspecialchars($row['Peoples'])."</div>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
    }

    echo "</table>";
}
