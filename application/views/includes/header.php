<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>CodeIgniter Admin Sample Project</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/admin/css/global.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand">Project Name</a>
      <ul class="nav">
        <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
          <a href="<?php echo base_url(); ?>admin/products">Products</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- load basic JS -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/admin.min.js"></script>
