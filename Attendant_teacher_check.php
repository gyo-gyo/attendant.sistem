  <?php
    $class = $_POST["class"];
    echo "$class<br>";

    $file = fopen('./data/' . $class . '.csv', 'r');

    // $line = fgets($file);
    // echo "$line<br>";
    echo "<table>
        <tr>
            <th>学籍番号</th>
            <th>名前</th>
        </tr>";

    // #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
    while ($line = fgetcsv($file)) {
        echo "<tr>";
        for ($i = 0; $i < count($line); $i++) {
            echo "<td>" . $line[$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    fclose($file);
