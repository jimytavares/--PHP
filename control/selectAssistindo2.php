
<?php

   $servidor = 'localhost';
   $usuario  = 'testee';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

   //enviar instrucao sql para o banco
   $sql = "SELECT * FROM vw_assistido WHERE id_usuario = " . $_SESSION['id'];

    $resultado = $mysqli->query($sql);

    // $dados = mysqli_fetch_array($resultado)
    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
            echo "<td>" . $dados["nome"];
                echo "</td>";
            echo "<td>" . $dados["episodio"];
                echo "</td>";
            echo "<td>" . $dados["dia_semana"];
                echo "</td>";
        echo "</tr>";
    }
?>