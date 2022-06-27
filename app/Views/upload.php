<?php
$poza = [
    'name' => 'poza',
    'id' => 'poza',
    'type' => 'file',
];

helper('form');
?>
<html>
    <body>
        <?php echo form_open_multipart('ImageController/save'); ?>
        <table class="table">
            <tr>
                <td>Imagine</td>
                <td><?php echo form_upload($poza);?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_submit('submit','Save', 'class="btn btn-primary"');?></td>
            </tr>
        </table>
    </body>
</html>
