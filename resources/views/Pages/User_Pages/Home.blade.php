@extends('Template.User_Template.Master_User')

@section('title','Reservasi Ciwidey - Home')

@section('konten')
<<<<<<< HEAD

<div id="hero">
    <div class="container-fluid p-0">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="/Assets/Images/hero-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/Assets/Images/hero-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/Assets/Images/hero-3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>

<div id="profil" class="bg-body-tertiary" style="padding: 100px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img class="img-fluid" src="/Assets/Images/logo_wisata.png" alt="" width="auto" height="300px">
            </div>

            <div class="col-md-8">
        <h2 class="text-center">PROFIL SINGKAT</h2>
                <p class="fs-6" style="text-align: justify;">
                    <b>Nadimas Wisata Ciwidey</b> – adalah Jasa Layanan liburan keluarga di Ciwidey Kabupaten Bandung. Berdiri sejak tahun 2018 sudah banyak orang yang merasakan manfaat terbaiknya. Para pengunjung hadir baik dari dalam negeri maupun luar negeri. Fasilitas yang disediakan pun sudah terstandarisasi dan siap untuk digunakan.  Bagi anda yang sangat tertarik langsung saja memilih layanan yang kami sediakan. Kami juga senantiasa siap menjawab dari berbagai pertanyaan untuk jadwal booking. Jangan khawatir, karena dipandu oleh orang-orang yang profesional yang senantiasa interktif kepada para pengunjung. Bagi yang baru pertama kali mengikutinya, kami sarankan untuk saling mengingatkan. Selain menikmati keindahan alam kamu juga bisa bersukur kepada Tuhan yang Maha Kuasa yang selalu memberikan nikmat yang sebaik-baiknya.
                </p>
            </div>
    </div>
</div>
</div>

<div id="keunggulan" class="bg-white" style="padding: 100px">
    <div class="container">
        <h2 class="text-center">KENAPA MEMILIH LAYANAN KAMI ?</h2>
        <div class="row align-items-center g-3">
           <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-check" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                          </svg>
                        <h5 class="text-center">Legalitas Aman</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                          </svg>
                        <h5 class="text-center">Team Professional</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <h5 class="text-center">Fasilitas Lengkap</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                            <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                          </svg>
                        <h5 class="text-center">Safety Asuransi</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                          </svg>
                        <h5 class="text-center">Layanan Terbaik</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16" style="color: #6F949D;">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                          </svg>
                        <h5 class="text-center">Ramah Terpercaya</h5>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<div id="service">
<h2>Layanan Utama Kami</h2>
</div>

<div id="promo">
<h2>Promo Yang Kami Tawarkan</h2>
</div>

<div id="pricelist">
<h2>Harga Terkini</h2>
</div>

<div id="testimoni">
<h2>Testimoni Pengunjung</h2>
</div>

<div id="galleri">
<h2>Galleri Kami</h2>
</div>

<div id="artikel">
<h2>Cakrawala Artikel</h2>

</div>

@endsection
=======
>>>>>>> 76420d49539353d10ea66047f37b54f9113e037d

<div id="Hero_Video">
    
</div>
<div class="container my-2">
    <h1>Halaman utama</h1>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut modi itaque corrupti quae? Sequi maxime laborum facilis pariatur delectus minima unde, dolores architecto odit, sit placeat natus inventore error hic.
    Atque molestiae magnam quidem eligendi temporibus ex dolores commodi? Accusamus consequuntur laboriosam, eos nemo architecto impedit, asperiores doloremque ipsam aut dolorem maxime fuga nesciunt consectetur sed, nulla deserunt! Repellat, nemo?
    Aliquam voluptatem aliquid reiciendis ut veniam qui! Ea adipisci nesciunt, a hic dignissimos facilis libero unde vel quae corporis, quas, earum sapiente amet ratione. Mollitia corporis beatae possimus saepe doloremque.
    Voluptates dignissimos earum autem natus quidem repellendus minus magnam doloremque voluptatibus esse sed repellat sunt, officiis minima ea facilis laudantium illo inventore! Nostrum harum, nobis totam tempore reiciendis voluptatem distinctio.
    Quod obcaecati, facilis et cum odit quisquam itaque praesentium, ipsa dolorem consequuntur rerum sunt laudantium! Quos consequatur quidem nobis facere recusandae eius, necessitatibus quam, adipisci magni, nihil architecto repellat. Officiis?
    Iure, officiis qui repellat distinctio ab, quod repudiandae ad et, accusamus asperiores possimus? Assumenda, dolore quo quasi magni ullam cumque quidem amet consequuntur sequi, similique, perferendis dignissimos ex fuga dolorem.
    Non repellat delectus modi velit dolorum aliquid earum animi necessitatibus voluptatem repellendus harum fugit numquam, tenetur amet aliquam. Sunt ut iste dolore quaerat provident ab aliquam consequatur, quas quisquam nemo?
    Soluta consectetur reiciendis fugit impedit corrupti vel voluptate excepturi fugiat ullam quod. Consequatur, porro repellat sunt eveniet perspiciatis similique necessitatibus aspernatur in architecto, corrupti nam qui earum nihil, et ratione!
    Nostrum reiciendis, error blanditiis perferendis aliquid et doloribus vitae modi dicta perspiciatis voluptas sunt eveniet ea quasi autem accusamus impedit laboriosam alias voluptatem nobis. Ad aspernatur ullam ipsum eius perspiciatis!
    Reprehenderit quaerat voluptates exercitationem quidem, ipsum expedita! Vitae aut quos nobis, voluptatum itaque qui hic quo aperiam labore perferendis! Officia mollitia illum nulla id voluptas, error quasi beatae ab praesentium!


</div>
        @endsection
