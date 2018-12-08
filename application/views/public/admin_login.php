<?php include('public_header.php'); ?>

<div style="margin: 10%; padding: auto;">
	
		<?php echo form_open('login/admin_login');  ?>
  <fieldset>
    <legend>Admin login</legend>
    
    <div class="form-group">
      <label for="exampleInputEmail1">User name</label>

      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter User name']); ?>
   
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'password']); ?>

    </div>
   
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-primary', 'value'=>'Reset']); ?>
    <!-- <button type="submit" class="btn btn-primary">Cancle</button> -->
    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-danger', 'value'=>'Login']); ?>
   </fieldset>
</form>
</div>

<?php include('public_footer.php'); ?>