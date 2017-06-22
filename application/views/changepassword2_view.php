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
            <h3>เปลี่ยนรหัสแล้ว</h3>
          </div>
          <?php
            $this->session->unset_userdata('sess_user');
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            echo anchor('http://home.nursepolice.go.th', $result);
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
