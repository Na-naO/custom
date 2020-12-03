<!-- <?php
// タスクの一覧表示機能
// ファイルの読み込み


// データの取得



?> -->

<?php
    // // ファイルの読み込み
    // require_once('Models/Task.php');
    // require_once('function.php');
    // // データの受け取り
    // $id = $_GET['id'];
    // // DBへのデータ保存
    // $task = (new Task())->findById($id);
    // // ↑ インスタンス化して、その中のメソッドを実行するコードを一行で書いた形
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集 | TODOAPP_teamdevelopment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">TODOAPP</a>
          </nav>
    </div>
  </div>
  <div class="col d-flex justify-content-center">
    <div class="m-5">
        <div class="center-block">
          <div class="card" style="width: 32rem;">
          <div class="bg-dark text-white">
          <div class="p-5">
          <form>
            <div class="form-group">
              <label for="Title">Title</label>
              <input type="" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
              <label for="contents">Content</label>
              <input type="search" class="form-control" id="contents" placeholder="contents">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Deadline</label>
              <input type="date" class="form-control" id="deadline" placeholder="deadline">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Type</label>
              <input type="text" class="form-control" id="type" placeholder="type">
            </div>
            <div class="mt-5">
            <div class="bg-purple text-white">
            <div class="col d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
            </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>