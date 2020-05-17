<style>
    table{
        border: 1px solid #000; 
    }
    .bottom-b{
        border-bottom: 1px solid #000;
    }
    .right-b{
        border-right:1px solid #000;    
    }
    .cuting{
        color:#e2e2e2;
    }
    .text-right{
        text-align: right;
    }
</style>

<?php
for ($i = 0; $i < 3; $i++) {
    ?>
    <table width="100%" cellpadding="6">
        <thead>
            <tr align="center">
                <td colspan = "4" class="bottom-b"><b>Krishna Minerals</b></td>         
            </tr>
        </thead>
        <tr>
            <td colspan="2" class="bottom-b right-b">
                <b>Challan Number :</b> s_<?= $sales[0]->id; ?>  
            </td>

            <td align="right" colspan="2" class="bottom-b">
                <b>Date :</b> <?= $sales[0]->date; ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="bottom-b">
                <b>Party Name :</b> <?= $sales[0]->py_name; ?>
            </td> 
        </tr>
        <tr>
            <td rowspan="2" class="bottom-b">
                Royalty Name
            </td>
            <td rowspan="2"class="bottom-b right-b">:
                <?= $sales[0]->ry_name ?>
            </td>
            <td class="bottom-b">
                Vehicle Number
            </td>
            <td class="bottom-b">:
                <?= $sales[0]->v_name ?>
            </td>
        </tr>
        <tr>
            <td class="bottom-b">
                Gross Weight
            </td>
            <td class="bottom-b">:
                <?= $sales[0]->gross_weight ?>
            </td>
        </tr>
        <tr>
            <td rowspan="2" class="bottom-b ">
                Royalty Number
            </td>
            <td rowspan="2"class="bottom-b right-b">:
                <?= $sales[0]->royalty_number ?>
            </td>
            <td class="bottom-b">
                Tare Weight
            </td>
            <td class="bottom-b">:
                <?= $sales[0]->tare_weight ?>
            </td>
        </tr>
        <tr>
            <td class="bottom-b">
                Net Weight
            </td>
            <td class="bottom-b">:
                <?= $sales[0]->net_weight ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="bottom-b">
                <b>Place :</b> <?= $sales[0]->p_name ?>
            </td>
            <td colspan="2" class="bottom-b">
                <b>Material :</b> <?= $sales[0]->m_name ?>
            </td>
        </tr>
    </table>
    <?php
    if ($i == 1) {
        ?>
        <div class="text-right"><br/>
            <b>Signature :____________________</b>
        </div>
        <?php
    } else {
        echo "<br/>";
    }
    if ($i < 2) {
        ?>

        <div class="cuting">--------------------------------------------------------------------------------------------------------------------------------------</div>
        <br/>
        <?php
    }
}
?>

