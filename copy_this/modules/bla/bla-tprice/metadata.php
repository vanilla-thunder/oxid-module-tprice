<?php

/**
 * [bla] bla-tprice - enhanced TPrice for OXID eShop CE
 * Copyright (C) 2017  bestlife AG
 * info:  oxid@bestlife.ag
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
$aModule          = array(
    'id'          => 'bla-tprice',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>TPrice</strong>',
    'thumbnail'   => 'bestlife.png',
    'description' => 'enhanced TPrice for OXID eShop CE',
    'version'     => '0.1.3 2017-3-22',
    'author'      => 'Marat Bedoev',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'https://github.com/vanilla-thunder/bla-tprice',
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
