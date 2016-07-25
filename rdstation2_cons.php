<?php
define('RD_API_URL','https://www.rdstation.com.br/api/1.3/conversions',true);

define('BUDGET_PERC_GERAL',9.25,true);
define('BUDGET_PERC_B2C_PROD',7,true);
define('BUDGET_PERC_B2C_SERV',9,true);
define('BUDGET_PERC_B2B_PROD',10,true);
define('BUDGET_PERC_B2B_SERV',11,true);

define('EARNINGS_LIMIT_1',500000,true);
define('BUDGET_LIMIT_1',80000,true);
define('EARNINGS_LIMIT_2',1000000,true);
define('BUDGET_LIMIT_2',144000,true);
define('EARNINGS_LIMIT_3',2000000,true);
define('BUDGET_LIMIT_3',240000,true);

$distributions = array(
	'general' => array(
		500000 => array(
			'SEO' => 20,
			'PPC' => 20,
			'Social' => 15,
			'Mobile' => 5,
			'Content' => 35,
			'Others' => 5,
		),
		1000000 => array(
			'SEO' => 20,
			'PPC' => 20,
			'Social' => 15,
			'Mobile' => 5,
			'Content' => 35,
			'Others' => 5,
		),
		2000000 => array(
			'SEO' => 20,
			'PPC' => 20,
			'Social' => 15,
			'Mobile' => 5,
			'Content' => 30,
			'Others' => 10,
		),
		3000000 => array(
			'SEO' => 20,
			'PPC' => 15,
			'Social' => 15,
			'Mobile' => 5,
			'Content' => 20,
			'Others' => 25,
		),
	),
	'ecommerce' => array(
		500000 => array(
			'SEO' => 17,
			'PPC' => 38,
			'Social' => 15,
			'Mobile' => 2.5,
			'Content' => 25,
			'Others' => 2.5,
		),
		1000000 => array(
			'SEO' => 17,
			'PPC' => 38,
			'Social' => 15,
			'Mobile' => 2.5,
			'Content' => 25,
			'Others' => 2.5,
		),
		2000000 => array(
			'SEO' => 17,
			'PPC' => 38,
			'Social' => 15,
			'Mobile' => 2.5,
			'Content' => 25,
			'Others' => 2.5,
		),
		3000000 => array(
			'SEO' => 17,
			'PPC' => 38,
			'Social' => 15,
			'Mobile' => 5,
			'Content' => 10,
			'Others' => 15,
		),
	),
	'B2B' => array(
		500000 => array(
			'SEO' => 10,
			'PPC' => 10,
			'Social' => 28,
			'Mobile' => 2,
			'Content' => 35,
			'Others' => 15,
		),
		1000000 => array(
			'SEO' => 10,
			'PPC' => 10,
			'Social' => 28,
			'Mobile' => 2,
			'Content' => 35,
			'Others' => 15,
		),
		2000000 => array(
			'SEO' => 10,
			'PPC' => 10,
			'Social' => 28,
			'Mobile' => 2,
			'Content' => 35,
			'Others' => 15,
		),
		3000000 => array(
			'SEO' => 8,
			'PPC' => 7,
			'Social' => 23,
			'Mobile' => 2,
			'Content' => 35,
			'Others' => 25,
		),
	),
	'B2C' => array(
		500000 => array(
			'SEO' => 9,
			'PPC' => 21,
			'Social' => 15,
			'Mobile' => 18,
			'Content' => 28,
			'Others' => 9,
		),
		1000000 => array(
			'SEO' => 9,
			'PPC' => 21,
			'Social' => 15,
			'Mobile' => 18,
			'Content' => 28,
			'Others' => 9,
		),
		2000000 => array(
			'SEO' => 9,
			'PPC' => 21,
			'Social' => 15,
			'Mobile' => 18,
			'Content' => 28,
			'Others' => 9,
		),
		3000000 => array(
			'SEO' => 5,
			'PPC' => 19,
			'Social' => 15,
			'Mobile' => 17,
			'Content' => 19,
			'Others' => 25,
		),
	),
);