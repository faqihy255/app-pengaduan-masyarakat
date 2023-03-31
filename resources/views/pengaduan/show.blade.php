<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!DOCTYPE html>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Pengaduan <strong>DETAIL Pengaduan</strong> <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <br>
                    <br>
                    
                    <!-- <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $pengaduan->nik }}
                        </div> -->

                        <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Nik</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$pengaduan->nik}}
                                        </div>
                                    </div>

                        <!-- <div class="form-group">
                        <strong>Tanggal Tanggapan:</strong>
                        {{ $pengaduan->tgl_pengaduan }}
                        </div> -->

                        <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Tanggal Lapor</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$pengaduan->tgl_pengaduan}}
                                        </div>
                                    </div>

                        <!-- <div class="form-group">
                        <strong>pengaduan:</strong>
                        {{ $pengaduan->isi_laporan }}
                        </div> -->

                        <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Laporan</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$pengaduan->isi_laporan}}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Tanggapan</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$tanggapan->tanggapan ?? "Belum Ditanggapi"}}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            <img src="{{ asset('image/'. $pengaduan->foto ) }}" height="100%" width="20%" alt="pengaduan"/>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                                @if ($pengaduan->status == '0')
                                                <a href="#" class="badge badge-warning">Pending</a>
                                                @elseif ($pengaduan->status == 'proses')
                                                    <a href="#" class="btn btn-warning">Proses</a>
                                                @else
                                                    <a href="#" class="btn btn-success">Selesai</a>
                                                @endif
                                        </div>
                                    </div> 
        
                        <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    </form>
 
                </div>
            </div>
        </div>
  <!-- /.content-wrapper -->
  
     <!-- Main Footer -->
     @include('template.footer')
    </footer>
   </div>
           
 
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
     <div class="p-3">
       <h5>Title</h5>
       <p>Sidebar content</p>
     </div>
   </aside>
   <!-- /.control-sidebar -->
 
 
 <!-- REQUIRED SCRIPTS -->
 
   @include('template.script')
 </body>
 </html>