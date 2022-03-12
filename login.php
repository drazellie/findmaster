     <!-- Modal -->
     <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #A9DFDA ;">
                <button class="close" data-dismiss="modal" type="button">X</button>
                  <h2>Login Form</h2>     
                </div>
                <div class="modal-body hold-transition login-page" style="background-color: #A9DFDA ;">
                  <body class="text-center">
                    <div id="loginerrormessage"></div>
                    <div class="login-box">
                        <div class="login-box-body" style="background-color: #A9DFDA ; border: solid -1px #ddd;padding: 35px;min-height: 150px;"> 
                        <img class="mb-4" src="logo.png" alt="" width="350" height="180" >
                          <form action="" method="post">
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Username" name="user_email" id="user_email">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="password" class="form-control" placeholder="Password" name="user_pass" id="user_pass">
                              <span class="fa fa-lock form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">                    
                                   <h4><a href="<?php echo web_root; ?>index.php?q=register" class="col-xs-2">Register</a></h4>
                              </div>
                            </div>
                          </form> 
                            <div class="modal-footer" style="background-color: #A9DFDA ;">
                                <button class="btn pull-left" name="btnlogin" id="btnlogin" style="background-color: #0000FF;">Login</button>
                                <button class="btn" data-dismiss="modal" style="background-color: #FF0000;">Close</button> 
                            </div>
                        </div>
                      </div>
                    </div>
                <!-- </form> -->
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->