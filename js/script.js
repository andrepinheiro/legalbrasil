$(document).ready(function(){

	$('#subcategory-2').typeahead({
		name: 'accounts',
		local: ['Ações de despejo', 'Cobrança de condomínio', 'Código de Proteção e Defesa do Consumidor', 'Direito Homoafetivo', 'Recuperação de créditos', 'Violação da privacidade', 'Indenizações por danos materiais e morais', 'Falência', 'Guarda judicial']
	});

	var charMap = {
		"à": "a",
		"á": "a",
		"â": "a",
		"ã": "a",
		"ç": "c",
		"é": "e",
		"è": "e",
		"ê": "e",
		"ë": "e",
		"É": "e",
		"ï": "i",
		"î": "i",
		"í": "i",
		"ì": "i",
		"ô": "o",
		"ö": "o",
		"ó": "o",
		"õ": "o",
		"û": "u",
		"ù": "u",
		"ü": "u"
	};

	var subcategoriesNames = ['Ações de despejo', 'Cobrança de condomínio', 'Código de Proteção e Defesa do Consumidor', 'Direito Homoafetivo', 'Recuperação de créditos', 'Violação da privacidade', 'Indenizações por danos materiais e morais', 'Falência', 'Guarda judicial'];
	var statesNames = ['Acre', 'Distrito Federal', 'Pará', 'Pernambuco', 'Rio de Janeiro', 'São Paulo', 'Minas Gerais'];
	var citiesNames = ['Curitiba', 'Porto Alegre', 'Rio de Janeiro', 'Florianópolis', 'Manaus', 'São Paulo', 'Campinas'];

	var normalize = function (input) {
		$.each(charMap, function (unnormalizedChar, normalizedChar) {
			var regex = new RegExp(unnormalizedChar, 'gi');
			input = input.replace(regex, normalizedChar);
		});
		return input;
	};

	var queryTokenizer = function (q) {
		var normalized = normalize(q);
		return Bloodhound.tokenizers.whitespace(normalized);
	};

	var subcategories = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
		queryTokenizer: queryTokenizer,
		local: $.map(subcategoriesNames, function (name) {
			var normalized = normalize(name);
			return {
				value: normalized,
				displayValue: name
			};
		})
	});
	subcategories.initialize();

	var states = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
		queryTokenizer: queryTokenizer,
		local: $.map(statesNames, function (name) {
			var normalized = normalize(name);
			return {
				value: normalized,
				displayValue: name
			};
		})
	});
	states.initialize();

	var cities = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
		queryTokenizer: queryTokenizer,
		local: $.map(citiesNames, function (name) {
			var normalized = normalize(name);
			return {
				value: normalized,
				displayValue: name
			};
		})
	});
	cities.initialize();

	$('#subcategory').typeahead({
		minLength: 1,
		hint: true,
		highlight: false
	}, {
		displayKey: 'displayValue',
		source: subcategories.ttAdapter()
	});


	$('#state').typeahead({
		minLength: 1,
		hint: true,
		highlight: false
	}, {
		displayKey: 'displayValue',
		source: states.ttAdapter()
	});

	$('#city').typeahead({
		minLength: 1,
		hint: true,
		highlight: false
	}, {
		displayKey: 'displayValue',
		source: cities.ttAdapter()
	});

	
	
	
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();
	$('#step-2').hide();

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