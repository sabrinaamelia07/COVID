<html>
<head>
    <title>Tes Covid</title>
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
        <h1><b>CORONAVIRUS CHECK</b></h1>
        </br>

      <form action="" method="POST">
        <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required/></td>
                    </tr>
                    <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="gender" value="L">L
                            <input type="radio" name="gender" value="P">P
                            </td>
                            </tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td><input type="text" name="tempattanggallahir" required/></td>
                        </tr>
                        <td>Usia</td>
                        <td><input type="text" name="usia" required/></td>
                        </tr>
                        <td>Alamat Lengkap</td>
                        <td><input type="text" name="alamat" required/></td>
                        </tr>
                         <td>Apakah Anda batuk?</td>
                        <td><input type="text" name="batuk" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda demam?</td>
                        <td><input type="text" name="demam" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda pusing?</td>
                        <td><input type="text" name="pusing" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa lemas?</td>
                        <td><input type="text" name="lemas" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa sesak napas?</td>
                        <td><input type="text" name="sesak" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Suhu Tubuh : </td>
                        <td><input type="text" name="nilai" placeholder="derajat"> <br> <br>
                        <tr>
                        <td>
                        <label><br><br>
                           <a href="data.php"button type="submit" name="Submit">SUBMIT</button></a>
                        </label>
                         <label>
                           <a href="covid.html"button type="reset" name="reset">BATAL</button></a>
                        </label>
                        </script>
<div id="Submit">
    <?php

    if(isset($_POST['nilai'])) {
      $nama = $_POST['nama'];
      $nilai = $_POST['nilai'];

      if ($nilai > 37 ){
        echo $nama.", Ooops anda POSITIF CORONA, karena suhu tubuh anda tinggi= ".$nilai;
      }else{
        echo $nama.", anda NEGATIF CORONA, karena suhu tubuh anda normal = ".$nilai;
      }
      }
    ?>
     </div>
        </div>
    </div>
</body>
</html>
  