<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
        <main>
            <h4>WEDDING OF</h4>
            <div class="name">
                <h3>Argantara</h3>
                <h3 class="divider">&</h3>
                <h3 class="Eleina">Eleina</h3>
                <img src="{{ asset('img/Burung.png') }}" class="Burung " alt="">
                <img src="{{ asset('img/bunga.png') }}" class="Daun" alt="">
                <img src="{{ asset('img/pengantin.png') }}" class="pengantin" alt="">
            </div>
        </main>
    </section>

    <section id="about" class="about sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img src="{{ asset('img/halaman2/daun1.png') }}" alt="" class="left-top">
                    <img src="{{ asset('img/halaman2/daun2.png') }}" alt="" class="left-right">
                </div>
                <div class="col-auto">
                    <img src="{{ asset('img/halaman2/bismilah.png') }}" alt="" class="center">
                    <h4 class="text text-center mt-5">Assalamu’alaikum Warahmatullahi Wabarakatuh</h4>
                    <p>Dengan nama Allat SWT yang Maha Pengasih dan Maha Penyayang, dengan senang hati kami mengundang Bapak/Ibu/Saudara/Rekan untuk berbagai kegambiraan di pernikahan kami</p>
                </div>
                <div class="keluarga1 text-center">
                    <h3>Eleina Queen</h3>
                    <div>
                        <h4>Putri Tercinta</h4>
                        <h4>Bapak Morgan</h4>
                        <h4>&</h4>
                        <h4>Ibu Mia</h4>
                    </div>
                    <div>
                        <img src="{{ asset('img/halaman2/love2.png') }}" alt="">
                    </div>
                    <div class="keluarga2 text-center">
                        <h3>Argantara </h3>
                        <div>
                            <h4>Putra Tercinta</h4>
                            <h4>Bapak Willy</h4>
                            <h4>&</h4>
                            <h4>Ibu Wina</h4>
                        </div>
                    </div>
                    <div class="gambar text-center">
                        <img src="{{ asset('img/halaman2/Quran.png') }}" alt="">
                    </div>
                    <div class="text2 text-center">
                        <div>
                            <h4>"Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir."
                            </h4>
                            <h5 >QS Ar-Rum : 21</h5>
                        </div>
                    </div>
                    <div class="kiri1 text-center">
                        <img src="{{ asset('img/halaman2/kiri/kiri3.png') }}" alt="">                        
                        <img class="corner-image" src="{{ asset('img/halaman2/kiri/kiri4.png') }}" alt="">
                    
                    </div>
                
            </div>
        </div>
    </section>

    <section id="info" class="info sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img src="{{ asset('img/halaman2/kiri/kanan2.png') }}" alt="" class="left-top">
                    <img src="{{ asset('img/halaman2/kiri/kanan1.png') }}" alt="" class="right-top">
                </div>
                <div class="col-auto mx-auto"> <!-- Added mx-auto class here -->
                    <h4 class="text text-center">Detail Acara</h4>
                </div>
                <div class="text-akad text-center">
                    <h3>Akad Nikah </h3>
                    <div>
                        <h4>SABTU,17 FEBRUARI 2024</h4>
                        <h4>09:00 - 10:00</h4>
                    </div>
                </div>
                <div class="text-akad2 text-center">
                    <h3>Resepsi</h3>
                    <div>
                        <h4>SABTU,17 FEBRUARI 2024</h4>
                        <h4>11:00  - 18:00</h4>
                    </div>
                </div>
                <div class="col-auto mx-auto text-center tempat">
                    <h4 class="text2">PERUMAHAN NUSA INDAH BOGOR </h4>
                    <h4>JL LAWANGGINTUNG NO 30 RT 02/RW10,KEC. BOGOR SELATAN, KOTA BOGOR, JAWA BARAT</h4>
                    <div class="image-wrapper">
                        <a href="#" class="location-link">LIHAT LOKASI ACARA</a>
                        <img src="{{ asset('img/halaman3/btn1.png') }}" alt="">
                        <h3>Konfirmasi Kehadiran Anda Disini</h3>
                    </div>                    
                    <div class="image-wrapper2">
                        <a href="#" class="daftar-book">KONFIRMASI KEHADIRAN</a>
                        <img src="{{ asset('img/halaman3/btn1.png') }}" alt="" > 
                    </div>
                </div>
                <div class="halaman3">
                    <img src="{{ asset('img/halaman3/img-bunga.png') }}" alt="">                        
                    <img class="penalty-image" src="{{ asset('img/halaman3/img-bunga2.png') }}" alt="">
                </div>   
            </div>
    </section>

    <section id="time" class="time sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img src="{{ asset('img/halaman4/halaman4-bunga.png') }}" alt="" class="left-kiri">
                    <img src="{{ asset('img/halaman4/halaman4.png') }}" alt="" class="left-kanan">
                </div> 
                <div class="image-time">
                    <h4 class="text-Hari">10</h4>
                    <h4 class="text-Hari2">Hari</h4>
                    <img src="{{ asset('img/halaman4/halaman4-bingkai.png') }}" alt="" > 
                </div>
                <div class="image-jam">
                    <h4 class="text-waktu">5</h4>
                    <h4 class="text-waktu2">JAM</h4>
                    <img src="{{ asset('img/halaman4/halaman4-jam.png') }}" alt="">
                </div>
                <div class="image-hari">
                    <img src="{{ asset('img/halaman4/halaman4-jam.png') }}" alt="">
                </div>
                <div class="image-menit">
                    <h4 class="text-menit">45</h4>
                    <h4 class="text-menit2">Menit</h4>
                    <img src="{{ asset('img/halaman4/halaman4-jam.png') }}" alt="">
                </div>
                <div class="image-time2">
                    <img src="{{ asset('img/halaman4/halaman4-bingkai2.png') }}" alt="" > 
                </div>
                <div class="kiri2 text-center">
                    <img src="{{ asset('img/halaman2/kiri/kiri3.png') }}" alt="" >                        
                    <img class="corner2-image" src="{{ asset('img/halaman2/kiri/kiri4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="galery" class="galery sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img src="{{ asset('img/halaman2/kiri/kanan2.png') }}" alt="" class="left-bingkai1">
                    <img src="{{ asset('img/halaman2/kiri/kanan1.png') }}" alt="" class="right-bingkai2">
                </div>
                <div class="col-auto mx-auto"> <!-- Added mx-auto class here -->
                    <h4 class="kata text-center">Galery</h4>
                </div>
                <div class="image-bingkai5">
                    <img src="{{ asset('img/halaman4/halaman4-bingkai.png') }}" alt="" > 
                </div>
                <div class="image-foto1">
                    <img src="{{ asset('img/halaman5/foto1.png') }}" alt="" >
                    <img src="{{ asset('img/halaman5/foto2.png') }}" class="foto2" alt="">
                </div>
                <div class="image-foto3">
                    <img src="{{ asset('img/halaman5/foto3.png') }}" alt="" >
                    <img src="{{ asset('img/halaman5/foto4.png') }}" class="foto4" alt="">
                </div>
                <div class="image-foto4">
                    <img src="{{ asset('img/halaman5/foto5.png') }}" alt="" >
                    <img src="{{ asset('img/halaman5/foto6.png') }}" class="foto5" alt="">
                </div>
                <div class="image-halaman5">
                    <img src="{{ asset('img/halaman4/halaman4-bingkai2.png') }}" alt="" > 
                </div>
                <div class="halaman5">
                    <img src="{{ asset('img/halaman3/img-bunga.png') }}" alt="">                        
                    <img class="penalty2-image" src="{{ asset('img/halaman3/img-bunga2.png') }}" alt="">
                </div>   
            </div>
    </section>


    <section id="protocol" class="protocol sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <div class="col-auto">
                        <img src="{{ asset('img/halaman4/halaman4-bunga.png') }}" alt="" class="left-kiri1">
                        <img src="{{ asset('img/halaman4/halaman4.png') }}" alt="" class="left-kanan2">
                    </div>
                    <div class="col-auto mx-auto"> <!-- Added mx-auto class here -->
                        <h4 class="kata2 text-center">Protokol Kesehatan</h4>
                        <h4 class="kata3 text-center">Dengan tidak mengurangi rasa hormat. Sehubungan dengan adanya wabah Covid-19, dimohon untuk seluruh tamu undangan agar melakukan pengecekan suhu sebelum memasuki area acara, selalu menggunakan masker, menjaga kebersihan tangan dan menjaga jarak aman selama acara berlangsung.</h4>
                        <img src="{{ asset('img/halaman6/gambar1.png') }}" alt="" class="halaman6" > 
                    </div>
                    <div class="halaman6-bingkai text-center">
                        <img src="{{ asset('img/halaman2/kiri/kiri3.png') }}" alt="" >                        
                        <img class="corner3-image" src="{{ asset('img/halaman2/kiri/kiri4.png') }}" alt="">
                    </div>
                </div>
            </div>
    </section>

    <section id="pesan" class="pesan sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img src="{{ asset('img/halaman2/kiri/kanan2.png') }}" alt="" class="left-bingkai6">
                    <img src="{{ asset('img/halaman2/kiri/kanan1.png') }}" alt="" class="right-bingkai7">
                </div> 
                <div class="col-auto mx-auto"> <!-- Added mx-auto class here -->
                    <h4 class="kata4 text-center">Ucapan Dan Doa</h4>
                    <img src="{{ asset('img/halaman7/halaman7.png') }}" alt="" class="halaman7" > 
                </div>
                <div class="halaman7-bingkai">
                    <img src="{{ asset('img/halaman3/img-bunga.png') }}" alt="">                        
                    <img class="penalty7-image" src="{{ asset('img/halaman3/img-bunga2.png') }}" alt="">
                </div>  
            </div>
    </section>

    <section id="hadiah" class="hadiah sticky-top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <div class="col-auto">
                        <img src="{{ asset('img/halaman4/halaman4-bunga.png') }}" alt="" class="kiri-akhir">
                        <img src="{{ asset('img/halaman4/halaman4.png') }}" alt="" class="kanan-akhir2">
                    </div>
                    <div class="col-auto mx-auto"> <!-- Added mx-auto class here -->
                        <h4 class="kata10 text-center">Pojok Hadiah</h4>
                        <h4 class="kata11 text-center">Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</h4>
                        <img src="{{ asset('img/halaman8/halaman8.png') }}" alt="" class="halaman8">
                    </div>
                    <div class="halaman8-bingkai text-center">
                        <img src="{{ asset('img/halaman2/kiri/kiri3.png') }}" alt="" >                        
                        <img class="corner4-image" src="{{ asset('img/halaman2/kiri/kiri4.png') }}" alt="">
                    </div>
                </div>
            </div>
    </section>


    
    
    
    
    

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>