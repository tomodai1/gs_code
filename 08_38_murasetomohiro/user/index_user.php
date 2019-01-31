<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>User登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_user.php">User一覧へ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert_user.php">
  <div class="jumbotron">
   <fieldset>
    <legend>User登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PW：<input type="text" name="lpw"></label><br>
     <label>管理者権限：</label>
     <input type="radio" name="kanri_flg" value="0"></label>
     <label>管理者</label>
     <input type="radio" name="kanri_flg" value="1"></label>
     <label>スーパー管理者</label><br>
     <label>使用権限：</label>
     <input type="radio" name="life_flg" value="0"></label>
     <label>使用中</label>
     <input type="radio" name="life_flg" value="1"></label>
     <label>使用しなくなった</label><br>
     <!-- <label>管理者権限：<input type="number" name="kanri_flg"></label><br> -->
     <!-- <label>使用者権限：<input type="number" name="life_flg"></label><br> -->
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
