

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $sub_title ?></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form tambah admin
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form method="post" action="<?= base_url() ?>Data_user/add_action">

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control" placeholder="Enter Usernam" name="username" required="">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="pass" required="" required="">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Role</label>
                                            <select class="form-control" name="role">
                                                <option>Pilih role admin</option>
                                                <option>admin</option>
                                                <option>super admin</option>

                                          </select>
                                          </div>
                                          
                                          <input type="submit" name="kirim" class="btn btn-primary" value="submit">
                                          <a href="<?= base_url() ?>login/data_admin" class="btn btn-success">Kembali</a>
                                      
                                    </form>
                                  
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                 
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

       