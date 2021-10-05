<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>por favor ingrese los números:</label>
        <input type="number"name="valor"value="valor"><br><br>
        <input type="submit"value="Calcular">
    </form>
    <php?
    $num=0;
    $num=$_POST['valor'];
    $nums1=array();
    for ($i=0; $i<$num ; $i++) {
        $nums1[$i]=rand(0,100);
        echo $num1[$i].',';
    }
    $numeros=0;
    function numMayor($numeros){
        $numM=0;
        for ($i=0; $i < $numM ; $i++){
            $numM=max($numeros[$i]);
        }
        return $numM;
    }


    echo 'el numero mayor es : '.numMayor($numeros);
    ?>
</body>
</html>


