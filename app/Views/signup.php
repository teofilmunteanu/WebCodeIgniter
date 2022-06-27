<?php

helper('form');
?>
<html>
    <head>
        <title>User Login</title>
        
        
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
              <div>
                  <a class="btn-register " href="/WebCodeIgniter/login">Log In</a> <a class="btn-register" href="/WebCodeIgniter/signup">Sign Up</a>
              </div>
            </div>
        </header><!-- End Header -->
        <div class="wrapper">
            <div id="formContent">
                <p>
                    <?php if(isset($msg)){ ?> <li> <?php echo $msg;?></li> <?php } ?>
                    <?php echo \Config\Services::validation()->listErrors() ?>
                </p>
                
                <?php echo form_open('signupCheck') ?>
                
                <h2>User Login</h2>
                
                
                <?php 
                $data1 = [
                    'name' => 'email',
                    'id' => 'text1',
                    'maxlength' => '50',
                    'size' => '30',
                ];

                $data2 = [
                    'name' => 'password',
                    'id' => 'text2',
                    'maxlength' => '50',
                    'size' => '30',
                ];
                
                $data3 = [
                    'name' => 'cpassword',
                    'id' => 'text3',
                    'maxlength' => '50',
                    'size' => '30',
                ];
                
                $data4 = [
                    'name' => 'captchaValue',
                    'id' => 'captchaVal',
                    'maxlength' => '5',
                    'type'  => 'hidden'
                ];

                $data5 = [
                    'name' => 'captchaAnswer',
                    'id' => 'text4',
                    'maxlength' => '5',
                    'size' => '30',
                ];
                ?>
                
                <table>
                    <tr>
                        <td colspan="2"><strong>Enter your account:</strong></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Email', 'text1');?></td>
                        <td><?php echo form_input($data1);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Password', 'text2');?>:</td>
                        <td><?php echo form_input($data2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Confirm Pass', 'text3');?>:</td>
                        <td><?php echo form_input($data3);?></td>
                    </tr>
                    <tr>
                        <td><canvas id="captcha" width="100" height="50"></canvas></td>
                        <td><button type="button" style="margin-left:2%; font-size:24px;" onclick="generateCaptcha()">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </td>
                        <td><?php echo form_input($data4);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Text in the picture:', 'text5');?></td>
                        <td><?php echo form_input($data5);?></td>
                    </tr>    
                    <tr>
                        <td colspan="2" align="center"><?php echo form_submit('submit','Sign Up', 'class="btn btn-success"');?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">Already have an account? </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><a href="/WebCodeIgniter/login">Log In</a></td>
                    </tr>
                </table> 
                
            </div>
        </div>

    <script src="assets/js/scripts.js"></script>
    <script src="<?php echo base_url('/assets/login/captchaScript.js');?>"></script>
    </body>
</html>
