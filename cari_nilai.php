<?php
include_once("open_resources.php");
?>
<?=$header?>
<div class="container">
    <div>
        <form action="event_handler.php" method="get" class="form-inline">
        <div class="form-group mb-2">
            <label for="NIM">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="form-group mb-2">
            <label for="NIM">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <button type="submit" name="cari" class="btn btn-primary mb-2">Cari</button>
        </form>
    </div>
<? if(isset($_SESSION['hasil']) && count($_SESSION['hasil']) >0 ):
    $hasil = ($_SESSION['hasil']);
    $i=1;
    $sks = 0;
    $bobot = 0;
?>
    <div id="hasil">
    <div class="col col-sm-2"><h2>NPM</h2></div><div class="col col-sm-4"><h2><?=$hasil[0]['npm']?></h2></div><div class="col col-sm-2"><h2>Nama</h2></div><div class="col col-sm-4"><h2><?=$hasil[0]['nama']?></h2></div>
    <table class="table table-striped">
        <thead>
            <th> No </th>
            <th> Mata Kuliah </th>
            <th> Huruf Mutu </th>
            <th> SKS </th>
            <th>Total Nilai</th>
            <? if(isset($_SESSION['user'])): ?>
                <th colspan=2> Aksi </th>
            <? endif?>
        </thead>
        <tbody>
<? foreach ($hasil as $nilai):?>
        <tr>
            <td><?=$i?></td>
            <td><?=$nilai['nama_mk']?></td>
            <td><?=getHurufMutu($nilai['nilai'])?></td>
            <td class="sks"><? $sks += $nilai['sks'];echo $nilai['sks']?></td>
            <td class="bobot"><?$bobot+= getBobot($nilai['nilai'])*$nilai['sks']; echo getBobot($nilai['nilai'])?></td>
            <? if(isset($_SESSION['user'])): ?>
                <td> <button class="btn" onclick="goToEdit(<?=$nilai['id']?>)">Edit</button> </td>
                <th> <button class="btn" onclick="goToDelete(<?=$nilai['id']?>,<?=$nilai['npm']?>)">Hapus</button> </th>
            <? endif?>
        </tr>
<? $i++; endforeach; $_SESSION['hasil'] = null;?>
        </tbody>
    </table>
    <hr>
    <div class="col-lg-9"><h2>Jumlah SKS</h2></div> <div class="col-lg-1"><h2 id="sks"><?=$sks?></h2></div><div class="col-lg-1"><h2 id="sks"><?=$bobot?></h2></div>
    <div class="col-lg-9"><h2>IPK</h2></div> <div class="col-lg-3"><h21 id="ipk"><h1><?=$bobot/$sks?></h1></div>
    </div>
<? else: ?>
<h2>Tidak Ada Data ditemukan</h2>
<? endif;?>
</div>

<script>
    function goToEdit(id){
        window.location = "edit_nilai.php?id="+id;
    }
    function goToDelete(id,nim,nama){
        var del = confirm("Apa anda yakin akan menghapus ini ");
        if(del){
            window.location = "event_handler.php?delete="+id+"&nim="+nim+"&nama="+nama;
        }
    }
</script>

<?=$footer?>