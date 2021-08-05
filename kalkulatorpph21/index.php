<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:/edukasipajak/index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Kalkulator PPh21 | Tax Center</title>
  <link rel="stylesheet" href="/edukasipajak/assets/css/stylekalkulator.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <style>
    .collapsible {
      border: 2px;
    }

    .active,
    .collapsible:hover {
      background-color: rgba(230, 72, 219, 0.845);
      border-radius: 3px;
    }

    .content {
      display: none;
      width: 800px;
      display: row;
      margin-left: -2px;
    }

    .form-outer form .page .hasil-hitung {

      width: 800px;
      height: 5px;
      margin: 0 15px 15px 0;
      padding: 0 3px 3px 0;
      display: row;
      position: relative;
    }
  </style>
  <?php
  // include('submitPajak.php');

  $koneksi = mysqli_connect("localhost", "root", "", "pajak21");
  $query = mysqli_query($koneksi, "SELECT nama_lengkap FROM userpajak");
  // <!-- $output = '<option value="">Pilih Nama</option>'; -->
  $options = "";
  while ($row = mysqli_fetch_array($query)) {
    $options = $options . "<option>$row[0]</option>";
  }

  ?>
</head>

<body>
  <img src="/edukasipajak/assets/images/bg.jpeg" class="justify-content-center" style="width: 100%; height: 700px; position: fixed;" />
  <div>
    <a href="/edukasipajak/home.php" style="position:relative ;"><i class="fa fa-arrow-circle-right" aria-hidden="true">
        << Back</i></a>
    <div class="container">
      <header>
        <a href="/edukasipajak/home.php"><i class="arrow fa fa-arrow-circle-left" aria-hidden="true"></i></a>
        Kalkulator PPh 21 Masa
      </header>
      <div class="progress-bar">
        <div class="step">
          <p>Personal</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Penghasilan</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Penghitungan</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form name="formMasa" method="POST">
          <div class="page slide-page">
            <div class="title">Personal:</div>
            <div class="field">
              <div class="label">Nama Lengkap</div>
              <select id="id_userpajak" name="id_userpajak" class="select">
                <?php echo $options ?>
              </select>
            </div>
            <div class="field">
              <div class="label">Status NPWP</div>
              <select name="npwp" class="select">
                <option value="npwp" selected="selected">NPWP</option>
                <option value="nonnpwp">Non NPWP</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Status Kawin</div>
              <select name="statusKawin" class="select">
                <option value="TK" selected="selected">TK</option>
                <option value="K">K</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Tanggungan</div>
              <select name="tanggungan" class="select">
                <option value="0" selected="selected">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="field">
              <label class="label">Masa Penghasilan</label>
              <div class="select-month">
                <select id="masaAwal" class="form-control-select">
                  <option value="1" selected="selected">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
              <div style="float:left;">
                &nbsp;&nbsp;s/d&nbsp;
              </div>
              <div class="select-month">
                <select id="masaAkhir" class="form-control-select">
                  <option value="1" selected="selected">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12" selected="selected">Desember</option>
                </select>
              </div>
            </div>
            <div class="field">
              <div class="label">Status Masuk</div>
              <select id="statusMasuk" class="select">
                <option value="---" selected="selected">---</option>
                <option value="baru">Pegawai Baru</option>
                <option value="pindah">Pegawai Pindahan</option>
                <option value="ekspatriat">Ekspatriat</option>
              </select>
            </div>
            <div class="title">Konfigurasi:</div>
            <div class="field">
              <div class="label">Tunjangan Pajak</div>
              <input name="rbTunjPajak" type="radio" value="grossup" class="radio">
              <label for="" class="label-radio">Gross-up</label>
              <input checked="checked" name="rbTunjPajak" type="radio" value="nongrossup" class="radio">
              <label for="" class="label-radio">Non Gross-up</label>
            </div>
            <div class="field">
              <div class="label">Ketentuan PTKP</div>
              <select id="ketentuan_ptkp" class="select">
                <option value="2011" selected="selected">Januari 2011 - Desember 2012</option>
                <option value="2013">Januari 2013 - Desember 2014</option>
                <option value="2015">Januari 2015 - Desember 2015</option>
                <option value="2016">Mulai Januari 2016</option>
              </select>
            </div>
            <div class="field">
              <button class="firstNext next">Selanjutnya</button>
            </div>
          </div>

          <div class="page">
            <div class="title">A. Penghasilan:</div>
            <div class="field">
              <div class="label-long">1. Gaji/Pensiun atau THT/JHT</div>
              <div class="col-75">
                <input type="text" class="form-control" name="gajiPensiun" id="gajiPensiun" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">2. Tunjangan PPh</div>
              <div class="col-75">
                <input type="text" class="form-control" name="tunjPph" id="tunjPph" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">3. Tunjangan Lainnya, Uang Lembur, dan sebagainya</div>
              <div class="col-75">
                <input type="text" class="form-control" name="tunjLain" id="tunjLain" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">4. Honorarium dan Imbalan Lainnya Sejenisnya</div>
              <div class="col-75">
                <input type="text" class="form-control" name="tunjHonor" id="tunjHonor" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">5. Premi Asuransi yang dibayar Pemberi Kerja</div>
              <div class="col-75">
                <input type="text" class="form-control" name="tunjAsuransi" id="tunjAsuransi" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">6. Natura dan Kenikmatan Lainnya</div>
              <div class="col-75">
                <input type="text" class="form-control" name="natura" id="natura" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">7. Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</div>
              <div class="col-75">
                <input type="text" class="form-control" name="bonusJasa" id="bonusJasa" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field">
              <div class="label-long">8. Penghasilan Bruto</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilBruto" id="hasilBruto" style="text-align:right" placeholder="0">
              </div>
            </div>
            <div class="title">B. Pengurang:</div>
            <div class="field">
              <div class="label-long">9. Biaya Jabatan</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="biayaJabatan" maxlength="500000" id="biayaJabatan" style="text-align:right;" placeholder="0">
              </div>
            </div>
            <div class="field">
              <div class="label-long">10. Iuran Pensiun atau Iuran THT/JHT</div>
              <div class="col-75">
                <input type="text" class="form-control" name="iuranPensiun" id="iuranPensiun" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Sebelumnya</button>
              <button class="next-1 next">Selanjutnya</button>
            </div>
          </div>


          <div class="page">
            <div class="title">C. Penghitungan PPh Pasal 21:</div>
            <div class="field-pph">
              <div class="label-pph">11. Penghasilan Bruto Setahun</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="brutoSetahun" id="brutoSetahun" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">12. Biaya Jabatan Setahun</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="jabatanSetahun" id="jabatanSetahun" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">13. Iuran Pensiun Setahun</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="iuranSetahun" id="iuranSetahun" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">14. Jumlah Pengurang Setahun</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pengurangSetahun" id="pengurangSetahun" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">15. Penghasilan Neto</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilNeto" id="hasilNeto" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">16. Penghasilan Neto Masa Sebelumnya</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="" class="form-control" name="netoSebelum" id="netoSebelum" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">17. Penghasilan Neto Setahun/Disetahunkan</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="netoSetahun" id="netoSetahun" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">18. Penghasilan Tidak Kena Pajak</div>
              <div class="col-75">
                <input type="text" class="form-control" name="ptkp" id="ptkp" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">19. PKP Setahun/Disetahunkan</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp" id="pkp" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">20. PPh Pasal 21 atas PKP</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp21" id="pkp21" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">21. PPh Pasal 21 Dipotong Masa Sebelumnya</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="" class="form-control" name="pph21Sebelum" id="pph21Sebelum" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">22. PPh Pasal 21 Terutang Setahun/Disetahunkan</div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Terutang" id="pph21Terutang" style="text-align:right">
              </div>
            </div>
            <div class="field-pph">
              <div class="label-pph">
                23. <button type="button" class="collapsible"> >>
                </button> PPh Pasal 21 Terutang bulan ini
                <div class="content">
                  <div class="hasil-hitung">
                    <label class="label-pph"> PKP atas Penghasilan Teratur Setahun</label>
                    <div class="col-75">
                      <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkpSetahun" id="pkpTeraturSetahun" style="text-align:right">
                    </div>
                  </div>
                  <div class="hasil-hitung">
                    <label class="label-pph"> PPh Pasal 21 atas Penghasilan Teratur Setahun</label>
                    <div class="col-75">
                      <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Teratur" id="pph21Teratur" style="text-align:right">
                    </div>
                  </div>
                  <div class="hasil-hitung">
                    <label class="label-pph">PPh Pasal 21 atas Penghasilan Tidak Teratur</label>
                    <div class="col-75">
                      <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21TakTeratur" id="pph21TakTeratur" style="text-align:right">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" id="pph21TerutangSebulan" name="pph21TerutangSebulan" style="text-align:right">
              </div>
            </div>
            <div class="field btns" style="padding-top: 60px;">
              <button class="prev-2 prev">Sebelumnya</button>
              <span id="response"></span>
            </div>
            <div class="field btns" style="margin: 0 -10px -10px 0;">
              <button class="reset" type="reset">Reset</button>
              <button id="btn">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
  $(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "show.php",
					method: "POST",
					success: function(data){
						$("#userpajak").html(data)
					}
				})
			},			
		}
		app.show();
		$(document).on("change", "#userpajak")
	})
</script> -->

</html>