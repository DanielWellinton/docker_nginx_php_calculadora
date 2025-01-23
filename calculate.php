<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['expression'];

    if (!preg_match('#^[0-9+\-*/().\s]+$#', $expression)) {
        echo "Erro: Expressão inválida!";
        exit;
    }

    if (strpos($expression, '/0') !== false) {
        echo "Erro: Divisão por zero!";
        exit;
    }

    if (strlen($expression) > 50) {
        echo "Erro: Expressão muito longa!";
        exit;
    }

    try {
        $result = eval('return ' . $expression . ';');
        if (!is_numeric($result)) {
            echo "Erro: Resultado inválido!";
            exit;
        }
        echo round($result, 2);
    } catch (Throwable $e) {
        echo "Erro: Cálculo inválido!";
    }
}
?>
