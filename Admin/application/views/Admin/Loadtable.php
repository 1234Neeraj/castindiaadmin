<?php print_r($result); ?>
        <?php $i = 0; foreach ($result as $res): $i++ ?>
        <tr class="text-center">
            <td class="table_td"><?php echo $i; ?></td>
            <td class="table_td"><?php echo $res['First_Name']; echo " "; echo $res['Last_Name'];  ?></td>
            <td class="table_td"><?php echo $res['Mobile_No']; ?></td>
            <td class="table_td"><?php echo date('d/m/Y | h:m',strtotime($res['RECORD_INSERTED_DTTM'])); ?></td>
            <td class="table_td"><img src="<?php echo base_url(); ?>/Assets/images/redirectmessage.png"></td>
            <td class="table_td">
                <?php if($res['STATUS_ASP']=='PRF'){ ?>
                    <span class="td_span_prf">PRF</span>
                <?php } ?>
                <?php if($res['STATUS_ASP']=='RF'){ ?>
                    <span class="td_span_rf">RF</span>
                <?php } ?>
                <?php if($res['STATUS_ASP']=='S2RF'){ ?>
                    <span class="td_span_s2rf">S2RF</span>
                <?php } ?>
                <?php if($res['STATUS_ASP']=='ADF'){ ?>
                    <span class="td_span_adf">ADF</span>
                <?php } ?>
                <?php if($res['STATUS_ASP']=='PF'){ ?>
                    <span class="td_span_pf">PF</span>
                <?php } ?>
                <?php if($res['STATUS_ASP']=='FC'){ ?>
                    <span class="td_span_fc">FC</span>
                <?php } ?>
            </td>
            <td class="table_td">
                <?php if($res['STATUS_ASP']=='FC'){ ?>
                    <a href="<?php echo base_url()?>/getAspirantDetail/<?php echo base64_encode($res['id']); ?>/<?php echo base64_encode($res['USER_ID']); ?>" ><img src="<?php echo base_url(); ?>/Assets/images/open-eye.svg"></a>
                <?php } ?>
                <?php if($res['STATUS_ASP']!='FC'){ ?>
                    <img src="<?php echo base_url(); ?>/Assets/images/cross-eye.svg">
                <?php } ?>
            </td>
        </tr>
        <?php endforeach; ?>