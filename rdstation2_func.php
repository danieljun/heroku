<?php

function calcMaster($params){
	$invest_amount = calcInvestAmount($params);

	$budget_dist = calcBudgetDist($params + $invest_amount);

	return array(
		'invest_amount' => $invest_amount,
		'budget_dist' => $budget_dist,
	);
}

function calcInvestAmount($params){
	$earnings = $params['Faturamento anual'];
	$type_bus = $params['Tipo negócio'];
	$type_cli = $params['Tipo cliente'];

	$budget = $percentage = 0;

	switch($type_cli){
		case 'Consumidores (B2C)':
			if($type_cli == 'Produto')
				$percentage = BUDGET_PERC_B2C_PROD;
			else
				$percentage = BUDGET_PERC_B2C_SERV;
		break;
		case 'Empresas (B2B)':
			if($type_cli == 'Produto')
				$percentage = BUDGET_PERC_B2B_PROD;
			else
				$percentage = BUDGET_PERC_B2B_SERV;
		break;
		case 'Ambos (B2C + B2B)':
			if($type_cli == 'Produto')
				$percentage = BUDGET_PERC_B2C_PROD + 1;
			else
				$percentage = BUDGET_PERC_B2C_SERV + 1;
		break;
		default:
			$percentage = BUDGET_PERC_GERAL;
		break;
	}
	
	$budget = $earnings * $percentage / 100;

	if($earnings < EARNINGS_LIMIT_1 && $budget < BUDGET_LIMIT_1){
		$budget = BUDGET_LIMIT_1;
	}

	if($earnings < EARNINGS_LIMIT_2 && $budget < BUDGET_LIMIT_2){
		$budget = BUDGET_LIMIT_2;
	}

	if($earnings < EARNINGS_LIMIT_3 && $budget < BUDGET_LIMIT_3){
		$budget = BUDGET_LIMIT_3;
	}

	return array(
		'budget' => $budget,
		'percentage' => $percentage
	);
}

function calcBudgetDist($params){
	$distributions = $GLOBALS['distributions'];

	$index = 'general';
	$result = array();

	if($params['Vende por e-commerce'] == 'Sim'){
		$index = 'ecommerce';
	} elseif($params['Tipo cliente'] == 'Empresas (B2B)'){
		$index = 'B2B';
	} elseif($params['Tipo cliente'] == 'Consumidores (B2C)'){
		$index = 'B2C';
	}

	$targetdist = array();
	// Desta forma, se o faturamento ultrapassar os 3M, será utilizado os fatores de até 3M.
	foreach ($distributions[$index] as $key => $value) {
		if($key < intval($params['Faturamento anual'])){
			$targetdist = $value;
			continue;
		}
		else{
			$targetdist = $value;
			break;
		}
	}

	foreach ($targetdist as $k => $v) {
		$result[$k] = $params['budget'] * $v / 100;
	}

	return $result;
}

function sendLead($params){
	$params = json_encode($params);

	$ch = curl_init( RD_API_URL );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $params );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	$result = curl_exec($ch);
	curl_close($ch);
}

function keyToField($key){
	$field = '';

	switch($key){
		case '71848': $field = 'Tipo cliente'; break;
		case '71851': $field = 'Tipo negócio'; break;
		case '71852': $field = 'Modelo saas'; break;
		case '71853': $field = 'Local clientes'; break;
		case '71854': $field = 'Faturamento anual'; break;
		case '71855': $field = 'Tempo planejamento'; break;
		case '71860': $field = 'Mais tráfego em lojas físicas'; break;
		case '71861': $field = 'Vende por e-commerce'; break;
		case '71866': $field = 'Objetivo'; break;
		case '71868': $field = 'Nível de concorrência'; break;
		case '71870': $field = 'Pretensão aumento em receita'; break;
	}

	return $field;
}