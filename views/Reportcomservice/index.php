<?php
use yii\helpers\html;
?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th>ลำดับ</th>
            <th>ยี้ห้อคอมพิวเตอร์</th>
            <th>ปัญหา</th>
            
           
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $i => $item) {

            echo '<tr>';
            echo '<td>'.($i+1).'</td>';
            echo '<td>'.$item['brand'].'</td>';
            echo '<td>'.$item['problem'].'</td>';
          
            echo '</tr>';
        }
        
        ?>

    </tbody>
</table>