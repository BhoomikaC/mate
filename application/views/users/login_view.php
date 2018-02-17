
<?php if($this->session->userdata('logged_in')): ?>
      
    <p>You are logged in as <?php echo $this->session->userdata('username') ?></p>

    <?php echo form_open('users/logout'); ?>
      <button type="submit" name='submit' class="btn btn-primary">Logout</button>
    <?php echo form_close(); ?>

<?php else: ?>

    <h2> Login </h2>

    <?php $attributes = array('id'=>'login_form', 'class'=>'form_horizontal'); ?>

    <?php 
        if($this->session->flashdata('errors')):
          echo $this->session->flashdata('errors');
        endif;
    ?>

    <?php echo form_open('users/login', $attributes); ?>

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name='password' class="form-control" id="password" placeholder="Enter Password">
      </div>

      <button type="submit" name='submit' class="btn btn-primary">Submit</button>

    <?php echo form_close(); ?>

  <?php endif; ?>