<html>
    <head>
        <title>Upload</title>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="<?php echo base_url('/assets/login/loginStyle.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('/assets/general/mystyles.css');?>" rel="stylesheet" />
    </head>
    <body>
        <header id="header" class="header">
            <div class="container-fluid d-flex align-items-center justify-content-between">
              <div id="logoText">
                    <h1><a href = "/WebCodeIgniter/">Nature Collection</a></h1>
              </div>
            </div>
        </header><!-- End Header -->
        <div class="wrapper">
            <div id="formContent"> 
                
                <h2>Upload</h2>
                <?php
                    $poza = [
                        'name' => 'poza',
                        'id' => 'poza',
                        'type' => 'file',
                    ];

                    helper('form');
                ?>
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
                 
                
            </div>
            
            <svg height="400" width="2000" style="z-index:-1;position:absolute; bottom:-15%; margin-left:15%;">
                <polygon points="100,0 0,400 500,400" style="fill:#6ed46e;stroke:purple;stroke-width:1" />
                <polygon points="900,200 500,400 1200,400" style="fill:#72cf72;stroke:purple;stroke-width:1" />
                <polygon points="600,100 300,400 800,400" style="fill:#90EE90;stroke:purple;stroke-width:1" />
                <polygon points="1400,250 1200,400 1900,400" style="fill:#52a152;stroke:purple;stroke-width:1" />
            </svg>
        </div>
        
        
    </body>
</html>


