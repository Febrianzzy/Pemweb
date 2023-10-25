<!DOCTYPE html>
<html>
<head>
  <title>Website Warkop</title>
  
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
        <img src="gambar/logo.webp" alt="">
    </div>
      <ul class="menu">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Lokasi</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#" id="dark-mode">Dark Mode</a></li>
      </ul>
    </nav>
  </header>



  <main>
    <section class="landing-page">
      <h1>Selamat Datang di Warkop Kami</h1>
      <p>Nikmati secangkir kopi hangat sambil menikmati suasana yang nyaman.</p>
      <button onclick="openPopup()">Menu Kami</button>
    </section>
    
    <!-- Tambahkan elemen popup -->
    <div id="popup" class="popup">
      <div class="popup-content">
        <h2>Menu Kami</h2>
        <p>Contoh menu:</p>
        <ul>
          <li>Menu 1</li>
          <li>Menu 2</li>
          <li>Menu 3</li>
        </ul>
        <button onclick="closePopup()">Tutup</button>
      </div>
    </div>
    

    <section class="produk">
      <h2>Produk Kami</h2>
      <div class="product-item">
        <img src="gambar/kopi1.jpg" alt="Kopi 1">
        <h3>Kopi Spesial 1</h3>
        <p>Harga: Rp 25.000</p>
      </div>
      <div class="product-item">
        <img src="gambar/kopi2.jpg" alt="Kopi 2">
        <h3>Kopi Spesial 2</h3>
        <p>Harga: Rp 30.000</p>
      </div>
      <div class="product-item">
        <img src="gambar/kopi3.jpg" alt="Kopi 3">
        <h3>Kopi Spesial 3</h3>
        <p>Harga: Rp 28.000</p>
      </div>
    </section>


    <section class="kontak">
    <h2>Hubungi Kami</h2>
    <form action="proses.php" method="POST">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" rows="4" required></textarea>

      <button type="submit">Kirim</button>
    </form>
  </section>
  </main>



  <footer>
    <p>&copy; 2023 Warkop Kami. All rights reserved.</p>
  </footer>
  <script>

    function openPopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'block';
    }

    function closePopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'none';
    }   


    var menu = document.querySelector('.menu');
    var darkModeBtn = document.getElementById('dark-mode');

    darkModeBtn.addEventListener('click', function() {
      document.body.classList.toggle('dark-mode');
      menu.classList.toggle('dark-mode');
    });
  </script>
</body>
</html>
