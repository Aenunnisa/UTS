<!DOCTYPE html>
<html>
<style type="text/css">
    table{
        background-color:#D3D3D3;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Aenun Nisa</title>
</head>
<body>
<form method="POST"  action="">
        <table align="center" border="3" cellpadding="2" cellspacing="5"> 
            <tr align="center"><td><h2> <b>Masukkan Data Pasien Covid 19</b></h2></td></tr>
            <tr> 
                <td> 
                <table width="650" border="0" cellpadding="0" cellspacing="10" align="center"> 
                <tr>
                            <td>Wilayah</td>
                            <td> : </td>
                            <td>  
                                <select name="wilayah" id="wilayah">
                                    <option value="">---- Pilih Wilayah ----</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td> : </td>
                            <td><input type="text" name="positif" size="45" placeholder="Masukan Jumlah Positif" require></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dirawat</td>
                            <td> : </td>
                            <td><input type="text" name="rawat" size="45" placeholder="Masukan Jumlah Dirawat" require></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td> : </td>
                            <td><input type="text" name="sembuh" size="45"  placeholder="Masukan Jumlah Sembuh" require></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td> : </td>
                            <td><input type="text" name="meninggal" size="45" placeholder="Masukan Jumlah Meninggal" require></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td> : </td>
                            <td><input type="text" name="nama" size="45" placeholder="Masukan Nama Operator" require></td>
                        </tr>
                        <tr>
                            <td>Nim Mahasiswa</td>
                            <td> : </td>
                            <td><input type="text" name="nim" size="45" placeholder="Masukan NIM Mahasiswa" require></td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="buttonOk" value="Simpan"></td>
                            <td><input type="submit"  value="Refresh Page" onClick="document.location.reload(true)"></td>
                        </tr>
                </table> 
                </td> 
            </tr> 
        </table> 
    </form> 
    <br><br><br>
<center>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <?php if (isset($_POST['buttonOk'])) {
        echo '<h3>Data Pemantaun Covid19 Wilayah ' . $_POST['wilayah'] . ' <br> Per '.date('d F Y H:i:s').' <br> '. $_POST['nama'] .' / '. $_POST['nim'] .'</h3>';
        echo '<table border="1" cellpadding="10" cellspacing="0">';
        echo '<thead>';
        echo '<tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                </tr>';
        echo ' </thead>';
        echo '<tbody>
                <td>'.$_POST['positif'] .'</td>
                <td>'. $_POST['rawat'] .'</td>
                <td>'. $_POST['sembuh'] .'</td>
                <td>'. $_POST['meninggal'] .'</td>
              </tbody>';
        echo '</table>';
    } ?>
<script>
    function reloadpage()
    {
    location.reload()
    }
</script>
</center>
</body>
</html>

