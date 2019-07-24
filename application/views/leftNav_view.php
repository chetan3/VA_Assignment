<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.side-bar {
			margin-top: 30px;
			display: block;
			width: 100px;
		}
	</style>
	<script type="text/javascript">
		$(function(){
		    $('#submit-buttons').click(function(){
		        $( "#myModal" ).modal("show");
		    })
		})
	</script>
	<script type="text/javascript">
		$(function(){
		    $('#send').click(function(){
		        $( "#myModal" ).modal("hide");
		    })
		})
	</script>


</head>

<body>
	<div class="container">
		<div class="row">
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body" id="showdata">

			      	<form id="composeForm" action="http://localhost/emailApp/index.php/Mailer" method="POST">
						<div class="form-group row">
							<label for="email_to" class="col-sm-2 form-control-label"> To </label>
							<div class="col-sm-10">
								<input type="email" name="email_to" class="form-control" placeholder="to@email.com" value="<?php echo set_value('email_to'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email_subject" class="col-sm-2 form-control-label">Subject</label>
							<div class="col-sm-10">
								<input type="text" name="email_subject" class="form-control" id="email_subject" placeholder="Email" value="<?php echo set_value('email_subject'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email_body" class="col-sm-2 form-control-label">Description</label>
							<div class="col-sm-10">
								<textarea name="email_body" name="email_body" id="email_body" cols="30" rows="10" class="form-control"><?php echo set_value('email_body'); ?></textarea>
							</div>
						</div>

						<div class="form-group float-right">
							<button type="reset" class="btn btn-dark">Reset</button>
							<button type="submit" id="send" class="btn btn-primary">Send mail</button>
						</div>
					</form>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>
		</div>
		<button class="btn btn-primary side-bar" id="submit-buttons" href="#"​​​​​>Compose</button>
		<button class="btn btn-primary side-bar" id="submit-buttons" href="#"​​​​​>Inbox</button>
	</div>
</body>
</html>


