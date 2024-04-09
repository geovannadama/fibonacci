<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h2>Sequência de Fibonacci</h2>
    <form method="post">
        <label for="n">Quantidade de termos:</label>
        <input type="number" name="n" id="n" min="1" required>
        <button type="submit">Gerar Sequência</button>
    </form>

    <?php
    // Função para gerar a sequência de Fibonacci até o N-ésimo termo
    function fibonacci($n) {
        $fibonacci = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

    // Verifica se o formulário foi enviado e se o valor de 'n' foi definido
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
        $n = intval($_POST['n']);

        // Gera a sequência de Fibonacci
        $sequence = fibonacci($n);

        // Calcula a soma dos números na sequência
        $sum = array_sum($sequence);

        // Exibe a sequência e a soma
        echo "<h3>Sequência de Fibonacci até o $n-ésimo termo:</h3>";
        echo "<ul>";
        foreach ($sequence as $number) {
            echo "<li>$number</li>";
        }
        echo "</ul>";
        echo "<p>Soma de todos os números na sequência: $sum</p>";
    }
    ?>

</body>
</html>

