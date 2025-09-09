<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Roboto Slab', serif;
    }

    /* เพิ่มกรอบเมื่อเอาเมาส์ชี้ */
    .hover-border {
        display: block;
        border: 1px solid transparent;
        transition: border-color .2s, box-shadow .2s;
    }

    .hover-border:hover {
        border-color: #212529;
        /* สีกรอบ = text-dark ของ Bootstrap */
        box-shadow: 0 0 0 .25rem rgba(33, 37, 41, .15);
        /* วงเงาอ่อนๆ */
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-light py-3 border-bottom bordor-dark">
        <div class="container-fluid">

            <a href="Home.html" class="navbar-brand fs-2 fw-bolder text-uppercase mx-3">JS</a>

            <ul class="navbar-nav px-1">
                <li class="navbar-item"><a href="Club.html"
                        class="nav-link fs-5 fw-bolder text-uppercase mx-3">ClubShirt</a>
                </li>
                <li class="navbar-item"><a href="National.html"
                        class="nav-link fs-5 fw-bolder text-uppercase">Nationalteamshirt</a>
                </li>
            </ul>

            <div class="search">
                <form class="d-flex mx-3" role="search" onsubmit="return false;">
                    <input id="searchBox" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-dark" type="button" onclick="searchItems()">Search</button>
                </form>
            </div>
            <div class="d-flex align-items-center">
                <a href="" class="me-2">
                    <i class="bi bi-person-fill fs-3 text-dark"></i>
                </a>
                <a href="">
                    <i class="bi bi-bag fs-3 text-dark"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row g-0"> <!-- g-0 = no gutter -->
            <div class="col-4 position-relative">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_800,w_800/Liverpool_TC_27b67f1442.png"
                    class="img-fluid w-80 h-120" alt="barca">
                <p class="h3 px-3 bg-dark text-uppercase position-absolute bottom-0 start-0 m-2 text-white">clubshirt
                </p>
            </div>
            <div class="col-4">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_800,w_800/global_aclubs_third_fcb_football_ss25_launch_Onsite_TC_d_1ecdb94763.jpg"
                    class="img-fluid w-80 h-120" alt="real madrid">
            </div>
            <div class="col-4">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_800,w_800/Juventus_Away_e3c0c1624f.png"
                    class="img-fluid w-80 h-120" alt="atletico madrid">
            </div>
        </div>
    </div>

    <div class="container-fluid ">

        <p class="h5 text-start fw-3 fs-5 mt-5 text-uppercase">manchester united 25/26</p>

        <div class="row my-2">
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c5036ba11ce9417386319c5a26b5dc15_9366/Manchester_United_25-26_JI7429_HM1.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c5036ba11ce9417386319c5a26b5dc15_9366/Manchester_United_25-26_JI7429_HM1.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,700</p>
                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/8dd91b60f83f43179dda41bacebd7968_9366/Manchester_United_25-26_KD4225_21_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/8dd91b60f83f43179dda41bacebd7968_9366/Manchester_United_25-26_KD4225_21_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,900</p>
                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1623df85821444868c899b09fd5c9a3c_9366/Manchester_United_25-26_JI7423_21_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1623df85821444868c899b09fd5c9a3c_9366/Manchester_United_25-26_JI7423_21_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,700</p>
                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/f0df5ad5b42b41a3a725451c97ee48ce_9366/Manchester_United_25-26_KD4227_20_01_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/f0df5ad5b42b41a3a725451c97ee48ce_9366/Manchester_United_25-26_KD4227_20_01_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,400</p>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row g-0 my-5"> <!-- g-0 = no gutter -->
            <div class="col-12 position-relative">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_1920,w_1920/global_aclubs_combined_liverpool_football_ss25_launch_PLP_Banner_Statement_design_d_92bb314cbc.jpg"
                    class="img-fluid w-80 h-120" alt="barca">
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <p class="h5 text-start fw-3 fs-5 mt-5 text-uppercase">arsenal 25/26</p>

        <div class="row my-2">
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/c4a02015f9724a4a9391fdbded3d1b3e_9366/25-26_JI9556_21_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/c4a02015f9724a4a9391fdbded3d1b3e_9366/25-26_JI9556_21_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,900</p>
                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/d9d2ec9f6faf4ab292c294438eb6f900_9366/Arsenal_25-26_JI9511_21_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/d9d2ec9f6faf4ab292c294438eb6f900_9366/Arsenal_25-26_JI9511_21_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,800</p>

                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/617921e1d5be4abe910417b155b5d3f5_9366/Arsenal_24-25_IT6140_HM1.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/617921e1d5be4abe910417b155b5d3f5_9366/Arsenal_24-25_IT6140_HM1.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,600</p>
                </a>
            </div>
            <div class="col px-3 mx-3">
                <a href="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/0fa85d4aa94f433bb8ac48c66043cbc3_9366/25-26_JI9546_20_01_model.jpg"
                    class="nav-link hover-border text-decoration-none text-dark p-2">
                    <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/0fa85d4aa94f433bb8ac48c66043cbc3_9366/25-26_JI9546_20_01_model.jpg"
                        class="img-fluid" style="width:100%; height:350px; object-fit:cover;" alt="man united third">
                    <p class="h5 fs-5 mx-4 my-2">฿2,400</p>
                </a>
            </div>
        </div>
    </div>

</html>