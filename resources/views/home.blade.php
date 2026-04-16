<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Glokamart</title>

<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {font-family:'Urbanist',sans-serif;margin:0;background:#F9FAFB;}
.topbar {background:#0E2877;color:white;padding:6px 20px;font-size:13px;display:flex;justify-content:space-between;}
.topbar a {color:white;text-decoration:none;margin-right:15px;}

.navbar {background:#0A2472;color:white;padding:12px 20px;display:flex;align-items:center;gap:20px;}
.logo {font-weight:700;font-size:20px;}
.search {flex:1;}
.search input {width:100%;padding:8px;border-radius:20px;border:none;}

.hero {background:#0A2472;color:white;text-align:center;padding:60px 20px;}
.hero h1 {margin:0;}

.banner img {width:100%;border-radius:10px;}

.categories {display:flex;gap:20px;justify-content:center;padding:20px;}
.category {background:white;padding:15px;border-radius:10px;text-align:center;cursor:pointer;}
.category:hover {background:#F5C542;}

.products {padding:20px;}
.grid {display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:15px;}
.card {background:white;border-radius:10px;padding:10px;text-align:center;}

footer {text-align:center;padding:20px;background:white;}
</style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar">
  <div>
    <a href="#">Peraturan Sewa</a>
    <a href="#">Peralatan Sewa</a>
    <a href="#">Cara Sewa</a>
  </div>
  <div>
    <a href="#">Login</a>
    <a href="#">Daftar</a>
  </div>
</div>

<!-- NAVBAR -->
<div class="navbar">
  <div class="logo">Glokamart</div>
  <div class="search">
    <input type="text" placeholder="Cari produk...">
  </div>
</div>

<!-- HERO -->
<div class="hero">
  <h1>Glokamart</h1>
  <p>Pusat Sewa Kamera & Gear Kreator</p>
</div>

<!-- BANNER -->
<div class="banner" style="padding:20px;">
  <img src="https://picsum.photos/1200/300">
</div>

<!-- KATEGORI -->
<div class="categories">
  <div class="category">Kamera</div>
  <div class="category">Lensa</div>
  <div class="category">Tripod</div>
  <div class="category">Lighting</div>
</div>

<!-- PRODUK -->
<div class="products">
  <h2 style="text-align:center;">Produk</h2>

  <div class="grid">
    <div class="card">
      <img src="https://picsum.photos/200?1">
      <p>Canon EOS</p>
      <b>Rp 150.000</b>
      <br><button onclick="addCart()">Sewa</button>
    </div>

    <div class="card">
      <img src="https://picsum.photos/200?2">
      <p>Sony A7</p>
      <b>Rp 200.000</b>
      <br><button onclick="addCart()">Sewa</button>
    </div>
  </div>
</div>

<!-- CART -->
<div id="cart" style="position:fixed;right:20px;bottom:20px;background:#0A2472;color:white;padding:10px;border-radius:50%;">
🛒 <span id="count">0</span>
</div>

<!-- FOOTER -->
<footer>
© 2026 Glokamart
</footer>

<script>
let count = 0;
function addCart(){
  count++;
  document.getElementById("count").innerText = count;
}
</script>

</body>
</html>
