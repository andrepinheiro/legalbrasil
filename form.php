<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Legal Brasil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico"></head><!--/head-->

<body>
    <header id="header" role="banner">
        <div class="container">
			<div class="box">
				<div class="row row-offset-0">
					<div class="col-xs-6 col-md-3"><a href="index.php"><img src="images/logo.png" /></a></div>
					<div class="col-xs-6 col-md-3"><h2 class="text-center"></h2></div>
					<div class="col-md-6 text-center infocontact visible-md visible-lg">
						<h4>Precisa de ajuda?</h4>
						<h5>Nosso serviço de atendimento está à sua disposição</h5>
						<p>Seg a Sex 09h-18h <strong>(11)3957-3113</strong></p>
					</div>
				</div>
			</div>
        </div>
    </header><!--/#header-->

	<div id="background">
		<h1 class="title-page">Sua solicitação</h1>
	</div>

	<div class="container">
		<div class="box first">
			<div class="row">
				<section id="block_form" class="col-md-8">
					<?php include("./form-lead.php"); ?>
				</section><!--/#block_form-->
			    
			    <aside class="col-md-4 hidden-xs hidden-sm">
					<img src="./js/holder.js/380x135/text:Precisa de ajuda?" class="img-responsive">
					<img src="./js/holder.js/380x135/text:Sobre nós" class="img-responsive">
			    </aside>
			</div><!--/.row-->
		</div><!--/.box-->
	</div><!--/.containers-->
	
	<!-- Modal -->  
	<div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">  
	    <div class="modal-dialog lawyer-sheet">  
	        <div class="modal-content modal-dialog-center"></div>
	    </div>  
	</div>  
	<!-- /.modal -->  

    <footer id="footer">
        <div class="container">
            <div class="row row-centered">
                <div class="col-sm-4 col-centered">	
					<img src="./images/footer-logo.png" alt="Legal Brasil" title="Legal Brasil" class="img-responsive" />
                </div>
                <div class="col-sm-4 col-centered">
					<ul class="list-unstyled text-left">
						<li><i class="icon-about"></i> <a href="#">Sobre nós</a></li>
						<li><i class="icon-help"></i> <a href="#">Centro de ajuda</a></li>
						<li><i class="icon-privacy"></i> <a href="#">Política de privacidade</a></li>
					</ul>
                </div>
                <div class="col-sm-4 col-centered">
					<ul class="list-unstyled text-left">
						<li><a href="lawyers-results.html">Consultar Glossário de advogados</a></li>
					</ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
	
<script>

$(document).ready(function() {
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e){
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    
    $('#activate-step-2').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        $(this).remove();
    })    
});



</script>
	
</body>
</html>