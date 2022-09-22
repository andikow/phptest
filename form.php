<!DOCTYPE html>
<html>
<head>
  <title>Web Input Data Penjualan</title>
  <link rel="stylesheet" href="./assets/css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./assets/script/index.js"></script>

</head>
<body>
  <div class='row'>
    <div class='col'>
      <h2>Form Input Data Barang</h2>
      <form method = 'post' action= "simpanbarang.php">
        <table>
          <tr>
            <td>Kode Part / Jasa</td>
            <td>:</td>
            <td><input type='text' name='KdBarang'></td>
          </tr>
          <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type='text' name='Deskripsi'></td>
          </tr>
          <tr>
            <td>HET</td>
            <td>:</td>
            <td><input type='number' name='HET'></td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type='submit' value='SIMPAN'></td>
          </tr>
        </table>
      </form>

      <h2>Form Input Data Pelanggan</h2>
      <form method = 'post' action= "simpanpelanggan.php">
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='Nama'></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type='text' name='Alamat'></td>
          </tr>
          <tr>
            <td>NPWP</td>
            <td>:</td>
            <td><input type='number' name='NPWP'></td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type='submit' value='SIMPAN'></td>
          </tr>
        </table>
      </form>
    </div>
    <div class='col'>
      <h2>Form Input Penjualan</h2>
      <form method = 'post' action= "simpanpenjualan.php">
        <table>
          <tr>
            <td>Kode Pelanggan</td>
            <td>:</td>
            <td><input type='text' name='KdPelanggan'></td>
          </tr>
          <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><input type='text' name='Nama' disabled></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type='text' name='Nama' disabled></td>
          </tr>
          <tr>
            <td>NPWP</td>
            <td>:</td>
            <td><input type='text' name='Nama' disabled></td>
          </tr>
          <tr>
            <td>Nomor Polisi</td>
            <td>:</td>
            <td><input type='text' name='NoPol'></td>
          </tr>
        </table>
        <br/>
      <table id="tbl">
        <tr>
          <th><label>Kode Barang / Jasa</label></th>
          <th><label>Deskripsi</label></th>
          <th><label>Qty</label></th>
          <th><label>HET</label></th>
          <th><label>Diskon</label></th>
          <th><label>Jumlah</label></th>
          <th></th>
        </tr>
        <tr>
          <td><input type="text" name="KdBarang" /></td>
          <td><input type="text" name="Deskripsi" /></td>
          <td><input type="text" name="Qty" /></td>
          <td><input type="text" name="HET" /></td>
          <td><input type="text" name="diskon" /></td>
          <td></td>
          <td><input type="button" value="X" onclick="SomeDeleteRowFunction(this)"/></td>
        </tr>
      </table>
      <input type="button" class="button" value="Tambah Item" onclick="addField('tbl');" />
      <br/>
      <input style = "margin-top:4em;" type="submit" class="button" value="SIMPAN" onclick="addField('tbl');" />
    </form>
    </div>
  </div>
</body>
</html>
