<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>




<?php 

                        if(isset($_POST['busca'])){
                            $pesquisa = $_POST['busca'];
                        }else {
                            $pesquisa ='';
                        }



                        include "conexão.php";

                        $sql = "SELECT * FROM cliente WHERE nome LIKE'%$pesquisa%'";

                        $dados = mysqli_query($con, $sql);



?>

    <div class="container"> 
    <div class="row">
    <div class="col">
   
    <header>
        <h1>Painel de Admin</h1>
    </header>
    
            <a href="./Register.html"><button>Cadastro</button></a>
            <a href="../Code/index.html"><button>Início</button></a>
  
  
  
  
     <section>
            <form action="pesquisa.php" method="post">
                <input type="search" name="search" id="search" name="busca">
                <button type="submit">Search</button>
            
            </form>
    </section>




<section>
    <nav>
        <table class="table table-hover">
            <thead>
             
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Pai</th>
                <th scope="col">Mãe</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Renda mensal</th>
                <th scope="col">Gasto mensal</th>
                <th scope="col">Perfil</th>
              </tr>

            </thead>
         
            <tbody>
              

            <?php 
            
                            while($linha = mysqli_fetch_assoc($dados) ){
                                
                                
                                

                            $id = $linha['code_cliente'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];
                            $telefone = $linha['telefone'];
                            $nome_pai = $linha['nome_pai'];
                            $nome_mae = $linha['nome_mae'];
                            $data_nasc = $linha['data_nasc'];
                            $entradas = $linha['entradas'];
                            $saidas = $linha['saidas'];
                            $perfil = $linha['perfil'];
                            
                            echo "
                            <tr>
                                <th scope='row'> $id </th>
                                <th> $nome</th>
                                <th> $email</th>
                                <th> $telefone</th>
                                <th> $nome_pai</th>
                                <th> $nome_mae</th>
                                <th> $data_nasc</th>
                                <th> $entradas</th>
                                <th> $saidas</th>
                                <th> $perfil</th>
                            
                            
                                </tr>";
                            }
            ?>
               
             
         
            </tbody>
          </table>
    </nav>

</section>





</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>