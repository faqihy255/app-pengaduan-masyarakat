<!DOCTYPE html>
<html>
<head>
    <title>LaporanKU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>

    <div class="container">

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <!-- <th>NIK</th> -->
                    <th>Laporan</th>
                    <th>Foto</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                <tr>
                    <!-- <td>{{$pengaduan->nik}}</td> -->
                    <td>{{$pengaduan->isi_laporan}}</td>
                    <td><img src="{{ asset('image/'. $pengaduan->foto ) }}" height="10%" width="20%" alt="pengaduan"/></td>
                    <td>{{$pengaduan->tgl_pengaduan}}</td>
                    <th>
                                    @if($pengaduan->status == "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($pengaduan->status == "proses")
                                <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else($pengaduan->status == "selesai")
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
    
    </body>
    </html>