[{if $oDetailsProduct->getTPrice()}]
    [{strip}]
        [{assign var="oTPrice" value=$oDetailsProduct->getTPrice()}]
        <div class="alert alert-success">
            <h4>
                <b>
                    [{* bei Preisen "Ab ...€" kommt "bis zu XY%" *}]
                    [{if $oDetailsProduct->isParentNotBuyable() && $oDetailsProduct->isRangePrice() }][{oxmultilang ident="BLA_TPRICE_UP_TO"}] [{/if}]
                    [{* XY% günstiger *}]
                    [{oxmultilang ident="BLA_TPRICE_PERCENT_CHEAPER" args=$oDetailsProduct->getSavingPercent()}] : </b>
                [{* Sie sparen XY € *}]
                [{oxmultilang ident="BLA_TPRICE_YOU_SAVE"}] [{oxprice price=$oDetailsProduct->getSaving() currency=$currency}]
            </h4>
            <div>
                [{* Statt-Preis *}]
                [{oxmultilang ident="REDUCED_FROM"}] [{oxprice price=$oDetailsProduct->getTPrice() currency=$currency}]*
                [{* Typ des Preises *}]
                <small>([{oxmultilang ident=$oDetailsProduct->getTPriceType()}])</small>

            </div>
        </div>
        [{if $oDetailsProduct->getTPriceType() == 'BLA_TPRICE_INTRO'}]
            [{* Angebot nur für begrenzte zeit *}]
            <b class="text-warning">[{oxmultilang ident="BLA_TPRICE_OFFER_LIMITED"}]</b><br/>
            [{* Einführungspreis *}]
            <b class="h3 text-success">[{oxmultilang ident="BLA_TPRICE_INTRODUCTION_PRICE" suffix="COLON"}]</b>
        [{/if}]
    [{/strip}]
[{/if}]

