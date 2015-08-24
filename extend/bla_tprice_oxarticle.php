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

class bla_tprice_oxarticle extends bla_tprice_oxarticle_parent
{
    public function getSaving()
    {
        $dPrice = ($this->isParentNotBuyable()) ? $this->getVarMinPrice()->getPrice() : $this->getPrice()->getPrice();
        $oPrice = clone $this->getTPrice();
        $oPrice->subtract($dPrice);

        return $oPrice; //->subtract($dPrice);
    }

    public function getSavingPercent()
    {
        $saving = $this->getSaving()->getPrice();
        $price = $this->getTPrice()->getPrice();
        return number_format($saving / $price * 100,1,',','.');
    }

    public function getTPriceType()
    {
        // UVP, ehemaliger UVP, unser alter Preis, regulärer preis (+ der neue Einführungspreis)
        if($this->oxarticles__blatpricetype->value == '') return "BLA_TPRICE_OLD";
        return "BLA_TPRICE_".$this->oxarticles__blatpricetype->value;
    }
}