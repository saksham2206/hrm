<!DOCTYPE html>
<html>
<head>
	<title>Indusebpro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<style type="text/css">
	body {
		color: #fff;
		background: #4e6270;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: #7a7a7a;
		border-radius: 2px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #ececec;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
        position: relative;	
    }
	.login-form h2 {
		font-size: 22px;
        margin: 35px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #70c5c0;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #70c5c0;
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #50b8b3;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
	<div class="login-form container">
    <form action="<?php echo base_url() ?>login/login_panel" method="post">
		<div class="avatar">
			<img src="<?php echo base_url() ?>/assets/img/avatar.png" alt="Avatar">
		</div>
        <h2 class="text-center">Please Login Here</h2> 
        <?php if($error=$this->session->flashdata('login_failed')): ?>
				<div class="row">
					<div class="">
						<div class="alert alert-dismissible alert-danger">
							<?= $error ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

        <div class="form-group">
        	<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
        	<div class="col-lg-6">
				<?php echo form_error('username')?>
				</div>
        </div>
		<div class="form-group">
            <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Paasword']); ?>
            <div class="col-lg-6">
				<?php echo form_error('password'); ?>
				</div>
        </div>        
        <div class="form-group">
        	
					<?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary btn-lg btn-block','value'=>'Login']); ?>
        </div>
	    </form>
  
</div>
</body>
</html>