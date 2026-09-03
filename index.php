<?php
require 'config/database.php';
$site=$pdo->query("SELECT * FROM settings WHERE id=1")->fetch();
$news=$pdo->query("SELECT * FROM news ORDER BY id DESC LIMIT 6")->fetchAll();
$schools=$pdo->query("SELECT COUNT(*) c FROM schools")->fetch()['c'];
$agendas=$pdo->query("SELECT COUNT(*) c FROM agendas")->fetch()['c'];
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=htmlspecialchars($site['site_name'])?></title><link rel="stylesheet" href="assets/style.css"></head>
<body><div class="top">Dinas Pendidikan Pemuda dan Olahraga • Bidang SMP</div>
<nav class="nav"><div class="brand"><div class="logo">SMP</div><div><?=htmlspecialchars($site['site_name'])?></div></div><div class="menu"><a href="index.php">Beranda</a><a href="profil.php">Profil</a><a href="berita.php">Berita</a><a href="sekolah.php">Sekolah</a><a href="dokumen.php">Dokumen</a> · <a href="layanan.php">Layanan</a><a href="statistik.php">Statistik</a><a href="peta.php">Peta</a><a href="kontak.php">Kontak</a></div></nav>
<section class="hero"><div class="container"><h1><?=htmlspecialchars($site['hero_title'])?></h1><p><?=htmlspecialchars($site['hero_text'])?></p><a class="btn" href="profil.php">Pelajari Profil Bidang SMP</a></div></section>
<div class="container"><div class="grid"><div class="card"><div class="stat"><?=$schools?></div><div>Sekolah SMP</div></div><div class="card"><div class="stat"><?=$agendas?></div><div>Agenda Kegiatan</div></div><div class="card"><div class="stat"><?=count($news)?></div><div>Berita Terbaru</div></div></div></div>
<div class="container"><h2 class="section-title">Berita Terbaru</h2><div class="grid"><?php foreach($news as $n):?><div class="card"><div class="muted"><?=htmlspecialchars($n['published_at'])?></div><h3><?=htmlspecialchars($n['title'])?></h3><p><?=htmlspecialchars(substr(strip_tags($n['content']),0,150))?>...</p><a class="btn secondary" href="berita_detail.php?id=<?=$n['id']?>">Baca Selengkapnya</a></div><?php endforeach;?></div></div>
<footer class="footer"><strong><?=htmlspecialchars($site['site_name'])?></strong><p><?=htmlspecialchars($site['address'])?></p><p><?=htmlspecialchars($site['phone'])?> • <?=htmlspecialchars($site['email'])?></p></footer></body></html>