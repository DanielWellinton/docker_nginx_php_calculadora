$(document).ready(function () {
    let currentExpression = "";
    
    $(".number, .operator").on("click", function () {
        const value = $(this).data("value");
        const lastChar = currentExpression.slice(-1);

        if (["+", "-", "*", "/"].includes(lastChar) && ["+", "-", "*", "/"].includes(value)) {
            currentExpression = currentExpression.slice(0, -1);
        }

        currentExpression += value;
        $("#result").val(currentExpression);
    });

    $("#clear").on("click", function () {
        currentExpression = "";
        $("#result").val("");
    });

    $("#equals").on("click", function () {
        if (currentExpression) {
            $.ajax({
                url: "calculate.php",
                method: "POST",
                data: { expression: currentExpression },
                success: function (response) {
                    $("#result").val(response);
                    currentExpression = response;
                },
                error: function () {
                    alert("Erro ao calcular. Tente novamente.");
                }
            });
        }
    });
});
