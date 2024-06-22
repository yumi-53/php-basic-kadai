<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員情報入力フォーム</title>
  <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <script src="./js/script.js" defer></script>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="post">
    <table>
      <tr>
        <td>社員名</td>
        <td><input type="text" name="employee_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><input type="text" name="employee_age" value="<?php echo isset($_COOKIE['age']) ? $_COOKIE['age'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td>
          <select name="department">
            <option value="開発部" selected>開発部</option>
            <option value="営業部">営業部</option>
            <option value="人事部">人事部</option>
          </select>
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
</form>
</body>
</html>