<?php
include_once("open_resources.php");
?>

<?=$header?>

<div class="container">
<?php
    $nilais = selectAllNilai();
?>

<table class="table table-striped">
    <thead>
        <th> NPM </th>
        <th> Mata Kuliah </th>
        <th> Nilai Angka </th>
        <th> Huruf Mutu </th>
    </thead>
    <tbody>
<?php foreach ($nilais as $nilai):?>
    <tr>
        <td><?=$nilai['npm']?></td>
        <td><?=$nilai['kode_mk']?></td>
        <td><?=$nilai['nilai']?></td>
        <td><?=getHurufMutu($nilai['nilai'])?></td>
    </tr>
<?php endforeach;?>
    
    </tbody>
</table>

</div>

<script>
    function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>



<?=$footer?>
