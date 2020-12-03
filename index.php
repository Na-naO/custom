<?php
// タスクの一覧表示機能
// ファイルの読み込み


// データの取得



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TODOAPP</title>
      <link rel="stylesheet" href="./style.css">
    </head>
    <body>
      <header>
        <div class="header-left">
      <h1>TODOAPP</h1>
        </div>
        <div class="header-right">
          <a href="./create.php" class="create">CREATE</a>
        </div>
      </header>
      <main>
      <div class="card card-skin">
    <div class="card__imgframe"></div>
    <div class="card__textbox">
      <div class="card__titletext">
        <p>【Title】</p>
        タイトルが入ります。
      </div>
    <div class="card__overviewtext">
      <p>【Content】</p>
        概要がはいります。概要がはいります。概要がはいります。概要がはいります。
      </div>
    <div class="card_deadline">
      <p>【Deadline】</p>
      期限が入ります。
    </div>
    <div class="card_type">
      <p>【Type】</p>
      種類が入ります。
    </div>
    <div class="button">
    <div class="btn">
    <a href="./edit.php" class="edit">EDIT</a>
    </div>
    <div class="btn">
    <a href="./delete.php" class="delete">DELETE</a>
    </div>
    </div>
    </div>
    </div>
      </main>
    </body>
    </html>

