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
    <br><br><br>
    <div class="container" style="background-color: lightgrey;">
        <form action="recebearray.php" method="post"> 
            <br><br>
            <h1 class="text-center" style="color: red;">ARRAY </h1>
            <br><br>
            <label for="" class="form-label">primeiro numero</label>
            <input type="number" name="numero[]" class="form-control" required value ="<?=$_POST ['numero[]'] ?? null?>" >
            <label for="" class="form-label">segundo número</label>
            <br>
            <input type="number" name="numero[]" class="form-control" required value ="<?=$_POST ['numero[]'] ?? null?>" >
            <label for="" class="form-label">terceiro número</label>
            <br>
            <input type="number" name="numero[]" class="form-control" required value ="<?=$_POST ['numero[]'] ?? null?>" >
            
        
            <br><br>
            <button class="btn btn-success mt-2">ENVIAR</button>
            <br><br><br>
        </form>
               
        

        
    </div>
</body>

</html>