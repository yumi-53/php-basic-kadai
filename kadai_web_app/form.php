<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員情報入力フォーム</title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=M+PLUS+1p&family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">  <!-- <script src="./js/script.js" defer></script> -->
</head>
<body>
  <main>
    <h2>社員情報入力フォーム</h2>
    <ul>
      <li><div class="item-number">01.</div><div class="item-title current-page">入力フォーム</div></li>
      <li><div class="item-number">02.</div><div class="item-title">内容確認</div></li>
      <li><div class="item-number">03.</div><div class="item-title">登録完了</div></li>
    </ul>
    <div class="form-area">
      <form action="confirm.php" method="post">
        <table class="form-item">
          <tr>
            <th>社員名</th>
            <td><input type="text" name="employee_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>"></td>
          </tr>
          <tr>
            <th>年齢</th>
            <td><input type="text" name="employee_age" value="<?php echo isset($_COOKIE['age']) ? $_COOKIE['age'] : ''; ?>"></td>
          </tr>
          <tr>
            <th>所属部署</th>
            <td class="select-wrapper ">
              <select name="department">
                <option value="開発部" selected>開発部</option>
                <option value="営業部">営業部</option>
                <option value="人事部">人事部</option>
              </select>
            </td>
          </tr>
        </table>
        <div class="btn-area">
          <input type="submit" value="送信" class="submit-btn">
        </div>
      </form>
    </div>
  </main>
</body>
</html>