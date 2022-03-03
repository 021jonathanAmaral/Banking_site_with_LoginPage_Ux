<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items:center;
            background-image: url(../img/nyc-aerial-view-of-new-york-city-at-night.jpg) ;
            background-repeat: no-repeat;
             background-size: 100% ;
             gap:10px;
           
        }
        section{
            display: flex;
            justify-content: center;
            align-items:center;
            background: white;
            height: 100px;
            width: 400px;
            border-radius:10px;
            color:black;
            margin-top: 150px;
            opacity:90%;

        }button{
            display: flex;
            justify-content: center;
            align-items:center;
            
            height: 100px;
            width: 100px;
            border-radius:10px;
            
            cursor:pointer;

            background: gray;
            color: white;

            margin-top: 150px;
            
            opacity:90%;

        }button:hover{
            background: white;
            color:black;
           
        }
    </style>
    
    
    <section>
        <?php 
        include "conexão.php";



            $nome = $_POST['nometxt'];
            $email = $_POST['emailtxt'];
            $telefone = $_POST['teletxt'];
            $nome_pai = $_POST['nome_paitxt'];
            $nome_mae = $_POST['nome_maetxt'];
            $data_nasc = $_POST['data_nasctxt'];
            $entradas = $_POST['entradastxt'];
            $saidas = $_POST['saidastxt'];
            $perfil = $_POST['perfiltxt'];

            $sql = "INSERT INTO `cliente`(`nome`, `email`, `telefone`, `nome_pai`, `nome_mae`, `data_nasc`, `entradas`, `saidas`, `perfil`) 
                        VALUES ('$nome','$email','$telefone','$nome_pai','$nome_mae','$data_nasc','$entradas','$saidas','$perfil')";
            
            

            if(mysqli_query($con, $sql)){
                echo "$nome cadastrado com sucesso";
            }else
                echo "$nome Não foi cadastrado";
                
   
        
        ?>
    </section>
    
    <a href="../Code/index.html"><button>RETORNAR</button></a>











</body>
</html>

