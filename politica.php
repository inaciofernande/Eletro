<?php
// Initialize the session
session_start();
  require("config.php");
// Check if the user is 
if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TEC-Ponte Digital STP</title>

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

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-map-marker"></i>Trindade, São Tomé</a></li>
						<li><a href="tel:9893259"><i class="fa fa-phone" target="_blank"></i>+239 989 3259</a></li>
						<li><a href="mailto:tecpontedigitalstp@hotmail.com"><i class="fa fa-envelope-o"></i>tecpontedigitalstp@hotmail.com</a></li>
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
						<li class="active"><a href="./index.php">Página Inicial</a></li>
						<li><a href="./produtos.php" >Produtos</a></li>
						<li><a href="./promocao.php">Promoções</a></li>
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
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
				<div id="aside" class="col-md-2">
						
					</div>
				
			 <div class="col-md-8">
			 <h2>Politica de Privacidade</h2>
			 </br>
        <ol type="A">
<li><h3>Introdução</h3>
 <ol type="1">

   <li>A privacidade dos visitantes do nosso site é muito importante para nós, e estamos comprometidos em protegê-la. Esta política explica o que faremos com suas informações pessoais.</li>
   <li>Consentir com o uso de cookies de acordo com os termos desta política quando você acessa nosso site pela primeira vez nos permite usar cookies toda vez que você acessa nosso site.</li>
</ol>

</li>




<li><h3>Créditos</h3></li>
Este documento foi criado usando um modelo da SEQ Legal (seqlegal.com) modificado pelo Website Planet (www.websiteplanet.com)


<li><h3>Coleta de informações pessoais</h3>
Os seguintes tipos de informações pessoais podem ser coletados, armazenados e usados:
 <ol type="1">


<li>informações sobre o seu computador, incluindo seu endereço IP, localização geográfica, tipo e versão do navegador e sistema operacional;</li>
<li>informações sobre suas visitas e uso deste site, incluindo fonte de referência, duração da visita, visualizações de página e caminhos de navegação no site;</li>
<li>informações, como seu endereço de e-mail, que você digita quando se registra em nosso site;</li>
<li>informações que você digita ao criar um perfil em nosso site – por exemplo, seu nome, fotos de perfil, sexo, data de nascimento, status de relacionamento, interesses e hobbies, informações educacionais e de emprego;</li>
<li>informações, como seu nome e endereço de e-mail, que você digita para configurar assinaturas de nossos e-mails e/ou newsletters;</li>
<li>informações que você digita durante o uso dos serviços em nosso site;</li>
<li>informações geradas ao usar nosso site, incluindo quando, com que frequência e em que circunstâncias você o utiliza;</li>
<li>informações relacionadas a tudo o que você compra, serviços que usa ou transações que realiza através do nosso site, incluindo nome, endereço, número de telefone, endereço de e-mail e dados do cartão de crédito;</li>
<li>informações que você publica em nosso site com a intenção de publicá-las na internet, incluindo seu nome de usuário, fotos de perfil e o conteúdo de suas publicações;</li>
<li>informações contidas em quaisquer comunicações que você nos envia por e-mail ou através de nosso site, incluindo o conteúdo e os metadados da comunicação;
</li>
<li>qualquer outra informação pessoal que você nos enviar.</li>
</ol>
Antes de nos divulgar informações pessoais de outra pessoa, você deve obter o consentimento dessa pessoa para a divulgação e o processamento dessas informações pessoais de acordo com esta política.
</li>
<li><h3>Uso de suas informações pessoais</h3>
As informações pessoais que nos são enviadas por meio de nosso site serão usadas para os fins especificados nesta política ou nas páginas relevantes do site. Podemos usar suas informações pessoais para o seguinte:
<ol type="1">
<li>administrar nosso site e nossos negócios;</li>
<li>personalizar nosso site para você;</li>
<li>possibilitar o uso dos serviços disponíveis em nosso site;</li>
<li>enviar produtos adquiridos através do nosso site;</li>
<li>prestar serviços adquiridos através do nosso site;</li>
<li>enviar extratos, faturas e lembretes de pagamento, bem como coletar seus pagamentos;</li>
<li>enviar comunicações comerciais que não sejam de marketing;</li>
<li>enviar notificações por e-mail solicitadas especificamente por você;</li>
<li>enviar nossa newsletter por e-mail, caso você a tenha solicitado (você pode nos informar a qualquer momento se não quiser mais receber a newsletter);</li>
<li>enviar comunicações de marketing relacionadas aos nossos negócios ou aos negócios de terceiros cuidadosamente selecionados que acreditamos ser do seu interesse, por correio ou, onde você especificamente concordou com isso, por e-mail ou tecnologia semelhante (você pode nos informar a qualquer momento se não mais quiser mais receber comunicações de marketing);</li>
<li>fornecer a terceiros informações estatísticas sobre nossos usuários (mas esses terceiros não poderão identificar nenhum usuário individual a partir dessas informações);</li>
<li>lidar com perguntas e reclamações feitas por você ou sobre você em relação ao nosso site;
<li>manter nosso site seguro e evitar fraudes;</li>
<li>verificar a conformidade com os termos e condições que regem o uso do nosso site (incluindo o monitoramento de mensagens privadas enviadas por meio do serviço de mensagens privadas do nosso site); e</li>
<li>outros usos.</li>

</ol>
<p>Se você enviar informações pessoais para publicação em nosso site, publicaremos e usaremos essas informações de acordo com a licença que você nos concedeu.</p>

<p>Suas configurações de privacidade podem ser usadas para limitar a publicação de suas informações em nosso site e ajustadas através do uso de controles de privacidade no site.</p>

<p>Sem seu consentimento expresso, não forneceremos suas informações pessoais a terceiros para fins de marketing direto por parte deles ou de terceiros.</p>
</li>





<li><h3>Divulgação de informações pessoais

</li>

Podemos divulgar suas informações pessoais a qualquer um de nossos funcionários, executivos, seguradoras, consultores profissionais, agentes, fornecedores ou subcontratados conforme razoavelmente necessário para os fins estabelecidos nesta política.

Podemos divulgar suas informações pessoais a qualquer membro de nosso grupo de empresas (isso significa nossas subsidiárias, nossa holding e todas as suas subsidiárias) conforme razoavelmente necessário para os fins estabelecidos nesta política.

Podemos divulgar suas informações pessoais:

na medida em que somos obrigados a fazê-lo por lei;
em relação a qualquer processo judicial em andamento ou potencial;
para estabelecer, exercer ou defender nossos direitos legais (incluindo fornecer informações a terceiros para fins de prevenção de fraudes e redução do risco de crédito);
ao comprador (ou comprador em potencial) de qualquer negócio ou ativo que estejamos vendendo (ou contemplando vender); e
a qualquer pessoa que acreditemos razoavelmente que possa solicitar a um tribunal ou outra autoridade competente a divulgação dessas informações pessoais, quando, em nossa opinião razoável, for provável que tal tribunal ou autoridade ordene a divulgação dessas informações pessoais.
Exceto conforme estabelecido nesta política, não forneceremos suas informações pessoais a terceiros.

<li>Transferências internacionais de dados</li>

As informações que coletamos podem ser armazenadas, processadas e transferidas entre qualquer um dos países em que operamos, a fim de nos permitir usar as informações de acordo com esta política.
As informações que coletamos podem ser transferidas para os seguintes países que não possuem leis de proteção de dados equivalentes às vigentes no Espaço Econômico Europeu: Estados Unidos da América, Rússia, Japão, China e Índia.
As informações pessoais que você publica em nosso site ou envia para publicação em nosso site podem estar disponíveis, através da internet, em todo o mundo. Não podemos impedir o uso ou uso indevido de tais informações por terceiros.
Você concorda expressamente com as transferências de informações pessoais descritas nesta seção F.
<li>Retenção de informações pessoais</li>

Esta seção G define nossas políticas e procedimentos de retenção de dados, projetados para ajudar a garantir o cumprimento de nossas obrigações legais em relação à retenção e exclusão de informações pessoais.
As informações pessoais que processamos para qualquer propósito ou propósitos não devem ser mantidas por mais tempo do que o necessário para esse propósito ou propósitos.
Sem prejuízo do artigo G-2, geralmente excluiremos dados pessoais pertencentes às categorias definidas abaixo na data/hora definidas abaixo:
tipo de dados pessoais será excluído {INSERIR DATA/HORA}; e
{INSERIR DATAS/HORAS ADICIONAIS}.
Não obstante as outras disposições desta seção G, reteremos documentos (incluindo documentos eletrônicos) que contenham dados pessoais:
na medida em que somos obrigados a fazê-lo por lei;
se acreditarmos que os documentos podem ser relevantes para qualquer processo judicial em andamento ou potencial; e
para estabelecer, exercer ou defender nossos direitos legais (incluindo fornecer informações a terceiros para fins de prevenção de fraudes e redução do risco de crédito).
<li>Segurança de suas informações pessoais</li>

Tomaremos as devidas precauções técnicas e organizacionais para evitar a perda, mau uso ou alteração de suas informações pessoais.
Armazenaremos todas as suas informações pessoais fornecidas em nossos servidores seguros (protegidos por senha e firewall).
Todas as transações financeiras eletrônicas realizadas através do nosso site serão protegidas por tecnologia de criptografia.
Você reconhece que a transmissão de informações pela internet é inerentemente insegura e que não podemos garantir a segurança dos dados enviados pela internet.
Você é responsável por manter em sigilo a senha usada para acessar nosso site; não solicitaremos sua senha (exceto quando você fizer login em nosso site).
I. Alterações

Podemos atualizar esta política periodicamente, através da publicação de uma nova versão em nosso site. Você deve verificar esta página ocasionalmente para garantir que compreende quaisquer alterações nesta política. Podemos notificá-lo sobre alterações nesta política por e-mail ou através do sistema de mensagens privadas em nosso site.

<li>Seus direitos</li>

Você pode nos instruir a fornecer qualquer informação pessoal que detenhamos sobre você; o fornecimento dessas informações estará sujeito ao seguinte:

pagamento de uma taxa {INSERIR TAXA, SE RELEVANTE}; e
fornecimento de evidência apropriada de sua identidade ({AJUSTE O TEXTO PARA REFLETIR SUA POLÍTICA para esse objetivo; geralmente aceitaremos uma cópia autenticada do seu passaporte acrescida de uma cópia original de uma fatura de serviço mostrando seu endereço atual }).
Podemos reter as informações pessoais solicitadas na extensão permitida por lei.

Você pode nos instruir a qualquer momento para não processar suas informações pessoais para fins de marketing.

Na prática, você geralmente concordará expressamente com antecedência com o uso de suas informações pessoais para fins de marketing, ou ofereceremos a oportunidade de não permitir o uso de suas informações pessoais para fins de marketing.

<li>Sites de terceiros</li>

Nosso site inclui links para e detalhes de sites de terceiros. Não temos controle sobre e não somos responsáveis pelas políticas e práticas de privacidade de terceiros.

<li>Atualização de informações</li>

Informe-nos se as informações pessoais que mantemos sobre você precisam ser corrigidas ou atualizadas.

<li>Cookies</li>

Nosso site usa cookies. Um cookie é um arquivo que contém um identificador (uma sequência de letras e números) que é enviado por um servidor da web para um navegador e armazenado pelo navegador. O identificador é então enviado de volta ao servidor toda vez que o navegador solicita uma página do servidor. Os cookies podem ser cookies “persistentes” ou cookies “de sessão”: um cookie persistente será armazenado por um navegador e permanecerá válido até a data de vencimento definida, a menos que seja excluído pelo usuário antes da data de vencimento; um cookie de sessão, por outro lado, expirará no final da sessão do usuário, quando o navegador for fechado. Os cookies normalmente não contêm nenhuma informação que identifique pessoalmente um usuário, mas as informações pessoais que armazenamos sobre você podem estar vinculadas às informações armazenadas e obtidas a partir de cookies. {SELECIONAR FRASE CORRETA Utilizamos apenas cookies de sessão / apenas cookies persistentes / cookies persistentes e de sessão em nosso site.}

Os nomes dos cookies que usamos em nosso site e os propósitos para os quais são usados estão descritos abaixo:
usamos o Google Analytics e o Adwords em nosso site para { INCLUIR TODOS OS CASOS DE USO DE COOKIES NO SEU SITE reconhecer um computador quando um usuário acessa o site / rastrear usuários enquanto eles navegam no site / permitir o uso de um carrinho de compras no site / melhorar a usabilidade do site / analisar o uso do site / administrar o site / evitar fraudes e melhorar a segurança do site / personalizar o site para cada usuário / segmentar anúncios que podem ser de interesse particular para usuários específicos / descrever objetivo(s)};
A maioria dos navegadores permite que você se recuse a aceitar cookies – por exemplo:
no Internet Explorer (versão 10), você pode bloquear cookies usando as configurações disponíveis de cancelamento de manipulação de cookies clicando em “Ferramentas”, “Opções da Internet” “Privacidade” e “Avançado”;
no Firefox (versão 24), você pode bloquear todos os cookies clicando em “Ferramentas”, “Opções”, “Privacidade”, selecionando “Usar configurações personalizadas para o histórico” no menu suspenso e desmarcando “Aceitar cookies de sites” ; e
no Chrome (versão 29), você pode bloquear todos os cookies acessando o menu “Personalizar e controlar” e clicando em “Configurações”, “Avançado” e “Configurações do site” e, em seguida, selecionando “Bloquear cookies de terceiros” na seção “Cookies e dados do site”.
O bloqueio de todos os cookies causará um impacto negativo na usabilidade de muitos sites. Se você bloquear os cookies, não poderá usar todos os recursos em nosso site.

Você pode excluir os cookies que já estão armazenados no seu computador – por exemplo:
no Internet Explorer (versão 10), você deve excluir os arquivos de cookies manualmente (confira instruções para fazê-lo em http://support.microsoft.com/kb/278835 );
no Firefox (versão 24), você pode excluir os cookies clicando em “Ferramentas”, “Opções”, “Privacidade”, selecionando “Usar configurações personalizadas para o histórico”, clicando em “Mostrar cookies” e, então, em “Remover todos os cookies”; e
no Chrome (versão 29), você pode excluir todos os cookies acessando o menu “Personalizar e controlar” e clicando em “Configurações”, “Avançado”, “Limpar dados de navegação” e, em seguida, selecionando “Excluir cookies e outros dados de sites e plugins” antes de clicar em “Limpar dados de navegação”.
A exclusão de cookies causará um impacto negativo na usabilidade de muitos sites.
O site Planet não assume qualquer responsabilidade e aconselha você a consultar especialistas jurídicos se estiver implementando o modelo acima em seu site.
</ol>
<ol type="A">
<li>dijfjieufhe</li>

</ol>
    </div>    
				
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
							<p>Subscreva a nossa <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Inrtroduza o  seu Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscrever</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
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
