<!DOCTYPE html>
<html>
<head>
	<title>PDF Surat keluar</title>
	

	<style type="text/css">
				.judul {
					font-family:"Arial", Helvetica, sans-serif !important;
					font-size:15px;
					font-weight:bold;
					text-align:center;
				}
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:11px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:11px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>


</head>
<body>
  <p class="judul">Daftar Agenda Surat Masuk</p>
<table class="tg">
  
	<thead>
	 <tr>
		<th class="tg-3wr7"><center>No</center></th>
        <th class="tg-3wr7"><center>No Agenda</center></th>
        <th class="tg-3wr7"><center>Tgl Masuk</center></th>
        <th class="tg-3wr7"><center>Dari</center></th>
        <th class="tg-3wr7"><center>No Surat</center></th>
        <th class="tg-3wr7"><center>Perihal</center></th>
        <th class="tg-3wr7"><center>Penerima</center></th>
        </tr>
	</thead>>
	 <?php $no=1; ?>
                @foreach($smsk as $smasuk)
                
                <tbody >
                    <tr >
                        <td class="tg-rv4w"><center>{{ $no++ }}</center></td>
                        <td class="tg-rv4w"><center>{{ $smasuk->no_agenda }}</center></td>
                        <td class="tg-rv4w"><center>{{ $smasuk->tgl_masuk }}</center></td>
                        <td class="tg-rv4w"><center>{{ $smasuk->asal_surat }}</center></td>
                        <td class="tg-rv4w"><center>{{ $smasuk->no_surat }}</center></td>
                        <td class="tg-rv4w">{{ $smasuk->perihal }}</td>
                        <td class="tg-rv4w">{{ $smasuk->penerima }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

</body>
</html>