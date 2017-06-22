<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paper-bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid" style="margin-top:5%;">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4">
          <div class="page-header">
            <h3>เปลี่ยนรหัสเข้าอินเตอร์เน็ต<small><br>ใส่รหัสเดิม และตั้งรหัสใหม่</small></h3>
          </div>
          <?php
            echo validation_errors();
            echo form_open('member/changepassword2');
            echo 'Old password:'.form_password('oldpass').'<br/>';
            echo 'New password:'.form_password('newpass').'<br/>';
            echo 'Confirm password:'.form_password('confpass').'<br/>';
            echo form_submit('mysubmit', 'Submit');
            echo form_reset('myreset', 'Reset');
            echo form_close();
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
