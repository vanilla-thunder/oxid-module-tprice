[{capture assign="parentblock"}][{$smarty.block.parent}][{/capture}]

[{assign var="content" value='<input type="text" class="editinput" size="8" maxlength="10" name="editval[oxarticles__oxtprice]"'|explode:$parentblock }]

[{$content[0]}]
<select name="editval[oxarticles__vttpricetype]" id="">
    <option value="" [{if $edit->oxarticles__vttpricetype->value == ""}]selected[{/if}]>[{oxmultilang ident="VT_TPRICE_OLD"}]</option>
    <option value="REGULAR" [{if $edit->oxarticles__vttpricetype->value == "REGULAR"}]selected[{/if}]>[{oxmultilang ident="VT_TPRICE_REGULAR"}]</option>
    <option value="INTRO" [{if $edit->oxarticles__vttpricetype->value == "INTRO"}]selected[{/if}]>[{oxmultilang ident="VT_TPRICE_INTRO"}]</option>
    <option value="RRP" [{if $edit->oxarticles__vttpricetype->value == "RRP"}]selected[{/if}]>[{oxmultilang ident="VT_TPRICE_RRP"}]</option>
    <option value="EXRRP" [{if $edit->oxarticles__vttpricetype->value == "EXRRP"}]selected[{/if}]>[{oxmultilang ident="VT_TPRICE_EXRRP"}]</option>
</select>
[{'<input type="text" class="editinput" size="8" maxlength="10" name="editval[oxarticles__oxtprice]" '|cat:$content[1]}]