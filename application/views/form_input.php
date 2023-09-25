 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">INPUT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                PEMESANAN
         </div>
         <form action="<?= base_url('pemesanan/simpan_data')?>" method="post">   
                <div class="card-body">
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil memasukan data')</script>
                  <?php
                       };
                  ?>   
                    <label for="">Nama Lapangan</label>
                    <input required type="text" class="form-control" name="nama_lapangan">
                    <label for="">Lebar Lapangan</label>
                    <input  required type="text" class="form-control" name="lebar_lapangan">
                    <label for="">Bola </label>
                    <input  required type="text" class="form-control" name="bola">
                    <label for="">tanggal_pemesanan</label>
                    <input  required type="date" class="form-control" name="tanggal_pemesanan">
                    <label for="">jam_pemesanan</label>
                    <input required type="time" class="form-control" name="jam_pemesanan">
                    <label for="">jenis_rumput</label>
                        <select class="form-control" name="jenis_rumput" id="">
                        <option value="">Pilih Jenis Rumput</option>
                        <option value="Asli">Rumput Asli</option>
                        <option value="Sintetis">Rumput sintetis</option>
                    </select>   
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-info">SIMPAN</button>
                </div>
        </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 