

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
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    DataTables Advanced Tables
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form method="post" action="<?= base_url() ?>data_user/send_email"></
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>No</th>
                                                    <th>First name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Birth Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $no = 1;
                                                 foreach ($ultah as $data) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['FirstName'] ?></td>
                                                    <td><?= $data['Email'] ?></td>
                                                    <td><?= $data['HP'] ?></td>
                                                    <td><?= $data['BirthDate'] ?></td>
                                                   <!--  <td>
                                                        <button class="btn btn-primary">Detail</button>
                                                    </td> -->
                                                    
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </form>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <?php if ($row == 0) { ?>
                   <a href="<?= base_url() ?>data_user/send_card" class="btn btn-primary btn-lg btn-block disabled">Send Email </a>
               <?php } else { ?>
                      <a href="<?= base_url() ?>data_user/send_card" class="btn btn-primary btn-lg btn-block">Send Email </a>


                  <?php } ?>



                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

       