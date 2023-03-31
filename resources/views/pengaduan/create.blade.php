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
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Laporkan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
            <strong>LAPORKAN</strong>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                    
 
                        <div class="form-group">
                                <input type="number" value="{{ auth()->user()->nik }}" hidden name="nik" class="form-control" placeholder="">
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                                            <label for="val-username">Keluhan Anda</label>
                                            <div class="col-lg-6">
                                                <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                @if($errors->has('isi_laporan'))
                                            <div class="text-danger">
                                                {{ $errors->first('isi_laporan')}}
                                            </div>
                                        @endif
                                            </div>
                                        </div>

<!-- 
                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea name="isi_laporan" class="form-control" placeholder="" ></textarea> 
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif

                            </div> -->

                            <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="">
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif

                            </div>
 
                        <!-- <div class="form-group">
                            <p>Status</p>
                            <input type="radio" id="proses" name="status" value="proses" />Proses</p>
                            <input type="radio" id="selesai" name="status" value="selesai" />Selesai</p>
                           
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif

                        <div class="form-group"> -->
                            <input type="submit" class="btn btn-success" value="Laporkan">
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
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
 