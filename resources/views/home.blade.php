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
    margin: 0;
    background: #F9FAFB;
}

/* HEADER */
.gloka-header {
    background: #0A2472;
    padding: 12px 24px;
    position: sticky;
    top: 0;
    z-index: 50;
}

.logo {
    color: white;
    font-weight: bold;
    font-size: 18px;
}

/* SEARCH */
.search-box {
    display: flex;
    background: white;
    border-radius: 999px;
    overflow: hidden;
    flex: 1;
}

.search-box input {
    flex: 1;
    border: none;
    padding: 10px;
}

.search-box button {
    background: #0A6DD0;
    color: white;
    border: none;
    padding: 10px 16px;
}

/* CART */
.cart {
    position: relative;
    cursor: pointer;
}

.cart-badge {
    position: absolute;
    top: -5px;
    right: -8px;
    background: red;
    color: white;
    font-size: 12px;
    padding: 2px 6px;
    border-radius: 50%;
}

/* BANNER */
.banner {
    margin: 20px auto;
    max-width: 1000px;
}

.banner img {
    width: 100%;
    border-radius: 12px;
}

/* CATEGORY */
.categories {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 30px 0;
}

.category {
    background: white;
    padding: 15px;
    border-radius: 12px;
    cursor: pointer;
    text-align: center;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 20px;
    background: white;
    margin-top: 40px;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="gloka-header">
    <div style="display:flex; align-items:center; gap:20px; max-width:1200px; margin:auto;">
        
        <div class="logo">Glokamart</div>

        <div class="search-box">
            <input type="text" placeholder="Cari produk...">
            <button>🔍</button>
        </div>

        <div class="cart" onclick="toggleCart()">
            🛒
            <span class="cart-badge" id="cart-count">0</span>
        </div>

    </div>
</div>

<!-- BANNER -->
<div class="banner">
    <img src="https://picsum.photos/1000/300" alt="banner">
</div>

<!-- CATEGORY -->
<div class="categories">
    <div class="category">📷 Kamera</div>
    <div class="category">🔭 Lensa</div>
    <div class="category">🎥 Video</div>
</div>

<!-- MINI CART -->
<div id="mini-cart" style="
position:fixed;
right:0;
top:0;
width:250px;
height:100%;
background:white;
box-shadow:-2px 0 10px rgba(0,0,0,0.2);
transform:translateX(100%);
transition:0.3s;
padding:20px;
z-index:999;
">
<h3>Keranjang</h3>
<p>Belum ada item</p>
</div>

<!-- FOOTER -->
<footer>
© 2026 Glokamart
</footer>

<script>
function toggleCart() {
    const cart = document.getElementById('mini-cart');
    cart.style.transform = 
        cart.style.transform === 'translateX(0%)'
        ? 'translateX(100%)'
        : 'translateX(0%)';
}
</script>

</body>
</html>
