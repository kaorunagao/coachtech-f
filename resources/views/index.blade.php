<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/" method="post">
    @csrf
    <label>氏名<label><br>
    <input type="text" name="name"><br>
    <label>メールアドレス<label><br>
    <input type="email" name="email"><br>
    <input type="submit" value="送信する">
  </form>

</body>

</html>