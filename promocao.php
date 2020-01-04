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
						<li ><a href="./index.php">Página Inicial</a></li>
						<li><a href="./produtos.php" >Produtos</a></li>
						<li class="active"><a href="./promocao.php">Promoções</a></li>
						<li><a href="./novidades.php">Novidades</a></li>
						<li><a href="./servico.php">Anúncios</a></li>
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
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categorias</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Computadores
										
									</label>
									
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Roupas
										
									</label>
									
								</div>


								

								
								

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
					
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top Novos</h3>
							<?php
											$sql = "SELECT * FROM carrinho_produto WHERE produto_tipo='Novo'";
											$result = $link->query($sql);
											$result->num_rows;
											if ($result->num_rows > 0) {
											 while($row = $result->fetch_assoc()) {
												  if($row['produto_tipo']=="Novo" && $result->num_rows <=4){
											
											
											?>
							<div class="product-widget">
								<div class="product-img">
									<?php echo '<img src="./img/'.$row['produto_img'].'" />' ?>
								</div>
								<div class="product-body">
									<?php echo ''.$row['produto_ctg'].'';?>
									<h3 class="product-name"><?php	echo '<a href="product.php?acao=add&id='.$row['produto_id'].'">'.$row['produto_nome'].'</a>'; ?></h3>
									<h4 class="product-price"><?php echo ''.$row['produto_preco'].'';?></h4>
								</div>
							</div>
								<?php
											
											 }
											 }
											}
											
											?>

					
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Ordenar Por:
									<select class="input-select">
										<option value="0">Popular</option>
										
									</select>
								</label>

								<label>
									Mostrar:
									<select class="input-select">
								<option value="0">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
											$sql = "SELECT * FROM carrinho_produto WHERE produto_desconto>0";
											$result = $link->query($sql);
											$result->num_rows;
											if ($result->num_rows > 0) {
											 while($row = $result->fetch_assoc()) {
											
											
											?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<!-- product -->
										
											
										<div class="product">
											<div class="product-img">
											<div class="product-label">
											<span class="sale">-<?php echo ''.$row['produto_desconto'].'';?>%</span>
											<span class="new"><?php if($row['produto_tipo']=="Novo"){
														echo "Novo";
														
													}
													elseif($row['produto_tipo']=="+Vendido")
													{
														echo "Mais Vendido";
													}?></span>
										</div>
												<?php echo '<img src="./img/'.$row['produto_img'].'" />' ?>
												<div class="product-label">
													
													<span class="new"><?php if($row['produto_tipo']=="Novo"){
														echo "Novo";
														
													}
													elseif($row['produto_tipo']=="+Vendido")
													{
														echo "Mais Vendido";
													}?></span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo ''.$row['produto_ctg'].'';?> </p>
												
												
												
												<h3 class="product-name">
												<?php	echo '<a href="product.php?acao=add&id='.$row['produto_id'].'">'.$row['produto_nome'].'</a>'; ?></h3>
												<h4 class="product-price"><?php 
												$desconto = $row['produto_desconto']/100;
												$preco = $row['produto_preco'] - ($row['produto_preco']*$desconto);
												
												echo $preco;
												?> Dbs
												
												<del class="product-old-price">
												<?php echo ''.$row['produto_preco'].'';?> Dbs
												</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="quick-view"><?php	echo '<a href="product.php?acao=add&id='.$row['produto_id'].'">Ver</a>';
											?></button>
												</div>
												
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><?php	echo '<a href="carrinho.php?acao=add&id='.$row['produto_id'].'">Comprar</a>';
											?>
												
											</div>
											
											
											
										</div>
										
										<!-- /product -->
							</div>
							<!-- /product -->
							<?php
											
											 }
											 }
											
											?>

							<div class="clearfix visible-sm visible-xs"></div>


							

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>


							

							
						</div>
						<!-- /store products -->

						
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
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
