<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIGDAYOUT</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/bigdayout.css">

    <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

</head>
<body> 

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BigDayOut</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">How It Works<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="bdo-chooser">
                <form action="activity" method="post" class="mx-auto px-4 py-3 bdo-chooser__form">
                    <h2 class="text-center">Your Big Day Out</h2>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Group size" min="1" max="12">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">Let’s go!</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>How It Works</h2>
        </div>
        <div class="col-4">
            <img src="images/bgjump.jpg" alt="">
            <h3>Select your group</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic placeat, animi explicabo, dolorum.</p>
        </div>
        <div class="col-4">
            <img src="http://satyr.io/200x200" alt="">
            <h3>Filter activities</h3>
            <p>lorem ipsum</p>
        </div>
        <div class="col-4">
            <img src="http://satyr.io/200x200" alt="">
            <h3>Register &amp; Pay</h3>
            <p>lorem ipsum blah </p>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark bdo-footer">
    <div class="row justify-content-center">
        <div class="col-4">
            <ul class="nav justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link bdo-footer__link" href="#">How It Works<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bdo-footer__link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bdo-footer__link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>

    

    @yield('content')

</body>
</html>