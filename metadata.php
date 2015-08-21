<?php

/**
 * bestlife AG - enhanced presentation for TPrice (recommended retail price / old price) in OXID eShop
 * Copyright (C) 2015  bestlife AG
 * info:  oxid@bestlife.ag
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */

$v = "https://raw.githubusercontent.com/vanilla-thunder/bla-tprice/master/copy_this/modules/bla/bla-tprice/version.jpg";

$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'bla-tprice',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>enhanced TPrice</strong>',
    'description' => ''
        . '<hr/><b style="display: inline-block; float:left;">newest version:</b><img src="' . $v . '" style=" float:left;"/><a style="display: inline-block; padding: 1px 25px; background: dodgerblue;  border: 1px solid #585858; color: white;" href="http://bit.ly/bla-TinyMCE" target="_blank">info</a>&nbsp;<a style="display: inline-block; padding: 1px 25px; background: forestgreen; border: 1px solid #585858; color: white;" href="https://github.com/vanilla-thunder/bla-tprice/archive/master.zip">download</a>',
    'thumbnail'   => 'thumbnail.png',
    'version'     => '0.1.0 (2015-08-20)',
    'author'      => 'Marat Bedoev, bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array(
        'oxarticle' => 'bla/bla-tprice/extend/bla_tprice_oxarticle'
    ),
    'files'       => array(
        'bla_tprice' => 'bla/bla-tprice/application/bla_tprice.php',
    ),
    'events'      => array(
        'onActivate'   => 'bla_tprice::install',
    ),
    'blocks'      => array(
        array(
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_tprice',
            'file'     => '/application/views/blocks/details_productmain_tprice.tpl'
        ),
        array(
            'template' => 'article_extend.tpl',
            'block'    => 'admin_article_extend_form',
            'file'     => '/application/views/blocks/admin_article_extend_form.tpl'
        )
    )
);
