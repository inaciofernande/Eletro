  <?php 
  session_start(); 
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } //adiciona produto 
  
  if(isset($_GET['acao'])){ 
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){ 
      $id = intval($_GET['id']); 
      if(!isset($_SESSION['carrinho'][$id])){ 
        $_SESSION['carrinho'][$id] = 1; 
      } else { 
        $_SESSION['carrinho'][$id] += 1; 
      } 
    } //REMOVER CARRINHO 
  
    if($_GET['acao'] == 'del'){ 
      $id = intval($_GET['id']); 
      if(isset($_SESSION['carrinho'][$id])){ 
        unset($_SESSION['carrinho'][$id]); 
      } 
    } //ALTERAR QUANTIDADE 
    if($_GET['acao'] == 'up' && count($_SESSION['carrinho']) != 0){ 
      if(is_array($_POST['prod'])){ 
        foreach($_POST['prod'] as $id => $qtd){
            $id  = intval($id);
            $qtd = intval($qtd);
            if(!empty($qtd) || $qtd <> 0){
              $_SESSION['carrinho'][$id] = $qtd;
            }else{
              unset($_SESSION['carrinho'][$id]);
            }
        }
      }
    }
          
   }
          
   ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TEC-Casa de Informática</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
		<link rel="shortcut icon" href="./img/favico.png" type="imagem/x-ixon">
		

    </head>
	<body>
		
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
	<table>	
  <tr>	

	 <th><a href="index.php"><button>Pagamento Efetuado</button></a></th>
	 </table>
  <tr>	 
<table>
    <caption>Carrinho de Compras</caption>
    <thead>
      <tr>
		<th width="100"></th>
        <th width="150">Produto</th>
		<th width="150">Pre&ccedil;o</th>
        <th width="100">Quantidade</th>
        <th width="100">SubTotal</th>
       
      </tr>
    </thead>
    <form action="?acao=up" method="post">
    <tfoot>
      <tr>
      
      <tr>
      
    </tfoot>
    <tbody>
     <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '
        <tr>
          <td colspan="5">Não há produto no carrinho</td>
        </tr>
      ';
          } else {
                require("config.php");
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){
                        $sql   = "SELECT *  FROM carrinho_produto WHERE produto_id= $id";
                       
                       $result = $link->query($sql);
					   $ln= $result->fetch_assoc();
                        $nome  = $ln['produto_nome'];
						$img  = $ln['produto_img'];
						
                        $preco = number_format($ln['produto_preco'], 2, ',', '.');
                        $sub   = number_format($ln['produto_preco'] * $qtd, 2, ',', '.');
                        $total += $ln['produto_preco'] * $qtd;
                         echo '
              <tr>      
				<td ><img src="./img/'.$img. '" alt="" width="50px" height="50px"></td>	
                <td>'.$nome.'</td>
				<td>'.$preco. ' Dbs</td>
				<td>'.$qtd.'</td>
                
                
                <td>'.$sub. ' Dbs</td>
                
                            </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                echo '<tr>                         
              <td colspan="4">Total</td>
              <td>'.$total. ' Dbs</td>
                    </tr>';
          }
                   ?>
       
         </tbody>
    </form>
 </table>
</body>		
				
				
			
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		
	</body>
</html>
