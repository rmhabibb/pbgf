    <?php
    $logged = $this->session->userdata('user_data');
     
      if (isset($logged)){
         $user_role = $this->session->userdata['user_data']['role'];  
          if ($user_role == 'Admin'){
               redirect('admin'.'/');
          } else if ($user_role == 'Peserta'){
               redirect('peserta'.'/');
             } else if ($user_role == 'Panitia'){
               redirect('panitia'.'/');
             }
      } 
  ?> 
    <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header  ">
               <center>
                <a class=" " href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logos/logo-nav.png" style="width: 20%"></a>
            </center>
            </div>
 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br><br><br>
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
         
          <?php 
          echo form_open('login/user_validate');
          ?>
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
            <?php 
                echo form_password('password');
            ?> 
          </div> 
          
            <button type="submit" class="button button-block"/>login</button>
          
           <?php 
          echo form_close();
          ?>
        </div>
        <div id="signup">    
          
           <?php 
          echo form_open('Login/create_user');
          ?>
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
            <input  type="password" name="password" minlength="8"  required value="">
          </div> 
          
          <div class="field-wrap">
           <label>
              Konfirmasi Password<span class="req">*</span>
            </label>
            <input  type="password" name="repassword"  required value="">
          </div> 
          
          <button type="submit" class="button button-block"/>Submit</button>
          
          <?php 
          echo form_close();
          ?>
        </div>
        
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    </section>
  