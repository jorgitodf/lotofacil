<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lotofácil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    <?php
        require_once('conexao.php');
    ?>
<body>
    <div class="container col-md-12" id="main">
        <div class="row justify-content-start">
            <div class="col-md-12">
                <h4>Concurso Número: <span><?php echo $result_sorteio[0]['id']; ?></span></h4>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-md-12" id="div-num-sort">
                <?php 
                    foreach ($result_sorteio as $value) {
                        echo "<b>Números Sorteados:</b> " . $value['bola1']." ".$value['bola2']." ".$value['bola3']." ".$value['bola4']." ".
                        $value['bola5']." ".$value['bola6']." ".$value['bola7']." ".$value['bola8']." ".$value['bola9']." ".
                        $value['bola10']." ".$value['bola11']." ".$value['bola12']." ".$value['bola13']." ".$value['bola14']." ".
                        $value['bola15'] . "<br><br>";
                    }
                ?>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-md-12" id="div-num-apos">
                <?php 
                    $keys = array_keys($result_apostas);
                    $size = count($result_apostas);
                    $j = 1;
                    for ($i = 0; $i < $size; $i++) {
                        $key   = $keys[$i];
                        $value = $result_apostas[$key];
                        
                        echo "<b>Jogo {$j}:</b> " . $value['bola1']." ".$value['bola2']." ".$value['bola3']." ".$value['bola4']." ".
                        $value['bola5']." ".$value['bola6']." ".$value['bola7']." ".$value['bola8']." ".$value['bola9']." ".
                        $value['bola10']." ".$value['bola11']." ".$value['bola12']." ".$value['bola13']." ".$value['bola14']." ".
                        $value['bola15'] . "  |  ";
                        
                        $row2[] = $value;
                        
                        $result = array_intersect($result_sorteio[0], $row2[$i]);
                        $total = count($result);
                        
                        if ($total == 11) {
                            echo "<b>Total de acertos:</b> " . "<b><span style='background-color: gray; color: white'>".$total."</span></b><br><br>";
                        } else if ($total == 12) {
                            echo "<b>Total de acertos:</b> " . "<b><span style='background-color: orange; color: white'>".$total."</span></b><br><br>";
                        } else if ($total == 13) {
                            echo "<b>Total de acertos:</b> " . "<b><span style='background-color: red; color: white'>".$total."</span></b><br><br>";
                        } else if ($total == 14) {
                            echo "<b>Total de acertos:</b> " . "<b><span style='background-color: blue; color: white'>".$total."</span></b><br><br>";		
                        } else if ($total == 15) {
                            echo "<b>Total de acertos:</b> " . "<b><span style='background-color: green; color: white'>".$total."</span></b><br><br>";			
                        } else {
                            echo "<b>Total de acertos:</b> " . $total. "<br><br>";
                        }	
                            
                        $j++;
                    }
                ?>
            </div>
        </div>
    </div>
    <style>

    </style>
</body>
</html>