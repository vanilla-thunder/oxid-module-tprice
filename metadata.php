<?php

/**
 * [___VENDOR___] ___NAME___
 * Copyright (C) ___YEAR___  ___COMPANY___
 * info:  ___EMAIL___
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 *
 * author: ___AUTHOR___
 */

$sMetadataVersion = '1.1';
$aModule = [
	'id'          => 'tprice',
	'title'       => [
		'de' => '[vt] UVP Preis',
		'en' => '[vt] TPrice'
	],
	'description' => '___DESCRIPTION___',
	'thumbnail'   => '',
	'version'     => '___VERSION___',
	'author'      => '___AUTHOR___',
	'email'       => '___EMAIL___',
	'url'         => '___URL___',
	'extend'      => [
		'oxarticle' => 'vt/tprice/application/extend/oxarticleVtTprice'
	],
	'files'       => [
		'vt_tprice' => 'vt/tprice/application/vt_tprice.php',
	],
	'events'      => [
		'onActivate' => 'vt_tprice::install',
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
