<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado densidade</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="logo">
                    <img src="https://via.placeholder.com/150" alt="Logo UNISUAM">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Principal</a></li>
                        <li><a href="exercicio1.php">Exercício 1</a></li>
                        <li><a href="exercicio2.php">Exercício 2</a></li>
                        <li><a href="exercicio3.php">Exercício 3</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                    $massa = $_POST["massa"];
                    $volume = $_POST["volume"];
                    $densidade = $massa / $volume;
                    echo "<h1>A densidade do material é $densidade g/cm³.</h1>";
                ?>

                <button onclick="returnToMain()" type="button" class="back-btn">Voltar</button>
            </div>
        </main>

        <script src="return.js"></script>
    </body>
</html>