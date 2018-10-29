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

class vt_tprice_events extends oxSuperCfg
{
    public static function install()
    {
		$dbMetaDataHandler = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);

		$table = 'oxarticles';
		$field = 'VTTPRICETYPE';

		if (!$dbMetaDataHandler->fieldExists($field, $table))
		{
			\OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute(
				"ALTER TABLE `{$table}` ADD `{$field}` VARCHAR(16) NOT NULL default '' COMMENT 'tprice type (vt/tprice)';"
			);
		}

		//clear oxarticle fields cache
		$dir = oxRegistry::getConfig()->getConfigParam("sCompileDir") . "/*oxarticles*.txt";
		foreach (glob($dir) as $item) if (!is_dir($item)) unlink($item);

		// update views
		$dbMetaDataHandler->updateViews();
    }
}