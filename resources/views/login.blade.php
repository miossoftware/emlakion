<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap | EMLAKION</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="/login" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="">
                            </a>
                            <p class="text-center">Emlak Satış - Kira Sözleşme Uygulaması</p>
                            <form action="/index">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Şifre</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Beni Hatırla
                                        </label>
                                    </div>
                                    <a class="text-primary fw-bold" href="./index.html">Şifremi Unuttum</a>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Giriş Yap</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Hesabın Yok mu ?</p>
                                    <a class="text-primary fw-bold ms-2" href="">Yeni Hesap Oluştur</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
