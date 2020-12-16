<?php

// ファイルの読み込み
require_once ('Models/Task.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$deadline = $_POST['deadline'];
$type = $_POST['type'];

// DBへのデータ保存
$task = new Task();

$task->create([$title, $contents, $deadline, $type]);

// リダイレクト
header('location:index.php');

exit;