<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class= "container">
        <h1>Dados sendo recebidos</h1>
        <?php 
        $numeros = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
        
        //REPETIÇÃO FOR 
        for ($index = 0; $index < count($numeros); $index++){
          echo "<div class='alert alert-primary'>valor: $numeros[$index]</div>"; 
        }

            echo "USANDO REPETIÇÃO FOREACH";

        foreach($numeros as $valorDaIteracaoAtual){
            echo "<div class='alert alert-dark'>valor: $valorDaIteracaoAtual</div>";
            
        }


        ?>




    </div>    

</body>

</html>