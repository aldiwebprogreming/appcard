

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Buyer</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Buyer
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($buyer as $data) {?>
                                                <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['FirstName'] ?></td>
                                                    <td><?= $data['Email'] ?></td>
                                                    <td><?= $data['HP'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$data['id'] ?>">
                                                          Detail
                                                        </button>

<!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Buyer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                
                                <label>Username</label>
                                <p><?= $data['UserName']  ?></p><br>

                                <label>First Name</label>
                                <p><?= $data['FirstName']  ?></p><br>

                                <label>Email</label>
                                <p><?= $data['Email']  ?></p><br>

                                <label>Role Name</label>
                                <p><?= $data['RoleName']  ?></p><br>

                                <label>HP</label>
                                <p><?= $data['HP']  ?></p><br>

                                <label>Registered Date</label>
                                <p><?= $data['RegisteredDate']  ?></p><br>

                                <label>Birth Date</label>
                                <p><?= $data['BirthDate']  ?></p><br>

                                <label>Kabupaten</label>
                                <p><?= $data['Kabupaten']  ?></p><br>

                                <label>Kecamatan</label>
                                <p><?= $data['Kecamatan']  ?></p><br>

                                <label>Kelurahan</label>
                                <p><?= $data['Kelurahan']  ?></p><br>

                                 <label>Address</label>
                                <p><?= $data['Address']  ?></p><br>

                                
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                                             </td>
                                                </tr>
                                            <?php } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
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

       