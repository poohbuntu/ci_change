<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paper-bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid" style="margin-top:5%;">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4">
          <div class="page-header">
            <h3>Login เพื่อเปลี่ยนพาสเวิร์ด</h3>
          </div>
          <?php
            echo validation_errors();
            echo form_open('member/login2');
            echo 'Username:'.form_input('user', set_value('user')).'<br/>';
            echo 'Password:'.form_password('pass').'<br/>';
            echo form_submit('mysubmit', 'Submit');
            echo form_reset('myreset', 'Reset');
            echo form_close();
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
