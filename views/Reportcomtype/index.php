<?php
use yii\helpers\html;
?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th>ลำดับ</th>
            <th>ยี้ห้อ</th>
            <th>ประเภท</th>
            <th>รายละเอียด</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $i => $item) {

            echo '<tr>';
            echo '<td>'.($i+1).'</td>';
            echo '<td>'.$item['com_type_id'].'</td>';
            echo '<td>'.$item['com_type_name'].'</td>';
          echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"></span>',['/report_com_detail','id'=>$item['com_type_id']]).'</td>';
            echo '</tr>';
        }
        
        ?>

    </tbody>
</table>