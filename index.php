<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar & Nada</title>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <audio id="background-audio" hidden loop>
        <source src="music.mp3" type="audio/mpeg">
    </audio>
</head>

<body>
    <div class="hero justify-content-center" id="hero-section">
        <h1>Fajar & Nada</h1>
        <h2>We Are Getting Married</h2>
        <h3>Kepada Bapak/Ibu/Saudara/Saudari</h3>
        <h2 id="nama" class="bold"></h2>
        <h3>Mohon maaf bila ada kesalahan penulisan nama/gelar</h3>
        <a id="open-invitation" onclick="openInvitation()" href="#couple" class="btn btn-outline-light mt-3">Open Invitation</a>
    </div>

    <div class="main-content">
        <div class="container py-5 " id="couple">
            <div class="title text-center">Mempelai</div>
            <div class="couple-container">
                <div class="text-center mempelai-pria">
                    <img src="https://cdn1-production-images-kly.akamaized.net/sM_uRVCq9d5_ZdcJB3wVGdzLX5U=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1404781/original/002246300_1479099524-foto_nikah__2_.jpg"
                        alt="Mempelai Pria" class="photo">
                    <div class="nama">Fajar</div>
                    <div class="desc">Putra pertama dari Bapak ... dan Ibu ...</div>
                </div>
                <div class="love-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="text-center mempelai-wanita">
                    <img src="https://www.andreamarchettieventi.com/content/images/2017/03/coroncina-di-fiori-matrimonio-stile-bohemien-gallery.jpeg"
                        alt="Mempelai Wanita" class="photo">
                    <div class="nama">Nada Zafira</div>
                    <div class="desc">Putri pertama dari Bapak Salim Qomaruloh dan Ibu Sumyati</div>
                </div>
            </div>
        </div>

        <section id="wedding-date" class="wedding-date-section">
            <div class="container">
                <div class="row justify-content-center animate">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span class="special-events text-white">OUR SPECIAL EVENTS</span>
                        <h2 class="wedding-events text-white">Wedding Events</h2>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin: 25px;">
                    <!-- Kotak Akad Nikah -->
                    <div class="col-md-5 wedding-box animate mx-3"">
                        <h3 class=" text-white text-center">AKAD NIKAH</h3>
                        <hr class="white-line">
                        <div class="d-flex justify-content-around text-white">
                            <div class="text-center">
                                <i class="fas fa-clock fa-2x"></i>
                                <p>08.00 AM</p>
                            </div>
                            <div class="text-center">
                                <i class="fas fa-calendar-alt fa-2x"></i>
                                <p>5 Mei 2025</p>
                            </div>
                        </div>
                        <p class="text-white text-center mt-2">Kediaman Mempelai Wanita, Jalan Haji Mawi</p>
                    </div>

                    <!-- Kotak Resepsi Pernikahan -->
                    <div class="col-md-5 wedding-box animate mx-3">
                        <h3 class="text-white text-center">RESEPSI PERNIKAHAN</h3>
                        <hr class="white-line">
                        <div class="d-flex justify-content-around text-white">
                            <div class="text-center ">
                                <i class="fas fa-clock fa-2x"></i>
                                <p>10.00 AM</p>
                            </div>
                            <div class="text-center">
                                <i class="fas fa-calendar-alt fa-2x"></i>
                                <p>5 Mei 2025</p>
                            </div>
                        </div>
                        <p class="text-white text-center mt-2">Kediaman Mempelai Wanita, Jalan Haji Mawi</p>
                    </div>
                </div>
            </div>
        </section>

        <div id="quote-container" class="quote-container justify-content-center">
            <h2 class="sub-title">ِAllah SWT Berfirman:</h2>
            <h2 style="line-height: 2;">مِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا
                لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةًۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ
                لِّقَوْمٍ يَّتَفَكَّرُوْنَ</h2>
            <p class="text-center mt-2 terjemahan">"Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia
                menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar
                terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
            <b>- AR-RUM: 21 -</b>
            <div class="quote-flower">
                <img src="https://www.freeiconspng.com/thumbs/bunga-png/pola-bunga-transparan-26.png">
            </div>
        </div>

        <!-- Gallery Section -->
        <section id="gallery" class="gallery-section py-5">
            <div class="container">
                <h2 class="sub-title text-center">Our Gallery</h2>
                <div class="row justify-content-center">
                    <!-- Foto 1 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 4" class="img-fluid">
                        </div>
                    </div>
                    <!-- Foto 2 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://images.unsplash.com/photo-1544592732-83bbbfc46783?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 2" class="img-fluid">
                        </div>
                    </div>
                    <!-- Foto 3 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://plus.unsplash.com/premium_photo-1661328138795-e188aa94bf5e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 3" class="img-fluid">
                        </div>
                    </div>
                    <!-- Foto 4 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://images.unsplash.com/photo-1649183424680-464747a8e43d?q=80&w=1372&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 1" class="img-fluid">
                        </div>
                    </div>
                    <!-- Foto 5 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://images.unsplash.com/photo-1550784718-990c6de52adf?q=80&w=1368&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 5" class="img-fluid">
                        </div>
                    </div>
                    <!-- Foto 6 -->
                    <div class="col-md-4 col-6 mb-4">
                        <div class="frame gallery-item">
                            <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Gallery Photo 5" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Whises Section -->
        <div class="wishes" id="wishes">
            <h2 class="sub-title">Wishes</h2>
            <div class="wishes-container">
                <div class="wedding-box animate wish-input">
                    <form id="wishes-form" method="POST">
                        <input type="text" name="name" placeholder="Name" required>
                        <textarea name="message" placeholder="Whises" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="wedding-box animate wishes-list">
                    <?php
                    include "koneksi.php";
                    $koneksi = new db();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = htmlspecialchars($_POST['name']);
                        $message = htmlspecialchars($_POST['message']);
                        $koneksi->addWhises($name, $message);
                    }
                    $wishes = $koneksi->getWishes();
                    $koneksi->getWishes();
                    while ($row = $wishes->fetch_assoc()):
                    ?>
                        <div class="wish-item">
                            <p class="name"><?= htmlspecialchars($row['name']); ?></p>
                            <p><?= htmlspecialchars($row['message']); ?></p>
                            <p class="date"><?= date("d M Y, H:i", strtotime($row['created_at'])); ?></p>
                            <hr class="white-line">
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Buttom Nav -->
    <nav class="navbar fixed-bottom navbar-dark bg-dark bottom-nav">
        <div class="container d-flex justify-content-around">
            <a href="#couple" class="nav-item text-center text-white text-decoration-none">
                <i class="fas fa-heart fa-lg"></i>
                <div class="small">Couple</div>
            </a>
            <a href="#wedding-date" class="nav-item text-center text-white text-decoration-none">
                <i class="fas fa-calendar-alt fa-lg"></i>
                <div class="small">Date</div>
            </a>
            <a href="#quote-container" class="nav-item text-center text-white text-decoration-none">
                <i class="fas fa-book-open fa-lg"></i>
                <div class="small">Quotes</div>
            </a>
            <a href="#gallery" class="nav-item text-center text-white text-decoration-none">
                <i class="fas fa-images fa-lg"></i>
                <div class="small">Gallery</div>
            </a>
            <a href="#wishes" class="nav-item text-center text-white text-decoration-none">
                <i class="fas fa-comments fa-lg"></i>
                <div class="small">Whises</div>
            </a>
        </div>
    </nav>

    <script src="main.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>