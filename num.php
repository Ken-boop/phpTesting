<?php
echo date("Y-m-d H:i:s",strtotime("now"));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>numeron</title>
</head>
<body>
    <br>


    <select class=H>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>

    <select class=T>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>

    <select class=O>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>   
    <?php
    echo "hun:";
    $hun=rand(0,9);
    echo $hun;

    echo "<br>";
    
    echo "ten:";
    $ten=rand(0,9);
    while ($ten==$hun){
        $ten=rand(0,9);
    }
    echo $ten;

    echo "<br>";

    echo "one:";
    $one=rand(0,9);
    while ($one==$hun||$one==$ten){
        $one=rand(0,9);
    }
    echo $one;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    if (H)

    ?>
    
    

    <p>aaaaa</p>
</body>
</html>