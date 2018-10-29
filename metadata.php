<?php

/**
 * [vt] tprice
 * Copyright (C) 2018  Marat Bedoev
 * info:  schwarzarbyter@gmail.com
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 *
 * author: Marat Bedoev
 */

$sMetadataVersion = '1.1';
$aModule = [
	'id'          => 'tprice',
	'title'       => [
		'de' => '[vt] UVP Preis',
		'en' => '[vt] TPrice'
	],
	'description' => 'enhanced TPrice (RRP) for OXID eShop CE',
	'thumbnail'   => '',
	'version'     => '2.0.0 ( 2018-10-29 )',
	'author'      => 'Marat Bedoev',
	'email'       => 'schwarzarbyter@gmail.com',
	'url'         => 'https://github.com/vanilla-thunder/oxid-module-tprice',
	'extend'      => [
		'oxarticle' => 'vt/tprice/application/extend/oxarticleVtTprice'
	],
	'files'       => [
		'vt_tprice_events' => 'vt/tprice/application/vt_tprice_events.php',
	],
	'events'      => [
		'onActivate' => 'vt_tprice_events::install',
	],
	'blocks'      => [
		[
			'template' => 'page/details/inc/productmain.tpl',
			'block'    => 'details_productmain_tprice',
			'file'     => '/application/views/blocks/details_productmain_tprice.tpl'
		],
		[
			'template' => 'article_extend.tpl',
			'block'    => 'admin_article_extend_form',
			'file'     => '/application/views/blocks/admin_article_extend_form.tpl'
		]
	]
];
