<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作成 | TODOAPP_teamdevelopment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
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
                        <form action="store.php" method="post">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="" class="form-control" name="title" id="title" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label for="contents">Content</label>
                            <input type="search" class="form-control" name="contents" id="contents" placeholder="contents">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="deadline" placeholder="deadline">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Type</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="type">
                        </div>
                        <div class="mt-5">
                            <div class="bg-purple text-white">
                                <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn_purple">POST</button>
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