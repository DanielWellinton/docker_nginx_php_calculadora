<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Real</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="calculator">
        <div class="display">
            <input type="text" id="result" readonly>
        </div>
        <div class="buttons">
            <button class="number" data-value="7">7</button>
            <button class="number" data-value="8">8</button>
            <button class="number" data-value="9">9</button>
            <button class="operator" data-value="/">÷</button>

            <button class="number" data-value="4">4</button>
            <button class="number" data-value="5">5</button>
            <button class="number" data-value="6">6</button>
            <button class="operator" data-value="*">×</button>

            <button class="number" data-value="1">1</button>
            <button class="number" data-value="2">2</button>
            <button class="number" data-value="3">3</button>
            <button class="operator" data-value="-">−</button>

            <button class="number" data-value="0">0</button>
            <button id="clear">C</button>
            <button id="equals">=</button>
            <button class="operator" data-value="+">+</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
