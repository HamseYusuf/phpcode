<html>
    <head>
        <title>
            php form
        </title>
    </head>
    <body>
    <?php include('base.php'); ?>
    <?php include('header.php'); ?>
      <div class="container">
        <div class="display-6 mt-4 text-center "> login form </div>
        <div class="row mt-5 flex justify-content-center ">
            <div class="col-4">
            <form class="form-group" action="index.php" method="post">
            <label class="form-label" for="name"> Name</label>
            <input class="form-control " type="text" name="name" placeholder="enter your name ">
            <label class="form-label" for="last_name"> Last name </label>
            <input class="form-control" type="text" name="last_name" placeholder="Enter your last name ">
            <input class="btn btn-info mt-3" type="submit" value="submit">
        </form>
            </div>
        </div>
      </div>
    </body>
</html>