<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triângulo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        form, .resultado {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label, input, button {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        
        if (is_numeric($base) && is_numeric($altura)) {
            $area = ($base * $altura) / 2;
            $limite = 100;
            echo "<div class='resultado'>";
            echo "<p>A área do triângulo é: " . number_format($area, 2) . "</p>";
            echo $area > $limite ? "<p>A área é maior que 100.</p>" : "<p>A área é menor ou igual a 100.</p>";
            echo "<a href=''>Voltar</a>";
            echo "</div>";
        } else {
            echo "<div class='resultado'><p>Dados inválidos!</p><a href=''>Voltar</a></div>";
        }
    } else {
    ?>
        <form method="post">
            <label for="base">Base:</label>
            <input type="number" id="base" name="base" step="0.01" required>
            
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" required>
            
            <button type="submit">Calcular Área</button>
        </form>
    <?php
    }
    ?>
</body>
</html>
