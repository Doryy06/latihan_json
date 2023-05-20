<?php
$file="data.json";
$ambilData=file_get_contents($file);
$decodeData= json_decode($ambilData,true);
?>
<?php foreach($decodeData as $data) : ?>
<tr>
    <td><?= $data['nama'];?></td>
    <td><?= $data['email'];?></td>
</tr>
<?php endforeach;?>