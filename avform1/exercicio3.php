<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
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
                <h1>Calculadora de densidade</h1>
                <form action="resultado3.php" id="CalcForm" method="post">
                    <label for="massa">Massa:</label>
                    <input type="number" id="massa" name="massa">
                    <label for="volume">Volume:</label>
                    <input type="number" id="volume" name="volume">
                    <button type="submit">Calcular</button>
                    <button onclick="returnToMain()" type="button" class="back-btn">Voltar</button>
                </form>
            </div>
        </main>
        <script>
            const form = document.getElementById("CalcForm");
            form.addEventListener("submit", function(event){
                event.preventDefault();
                const massa = document.getElementById("massa").value;
                const volume = document.getElementById("volume").value;
                if(massa.trim() === '' || volume.trim() === ''){
                    alert('Por favor, preencha todos os campos.');
                }else if(volume <= 0){
                    alert('O volume deve ser maior que 0.');
                }else{
                    this.submit();
                }
            });
        </script>
        <script src="return.js"></script>
    </body>
</html>