{extends file="layout.tpl"}
{block name=table}
    <table border="3">
        <thead>
        {foreach $arrGall as $key=>$row}
            <th>{$key}</th>
        {/foreach}
        </thead>
        <tbody>
        <tr>
            {foreach $arrGall as $row}
                <td><img src='{$row}' width='200px'>
                </td>
            {/foreach}
        </tr>
        </tbody>
    </table>
{/block}
