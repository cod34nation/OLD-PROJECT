
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>WELCOME IN THE PANDA WEB</h3>
              </div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                 
                    <div class="col-md-9 col-sm-9 col-xs-12">

                     
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Record Donasi</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Public Information</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                         
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
<?php 
$hasil2 = mysqli_query($koneksi, "SELECT * FROM donasi,status WHERE donasi.id_status=status.id_status AND donasi.id_user = '$iduse'");
 ?>
                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Atas Nama</th>
                                  <th>Tanggal Donasi</th>
                                   <th>Tanggal Konfirmasi Donasi</th>
                                  <th>Jumlah Nominal</th>
                                  <th>Kode Ref</th>
                                  <th>Status Donasi</th>
                                  <th>Cek Map</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                            while ($data2 = mysqli_fetch_array($hasil2)) {
                              $id_user=$data2['id_user'];
                              $atas_nam=$data2['atas_nama'];
                              $tanggl=$data2['tanggal_donasi'];
                               $tanggl2=$data2['tanggal_perubahan'];
                              $nominal=$data2['jumlah_nominal'];
                              $idref=$data2['kode_ref'];
                              $statu=$data2['keterangan'];
                             echo 
                              '<tr>
                                  <td>'.$id_user.'</td>
                                   <td>'.$atas_nam.'</td>
                                    <td>'.$tanggl.'</td>
                                     <td>'.$tanggl2.'</td>

                                     <td>'.$nominal.'</td>
                                      <td>'.$idref.'</td>
                                      <td>'.$statu.'</td>
                                      
                                  </tr>';                           }
                            ?>  
                                
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>