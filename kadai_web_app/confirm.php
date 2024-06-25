<?php
session_start();

// POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

$errors = [];

// 名前のバリテージョン
if (empty($name)) {
  $errors[] = 'お名前を入力してください。';
}

// 年齢バリテージョン
if (empty($age)) {
  $errors[] = '年齢を入力してください。';
}

// エラーなければセッション・クッキー保存
if (empty($errors)) {
  $_SESSION['name'] = $name;
  $_SESSION['age'] = $age;
  $_SESSION['department'] = $department;

  // クッキー登録（1時間）
  setcookie('name', $name, time() + 3600);
  setcookie('age', $age, time() + 3600);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=M+PLUS+1p&family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">  <!-- <script src="./js/script.js" defer></script> -->
</head>
<body>
  <main>
    <h2>入力画面をご確認ください。</h2>
    <ul>
        <li><div class="item-number">01.</div><div class="item-title">入力フォーム</div></li>
        <li><div class="item-number">02.</div><div class="item-title current-page">内容確認</div></li>
        <li><div class="item-number">03.</div><div class="item-title">登録完了</div></li>
    </ul>
    <div class="form-area">
      <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
      <?php
        // エラー表示
        if (!empty($errors)) {
          foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
          }

          // 確定ボタン無効化
          $disabled_btn = '<script> document.getElementById("confirm-btn").disabled = true; </script>';
        } else {
          $disabled_btn = "";
        }
      ?>
      <table class="form-item">
        
        <tr>
          <th>項目</th>
          <td>入力内容</td>
        </tr>
        <tr>
          <th>社員名</th>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <th>年齢</th>
          <td><?php echo $age; ?></td>
        </tr>
        <tr>
          <th>所属部署</th>
          <td><?php echo $department; ?></td>
        </tr>
      </table>
      <div class="btn-area">
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        <?php echo $disabled_btn; ?>
      </div>
    </div>
  </main>
</body>
</html>