<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Register</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paper-bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid" style="margin-top:5%;">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4">
          <div class="page-header">
            <h3>สมัครใช้อินเตอร์เน็ต<small><br>username และ password ใช้ตัวเลขหรือตัวอักษรภาษาอังกฤษพิมพ์เล็กเท่านั้น</small></h3>
          </div>
          <?php
            echo validation_errors();
            echo form_open('member/register2');
            echo 'Username:'.form_input('username').'<br/>';
            echo 'Password:'.form_password('password').'<br/>';
            echo 'คำนำหน้า:'.form_input('title').'<br/>';
            echo 'ชื่อ:'.form_input('firstname').'<br/>';
            echo 'นามสกุล:'.form_input('lastname').'<br/>';
            echo form_submit('mysubmit', 'Submit');
            echo form_reset('myreset', 'Reset');
            echo form_close();
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
