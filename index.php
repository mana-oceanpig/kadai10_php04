<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>リトリートマップ</title>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/0a953b5675.js" crossorigin="anonymous"></script>
        <!-- custom css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/stylesheet.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar">
        <div class="navbar-center">
            <span class="nav-icon">
                <i class="fas fa-bars"></i>
            </span>
            <img src="./images/logo.svg" alt="Service Logo" />
        </div>
    </nav>
    <!-- navbar end -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>リトリートマップ</legend>
                    <label>タイトル・名前：<input type="text" name="name"></label><br>
                    <label>参考URL：<input type="text" name="email"></label><br>
                    <label>行ってみたい度（〜100）：<input type="text" name="age"></label><br>
                    <label>メモ・コメント<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="login.php">管理者ログイン</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="user.php">管理者登録</a></div>
                </div>
            </nav>


    </body>
</html>
