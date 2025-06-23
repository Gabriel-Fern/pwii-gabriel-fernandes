<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <h1>Area de Trapezio</h1>
    <form method=GET>
        Insira a base maior:
        <input type = "number" id = "baseMaior" name = "baseMaior">
        <br>
        Insira a Largura:
        <input type = "number" id = "baseMenor" name = "baseMenor">
        Insira a Altura:
        <input type = "number" id = "altura" name = "altura">
        <br>
        <p></p>

        <input type = "submit" value = "Calcular">
        <input type = "reset" value = "Limpar">
    </form>
</body>
    
    <?php
        $baseMaior = 0.0;
        $baseMenor = 0.0;
        $altura = 0.0;

        $baseMaior = $_GET['baseMaior'];
        $baseMenor = $_GET['baseMenorr'];
        $altura = $_GET['altura'];

        $area = ($baseMaior + $baseMenor) * $altura / 2;

        echo("A area do trapézio é de: " . $area);
    ?>
</html>
