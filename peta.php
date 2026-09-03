<?php require 'config/database.php'; $rows=$pdo->query("SELECT name,latitude,longitude,address FROM schools WHERE latitude IS NOT NULL AND longitude IS NOT NULL")->fetchAll(); ?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Peta Sekolah SMP</title>
<link rel="stylesheet" href="assets/style.css"><link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"></head><body>
<div class="container"><a href="index.php">← Beranda</a><h1>Peta Satuan Pendidikan SMP</h1><div id="map" style="height:600px;border-radius:16px"></div></div>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script><script>
const data=<?=json_encode($rows,JSON_UNESCAPED_UNICODE)?>; const map=L.map('map').setView([-10.3,123.75],10);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom:19,attribution:'© OpenStreetMap'}).addTo(map);
data.forEach(s=>L.marker([s.latitude,s.longitude]).addTo(map).bindPopup('<b>'+s.name+'</b><br>'+s.address));
</script></body></html>