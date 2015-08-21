[{capture assign="parentblock"}][{$smarty.block.parent}][{/capture}]

[{assign var="content" value='<input type="text" class="editinput" size="8" maxlength="10" name="editval[oxarticles__oxtprice]"'|explode:$parentblock }]

[{$content[0]}]
<select name="editval[oxarticles__blatpricetype]" id="">
    <option value="" [{if $edit->oxarticles__blatpricetype->value == ""}]selected[{/if}]>[{oxmultilang ident="BLA_TPRICE_OLD"}]</option>
    <option value="REGULAR" [{if $edit->oxarticles__blatpricetype->value == "REGULAR"}]selected[{/if}]>[{oxmultilang ident="BLA_TPRICE_REGULAR"}]</option>
    <option value="INTRO" [{if $edit->oxarticles__blatpricetype->value == "INTRO"}]selected[{/if}]>[{oxmultilang ident="BLA_TPRICE_INTRO"}]</option>
    <option value="RRP" [{if $edit->oxarticles__blatpricetype->value == "RRP"}]selected[{/if}]>[{oxmultilang ident="BLA_TPRICE_RRP"}]</option>
    <option value="EXRRP" [{if $edit->oxarticles__blatpricetype->value == "EXRRP"}]selected[{/if}]>[{oxmultilang ident="BLA_TPRICE_EXRRP"}]</option>
</select>
[{'<input type="text" class="editinput" size="8" maxlength="10" name="editval[oxarticles__oxtprice]" '|cat:$content[1]}]