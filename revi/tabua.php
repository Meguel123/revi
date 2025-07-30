<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    echo "<h1>Resultado da Tabuada</h1>";
    if ($numero > 0) {
        echo "<h2>tabuada do numero $numero</h2>";
        for ($i=0; $i <= 10; $i++) { 
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado </p>";
        }
    }
        else {
            echo "<p style= 'color:red;'>numero positivo pls </p>";
        }

}
else {
    echo"<p>Use o formulário </p>";
}
?>