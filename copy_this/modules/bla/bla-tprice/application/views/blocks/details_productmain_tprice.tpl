[{if $oDetailsProduct->getTPrice()}]
    [{assign var="oTPrice" value=$oDetailsProduct->getTPrice()}]
    <div class="status success">
        <p>
        <h4>
            [{if $oDetailsProduct->isParentNotBuyable() && $oDetailsProduct->isRangePrice() }][{oxmultilang ident="BLA_TPRICE_UP_TO"}] [{/if}]
            [{oxmultilang ident="BLA_TPRICE_PERCENT_CHEAPER" args=$oDetailsProduct->getSavingPercent()}]
        </h4>
        [{oxmultilang ident="REDUCED_FROM"}] [{oxprice price=$oDetailsProduct->getTPrice() currency=$currency}] * 
        <small>([{oxmultilang ident=$oDetailsProduct->getTPriceType()}])</small>
        [{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]<br/><b style="color:orange;">[{oxmultilang ident="BLA_TPRICE_OFFER_LIMITED"}]</b>[{/if}]
        </p>
    </div>
    [{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]
    <div>
        
        <h2 style="color:limegreen;">
            [{oxmultilang ident="BLA_TPRICE_INTRODUCTION_PRICE" suffix="COLON"}]
        </h2>
    </div>
    [{/if}]
[{/if}]

