<!DOCTYPE html>
<html lang="en" style="margin: 0px;">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>PDF-Sertifikat</title>
  <link href="{{asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <style>
      p{
          font-size: 20px;
      }
      .table{
          width: 70%;
          margin: auto;
      }
      .table tr td {
        border: none;
        text-align: center;
        padding: 0;
        }
  </style>
</head>
 
<body id="page-top" style=" 
padding-top: 70px;
background-image: url('{{ asset('assets/images/'.$sertifikat->gambar)}}');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
-webkit-print-color-adjust: exact;
height: 100%;">
    <div style="margin-top: 30px;">
        <table class="table">
                <tr>
                    <td colspan="3"><h1>SERTIFIKAT</h1></td>
                </tr>
                <tr>
                    <td colspan="3"><h2>{{$sertifikat->instansi}}</h2></td>
                </tr>
                <tr>
                    <td colspan="3" style="padding-bottom: 20px"><p>Nomor : {{$sertifikat->nomor}}</p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Diberikan kepada : </p></td>
                </tr>
                <tr>
                    <td colspan="3"><h2>{{$sertifikat->peserta}}</h2></td>
                </tr>
                <tr>
                    <td colspan="3"><p><?php echo html_entity_decode($sertifikat->keterangan); ?></p></td>
                </tr>
                <tr>
                    <td style="padding-top: 130px;"><b>{{$sertifikat->panitia1}}</b><br>{{$sertifikat->jabatan1}}</td>
                    <td  style="padding-top: 10px;">{{$sertifikat->tempat}}, {{date("d F Y", strtotime($sertifikat->tanggal))}}</td>
                    <td style="padding-top: 130px;"><b>{{$sertifikat->panitia2}}</b><br>{{$sertifikat->jabatan2}}</td>
                </tr>
        </table>
    </div>
<!-- End of Main Content -->
</body>
</html>