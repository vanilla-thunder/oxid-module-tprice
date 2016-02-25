[{assign var="oTPrice" value=$oDetailsProduct->getTPrice()}]
<div class="status success">
    <p>
        <h4>
            [{if $oDetailsProduct->isParentNotBuyable() && $oDetailsProduct->isRangePrice() }][{oxmultilang ident="BLA_TPRICE_UP_TO"}] [{/if}] [{* bei Preisen "Ab ...€" kommt "bis zu XY%" *}]
            [{oxmultilang ident="BLA_TPRICE_PERCENT_CHEAPER" args=$oDetailsProduct->getSavingPercent()}]: [{* XY% günstiger *}]
            [{oxmultilang ident="BLA_TPRICE_YOU_SAVE"}] [{oxprice price=$oDetailsProduct->getSaving() currency=$currency}] [{* Sie sparen XY € *}]
        </h4>
        <small>
            [{oxmultilang ident="REDUCED_FROM"}] [{oxprice price=$oDetailsProduct->getTPrice() currency=$currency}]* [{* Statt-Preis *}]
            ([{oxmultilang ident=$oDetailsProduct->getTPriceType()}]) [{* Typ des Preises *}]
            [{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]
                <br/><b style="color:orange;">[{oxmultilang ident="BLA_TPRICE_OFFER_LIMITED"}]</b>[{* Angebot nur für begrenzte zeit *}]
            [{/if}]
        </small>
    </p>
</div>
[{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]
    <div><h2 style="color:limegreen;">[{oxmultilang ident="BLA_TPRICE_INTRODUCTION_PRICE" suffix="COLON"}]</h2></div> [{* Einführungspreis *}]
[{/if}]
