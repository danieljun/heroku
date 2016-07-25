<?php

require_once('rdstation2_cons.php');
require_once('rdstation2_func.php');

// header("Content-Type: application/json");

$params = $_POST;

if(!empty($params['custom_fields'])){
	foreach ($params['custom_fields'] as $key => $value) {
		$field = keyToField($key);

		$params[$field] = $value;
	}

	unset($params['custom_fields']);
}

// echo json_encode($params);

// $result = sendLead($params);
// echo $result;

$numbers = calcMaster($params);

// echo json_encode($numbers);

$chart = array();

foreach ($numbers['budget_dist'] as $key => $value) {
	$chart[] = array(
		'label' => $key,
		'value' => $value,
	);
}

// echo json_encode($chart);
// exit;

?><!DOCTYPE html>
<html>
	<head>
		<title>Budget Calculator</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- amCharts javascript sources -->
		<!-- 
		<script type="text/javascript" src="js/amcharts.js"></script>
		-->
		<script type="text/javascript" src="js/amcharts.js"></script>
		<script type="text/javascript" src="js/pie.js"></script>

		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "pie",
					"angle": 39.6,
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					"depth3D": 20,
					"innerRadius": 0,
					"baseColor": "",
					"hoverAlpha": 0.81,
					"titleField": "label",
					"valueField": "value",
					"decimalSeparator": ",",
					"thousandsSeparator": ".",
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"align": "center",
						"markerType": "circle"
					},
					"titles": [],
					"dataProvider": <?php echo json_encode($chart); ?>
				}
			);
		</script>
		<style>
			.amcharts-chart-div a{
				display: none !important;
			}
		</style>
	</head>
	<body>
		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</body>
</html>