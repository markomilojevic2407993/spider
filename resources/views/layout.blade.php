<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="d-flex justify-content-between container">
        <div>
            <p class="text-info fw-bolder">SPIDER LOGO</p>
        </div>
        <div >
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="">Facebook</a></li>
                <li class="nav-item"><a class="nav-link" href="">Instagram</a></li>
                <li class="nav-item"><a class="nav-link" href="">Linkedin</a></li>
            </ul>
        </div>
        
    </nav>
    <nav class="container d-flex justify-content-end ">
        <hr>
        <ul class="nav">
            <li class="nav-item h3"><a class="nav-link text-success h3" href="">Home</a></li>
            <li class="nav-item h3"><a class="nav-link text-success h3" href="">Well</a></li>
            <li class="nav-item h3"><a class="nav-link text-success h3" href="">Your post</a></li>
            <li class="nav-item h3"><a class="nav-link text-success h3" href="">Profil</a></li>
            <li class="nav-item h3"><a class="nav-link text-success h3" href="/newPost">New Post</a></li>
            <li class="nav-item h3"><a class="nav-link text-success h3" href="">Login</a></li>
        </ul>
        <hr>
    </nav>
    @yield('body')

    <footer class="container">
        <hr>
        <div></div>
        <div></div>
        <div></div>
    </footer>
</body>
</html>