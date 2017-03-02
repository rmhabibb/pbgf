<?php
    // $logged = $this->session->userdata('user_data');
     
    //   if (isset($logged)){
    //      $user_role = $this->session->userdata['user_data']['role'];  
    //       if ($user_role == 'Admin'){
    //            redirect('admin'.'/');
    //       } else if ($user_role == 'Peserta'){
    //            redirect('peserta'.'/');
    //          } else if ($user_role == 'Panitia'){
    //            redirect('panitia'.'/');
    //          }
    //   } 
?> 
    <div style="margin-top: 5%; margin-bottom: -5%;">
      <center>
          <a class=" " href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logos/logo-nav.png" style="width: 20%"></a>
      </center>
    </div>
    <section>
        <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Login</a></li>
        <li class="tab "><a href="#signup">Daftar</a></li>
      </ul>
      
      <div class="tab-content">
       <div style="margin-bottom: 3%;">
        <?php  
          $msg = $this->session->flashdata('msg');
          if(isset($msg)){
            echo $msg;
          }
        ?>
      </div>
       <div id="login">    
         
          <?php echo form_open('login/user_validate');?>
            <div class="field-wrap">
              <label>
                ID/NIM<span class="req">*</span>
              </label>
            <input  type="text" name="username" required value="">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <?php echo form_password('password');?> 
          </div> 
          
          <input type="submit" class="button button-block" name="login" value="Login" />
          
          <?php echo form_close();?>
        </div>
        <div id="signup">    
          
          <?php echo form_open('Login/create_user'); ?>
            <div class="field-wrap">
              <label>
                NIM<span class="req">*</span>
              </label>
            <input type="text" name="username" required value="">
          </div>
          
          <div class="field-wrap">
            <label>
              Password (Minimal 8 Karakter)<span class="req">*</span>
            </label>
            <input  type="password" name="password1" required value="">
            <!-- <input  type="password" name="password" minlength="8"  required value=""> -->
          </div> 
          
          <div class="field-wrap">
           <label>
              Konfirmasi Password<span class="req">*</span>
            </label>
            <input  type="password" name="password2"  required value="">
          </div> 
          
          <input type="submit" name="regist" class="button button-block" value="Daftar">
          <!-- <button type="submit" class="button button-block"/>Submit</button> -->
          
          <?php echo form_close(); ?>
        </div>
        
      </div><!-- tab-content -->    
  </div> <!-- /form -->
</section>
  