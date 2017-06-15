<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/paper-bootstrap.min.css">
  </head>
  <body>
    <h3>Change password</h3>
    <?php
      $this->session->unset_userdata('sess_user');
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      echo anchor('http://home.nursepolice.go.th', $result);
    ?>
  </body>
</html>
