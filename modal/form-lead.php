<div class="modal-header">
	<h4>Pinheiro Neto Advogados</h4>
	<p>Envia sua solicitação direitamente.</p>
</div>  
<div class="modal-body">
			
					<div class="row form-group">
						<div class="col-xs-12">
							<ul class="nav nav-pills nav-justified thumbnail setup-panel">
								<li class="active"><a href="#step-1">
									<h4 class="list-group-item-heading">1. Preencha sua solicitação</h4>
								</a></li>
								<li class="disabled step2"><a href="#step-2">
									<h4 class="list-group-item-heading">2. Preencha seus dados</h4>
								</a></li>
							</ul>
						</div>
					</div>
	
					<form id="form_request" role="form">
						<div class="row setup-content" id="step-1">
							<div class="form-group col-sm-6">
								<label class="control-label">Indique a categoria:</label>
								<select class="form-control">
									<option value="categoria"></option>
									<option value="categoria">Área civil</option>
									<option value="categoria">Direito societário e comercial</option>
									<option value="categoria">Direito de família e sucessões</option>
									<option value="categoria">Previdenciário trabalhista</option>
									<option value="categoria">Direito do consumidor</option>
									<option value="categoria">Direito fiscal e tributário</option>
									<option value="categoria">Direito de estrangeiros e imigrantes</option>
									<option value="categoria">Direito processual penal</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label">Indique a subcategoria:</label>
								<select class="form-control">
									<option value="subcategoria"></option>
									<option value="subcategoria">Contrato de consórcio</option>
									<option value="subcategoria">Contrato de financiamento casa própria</option>
									<option value="subcategoria">Contrato de hipoteca</option>
									<option value="subcategoria">Contrato de incorporação imobiliária</option>
									<option value="subcategoria">Contrato de locação</option>
									<option value="subcategoria">Contrato de penhora</option>
									<option value="subcategoria">Contrato de permuta</option>
									<option value="subcategoria">Contrato de seguro</option>
									<option value="subcategoria">Contrato de troca</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-md-6">
								<label class="control-label">Tipo de prestação de serviço</label>
								<select class="form-control">
									<option value="prestation"></option>
									<option value="prestation">Me consultar com um advogado</option>
									<option value="prestation">Ajuda para elaborar um documento</option>
									<option value="prestation">Me acompanhar em um procedimento Legal</option>
									<option value="prestation">Acompanhar um processo judicial</option>
									<option value="prestation">Entrar em processo judicial</option>
									<option value="prestation">Outros</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Urgência de sua solicitação</label>
								<select class="form-control">
									<option value="solicitation"></option>
									<option value="solicitation">Modalidade de Contratação</option>
									<option value="solicitation">Encontrar um advogado e com ele acertarei as condições de pagamento</option>
									<option value="solicitation">Já me consultei antes mas quero um outra opinião</option>
									<option value="solicitation">Busco pelo Juizado de Pequenas Causas</option>
									<option value="solicitation">Busco por advogado gratuito</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Indique o estado:</label>
								<select class="form-control">
									<option value="filtro"></option>
									<option value="filtro">Sao Paulo</option>
									<option value="filtro">Rio de Janeiro</option>
									<option value="filtro">Amazonas</option>
									<option value="filtro">Etc.</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Disponibilidade para contato:</label>
								<select class="form-control">
									<option value="availability"></option>
									<option value="availability">Urgência de sua solicitação</option>
									<option value="availability">Preciso de um contato imediato</option>
									<option value="availability">Ligar somente em horário comercial</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-md-12">
								<textarea class="form-control" placeholder="Nos conte o que você precisa" rows="4"></textarea>
							</div>
							<div class="col-md-12">
								<button type="submit" id="activate-step-2" class="btn btn-lg btn-default pull-right">Próximo <span class="glyphicon glyphicon-chevron-right"></span></button>
							</div>
						</div><!--/#step-1 -->
	
						<div class="row setup-content" id="step-2">
							<div class="form-group col-xs-12 col-md-6">
								<label for="">Nome</label>
								<input id="" type="text" class="form-control" required="">
							</div>
							<div class="form-group col-xs-12 col-md-6">
								<label for="">Sobrenome</label>
								<input id="" type="text" class="form-control" required="">
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group col-xs-3 ddd">
									<label for="">DDD</label>
									<input id="" type="text" class="form-control" required="">
								</div>
								<div class="form-group col-xs-9 celular">
									<label for="">Telefone</label>
									<input id="" type="text" class="form-control" required="">
								</div>
							</div>
							<div class="form-group col-xs-12 col-md-6">
								<label for="">Email</label>
								<input id="" type="text" class="form-control" required="">
							</div>
						
							<div class="form-group col-xs-6 col-md-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Aceito as condições de utilização do site
									</label>
								</div>
							</div>
							<div class="form-group col-xs-6 col-md-12">
								<button type="submit" class="btn btn-lg btn-default pull-right">Enviar sua solicitação</button>
							</div>
						</div><!--/#step-2 -->
					</form>
              
</div>  
<div class="modal-footer">  
    <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>   -->
</div>  
	
<script>

$(document).ready(function() {
    $('#step-2').hide();
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