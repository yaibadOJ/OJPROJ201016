<?php
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
?>


<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th>ลำดับ</th>
            <th>ยี้ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
            <th>ประเภท cpu </th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $i => $item) {

            echo '<tr>';
            echo '<td>'.($i+1).'</td>';
            echo '<td>'.$item['brand'].'</td>';
            echo '<td>'.$item['asset_code'].'</td>';
            echo '<td>'.$item['cpu_type'].'</td>';
            echo '</tr>';
        }
        
        ?>

    </tbody>
</table>