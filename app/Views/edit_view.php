<?php
helper('form');
echo form_open_multipart('ImageController/update');

$data1 = [
    'name' => 'id',
    'id' => 'id',
    'type' => 'hidden',
    'value' => $image['id'], 
    'maxlength' => '100',
    'size' => '30',
];

$data2 = [
    'name' => 'poza',
    'id' => 'poza',
    'value' => $image['image'], 
    'maxlength' => '100',
    'size' => '30',
];

?>

<?php echo form_input($data1); ?>
<table>
    <tr>
        <td> <?php echo form_label('Image', 'poza'); ?> </td>
        <td> <?php echo form_upload($data2); ?> </td>
    </tr>
</table>
<h2> <img src="<?php echo base_url($image['image']);?>" width="100" height="100"></h2>
<?php echo form_submit('submit','Update'); ?>