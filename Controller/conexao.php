<?php
 

class conexao{

    public function conectar(){
        $conex = new PDO("pgsql:host=localhost;port=5432;dbname=advocacia;user=jean;password=dyjesus0129");
        if(isset($conex)){
            echo"<script>alert('Houve conexão');</script>";
        }else{
            echo"<script>alert('Não houve conexao!');</script>";
        }
       
    }
}




?>




<html>
    </head></head>

    <body style="background-color: black;">
        <?php
          $conn = new conexao;
          $conn->conectar();

        ?>

    </body>


</html>
