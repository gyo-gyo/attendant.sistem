<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
    <title> 出席確認「教員用」</title>
</head>

<body>

    <header> 出席確認</header>
    <form method="POST" action="Attendant_teacher_check.php">
        <div>
            <label>日付：</label>
            <input type="date" name="deadline">
        </div>
        <select name="class" id="class" size="5" multiple>
            <option value="開発経済論" name="kaihatu">開発経済論</option>
            <option value="三年専門ゼミナール" name="zemi">三年専門ゼミナール</option>
            <option value="ビジネスコミュニケーション" name="comyu">ビジネスコミュニケーション</option>
            <option value="経営財務論" name="keiei">経営財務論</option>
            <option value="外書講読B" name="eng">外書講読B</option>
        </select>
        <input type="submit" value="送信" />
    </form>

</body>

</html>