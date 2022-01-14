<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php include 'template/css.php';?>
  
  <title></title>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-left justify-content-between mb-6">
            <h1 class="h3 mb-4 text-gray-800">Tambah Data Transaksi</h1>
			
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Transaksi</li>
            </ol>		
          </div>

<div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" >
                    <thead class="thead-light">
                      <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <!-- <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingSelectGrid">Works with selects</label>
    </div>
  </div> -->
</div>
</thead>
</table>
</div>
</div>

		  
		  <!-- Isi-->
		  <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Data TransaksI</h6>
                </div>
                <div class="card-body">
                  <form method='post' action='aksi_transaksi.php?act=input'>
                    <div class="form-group">
                      <label for="nama">PEMBELI</label>
                      <input type="text" class="form-control" name="NAMAPEMBELI" placeholder="masukkan nama">
                      
                    </div>

                    <div class="form-group">
                      <label for="nama">NAMA BARANG</label>
                      <select name='id_pembeli' class='form-control' >
            <?php
            include 'koneksi.php';
            $stid = oci_parse($koneksi, 'SELECT * from PRODUK');
            oci_execute($stid);
            while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
            $ID_PRODUK = $d["ID_PRODUK"];
            $NAMAPRODUK = $d["NAMAPRODUK"];
            echo "<option value='$ID_PRODUK'>$NAMAPRODUK</option>";
            }
            ?>
            </select>  
                    </div>


                    <div class="form-group">
                      <label for="nama">ID PRODUK</label>
                      <select name='ID_PRODUK' class='form-control' >
            <?php
            include 'koneksi.php';
            $stid = oci_parse($koneksi, 'SELECT * from PRODUK');
            oci_execute($stid);
            while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
            $ID_PRODUK = $d["ID_PRODUK"];
            $NAMAPRODUK = $d["NAMAPRODUK"];
            echo "$ID_PRODUK";
            }
            ?>
            </select>
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="alamat">Pilih Jenis Beras</label>
                      <select name='ID_PRODUK' class='form-control'>
					  <?php												
						$stid = oci_parse($koneksi, 'SELECT * from PRODUK');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$ID_PRODUK = $d["ID_PRODUK"];
						$NAMAPRODUK = $d["NAMAPRODUK"];
						echo "<option value='$ID_PRODUK'>$PRODUK</option>";
						}
						?>
						</select>
					  
                    </div>
					<div class="form-group">
                      <label for="berat">Berat (Kg)</label>
                      
                      <input type="number" class="form-control" name="berat" placeholder="berat">
					  
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
			  </div>
			  </div>




        <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID TRANSAKSI</th>
                        <th>NAMA PELANGGAN</th>
                        <th>TANGGAL</th>
                        <th>ID PRODUK</th>
                        <th>NAMA PRODUK</th>
                        <th>HARGA PRODUK</th>
                        <th>QTY</th>
                        <th>TOTAL</th>
                        <th>DESKRIPSI</th>
                      
                      </tr>
                    </thead>
                    <tfoot>
                      
                    
                    
          <?php 
          include 'koneksi.php';
          $stid = oci_parse($koneksi, 'SELECT * from TRANSAKSI');

          oci_execute($stid);

          while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
            ?>
                      <tr>
                        <td>
             <?php echo $d['ID_TRANSAKSI']; ?>
            </td>
                          <td>
             <?php echo $d['NAMAPELANGGAN']; ?>
            </td>
            <td>
             <?php echo $d['TANGGAL']; ?>
            </td>
            <td>
             <?php echo $d['ID_PRODUK']; ?>
            </td>
            <td>
             <?php echo $d['NAMAPRODUK']; ?>
            </td>
            <td>
             <?php echo $d['HARGAPRODUK']; ?>
            </td>
            <td>
             <?php echo $d['QTY']; ?>
            </td>
            <td>
             <?php echo $d['TOTAL']; ?>
            </td>
            <td>
             <?php echo $d['DESKRIPSI']; ?>
            </td>

                                                                 
                      </tr>                                         
                    </tbody>
           <?php 
            }
          ?>
                  </table>
                </div>
          

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="documents              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    
    </div>
  </div>

  

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script> 
<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>  
</body>

</html>