 <?php 
  session_start(); 
  include 'config.php';
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
    if(($_GET['acao'] == 'up') && (count($_SESSION['carrinho']) != 0)){ 
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
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-map-marker"></i>Trindade, São Tomé</a></li>
						<li><a href="tel:9893259"><i class="fa fa-phone"></i>+239 989 3259</a></li>
						<li><a href="mailto:tecpontedigitalstp@hotmail.com" target="_blank"><i class="fa fa-envelope-o"></i>tecpontedigitalstp@hotmail.com</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="https://pt.wikipedia.org/wiki/Dobra_s%C3%A3o-tomense"> Moeda: Dobras</a></li>
						
					</ul>
					
					
				
					
						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="./index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="POST" action="pesquisar.php"> 
								
									<input name="pesquisar" type="text" class="input" placeholder="Procurar Aqui">
								<button class="search-btn" type="submit">Procurar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="./conta.php">
										<i class="fa fa-user-o"></i>
										
										
											
										<span><?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){echo "Ola ";echo htmlspecialchars($_SESSION["username"]); 
										}
										else{ echo "Conta";}?> </span>
											
										
										
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a href="./carrinho.php" >
										<i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">
										<?php echo count($_SESSION['carrinho'])?></div>
									</a>
									
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="./index.php">Página Inicial</a></li>
						<li><a href="./produtos.php" >Produtos</a></li>
						<li><a href="./promocao.php">Promoções</a></li>
						<li><a href="./novidades.php">Novidades</a></li>
						<li  class="active"><a href="./servico.php">Anúncios</a></li>
						<li><a href="./loja.php">Lojas</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		<!-- BREADCRUMB -->
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
		<div id="hot-deal" class="sections">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
						<div class="hot-deal">
							
							<a class="primary-btn cta-btna" href="./login.php">Anunciar AGORA</a>
						</div>
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
			<!-- container -->
			
			<div class="container">
			<h3>&nbsp;&nbsp;Anúncios</h3>
			</br>
			
			<div class="col-sm-6 col-lg-3" border="1px"><img  class="img-responsive" src="./logo/Ativo 9.png" width="360px" height="404px">
			</br>
              <h4><a href="https://www.facebook.com/DigitalSTP" target="_blank">Tec-Ponte</a></h4><span class="small small-md">Tec-Ponte Digital STP</span>
              <p>A Empresa de compras e vendas on-line que chegou para ajudar os seus clientes da melhor forma possível.</p>
            </div>
			
			<div class="col-sm-6 col-lg-3"><img class="img-responsive" src="./logo/anu1.png" width="360px" height="404px">
			</br>
              <h4><a href="https://www.facebook.com/zuntatv" target="_blank"> Zunta TV</a></h4><span class="small small-md" Televisão Independente</span>
              <p>Zunta TV é um meio de Comunicação Social disponível em qualquer parte do mundo</p>
            </div>
			<div class="col-sm-6 col-lg-3"><img class="img-responsive" src="./img/a.jpg" width="360px" height="404px">
			</br>
              <h4><a href="https://www.youtube.com/watch?v=_IHBW4nH628&feature=share&fbclid=IwAR25JjOUQrUjSzjZJcAE6Zmtf0f9lGGY0IazRsVK2YI56EfFplH8gBU4-Eg" target="_blank"> Documentário</a></h4><span class="small small-md">Documentário da vida dos estudantes são-tomenses</span>
              <p>É um documentário que tem como objetivo de mostrar as dificuldades dos estudantes em bragança</p>
            </div>
			<div class="col-sm-6 col-lg-3"><img class="img-responsive" src="./logo/ed.jpg" width="360px" height="404px">
			</br>
              <h4><a href="https://www.facebook.com/EdynilsonDiasPoetaSaoTomePrincipe" target="_blank"> Poeta Sao-Tomense</a></h4><span class="small small-md">Edynilson Dias</span>
              <p>É um dos escritores da nova geração que tem levado a literatura e o nome de São tomé e Principe além fronteira.</p>
            </div>
			
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Assine a <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Digite seu Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscrever</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/DigitalSTP" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
						
								<li>
									<a href="https://www.instagram.com/tecponte_digital_stp " target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://wa.me/2399893259" target="_blank"><i class="fa fa-whatsapp"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre Nós</h3>
								<p>Mais do que apresentar variedade e inovação, a aStar oferece, há mais de uma década, os melhores preços.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Trindade, São Tomé</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+239 989 3259</a></li>
								
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="./product.php">Produtos</a></li>
									<li><a href="./promocao.php">Promoções</a></li>
									<li><a href="./novidade.php">Novidades</a></li>
									<li><a href="./servico.php">Serviços</a></li>
									<li><a href="./loja.php">Lojas</a></li>
									
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informação</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre Nós</a></li>
									<li><a href="#">Contactos</a></li>
									<li><a href="#">Politica de Privacidade</a></li>
									<li><a href="#">Encomendas e Devoluções</a></li>
									<li><a href="#">Termo & Condições</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Serviço</h3>
								<ul class="footer-links">
									<li><a href="./conta.php">Minha Conta</a></li>
									<li><a href="./carrinho.php">Carrinho</a></li>
									<li><a href="#">Acompanhar Pedido</a></li>
									<li><a href="mailto:tecpontedigitalstp@hotmail.com">Ajuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
