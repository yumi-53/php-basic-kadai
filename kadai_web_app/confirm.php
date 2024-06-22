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
  <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <script src="./js/script.js" defer></script>
</head>
<body>
  <h2>入力画面をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  
  <table>
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department; ?></td>
    </tr>
  </table>
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
  <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
  <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  <?php echo $disabled_btn; ?>
  

</body>
</html>