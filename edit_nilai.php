<?php
include_once("open_resources.php");
session();
?>

<?=$header?>
<div class="container">
	<?php
		$q = $_GET['id'];
		$q = "SELECT nilai,kode_mk,nama_mk,sks,data_nilai.npm,smt_aktif, nama
					FROM data_nilai,data_mhs,data_mk WHERE id=$q
					AND data_nilai.npm = data_mhs.npm
					AND data_nilai.kode_mk = data_mk.kode
		";
		$data = getData($q)[0];
	?>

	<div class="container">
<form class='form form-horizontal' method='post' action="event_handler.php">
    <div class='col-sm-4'>
	    <div class='form-group'>
			<label for='namamhs' class='col-sm-4 control-label'>NPM</label>
			<div class='col-sm-8'>
				<input type='text' class='form-control' id='npm' name='npm'required value="<?=$data['npm']?>" readonly>
			</div>
			</div>
				<div class='form-group'>
					<label for='NPM' class='col-sm-4 control-label'>Nama</label>
					<div class='col-sm-8'>
						<input type='text' class='form-control' id='nama' name='nama' value="<?=$data['nama']?>" readonly>
					</div>
				</div>
				<div class='form-group'>
					<label for='namamhs' class='col-sm-4 control-label'>SEMESTER</label>
					<div class='col-sm-8'>
						<input type='number' class='form-control' id='smt' name='smt' min="1" max='8' value="<?=$data['smt_aktif']?>" readonly>
					</div>
				</div>
			</div>

			<div class='col-sm-4'>
				<div class='form-group'>
								<label for='namamhs' class='col-sm-4 control-label'>Kode MK</label>
								<div class='col-sm-8'>
								<input type='text' required class='form-control' id='kode_mk' name='kode_mk' value="<?=$data['kode_mk']?>" onkeyup="autoFillMK(this.value)" readonly>
								</div>
							</div>
							<div class='form-group'>
								<label for='namamhs' class='col-sm-4 control-label'>Nama MK</label>
								<div class='col-sm-8'>
								<input type='text' class='form-control' id='nama_mk' name='nama_mk' value="<?=$data['nama_mk']?>" readonly>
								</div>
							</div>
							<div class='form-group'>
								<label for='namamhs' class='col-sm-4 control-label'>SKS</label>
								<div class='col-sm-8'>
								<input type='number' min=1 max=8 class='form-control' id='sks' name='sks' value="<?=$data['sks']?>" readonly>
								</div>
							</div>
						</div>

            <div class='col-sm-4'>
							<div class='form-group'>
								<label for='namamhs' class='col-sm-4 control-label'>Nilai</label>
								<div class='col-sm-8'>
								<input type='number' step="0.01" min=0 max=100 class='form-control' id='nilai' onkeyup="hurufMutu(this.value)" name='nilai' value="<?=$data['nilai']?>" required>
								</div>
							</div>
							<div class='form-group'>
								<label for='namamhs' class='col-sm-4 control-label'>Huruf Mutu</label>
								<div class='col-sm-8'>
								<input type='text' class='form-control' id='hm' name='hm'>
								</div>
							</div>
						</div>
						<button class='btn btn-success btn-block' type="submit" name="edit" value="<?=$_GET['id']?>">Perbarui</button>
						<!-- <input type='submit' id="edit" name='edit' value='Perbarui' onclick="" class='btn btn-success btn-block'> -->
					</form>

</div>

</div>


<script>
	if(document.getElementById('nilai').value != ""){
		hurufMutu(document.getElementById('nilai').value);
	}
	function hurufMutu(nilai){
		var hm = document.getElementById('hm');
		if (nilai <=100 && nilai > 85) {
			hm.value = 'A';
		} else if(nilai >70) {
			hm.value = 'B';
		} else if (nilai > 60){
			hm.value = 'C';
		} else if (nilai > 50){
			hm.value = 'D';
		} else if (nilai >= 0){
			hm.value = 'E';
		} else {
			hm.value = 'Nilai Tidak Valid';
			document.getElementById('insert').disabled = true;
		}
	}


	function autoFillMhs(npm){
		var mhs = <?=json_encode(selectAllMahasiswa(),JSON_PRETTY_PRINT)?>;
		for (let i = 0; i < mhs.length; i++) {
			if(mhs[i].npm == npm){
				document.getElementById('nama').value = mhs[i].nama;
				document.getElementById('smt').value = mhs[i].smt_aktif;
				break;
			}
		}
	}

	function autoFillMK(kodeMk){
		var mk = <?=json_encode(selectAllMK(),JSON_PRETTY_PRINT)?>;
		for (let i = 0; i < mk.length; i++) {
			if(mk[i].kode == kodeMk){
				document.getElementById('nama_mk').value = mk[i].nama_mk;
				document.getElementById('sks').value = mk[i].sks;
				break;
			}
		}
	}

</script>
<?=$footer?>