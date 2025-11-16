<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="about.css"> 
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Landing Page</a>
            <a href="about.php">About</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <div class="kotak-utama">
        <section class="carousel-area">
            <h2 class="judul-carousel">Our Products</h2>
            <div class="slide-container">
                <div class="slide-item" id="slide1">
                    <img src="1.png" alt="Gambar Produk 1">
                </div>
                <div class="slide-item" id="slide2" style="display: none;"> 
                    <img src="2.png" alt="Gambar Produk 2">
                </div>
            </div>
            <div class="kontrol">
                <button onclick="gantiSlide(-1)"> < </button>
                <span class="dot-indikator aktif" id="dot1"></span>
                <span class="dot-indikator" id="dot2"></span>
                <button onclick="gantiSlide(1)"> > </button>
            </div>
        </section>
        <section class="blok-fitur">
            <div class="blok-satu">
                <div class="ikon-gambar">
                    <img src="1.png" alt="Ikon Fitur 1"> 
                </div>
                <div class="teks-info">
                    <h4>Chocolate Donut</h4>
                    <p>Donat klasik ini dilapisi dengan glaze cokelat yang kaya dan intens, menawarkan 
                        rasa manis pahit yang disukai oleh para pencinta cokelat sejati. Rasa cokelatnya 
                        yang kuat sangat cocok dipadukan dengan kopi atau susu dingin.</p>
                </div>
            </div>
            <div class="blok-satu">
                <div class="ikon-gambar">
                    <img src="2.png" alt="Ikon Fitur 2">
                </div>
                <div class="teks-info">
                    <h4>Strawberry Donut</h4>
                    <p>Donat ini memiliki glaze merah muda cerah dengan rasa stroberi manis yang menyegarkan, 
                        seringkali dihiasi dengan taburan atau potongan buah kering. Donat stroberi memberikan 
                        kombinasi sempurna antara adonan lembut dan sentuhan asam manis yang ringan.</p>
                </div>
            </div>
        </section>
    </div>
    <script>
        let slideIndex = 0; 
        function gantiSlide(n) {
            slideIndex += n; 
            const slides = [document.getElementById('slide1'), document.getElementById('slide2')];
            const dots = [document.getElementById('dot1'), document.getElementById('dot2')];
            if (slideIndex >= slides.length) { 
                slideIndex = 0;
            }    
            if (slideIndex < 0) { 
                slideIndex = slides.length - 1; 
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                dots[i].classList.remove('aktif');
            }
            slides[slideIndex].style.display = "flex"; 
            dots[slideIndex].classList.add('aktif');
        }
        gantiSlide(0); 
    </script>
    <footer>
        <div class="copyright">
            © About Page - Louissa Hartono Wijaya @2025
        </div>
    </footer> 
</body>
</html>