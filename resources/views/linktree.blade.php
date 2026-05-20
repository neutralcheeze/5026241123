<!DOCTYPE html>
<html lang="en">
<head>
  <title>5026241123</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
        body {
            background-color: #424548;
        }

        .container {
            margin-top: 2.5%;
            max-width: 580px;
            border-radius: 15px 15px 0 0;
            min-height: 990px;
            background-color: #2A3235;
        }

        .btn-logo-linktree {
            width: 40px;
            height: 40px;
            background-color: #B8BEBD;
            border: none;
        }

        .btn-logo-linktree:hover {
            background-color: #ffffff;
        }

        .brand_name {
            font-size: 24px;
        }

        .motto {
            font-size: 16px;
        }

        .menu-button {
            width: 24px;
            height: 24px;
        }

        .menu-button:hover {
            background-color: #ededed;
        }

        .sub-title {
            font-size: 12px;
        }

        .button-image {
            object-fit: cover;
        }

        .btn-join-linktree {
            border-radius: 30px;
            font-size: 16px;
        }

        .btn-instagram:hover {
            cursor: pointer;
        }

        .settings {
            font-size: 10px;
        }

        .btn-menu:hover {
            background-color: #ededed !important;
        }

        #tombol {
            background-color: #ffffff;
        }

  </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container shadow-lg">
            <div class="d-flex justify-content-between">
                <div class="text-white pl-4 pt-5">
                    <button class="btn-logo-linktree rounded-circle">
                        <img class="img-fluid text-center" src="{{ asset('assets') }}/slicing_linktree/linktree_logo.png" height="18px" width="18px"  alt="Logo linktree">
                    </button>
                </div>
                <div class="text-white pr-4 pt-5">
                    <button class="btn-logo-linktree rounded-circle">
                        <img class="img-fluid text-center" src="{{ asset('assets') }}/slicing_linktree/upload.png" alt="Logo linktree">
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-center rounded-circle pt-3">
                <img class="img-fluid" height="96" width="96" src="{{ asset('assets') }}/slicing_linktree/logo_tenjin.webp" alt="">
            </div>
            <div class="pt-3 row">
                <div class="col-12 text-center">
                    <div class="text-white font-weight-bold">
                        <button class="btn btn-primary" onclick="changeText();">Change Text</button>
                        <button class="btn btn-success" onclick="showme();">Show Me!</button>
                        <button class="btn btn-info" onclick="changeStyle();">Change Style</button>
                        <p id="brand_name" class="brand_name mb-0">@tenjinscrollworks<br></p>
                        <p class="motto">Get your gears ready, join the forces.</p>
                    </div>
                </div>
            </div>
            <!-- Link Button Section -->
            <div class="pt-3 row pr-3 pl-3">
                <button id="tombol" class="relative btn-menu col-12 text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div>
                        🛒 Toco Store Page (Indonesia)
                    </div>
                    <div class="z-3 font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="img-fluid button-image" height="48px" width="48px" src="{{ asset('assets') }}/slicing_linktree/item_1.webp" alt="">
                    </div>
                    <div>
                        🛒 Shopee Store Page (Indonesia)
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div>
                        🛒 Tokopedia Store Page (Indonesia)
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div>
                        🌍 Web Store (International)
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div>
                        🗨️ Discord Community
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div>
                       🏠 Offline Store
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="img-fluid button-image" height="48px" width="48px" src="{{ asset('assets') }}/slicing_linktree/item_2.webp" alt="">
                    </div>
                    <div>
                        🎵 Tenjin Collective Tunes
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="pt-3 row pr-3 pl-3">
                <button class="btn-menu col-12 bg-white text-center rounded-lg btn pt-3 pb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    <div class="row">
                        <div class="col-12">
                            <div>🧼 Cara Mencuci Deskmat</div>
                            <div class="text-secondary sub-title">📽️ YouTub • Tenjin</div>
                        </div>
                    </div>
                    <div class="font-weight-bolder relative menu-button rounded-circle">
                        :
                    </div>
                </button>
            </div>
            <div class="mt-3 row">
                <div class="col-12 text-center btn-instagram">
                    <button class="btn btn-instagram">
                        <img src="{{ asset('assets') }}/slicing_linktree/instagram2.png" alt="">
                    </button>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-12 text-center">
                    <button class="btn btn-join-linktree font-weight-bold py-2 px-3 bg-white">Join tenjinscrollworks on Linktree</button>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12 text-center text-white settings pb-5 font-weight-bold">
                    <p>Cookie Preferences • Report  • Privacy</p>
                </div>
            </div>
    </div>

<script>
    function showme() {
        // alert("Halo, selamat datang!");
        console.log("Ini baris ke 112, sudah sampai sini");
        a = 18 + 18;
        console.log("Hasil Penjumlahan: " + a);
        c = 1 * 2 * 3;
        console.log("Haisl Perkalian: " + c);

        Swal.fire({
            title: 'Hallo!!',
            text: 'Selamat Siang',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    }

    function changeText() {
        const elem = document.getElementById("brand_name");
        elem.innerHTML = "Sistem Informasi";
    }

    function changeStyle() {
        const elem = document.getElementById("tombol");
        elem.style.color = "white";
        elem.style.backgroundColor = "red";

    }
</script>

</body>
</html>

