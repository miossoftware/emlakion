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
                @if(session('success'))
                    <script>
                        toastr.success("{{ session('success') }}", "Başarılı");
                    </script>
                @endif
                @if(session('warning'))
                    <script>
                        toastr.warning("{{ session('warning') }}", "Uyarı");
                    </script>
                @endif
                @if(isset($special_conditions))
                    <div class="row cari-turu-list">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Özel Koşullar</h4>
                                            <button class="btn btn-success" id="genel-kosullar"><i
                                                    class="ti ti-plus"></i>
                                                Yeni Ekle
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-4">
                                        <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                            <thead>
                                            <tr>
                                                <th class="px-0 text-muted">
                                                    Özel Koşul
                                                </th>
                                                <th style="width: 0% !important;" class="px-0 text-muted">
                                                    İşlem
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($special_conditions as $conditions)
                                                <tr>
                                                    <td>{!! nl2br(e($conditions->conditions)) !!}</td>
                                                    <td>
                                                        <a href="{{ route('special_conditions.delete', ['id' => $conditions->id]) }}"
                                                           class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
                                                        <a href="{{ route('special_conditions.show', ['id' => $conditions->id]) }}"
                                                           class="btn btn-primary btn-sm"><i class="ti ti-edit"></i></a>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row cari-turu-ekle" @if (isset($special_conditions)) style="display:none;" @endif>
                    <form
                        action="{{ isset($special_conditions) ? route('special_conditions.add') : route('special_conditions.update', ['id' => $justAConditions->id]) }}"
                        method="post">
                        @csrf
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Özel Koşul Ekle</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                        @if (isset($special_conditions))
                                            <button class="btn btn-primary btn-sm" type="button" id="geri_don"><i
                                                    class="ti ti-arrow-left"></i></button>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label>Özel Koşul</label>
                                        </div>
                                        <div class="col-md-7">
                                        <textarea class="form-control" name="conditions" id="" cols="30"
                                                  style="resize: none"
                                                  rows="10">{{ isset($justAConditions) ? $justAConditions->conditions : "" }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="fa fa-check"></i> Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

    $("body").off("click", "#genel-kosullar").on("click", "#genel-kosullar", function () {
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
