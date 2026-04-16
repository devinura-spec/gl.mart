<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Glokamart</title>

<style>
body {font-family:sans-serif;margin:0;background:#f5f5f5;}
.topbar {background:#0E2877;color:white;padding:6px 15px;font-size:13px;display:flex;justify-content:space-between;}
.topbar a {color:white;text-decoration:none;margin-right:10px;}

.logo {padding:15px;font-weight:bold;font-size:20px;}

.section {padding:15px;}
.card {background:white;padding:10px;margin-bottom:10px;border-radius:8px;}
.cart {position:fixed;bottom:20px;right:20px;background:#0E2877;color:white;padding:10px;border-radius:50%;}
</style>
</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
  <div>
    Peraturan Sewa |
    Peralatan Sewa |
    Cara Sewa |
    Ikuti kami di
  </div>

  <div>
    Notifikasi |
    Bantuan |
    Bahasa Indonesia |
    <a href="#">Login</a>
    <a href="#">Daftar</a>
  </div>
</div>

<!-- LOGO -->
<div class="logo">
  Glokamart Glokamart
</div>

<!-- CART -->
<div class="section">
  <div class="card">
    <b>Keranjang Saya</b>
    <div id="cart-list">
      Keranjang kosong
    </div>
  </div>
</div>

<!-- BANNER -->
<div class="section">
  <div class="card">
    <img src="https://picsum.photos/600/200" style="width:100%;border-radius:8px;">
  </div>
</div>

<!-- KATEGORI -->
<div class="section">
  <div class="card">Kamera</div>
  <div class="card">Lensa</div>
  <div class="card">Tripod</div>
</div>

<!-- PRODUK -->
<div class="section">
  <div class="card">
    Kamera Canon <br>
    Rp150.000 <br>
    <button onclick="addCart('Kamera Canon',150000)">Sewa</button>
  </div>

  <div class="card">
    Sony A7 <br>
    Rp200.000 <br>
    <button onclick="addCart('Sony A7',200000)">Sewa</button>
  </div>
</div>

<!-- CART ICON -->
<div class="cart">
🛒 <span id="count">0</span>
</div>

<!-- FOOTER -->
<div class="section" style="text-align:center;">
© 2026 devi dwi nuraini
</div>

<script>
let cart = [];

function addCart(name, price){
  cart.push({name, price});
  renderCart();
}

function renderCart(){
  const list = document.getElementById("cart-list");
  const count = document.getElementById("count");

  count.innerText = cart.length;

  if(cart.length === 0){
    list.innerHTML = "Keranjang kosong";
    return;
  }

  list.innerHTML = "";
  cart.forEach(item=>{
    list.innerHTML += `
      <div>
        ${item.name} <br>
        Rp ${item.price.toLocaleString('id-ID')}
        <hr>
      </div>
    `;
  });
}
</script>

</body>
</html>
