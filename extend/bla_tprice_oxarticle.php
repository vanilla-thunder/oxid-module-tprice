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

class bla_tprice_oxarticle extends bla_tprice_oxarticle_parent
{
    public function getTPrice()
    {
        if (!parent::getTPrice() && $this->getParentArticle()) return $this->getParentArticle()->getTPrice();
        else return parent::getTPrice();
    }

    public function getTPriceType()
    {
        // UVP, ehemaliger UVP, unser alter Preis, regulärer preis (+ der neue Einführungspreis)
        if ($this->oxarticles__blatpricetype->value == '') return "BLA_TPRICE_OLD";

        return "BLA_TPRICE_" . $this->oxarticles__blatpricetype->value;
    }

    public function getSaving()
    {
        if (!$this->getTPrice()) return false;

        $dPrice = ($this->isParentNotBuyable()) ? $this->getVarMinPrice()->getPrice() : $this->getPrice()->getPrice();
        $oPrice = clone $this->getTPrice();
        $oPrice->subtract($dPrice);

        return $oPrice; //->subtract($dPrice);
    }

    public function getSavingPercent()
    {
        if (!$this->getTPrice()) return false;

        $saving = $this->getSaving()->getPrice();
        $price = $this->getTPrice()->getPrice();

        return number_format($saving / $price * 100, 1, ',', '.');
    }

    // return only future delviery dates
    public function getDeliveryDate($force = false)
    {
        if ($this->oxarticles__oxdelivery->value != '0000-00-00' && ($force || $this->oxarticles__oxdelivery->value > date('Y-m-d')))
            return oxRegistry::get("oxUtilsDate")->formatDBDate($this->oxarticles__oxdelivery->value);

        return false;
    }
}