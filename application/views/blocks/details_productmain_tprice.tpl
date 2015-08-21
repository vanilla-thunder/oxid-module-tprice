[{if $oDetailsProduct->getTPrice()}]
    [{assign var="oTPrice" value=$oDetailsProduct->getTPrice()}]
    <div class="alert-box success radius">
        <i class="fa fa-hand-o-down fa-3x fa-fw right"></i>
        <span class="h4">[{oxmultilang ident="REDUCED_FROM"}] [{oxprice price=$oDetailsProduct->getTPrice() currency=$currency}]</span>
        <br/>
        (<small>[{oxmultilang ident=$oDetailsProduct->getTPriceType()}]</small>)<br/>
        [{if $oDetailsProduct->isParentNotBuyable() }][{oxmultilang ident="BLA_TPRICE_UP_TO"}] [{/if}]
        [{oxmultilang ident="BLA_TPRICE_PERCENT_CHEAPER" args=$oDetailsProduct->getSavingPercent()}]
    </div>
    [{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]<div class="alert text-center"><small><b>[{oxmultilang ident="BLA_TPRICE_OFFER_LIMITED"}]</b></small></div>[{/if}]
[{/if}]

