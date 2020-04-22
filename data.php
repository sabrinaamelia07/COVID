<html>
<head>
    <style type="text/css">
        #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
        body{padding:0;margin:0;font-family:arial;font-size:12px;}
        #main-wrapper{border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main{text-align:left;padding:5px;background:#e8eef0;}
        table{font-size:12px;width:450px;}
        #prn{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
        body{
            background:linear-gradient(to right,#1d3e53,#1d3e53,#476d7c,#77abb7);
        }
    </style>
</head>
<body>
    <div id="main-wrapper">
    <div id="main">
        <h1><b>Data Tes Covid</b></h1>
        </br>
<?php
include 'koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $Dasis[] = $data;
}
?>
<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-book">
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Id_Pasien</th>
                    <th scope="row">Usia</th>
                    <th scope="row">Alamat</th>
                    <th scope="row">Status</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($Dasis as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= $p['id_pasien'] ?></th>
            <td><?= $p['usia'] ?></th>
            <td><?= $p['alamat'] ?></th>
            <td><?= $p['status'] ?></th>
            <td>
                <a href="covid.html" class="badge badge-primary">Back</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
</div>
