<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSAKSI</title>
    <style>
        body {
            display:flex;
            justify-content:center;
            padding:2rem;
        }
        table {
            border:1px solid black;
            width:100%
            background-color: #f1f1f1;
        }
      
        table thead th {
            border-bottom: 1px solid black;
            padding: 0.5rem 0.2rem;
            text-transform:Uppercase;
            font-size:0.7rem;
        }
        
        table tbody{
            background-color: white;
        }
        
        table tbody tr td{
            text-align:center;
            padding: 0.5rem 0.2rem;
        }
        </style>

</head>
<body>
    <table class="">
        <thead>
            <tr>
                      <th>Pelanggan</th>
                      <th>Kasir</th>
                      <th>Kategori</th>
                      <th>PlatNomer</th>
                      <th>TotalBayar</th>
                      <th>Tanggal</th>
    </tr>       
    </thead>  
    <tbody> 
    @foreach ($transaksi as $wulan)

                <tr>
                    <td>{{$wulan->pelanggan->nama}}</td>
                    <td>{{$wulan->kasir->nama}}</td>
                    <td>{{$wulan->kategori->jenis_cuci}}</td>
                    <td>{{$wulan->plat_nomer}}</td>
                    <td>{{$wulan->total_bayar}}</td>
                    <td>{{$wulan->tanggal}}</td>
    </td>
    </tr>
    @endforeach
   
    </tbody>
    </table>
</body>
</html>