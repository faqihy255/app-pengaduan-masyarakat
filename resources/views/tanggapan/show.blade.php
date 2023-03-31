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
                    Data Tanggapan <strong>DETAIL TANGGAPAN</strong> <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <br>
                    <br>
                    
                        <div class="form-group">
                        <strong>Tanggal Tanggapan</strong>
                        {{ $tanggapan->tgl_tanggapan }}
                        </div>

                        <div class="form-group">
                        <strong>Tanggapan:</strong>
                        {{ $tanggapan->tanggapan }}
                        </div>

                        <div class="form-group">
                        <strong>Nik</strong>
                        {{ $tanggapan->nik }}
                        </div>

        
                        <a href="/tanggapan" class="btn btn-primary">Kembali</a>
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
 
     