<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }
        .exercicio {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            margin-bottom: 30px;
            padding: 24px 32px;
            transition: box-shadow 0.2s;
        }
        .exercicio:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }
        .ex-titulo {
            margin-top: 0;
            color: #1976d2;
            font-size: 1.3em;
        }
        .ex-explicacao {
            color: #555;
            margin-bottom: 16px;
            font-size: 1em;
        }
        p {
            font-size: 1.1em;
            color: #222;
        }
        @media (max-width: 600px) {
            .container {
                padding: 8px;
            }
            .exercicio {
                padding: 16px;
            }
        }
    </style>
</head>
<body>
    <h1>Lista de Exercícios - PHP</h1>
    <div class="container">

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 1</h2>
            <div class="ex-explicacao">Somar dois números e multiplicar o resultado pelo primeiro número.</div>
            <?php
                $num1 = 10;
                $num2 = 5;
                $soma = $num1 + $num2;
                $resultado1 = $soma * $num1;
                echo "<p>O resultado da operação é: " . $resultado1 . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 2</h2>
            <div class="ex-explicacao">Calcular a média de três números.</div>
            <?php
                $val1 = 10;
                $val2 = 8;
                $val3 = 7;
                $media = ($val1 + $val2 + $val3) / 3;
                echo "<p>A média dos números é: " . $media . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 3</h2>
            <div class="ex-explicacao">Calcular e mostrar 15% de um valor.</div>
            <?php
                $valor3 = 200;
                $desconto15 = $valor3 * 0.15;
                echo "<p>15% de " . $valor3 . " é: " . $desconto15 . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 4</h2>
            <div class="ex-explicacao">Calcular e mostrar 5% e 50% de um valor.</div>
            <?php
                $valor4 = 500;
                $desconto5 = $valor4 * 0.05;
                $desconto50 = $valor4 * 0.50;
                echo "<p>5% de " . $valor4 . " é: " . $desconto5 . "</p>";
                echo "<p>50% de " . $valor4 . " é: " . $desconto50 . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 5</h2>
            <div class="ex-explicacao">Calcular o quadrado de dois números e somar os resultados.</div>
            <?php
                $num5_a = 3;
                $num5_b = 4;
                $quadrado_a = $num5_a * $num5_a;
                $quadrado_b = $num5_b * $num5_b;
                $soma_quadrados = $quadrado_a + $quadrado_b;
                echo "<p>A soma dos quadrados é: " . $soma_quadrados . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 6</h2>
            <div class="ex-explicacao">Converter velocidade de m/s para km/h.</div>
            <?php
                $velocidade_ms = 25;
                $velocidade_kmh = $velocidade_ms * 3.6;
                echo "<p>" . $velocidade_ms . " m/s equivalem a " . $velocidade_kmh . " km/h.</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 7</h2>
            <div class="ex-explicacao">Calcular o IMC (Índice de Massa Corporal).</div>
            <?php
                $peso = 70; // em kg
                $altura = 1.75; // em metros
                $imc = $peso / ($altura * $altura);
                echo "<p>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 8</h2>
            <div class="ex-explicacao">Calcular e mostrar um desconto de 9%.</div>
            <?php
                $valor8 = 150;
                $desconto9 = $valor8 * 0.09;
                $valor_final8 = $valor8 - $desconto9;
                echo "<p>O valor com 9% de desconto é: " . $valor_final8 . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 9</h2>
            <div class="ex-explicacao">Calcular e mostrar desconto de 7% com detalhes.</div>
            <?php
                $valor_original9 = 300;
                $desconto_valor9 = $valor_original9 * 0.07;
                $valor_final9 = $valor_original9 - $desconto_valor9;
                echo "<p>Valor Original: " . $valor_original9 . "</p>";
                echo "<p>Valor do Desconto (7%): " . number_format($desconto_valor9, 2, ',', '.') . "</p>";
                echo "<p>Valor com Desconto: " . number_format($valor_final9, 2, ',', '.') . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 10</h2>
            <div class="ex-explicacao">Calcular o volume de uma caixa retangular.</div>
            <?php
                $comprimento = 5;
                $largura = 3;
                $altura = 2;
                $volume = $comprimento * $largura * $altura;
                echo "<p>O volume da caixa é: " . $volume . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 11</h2>
            <div class="ex-explicacao">Calcular e mostrar um desconto de 27%.</div>
            <?php
                $valor11 = 450;
                $desconto27 = $valor11 * 0.27;
                $valor_final11 = $valor11 - $desconto27;
                echo "<p>O valor com 27% de desconto é: " . number_format($valor_final11, 2, ',', '.') . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 12</h2>
            <div class="ex-explicacao">Calcular a área de um trapézio.</div>
            <?php
                $base_maior = 10;
                $base_menor = 6;
                $altura_trapezio = 4;
                $area_trapezio = (($base_maior + $base_menor) * $altura_trapezio) / 2;
                echo "<p>A área do trapézio é: " . $area_trapezio . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 13</h2>
            <div class="ex-explicacao">Calcular a média final com pesos.</div>
            <?php
                $nota1 = 7.5;
                $nota2 = 8.0;
                $nota3 = 9.5;
                $peso1 = 2;
                $peso2 = 3;
                $peso3 = 5;
                $media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);
                echo "<p>A média final do aluno é: " . number_format($media_ponderada, 2, ',', '.') . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 14</h2>
            <div class="ex-explicacao">Calcular valor total e parcelas com acréscimo de 16%.</div>
            <?php
                $valor_produto = 500;
                $acrescimo = $valor_produto * 0.16;
                $valor_total_compra = $valor_produto + $acrescimo;
                $numero_de_parcelas = 10;
                $valor_parcela = $valor_total_compra / $numero_de_parcelas;
                echo "<p>Valor total da compra com acréscimo de 16%: " . number_format($valor_total_compra, 2, ',', '.') . "</p>";
                echo "<p>O valor de cada parcela (10x) é: " . number_format($valor_parcela, 2, ',', '.') . "</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2 class="ex-titulo">Exercício 15</h2>
            <div class="ex-explicacao">Calcular consumo médio de combustível.</div>
            <?php
                $distancia_km = 250;
                $litros_consumidos = 20;
                $consumo_medio = $distancia_km / $litros_consumidos;
                echo "<p>O consumo médio do veículo é: " . $consumo_medio . " Km/litro.</p>";
            ?>
        </div>

    </div>
</body>
</html>