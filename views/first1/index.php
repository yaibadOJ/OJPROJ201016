<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title;?></h1>
<?php
//print_r($person);
foreach ($person as $key=>$item) {
    echo $key.':'.$item['fname'].'/'.$item['lname'].'/'.$item['fname'].'/'.$item['email'].'<br>';
    
}
echo '<hr>';
?>

<table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    
        
    <tbody>    
    <?php
    
    foreach ($person as $key=>$value) {
        echo '<tr>';
        echo '<td>'.($key+1).'</td>';
        echo '<td>'.$value['fname'].'</td>';
        echo '<td>'.$value['lname'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '</tr>';
    }        
    ?>        
    </tbody>
  </table>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
