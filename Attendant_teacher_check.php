  <?php
    $class = $_POST["class"];
    $deadline = $_POST["deadline"];
    echo "$class<br>";

    $file = fopen('./data/' . $deadline . $class . '.csv', 'r+b');

    // $line = fgets($file);
    // echo "$line<br>";

    echo "<table>
        <tr>
            <th style='border:solid 1px black'>学籍番号</th>
            <th style='border:solid 1px black'>名前</th>
        </tr>";

    // #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
    // $line = fgetcsv($file);
    // var_dump($file);
    $count = 0;
    while ($line = fgetcsv($file)) {

        // $results[] = trim(fgets($file));
        echo "<tr>";
        for ($i = 0; $i < count($line); $i++) {
            echo "<td style='border:solid 1px black'>" . $line[$i] . "</td>";
        }
        echo "</tr>";
        $count++;
    }
    echo "</table>";
    echo "総数" . $count . "人";
    fclose($file);
