@include('header')
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
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active main-class" id="kiralanan" href="#">Kiralanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" id="kiralayan" href="#">Kiralayan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" id="kiraci" href="#">Kiracı</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" href="#">Genel Koşullar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" href="#">Özel Koşullar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" href="#">Demirbaş Zimmet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" href="#">Tahliye Taahüt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-class" href="#">Kira Fesih Sözleşmesi</a>
                                </li>
                            </ul>
                            <div class="row mt-5 kiralanan-div">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label>İl</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>İlçe</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Mahalle</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Cadde</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Apartman Adı</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Bina No</label>
                                        </div>
                                        <div class="col-md-7 row no-gutters">
                                            <div class="col-md">
                                                <input type="text" placeholder="Bina" class="form-control">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" placeholder="Kat" class="form-control">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" placeholder="Daire" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Kiralanan Cinsi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-select" id="">
                                                <option value="">Seçiniz...</option>
                                                <option value="Emlak">Emlak</option>
                                                <option value="Ofis">Ofis</option>
                                                <option value="Arsa">Arsa</option>
                                                <option value="Tarla">Tarla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Başlangıç Tarihi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" class="form-control" onfocusout="calculateEndDate()"
                                                   id="first_date">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Süre (AY)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" onfocusout="calculateEndDate()"
                                                   id="date_month">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Bitiş Tarihi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" readonly class="form-control" id="last_date">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Depozito Senedi</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label>Nakit Depozito</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label>Diğer</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Miktar</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label>Aylık Kira Bedeli</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" style="text-align: right" id="aylik_kira">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Bir Yıllık Kira Bedeli</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" type="text" style="text-align: right" id="yillik_kira">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Kira Bedeli Ödeme Şekli</label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-select" id="">
                                                <option value="">Seçiniz...</option>
                                                <option value="Yıllık">Yıllık</option>
                                                <option value="Aylık">Aylık</option>
                                                <option value="Günlük">Günlük</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Kullanım Şekli</label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" style="resize: none" id="" cols="30"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Durum</label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" style="resize: none" id="" cols="30"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Fotoğraf 1</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Fotoğraf 2</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Fotoğraf 3</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4">
                                            <label>Fotoğraf 4</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
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
        if (isNaN(val)){
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
    });

    $("body").off("click", "#kiraci").on("click", "#kiraci", function () {
        $(".main-class").removeClass("active");
        $(this).addClass("active");
        $(".kiraci-div").show();
        $(".kiralanan-div").hide();
    });

    $("body").off("click", "#kiralayan").on("click", "#kiralayan", function () {
        $(".main-class").removeClass("active");
        $(this).addClass("active");
        $(".kiraci-div").hide();
        $(".kiralanan-div").hide();
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
