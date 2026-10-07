```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GMNI - Gerakan Mahasiswa Nasional Indonesia</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #222;
        }

        /* ================= NAVBAR ================= */

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            height: 70px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 8%;

            background-color: #b40000;
            color: white;

            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .logo span {
            color: #ffd000;
        }

        .menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a:hover {
            color: #ffd000;
        }


        /* ================= HERO ================= */

        .hero {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 100px 20px;

            background:
                linear-gradient(
                    rgba(120, 0, 0, 0.85),
                    rgba(120, 0, 0, 0.85)
                ),
                url("https://images.unsplash.com/photo-1523240795612-9a054b0db644")
                center/cover;
        }

        .hero-content {
            color: white;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 60px;
            margin-bottom: 15px;
        }

        .hero h2 {
            font-size: 28px;
            color: #ffd000;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;

            padding: 14px 30px;

            background-color: #ffd000;
            color: #7d0000;

            text-decoration: none;

            font-weight: bold;

            border-radius: 8px;
        }

        .button:hover {
            background-color: white;
        }


        /* ================= SECTION ================= */

        section {
            padding: 90px 8%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #a00000;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }


        /* ================= ABOUT ================= */

        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-image {
            height: 350px;

            background-color: #a00000;

            border-radius: 15px;

            display: flex;
            justify-content: center;
            align-items: center;

            color: white;
            font-size: 100px;
        }

        .about-text h3 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #a00000;
        }

        .about-text p {
            line-height: 1.8;
            color: #555;
        }


        /* ================= VISI MISI ================= */

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .card {
            background-color: white;

            padding: 35px;

            border-radius: 15px;

            box-shadow: 0 5px 20px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card h3 {
            color: #a00000;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .card p {
            line-height: 1.7;
            color: #555;
        }


        /* ================= KEGIATAN ================= */

        .activities {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .activity {
            background-color: white;

            border-radius: 15px;

            overflow: hidden;

            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .activity-image {
            height: 180px;

            background-color: #b00000;

            display: flex;
            justify-content: center;
            align-items: center;

            color: white;

            font-size: 50px;
        }

        .activity-content {
            padding: 25px;
        }

        .activity-content h3 {
            color: #a00000;
            margin-bottom: 10px;
        }

        .activity-content p {
            color: #666;
            line-height: 1.6;
        }


        /* ================= CTA ================= */

        .cta {
            background-color: #a00000;

            color: white;

            text-align: center;
        }

        .cta h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 25px;
        }


        /* ================= FOOTER ================= */

        footer {
            background-color: #1c1c1c;

            color: white;

            text-align: center;

            padding: 30px;
        }

        footer p {
            color: #aaa;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 768px) {

            .menu {
                display: none;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero h2 {
                font-size: 22px;
            }

            .about {
                grid-template-columns: 1fr;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .activities {
                grid-template-columns: 1fr;
            }

        }

    </style>
</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav>

        <div class="logo">
            GMNI<span>.</span>
        </div>

        <ul class="menu">

            <li>
                <a href="#home">Beranda</a>
            </li>

            <li>
                <a href="#tentang">Tentang</a>
            </li>

            <li>
                <a href="#visi">Visi & Misi</a>
            </li>

            <li>
                <a href="#kegiatan">Kegiatan</a>
            </li>

            <li>
                <a href="#kontak">Kontak</a>
            </li>

        </ul>

    </nav>



    <!-- ================= HERO ================= -->

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>GMNI</h1>

            <h2>
                Gerakan Mahasiswa Nasional Indonesia
            </h2>

            <p>
                Wadah perjuangan mahasiswa yang berlandaskan
                semangat kebangsaan, kerakyatan, dan pemikiran
                kritis dalam kehidupan berbangsa dan bernegara.
            </p>

            <a href="#tentang" class="button">
                Kenali Kami
            </a>

        </div>

    </section>



    <!-- ================= TENTANG ================= -->

    <section id="tentang">

        <div class="section-title">

            <h2>Tentang GMNI</h2>

            <p>
                Mengenal organisasi dan semangat perjuangannya
            </p>

        </div>


        <div class="about">

            <div class="about-image">
                🇮🇩
            </div>


            <div class="about-text">

                <h3>
                    Gerakan Mahasiswa Nasional Indonesia
                </h3>

                <p>
                    GMNI merupakan organisasi mahasiswa yang
                    menjadi ruang bagi mahasiswa untuk berdiskusi,
                    belajar, mengembangkan kemampuan berpikir kritis,
                    serta berkontribusi dalam kehidupan sosial.
                </p>

                <br>

                <p>
                    Melalui berbagai kegiatan organisasi, anggota
                    didorong untuk memahami persoalan masyarakat
                    dan membangun kepedulian terhadap lingkungan
                    sekitar.
                </p>

            </div>

        </div>

    </section>



    <!-- ================= VISI MISI ================= -->

    <section id="visi">

        <div class="section-title">

            <h2>Visi & Misi</h2>

            <p>
                Nilai dan arah gerakan organisasi
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <h3>Visi</h3>

                <p>
                    Membangun mahasiswa yang memiliki wawasan
                    kebangsaan, kemampuan berpikir kritis,
                    serta kepedulian terhadap persoalan
                    masyarakat dan bangsa.
                </p>

            </div>


            <div class="card">

                <h3>Misi</h3>

                <p>
                    Menjadi ruang pembelajaran dan pengembangan
                    mahasiswa melalui diskusi, kajian, kegiatan
                    sosial, kaderisasi, serta berbagai aktivitas
                    yang mendorong kontribusi positif bagi masyarakat.
                </p>

            </div>

        </div>

    </section>



    <!-- ================= KEGIATAN ================= -->

    <section id="kegiatan">

        <div class="section-title">

            <h2>Kegiatan</h2>

            <p>
                Beberapa bentuk kegiatan organisasi
            </p>

        </div>


        <div class="activities">


            <div class="activity">

                <div class="activity-image">
                    📚
                </div>

                <div class="activity-content">

                    <h3>Kajian & Diskusi</h3>

                    <p>
                        Forum untuk membahas berbagai isu
                        sosial, pendidikan, ekonomi, dan
                        kebangsaan.
                    </p>

                </div>

            </div>



            <div class="activity">

                <div class="activity-image">
                    🤝
                </div>

                <div class="activity-content">

                    <h3>Kegiatan Sosial</h3>

                    <p>
                        Kegiatan yang bertujuan membangun
                        kepedulian mahasiswa terhadap
                        masyarakat dan lingkungan.
                    </p>

                </div>

            </div>



            <div class="activity">

                <div class="activity-image">
                    🎓
                </div>

                <div class="activity-content">

                    <h3>Kaderisasi</h3>

                    <p>
                        Proses pembelajaran dan pengembangan
                        anggota melalui kegiatan organisasi
                        dan pembinaan mahasiswa.
                    </p>

                </div>

            </div>


        </div>

    </section>



    <!-- ================= KONTAK ================= -->

    <section class="cta" id="kontak">

        <h2>
            Mari Kenali GMNI Lebih Dekat
        </h2>

        <p>
            Bergabung dalam ruang belajar, berdiskusi,
            dan berorganisasi.
        </p>

        <a href="#" class="button">
            Hubungi Kami
        </a>

    </section>



    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © 2026 GMNI — Gerakan Mahasiswa Nasional Indonesia
        </p>

    </footer>


</body>
</html>
```
