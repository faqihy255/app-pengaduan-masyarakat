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
        <title>EDIT DATA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                     <div class="card-header text-center">
                    DATA PENGADUAN MASYARAKAT
                </div>
                    <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" placeholder="">
                                <option>Pilih</option>
                                <option>Proses</option>
                                <option>Selesai</option>
                            </select>

                                <input type="submit" class="btn btn-success" value="Simpan">
                            <input type="/pengaduan" class="btn btn-primary" value="kembali">
                            
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
 