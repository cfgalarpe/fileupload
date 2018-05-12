<html>
<head><title>File Upload</title>
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/triune.css" />
<!-- basic scripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/bootstrap.js"></script>

</head>

<body class="content">
<br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<form role="form" method="post" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-body">
            <div class="form-group">
                <label>Picture</label>
                <input class="form-control" type="file" name="picture" />
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" />
            </div>
             <div class="form-group">
                <input type="submit" class="btn btn-warning btn-block" name="userSubmit" value="Add">
            </div>
        </div>
    </div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>