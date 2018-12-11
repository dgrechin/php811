<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Work</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html.php"><img src="logo.png" width="80px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse show" id="navbarSupportedContent">
        <ul class="navbar-nav sm-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Site map </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Way for pay </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts </a>
            </li>
        </ul>
    </div>
    <form class="form-inline my-2 my-sm-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<br>
<div class="container">
    <div class="row">
        <aside class="col-md-5 ">
            <form>
                <div class="form-group">
                    <label for="email"><b>E-mail:</b></label>
                    <input type="email" id="email" class="form-control" placeholder=E-mail>
                    <div class="input-group">
                        <div class="input-prepend-group">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"> <b>Password:</b></label>
                    <input type="password" name="password" class="form-control" placeholder=Password>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="checkbox" class="form-check-input">
                    <label for="checkbox">Show password</label>
                </div>
                <div class="form-group">
                    <label for="name"> <b>Name:</b></label>
                    <input type="text" id="name" class="form-control" placeholder=Name>
                </div>
                <div class="form-group">
                    <label for="surname"> <b>Surname:</b></label>
                    <input type="text" id="surname" class="form-control" placeholder=Surname>
                </div>
                <div class="form-group">
                    <label for="inputState">Male</label>
                    <select id="inputState" class="form-control">
                        <option >Man</option>
                        <option >Women</option>
                    </select>
                </div>
                <button type="submit" class="btn-primary active btn-block btn-lg" ><b>Registration</b></button>
                <br>
                <button type="reset" class=".btn-danger   btn-xs" ><b>Clear form</b></button>
            </form>
        </aside>
        <div class="col-md-1"></div>
        <div class="col-md-6" >
            <h3>What gives the registration:</h3><br>
            Most sites are free. However, when visiting a website,
            it is often required to perform certain actions, called registration,
            in order to receive admission:<br><br>
            <ul>
                <li>to the expanded content of the resource.</li>
                <li>to its additional functionality.</li>
            </ul>
            <br><br>
            <div class="form-group">
                <label for="file1"><b>Or input file with your information</b></label><br><br>
                <input type="file" class="form-control-file" id="file1">
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity=
"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>