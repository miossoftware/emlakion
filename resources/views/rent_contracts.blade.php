@include('header')
<style>
    .stepper {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
        position: relative;
    }

    .stepper::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 2px;
        background: #ddd;
        z-index: 0;
    }

    .step {
        z-index: 1;
        background: #fff;
        padding: 10px;
        text-align: center;
        flex: 1;
        position: relative;
    }

    .step .circle {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #ddd;
        margin: 0 auto 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #fff;
    }

    .step.active .circle {
        background: #0d6efd;
    }

    .step.completed .circle {
        background: #198754;
    }

    .step.completed .circle::after {
        content: "✓";
        font-weight: bold;
    }
</style>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    @include('navbar')

    <div class="body-wrapper">
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="dropdown-item">
                                    Item 1
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    Item 2
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                     class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                 aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="./authentication-login.html"
                                       class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="body-wrapper-inner">
            <div class="container-fluid">
                <div class="row cari-turu-list">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Kira Sözleşmeleri</h4>
                                        <button class="btn btn-success" id="kira-sozlesmesi"><i class="ti ti-plus"></i>
                                            Yeni Kira Sözleşmesi
                                        </button>
                                    </div>
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <select class="form-select theme-select border-0"
                                                aria-label="Default select example">
                                            <option value="1">2025</option>
                                            <option value="2">2026</option>
                                            <option value="3">2027</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="px-0 text-muted">
                                                Evrak No
                                            </th>
                                            <th scope="col" class="px-0 text-muted">
                                                Kiralayan
                                            </th>
                                            <th scope="col" class="px-0 text-muted text-end">
                                                Kiracı
                                            </th>
                                            <th scope="col" class="px-0 text-muted text-end">
                                                Demirbaşlar
                                            </th>
                                            <th scope="col" class="px-0 text-muted text-end">
                                                Başlangıç Tarihi
                                            </th>
                                            <th scope="col" class="px-0 text-muted text-end">
                                                Bitiş Tarihi
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cari-turu-ekle" @if (isset($kira_sozlesmeleri)) style="display:none;" @endif>
                    <div class="card">
                        <div class="card-header">
                            <h3>Sözleşme Bilgileri</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                @if (isset($kira_sozlesmeleri))
                                    <button class="btn btn-primary btn-sm" type="button" id="geri_don"><i
                                            class="ti ti-arrow-left"></i></button>
                                @endif
                            </div>
                            <div class="container">
                                <h3 class="mb-4">Kira Sözleşmesi</h3>

                                <!-- Adım Çizelgesi -->
                                <div class="stepper">
                                    <div class="step active" data-step="1">
                                        <div class="circle">1</div>
                                        <div>Kiralanan (Mülk)</div>
                                    </div>
                                    <div class="step" data-step="2">
                                        <div class="circle">2</div>
                                        <div>Kiraya Veren</div>
                                    </div>
                                    <div class="step" data-step="3">
                                        <div class="circle">3</div>
                                        <div>Kiracı</div>
                                    </div>
                                    <div class="step" data-step="4">
                                        <div class="circle">4</div>
                                        <div>Genel Koşullar</div>
                                    </div>
                                    <div class="step" data-step="5">
                                        <div class="circle">5</div>
                                        <div>Özel Koşullar</div>
                                    </div>
                                    <div class="step" data-step="6">
                                        <div class="circle">6</div>
                                        <div>Demirbaş Zimmet</div>
                                    </div>
                                    <div class="step" data-step="7">
                                        <div class="circle">7</div>
                                        <div>Tahliye Taahüt</div>
                                    </div>
                                    <div class="step" data-step="8">
                                        <div class="circle">8</div>
                                        <div>Kira Fesih Sözleşmesi</div>
                                    </div>
                                </div>

                                <div class="tab-content">
                                    <!-- Adım 1 -->
                                    <div class="tab-pane fade show active" id="step1">
                                        <div class="col-md-12 row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label>İl</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>İlçe</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Mahalle</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Cadde</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Sokak</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Apt. Adı</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Bina</label>
                                                    </div>
                                                    <div class="col-md-7 row no-gutters">
                                                        <div class="col-md">
                                                            <input type="text" placeholder="No" class="form-control">
                                                        </div>
                                                        <div class="col-md">
                                                            <input type="text" class="form-control" placeholder="Kat">
                                                        </div>
                                                        <div class="col-md">
                                                            <input type="text" class="form-control" placeholder="Daire">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Kiralanan Cinsi</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Başlangıç Tarihi</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="date" value="{{ date("Y-m-d") }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Süre (Ay)</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Bitiş Süresi</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="date" readonly class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Alınan Depozito</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-select" id="">
                                                            <option value="">Seçiniz...</option>
                                                            <option value="Depozito Senedi">Depozito Senedi</option>
                                                            <option value="Nakit Depozito">Nakit Depozito</option>
                                                            <option value="Özel Seçim">Özel Seçim</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Depozito Miktarı</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label>Aylık Bedel</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Yıllık Bedel</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Tahsil Günü</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Kira Bedelinin Ödeme Şekli</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control" id=""  rows="3" style="resize: none"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Kiralanan Kullanım Şekli</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control" id=""  rows="3" style="resize: none"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Kiralanan Durum</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control" id=""  rows="3" style="resize: none"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Fotoğraf 1</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Fotoğraf 2</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Fotoğraf 3</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <div class="col-md-4">
                                                        <label>Fotoğraf 4</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>

                                    <!-- Adım 2 -->
                                    <div class="tab-pane fade" id="step2">
                                        <h5>Kiraya Veren</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6>Mal Sahibi</h6>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2"
                                                       placeholder="T.C. Kimlik No">
                                                <input type="text" class="form-control mb-2"
                                                       placeholder="Adres">
                                                <input type="text" class="form-control mb-2"
                                                       placeholder="Telefon">
                                                <input type="file" class="form-control mb-2"
                                                       placeholder="Kimlik Fotoğrafı">
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Sözleşmeyi İmzalayan</h6>
                                                <select class="form-select" id="">
                                                    <option value="">Sözleşmeyi İmzalayan</option>
                                                    <option value="Kendisi">Kendisi</option>
                                                    <option value="Vekili">Vekili</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Vekili</h6>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2"
                                                       placeholder="T.C. Kimlik No">
                                                <input type="file" class="form-control mb-2"
                                                       placeholder="Kimlik Fotoğrafı">
                                            </div>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>

                                    <!-- Adım 3 -->
                                    <div class="tab-pane fade" id="step3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Kiracı 1</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                                <input type="text" class="form-control mb-2" placeholder="Adres">
                                                <input type="text" class="form-control mb-2" placeholder="Telefon">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 1">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 2">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Kiracı 2</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                                <input type="text" class="form-control mb-2" placeholder="Adres">
                                                <input type="text" class="form-control mb-2" placeholder="Telefon">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 1">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 2">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Kiracı 3</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                                <input type="text" class="form-control mb-2" placeholder="Adres">
                                                <input type="text" class="form-control mb-2" placeholder="Telefon">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 1">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 2">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Kiracı 4</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                                <input type="text" class="form-control mb-2" placeholder="Adres">
                                                <input type="text" class="form-control mb-2" placeholder="Telefon">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 1">
                                                <input type="file" class="form-control mb-2" placeholder="Fotoğraf 2">
                                            </div>
                                        </div>

                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>

                                    <!-- Adım 4 -->
                                    <div class="tab-pane fade" id="step4">
                                        <h5>Genel Koşullar</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-striped align-middle mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Genel Koşul</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>
                                    <!-- Adım 5 -->
                                    <div class="tab-pane fade" id="step5">
                                        <h5>Özel Koşullar</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-striped align-middle mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Özel Koşul</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Test 123</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>
                                    <!-- Adım 6 -->
                                    <div class="tab-pane fade" id="step6">
                                        <h5>Demirbaş Zimmet</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-striped align-middle mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Demirbaş</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Sandalye</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Masa</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Yemek Masası</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Gardrop</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Masa</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>
                                    <!-- Adım 7 -->
                                    <div class="tab-pane fade" id="step7">
                                        <h5>Tahliye Taahütnamesi</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="date" value="{{ date("Y-m-d") }}" class="form-control mb-2" placeholder="Belge Tarihi">
                                                <input type="date" value="{{ date("Y-m-d") }}" class="form-control mb-2" placeholder="Tahliye Tarihi">
                                                <textarea type="text" class="form-control mb-2" placeholder="İlave Taahütler" style="resize: none"></textarea>
                                                <input type="text" class="form-control mb-2" placeholder="1. Sahip Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="1. Sahip Ad Soyad">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Taahüt Eş Bilgileri</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                            </div>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-primary nextBtn">Sonraki</button>
                                    </div>
                                    <!-- Adım 8 -->
                                    <div class="tab-pane fade" id="step8">
                                        <h5>Kira Fesih Sözleşmesi</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control mb-2" placeholder="Mülkün Adresi">
                                                <input type="text" class="form-control mb-2" placeholder="Mülk Sahibi">
                                                <input type="text" class="form-control mb-2" placeholder="Kiracı">
                                                <input type="date" value="{{ date("Y-m-d") }}" class="form-control mb-2" placeholder="Mülk Teslim Tarihi">
                                                <input type="text" class="form-control mb-2" placeholder="Şahit 1 Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="Şahit 2 Ad Soyad">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Taahüt Eş Bilgileri</h5>
                                                <input type="text" class="form-control mb-2" placeholder="Ad Soyad">
                                                <input type="text" class="form-control mb-2" placeholder="TC. Kimlik No">
                                            </div>
                                        </div>
                                        <button class="btn btn-secondary prevBtn">Geri</button>
                                        <button class="btn btn-success">Tamamla</button>
                                    </div>
                                </div>
                            </div>
                            <script>
                                let currentStep = 1;

                                function showStep(step) {
                                    document.querySelectorAll(".tab-pane").forEach(el => el.classList.remove("show", "active"));
                                    document.getElementById("step" + step).classList.add("show", "active");

                                    document.querySelectorAll(".step").forEach((el, i) => {
                                        el.classList.remove("active", "completed");
                                        if (i + 1 < step) el.classList.add("completed");
                                        if (i + 1 === step) el.classList.add("active");
                                    });

                                    currentStep = step;
                                }

                                document.querySelectorAll(".nextBtn").forEach(btn => {
                                    btn.addEventListener("click", () => {
                                        if (currentStep < 8) showStep(currentStep + 1);
                                    });
                                });

                                document.querySelectorAll(".prevBtn").forEach(btn => {
                                    btn.addEventListener("click", () => {
                                        if (currentStep > 1) showStep(currentStep - 1);
                                    });
                                });
                            </script>
                            <div style="display: none" class="row mt-5 kiraci-div">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Kiracı 1</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Ad Soyad</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>TC Kimlik</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Adres</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Telefon</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 1</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 2</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Kiracı 2</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Ad Soyad</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>TC Kimlik</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Adres</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Telefon</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 1</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 2</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Kiracı 3</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Ad Soyad</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>TC Kimlik</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Adres</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Telefon</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 1</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 2</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Kiracı 4</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Ad Soyad</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>TC Kimlik</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Adres</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Telefon</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 1</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label>Fotoğraf 2</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="file" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none" class="row mt-5 kiraya-veren-div">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $("body").off("change", "#aylik_kira").on("change", "#aylik_kira", function () {
        let val = $(this).val();
        val = parseFloat(val);
        if (isNaN(val)) {
            val = 0;
        }
        let new_val = val * 12;
        $("#yillik_kira").val(new_val);
    });

    function calculateEndDate() {
        let startDate = document.getElementById("first_date").value;
        let months = parseInt(document.getElementById("date_month").value);

        if (!startDate || isNaN(months)) {
            document.getElementById("last_date").value = "";
            return;
        }

        let date = new Date(startDate);
        date.setMonth(date.getMonth() + months);

        // YYYY-MM-DD formatına çevirelim
        let year = date.getFullYear();
        let month = String(date.getMonth() + 1).padStart(2, '0');
        let day = String(date.getDate()).padStart(2, '0');

        document.getElementById("last_date").value = `${year}-${month}-${day}`;
    }

    $("body").off("click", "#kira-sozlesmesi").on("click", "#kira-sozlesmesi", function () {
        $(".cari-turu-list").css("display", "none");
        $(".cari-turu-ekle").css("display", "block");
    });

    $("body").off("click", "#geri_don").on("click", "#geri_don", function () {
        $(".cari-turu-list").css("display", "block");
        $(".cari-turu-ekle").css("display", "none");
    });

    $("body").off("click", "#kiralanan").on("click", "#kiralanan", function () {
        $(".main-class").removeClass("active");
        $(this).addClass("active");
        $(".kiraci-div").hide();
        $(".kiralanan-div").show();
        $(".kiraya-veren-div").hide();
    });

    $("body").off("click", "#kiraci").on("click", "#kiraci", function () {
        $(".main-class").removeClass("active");
        $(this).addClass("active");
        $(".kiraci-div").show();
        $(".kiralanan-div").hide();
        $(".kiraya-veren-div").hide();
    });

    $("body").off("click", "#kiralayan").on("click", "#kiralayan", function () {
        $(".main-class").removeClass("active");
        $(this).addClass("active");
        $(".kiraci-div").hide();
        $(".kiralanan-div").hide();
        $(".kiraya-veren-div").show();
    });

    $("#aylik_kira").inputmask({
        alias: "numeric",
        groupSeparator: ",",
        digits: 2,
        digitsOptional: false,
        placeholder: "0",
        rightAlign: true,
        autoUnmask: true
    });
    $("#yillik_kira").inputmask({
        alias: "numeric",
        groupSeparator: ",",
        digits: 2,
        digitsOptional: false,
        placeholder: "0",
        rightAlign: true,
        autoUnmask: true
    });


</script>
@include('footer')
