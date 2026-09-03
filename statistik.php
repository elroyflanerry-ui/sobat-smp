<?php require 'config/database.php';
$s=$pdo->query("SELECT * FROM settings WHERE id=1")->fetch();
$tot=$pdo->query("SELECT COUNT(*) c,SUM(students) students,SUM(teachers) teachers,SUM(rombel) rombel FROM schools")->fetch();
$acc=$pdo->query("SELECT accreditation,COUNT(*) c FROM schools GROUP BY accreditation ORDER BY accreditation")->fetchAll();
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Statistik Pendidikan SMP</title><link rel="stylesheet" href="assets/style.css"></head><body>
<div class="container"><a href="index.php">← Beranda</a><h1>Statistik Pendidikan SMP</h1>
<div class="grid"><div class="card"><div class="stat"><?=$tot['c']?></div><p>Satuan Pendidikan</p></div>
<div class="card"><div class="stat"><?=$tot['students']?></div><p>Peserta Didik</p></div>
<div class="card"><div class="stat"><?=$tot['teachers']?></div><p>Guru</p></div>
<div class="card"><div class="stat"><?=$tot['rombel']?></div><p>Rombel</p></div></div>
<div class="card" style="margin-top:20px"><h2>Akreditasi</h2><table class="table"><tr><th>Akreditasi</th><th>Jumlah</th></tr>
<?php foreach($acc as $a):?><tr><td><?=htmlspecialchars($a['accreditation'])?></td><td><?=$a['c']?></td></tr><?php endforeach;?></table></div>
<p class="muted">Angka pada paket awal adalah data contoh dan harus diganti dengan data resmi sebelum publikasi.</p></div></body></html>