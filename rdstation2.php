<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css" rel="stylesheet">
</head>
<body>
<form id="conversion-form" action="rdstation2_post.php" method="POST">
	<input type="hidden" name="token_rdstation" value="00cdf8e70717c541b6aa0c55448ffd8b">
	<input type="hidden" name="identificador" value="budget-calculator">

	<input type="hidden" name="c_utmz" id="c_utmz" value="" />
	<input type="hidden" name="traffic_source" id="traffic_source" value="" />
	<script type="text/javascript">
	function read_cookie(a){var b=a+"=";var c=document.cookie.split(";");for(var d=0;d<c.length;d++){var e=c[d];while(e.charAt(0)==" ")e=e.substring(1,e.length);if(e.indexOf(b)==0){return e.substring(b.length,e.length)}}return null}try{document.getElementById("c_utmz").value=read_cookie("__utmz"); document.getElementById("traffic_source").value=read_cookie("__trf.src");}catch(err){}
	</script>

	<input type="hidden" name="_is" value="6">
	<input type="hidden" name="redirect_to" value="http://agenciawck.com.br">

	<div id="error-container">
		<p>Preencha corretamente os campos marcados</p>
	</div>

	<div class="field">
		<label for="custom_fields_71848">Para quem você vende seus produtos ou serviços?*</label>
		<div class="radio">
			<label><input type="radio" name="custom_fields[71848]" id="custom_fields_71848_Consumidores__B2C_" value="Consumidores (B2C)" class=" required">Consumidores (B2C)</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="custom_fields[71848]" id="custom_fields_71848_Empresas__B2B_" value="Empresas (B2B)" class=" required">Empresas (B2B)</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="custom_fields[71848]" id="custom_fields_71848_Ambos__B2C___B2B_" value="Ambos (B2C + B2B)" class=" required">Ambos (B2C + B2B)</label>
		</div>
	</div>
	<div class="field">
		<label for="custom_fields_71851">Qual é seu tipo de negócio predominante?*</label>
		<div class="radio">
			<label><input type="radio" name="custom_fields[71851]" id="custom_fields_71851_Servi_o" value="Serviço" class=" required">Serviço</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="custom_fields[71851]" id="custom_fields_71851_Produto" value="Produto" class=" required">Produto</label>
		</div>
	</div>
	<div class="field">
		<label for="custom_fields_71852">Seu modelo de negócios é SaaS?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71852]" id="custom_fields_71852_Sim" value="Sim" class=" required">Sim</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71852]" id="custom_fields_71852_N_o" value="Não" class=" required">Não</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71853">Onde estão seus clientes?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71853]" id="custom_fields_71853_Localmente" value="Localmente" class=" required">Localmente</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71853]" id="custom_fields_71853_Regionalmente" value="Regionalmente" class=" required">Regionalmente</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71853]" id="custom_fields_71853_No_Brasil" value="No Brasil" class=" required">No Brasil</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71853]" id="custom_fields_71853_No_mundo_todo" value="No mundo todo" class=" required">No mundo todo</label></div>
	</div>
	<div class="field">
		<label for="uf">Estado*</label>
		<select name="uf" id="uf" class="form-control  required">
			<option value="">Selecione</option>
			<option value="AC">AC</option>
			<option value="AL">AL</option>
			<option value="AP">AP</option>
			<option value="AM">AM</option>
			<option value="BA">BA</option>
			<option value="CE">CE</option>
			<option value="DF">DF</option>
			<option value="ES">ES</option>
			<option value="GO">GO</option>
			<option value="MA">MA</option>
			<option value="MT">MT</option>
			<option value="MS">MS</option>
			<option value="MG">MG</option>
			<option value="PA">PA</option>
			<option value="PB">PB</option>
			<option value="PR">PR</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>
			<option value="RR">RR</option>
			<option value="SC">SC</option>
			<option value="SP">SP</option>
			<option value="SE">SE</option>
			<option value="TO">TO</option>
		</select>
	</div>
	<div class="field">
		<label for="city_id">Cidade*</label>
		<input type="text" name="city_id" id="city_id" value="" class="form-control  required">
<!-- 
		<select name="city_id" id="city_id" class="form-control  required">
			<option value="">Selecione o estado</option>
		</select>
 -->
	</div>
	<div class="field">
		<label for="custom_fields_71854">Qual é o seu faturamento anual?*</label>
		<input type="number" name="custom_fields[71854]" id="custom_fields_71854" value="" class="form-control  required">
	</div>
	<div class="field">
		<label for="custom_fields_71855">Para quanto tempo você deseja se planejar?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71855]" id="custom_fields_71855_3_meses" value="3 meses" class=" required">3 meses</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71855]" id="custom_fields_71855_6_meses" value="6 meses" class=" required">6 meses</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71855]" id="custom_fields_71855_12_meses" value="12 meses" class=" required">12 meses</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71860">Você precisa de mais tráfego para lojas físicas?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71860]" id="custom_fields_71860_Sim" value="Sim" class=" required">Sim</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71860]" id="custom_fields_71860_N_o" value="Não" class=" required">Não</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71861">Você vende produtos através de e-commerce?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71861]" id="custom_fields_71861_Sim" value="Sim" class=" required">Sim</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71861]" id="custom_fields_71861_N_o" value="Não" class=" required">Não</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71866">Qual é o objetivo principal?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71866]" id="custom_fields_71866_Aumentar_as_vendas" value="Aumentar as vendas" class=" required">Aumentar as vendas</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71866]" id="custom_fields_71866_Tornar-me_autoridade_no_meu_segmento" value="Tornar-me autoridade no meu segmento" class=" required">Tornar-me autoridade no meu segmento</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71866]" id="custom_fields_71866_Gerar_mais_leads__contatos_qualificados_" value="Gerar mais leads (contatos qualificados)" class=" required">Gerar mais leads (contatos qualificados)</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71866]" id="custom_fields_71866_Melhorar_minha_presen_a_digital" value="Melhorar minha presença digital" class=" required">Melhorar minha presença digital</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71868">Qual é o nível de concorrência para seu produto ou serviço?*</label>
		<div class="radio"><label><input type="radio" name="custom_fields[71868]" id="custom_fields_71868_Baixo" value="Baixo" class=" required">Baixo</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71868]" id="custom_fields_71868_M_dio" value="Médio" class=" required">Médio</label></div>
		<div class="radio"><label><input type="radio" name="custom_fields[71868]" id="custom_fields_71868_Alto" value="Alto" class=" required">Alto</label></div>
	</div>
	<div class="field">
		<label for="custom_fields_71870">Quanto de aumento em receita você deseja?*</label>
		<input type="number" name="custom_fields[71870]" id="custom_fields_71870" value="" class="form-control  required">
	</div>
	<div class="field">
		<label for="email">Email*</label>
		<input type="email" name="email" id="email" value="" class="form-control  required">
	</div>
	<div class="field">
		<label for="name">Nome*</label>
		<input type="text" name="name" id="name" value="" class="form-control  required">
	</div>

	<div class="actions">
		<input type="submit" class="call_button" id="cf_submit" value="Cadastrar">
		<img src="//d335luupugsy2.cloudfront.net/images/ajax-loader.gif" id="ajax-loader" alt="#{Enviando...}" style="display: none;">
	</div>


	<p class="notice">Prometemos não utilizar suas informações de contato para enviar qualquer tipo de SPAM.</p>


	<div style="position: absolute; left: -5000px">
		<input type="text" name="emP7yF13ld" autocomplete="off" tabindex="-1" value="">
		<input type="text" name="sh0uldN07ch4ng3" autocomplete="off" tabindex="-1" value="should_not_change">
	</div>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
<script type="text/javascript" src="js/rdlps.min.js"></script>
<script>
	// Isso não carrega todas as cidades.. precisa de um termo de busca "term" para filtrar
	// $(document).on('change','#uf',function(){
	// 	var sel = $(this).val();

	// 	$('#city_id').html("");

	// 	if(sel.length){
	// 		$('<option value="">Carregando cidades...</option>').appendTo('#city_id');

	// 		$.ajax({
	// 			type: 'GET',
	// 			dataType: 'json',
	// 			url: 'https://www.rdstation.com.br/api/cidades/?term=&state_acronym=' + sel,
	// 			success: function(r){
	// 				$('#city_id').html("");

	// 				for(var i=0;i<r.cities.length;i++){
	// 					$('<option value="'+r.cities[i].id+'">'+r.cities[i].name+'</option>').appendTo('#city_id');
	// 				}
	// 			}
	// 		});
	// 	}
	// 	else{
	// 		$('<option value="">Selecione um estado</option>').appendTo('#city_id');
	// 	}
	// });
</script>
</body>
</html>