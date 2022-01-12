<?php
    $con = new mysqli("localhost", "root", "", "db_surat_dobith");
?>
<!DOCTYPE html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Week 3 - surat - phpmyadmin ke php</title>

        <style>
            .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: 1.5cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
        
        #print {
            display:none;
            }
        
        @page {
            size: A4;
            margin: 0;
            }
        @media print {
            /*div:not(.page) {
            display:none !important;
            }*/
            #display_none {
            display:none !important;
            }
        
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
            }
        
        span#print {
            display:block;
            }
            
        th {
            color:#000;
            }
        }
        </style>
        
        </head>
        
        <body class="page">
            <?php
                $sql = "SELECT * FROM tbl_surat WHERE id = '2'";
                $query = mysqli_query($con, 'SELECT * FROM tbl_surat');
                $result = $con->query($sql);
                
                $isi1 = $result->fetch_assoc();
                $isi2 = mysqli_fetch_array($query);

                if($isi1["jenis_surat"] = "1"){
                    $js = "Surat Keputusan";
                }elseif($isi1["jenis_surat"] = "2"){
                    $js = "Surat Pernyataan";
                }elseif($isi1["jenis_surat"] = "3"){
                    $js = "Surat Peminjaman";
                }else{
                    $js = "Kode Bermasalah";
                }

                echo '';
                echo '';
                echo "<h2><center>" .$js ."</center></h2><br>";
                echo '<hr>';
                echo '<p>Tasikmalaya, </p>' .$isi1["tgl_surat"];
                echo '';
                echo 'No. : '.$isi1["no_surat"];
                echo '<br>Hal : '.$js;
                echo '<br><p></p>';
                echo '<address>';
                echo 'Kepada Yth,<br>';
                echo 'Bapak/Ibu Pimpinan<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '</address>';
                echo '';
                echo '<p>Dengan Hormat,</p>';
                echo '';
                echo '<p>Salam sejahtera kami sampaikan semoga Bapak/Ibu beserta jajarannya selalu berada dalam lindungan Tuhan Yang Maha Esa, Amin</p>';
                echo '';
                echo '<p>Dengan ini kami,<strong> ORGANISASI TEKNOLOGI INFORMASI(OTI)</strong> yang berorientasi ke dunia kerja mengajukan anggota/i kami yang tercantum di bawah ini diberikan ijin untuk melakukan Observasi dan memperoleh data-data yang diperlukan di perusahaan yang Bapak/Ibu pimpin.</p>';
                echo '<p>Adapun nama anggota tersebut adalah:</p>';
                echo '';
                echo '<table align="center" border="0">';
                echo '<tr>';
                echo '<td width=""><strong>No Anggota</strong></td><td><strong>:</strong></td><td><strong>202002074</strong></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td width=""><strong>Nama</strong></td><td><strong>:</strong></td><td><strong>'.$isi1["ttd_mengetahui"].'</strong></td>';
                echo '</tr>';
                echo '</table>';
                echo '<br>';
                echo '<p>Demikian surat pengantar ini kami sampaikan, atas bantuan dan kerjasamanya kami mengucapkan terima kasih.</p>';
                echo '';
                echo 'Hormat kami,<br>';
                echo '<strong>ORGANISASI TEKNOLOGI INFORMASI(OTI)</strong></p>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '';
                echo '<strong>'.$isi1["ttd_surat"].'</strong><br>';
                echo 'Ketua I<br>';
                echo '<br>';
                echo '<br>';
                echo '';
                echo '';
                echo '';
                echo '';
            ?>
        <svg class="position-absolute top-159 start-50 translate-middle" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16" style="cursor:pointer;" onClick="javascript:this.style.visibility='hidden';window.print()" title="Print">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>      
	</body>
</html>
