<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./resources/css/style.css">
    <title>Validação de email</title>
</head>
<body>
    <main>
        <h2>Validador de email</h2>
        <form action="index.php" method="POST">
            <div>
                <label>
                    Insira o seu email
                    <input type="email" placeholder="Email" name="email">
                </label>
            </div>
            <div>
                <label>
                    Insira o seu email novamente
                    <input type="email" placeholder="Email" name="emailAgain">
                </label>
            </div>
            <div>
                <button type="submit">Validar</button>
            </div>
        </form>
        <p><?=validateEmail()?></p>
    </main>
    <footer>
        <span></span>
        <div>
            <p>Gustavo Casagrande Borges</p>
            <p>Soluções tecnológicas</p>
            <p class="emailLine">borges.gustavo@estudante.ifro.edu.br</p>
        </div>
    </footer>
</body>
</html>

<?php

function validateEmail() {
    $extensions = [
        'gmail.com',
        'outlook.com',
        'yahoo.com',
    ];
    $emailExtension = $_POST['email'];
    $emailExtension = explode('@', $emailExtension);


    if ($_POST['email'] == '' && $_POST['emailAgain'] == '') {
        return '';
    } else if ($_POST['email'] != $_POST['emailAgain']) {
        return 'Os emails não coincidem';
    } else if (! in_array($emailExtension[1], $extensions))  {
        return 'A extensão do email não é válida';
    } else {
        return 'O email é válido';
    }
}

?>