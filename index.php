<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="popup">
        <div class="bar1"></div>
        <a class="listEmailsButton" href="core/emailList.php">
            <img class="shopme" src="img/shopmee.svg" />
        </a>
        <div class="bar2"></div>
        <br>
        <h1 class="title">Newsletter</h1>
        <p class="paragraph">Inscreva-se na nossa newsletter.</p>
        <form class="leadForm" action="core/registerEmail.php" method="post">
            <input class="emailField" type="email" name="emailField" placeholder="Informe o seu melhor e-mail" required />
            <input class="sendButton" type="submit" name="sendButton" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>