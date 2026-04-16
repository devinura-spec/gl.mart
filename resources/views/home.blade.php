<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Glokamart</title>

<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Urbanist', sans-serif;
  margin:0;
  background:#f9fafb;
}

/* HEADER */
.header {
  background:#0A2472;
  padding:12px 20px;
  display:flex;
  align-items:center;
  gap:15px;
}

.logo {
  color:white;
  font-weight:700;
  font-size:20px;
}

.search {
  flex:1;
  display:flex;
}

.search input {
  flex:1;
  padding:10px;
  border:none;
  border-radius:20px 0 0 20px;
}

.search button {
  background:#1d4ed8;
  color:white;
  border:none;
  padding:10px 15px;
  border-radius:0 20px 20px 0;
}

/* CATEGORY */
.categories {
  display:flex;
  justify-content:center;
  gap:20px;
  margin:30px 0;
}

.category {
  background:white;
  padding:15px 20px;
  border-radius:10px;
  box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

/* BANNER */
.banner {
  width:90%;
  margin:auto;
  border-radius:15px;
  overflow:hidden;
}

.banner img {
  width:100%;
}

/* FOOTER */
footer {
  text-align:center;
  margin-top:50px;
  padding:20px;
  background:white;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
  <div class="logo">Glokamart</div>

  <div class="search">
    <input type="text" placeholder="Cari produk...">
    <button>🔍</button>
  </div>
</div>

<!-- BANNER -->
<div class="carousel">
  <div class="carousel-images">
    <img src="images/banner1.jpg">
    <img src="images/banner2.jpg">
    <img src="images/banner3.jpg">
  </div>
</div>

<!-- CATEGORY -->
<div class="categories">
  <div class="category">📷 Kamera</div>
  <div class="category">🔭 Lensa</div>
  <div class="category">🎥 Paket sewa</div>
</div>

<!-- FOOTER -->
<footer>
  © 2026 Glokamart
</footer>

</body>
</html>
