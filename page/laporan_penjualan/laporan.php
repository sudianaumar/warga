<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA WARGA GRAHA AQUILA
                            </h2>
                            
                        </div>
                         <!-- <div class="body">
                        <form method="post" action="page/laporan_penjualan/cetak.php" target="_blank" >
                            <table>
                                    <div ><br>
                                        <label>Bulan :</label>
                                        <select name="bulan" class="number_format">
                                            <option value="">Pilih</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                            <input type="submit" name="cetak" value="cetak" class="btn btn-primary" >        
                                   </div>
                                </table>

                        </form>
                    </div>
 -->
                        <div class="body">
                             
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NOM RMH</th>
                                            <th>NAMA</th>
                                            <th>TGL LAHIR</th>
                                            <th>TELPON</th>
                                           
                                            <th>STATUS</th>
                                            <th>KET</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        <?php
                                            include "koneksi.php";
                                            $no = 1;
                                         $sql = $koneksi->query("select * from tb_podaily order by nik ASC");

                                            while ($data = $sql->fetch_assoc()) { 

                                                
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nik']?></td>
                                            <td><?php echo $data['nama']?></td>
                                            <td><?php echo $data['tgl_lahir']?></td>
                                            <td><?php echo $data['telpon']?></td>
                                            <td><?php echo $data['alamat']?></td>
                                            
                                            <td><?php echo $data['status']?></td>
                                            <td><?php echo $data['bagian']?></td>

                                            <td>
                                                <!-- <a href="?page=konsumen&aksi=edit&id=<?php //echo $data['kode_konsumen']?>" class="btn btn-success" >Edit</a> -->
                                                <a href="?page=laporan_penjualan&aksi=view-detail&kode_penjualan=<?php echo $data['kode_penjualan']?>" class="btn btn-success" ><i class="fa fa-eye" aria-hidden="true" style="border-radius: 5px"></i> View Detail</a>
                                            </td>

                                            
                                        </tr>
                                        <?php 
                                        // $total = $total+$data['profit'];
                                    } ?>
                                    </tbody>
                                    
                                </table>
                               
                            </div>