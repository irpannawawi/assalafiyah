<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('theme')}}/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('theme')}}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/style.css">
</head>

<body>
    @include('dashboard.partials.preloader')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('dashboard.partials.header')
            @include('dashboard.partials.sidebar')
            @yield('content')

        </div>
    </div>
   

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="{{asset('theme')}}/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- slimscroll js -->
    <script src="{{asset('theme')}}/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="{{asset('theme')}}/assets/js/pcoded.min.js"></script>
    <script src="{{asset('theme')}}/assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="{{asset('theme')}}/assets/js/script.js "></script>
    <script>
        $('#modal-add').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget)
                    var namalengkap = button.data('namalengkap')
                    var nohp = button.data('nohp')
                    var jenjang = button.data('jenjang')
                    var jk = button.data('jk')
                    var us = button.data('us')
                    var agama = button.data('agama')
                    var gd = button.data('gd')
                    var tl = button.data('tl')
                    var tmptl = button.data('tmptl')
                    var as = button.data('as')
                    var skhun = button.data('skhun')
                    var nisn = button.data('nisn')
                    var un = button.data('un')
                    var ijazah = button.data('ijazah')
                    var anakke = button.data('anakke')
                    var jmls = button.data('jmls')
                    var kk = button.data('kk')
                    var na = button.data('na')
                    var ni = button.data('ni')
                    var nika = button.data('nika')
                    var niki = button.data('niki')
                    var tla = button.data('tla')
                    var tli = button.data('tli')
                    var tgla = button.data('tgla')
                    var tgli = button.data('tgli')
                    var pa = button.data('pa')
                    var pi = button.data('pi')
                    var nohpa = button.data('nohpa')
                    var nohpi = button.data('nohpi')
                    var hsla = button.data('hsla')
                    var hsli = button.data('hsli')
                    var status = button.data('status')

                    var modal = $(this)
                    modal.find('.modal-body #namalengkap').val(namalengkap);
                    modal.find('.modal-body #nohp').val(nohp);
                    modal.find('.modal-body #jenjang').val(jenjang);
                    modal.find('.modal-body #jk').val(jk);
                    modal.find('.modal-body #us').val(us)
                    modal.find('.modal-body #agama').val(agama);
                    modal.find('.modal-body #gd').val(gd);
                    modal.find('.modal-body #tl').val(tl);
                    modal.find('.modal-body #tmptl').val(tmptl);
                    modal.find('.modal-body #as').val(as);
                    modal.find('.modal-body #skhun').val(skhun);
                    modal.find('.modal-body #nisn').val(nisn);
                    modal.find('.modal-body #un').val(un);
                    modal.find('.modal-body #ijazah').val(ijazah);
                    modal.find('.modal-body #anakke').val(anakke);
                    modal.find('.modal-body #jmls').val(jmls);
                    modal.find('.modal-body #kk').val(kk);
                    modal.find('.modal-body #na').val(na);
                    modal.find('.modal-body #ni').val(ni);
                    modal.find('.modal-body #nika').val(nika);
                    modal.find('.modal-body #niki').val(niki);
                    modal.find('.modal-body #tla').val(tla);
                    modal.find('.modal-body #tli').val(tli);
                    modal.find('.modal-body #tgla').val(tgla);
                    modal.find('.modal-body #tgli').val(tgli);
                    modal.find('.modal-body #pa').val(pa);
                    modal.find('.modal-body #pi').val(pi);
                    modal.find('.modal-body #nohpa').val(nohpa);
                    modal.find('.modal-body #nohpi').val(nohpi);
                    modal.find('.modal-body #hsla').val(hsla);
                    modal.find('.modal-body #hsli').val(hsli);
                    modal.find('.modal-body #status').val(status);
                })    </script>

<script>
    $('#modal-detail').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var lembaga = button.data('lembaga')
                var nip = button.data('nip')
                var nuptk = button.data('nuptk')
                var nama = button.data('nama')
                var jabatan = button.data('jabatan')
                var st = button.data('st')
                var sp = button.data('sp')
                var mengajar = button.data('mengajar')
                var mb = button.data('mb')
                var nsm = button.data('nsm')
                var tsm = button.data('tsm')
                var psm = button.data('psm')
                var ktp = button.data('ktp')
                var npwp = button.data('npwp')
                var tl = button.data('tl')
                var tgl = button.data('tgl')
                var jk = button.data('jk')
                var agama = button.data('agama')
                var gd = button.data('gd')
                var sn = button.data('sn')
                var kwgn = button.data('kwgn')
                var nohp = button.data('nohp')
                var email = button.data('email')
                var norek = button.data('norek')
                var provinsi = button.data('provinsi')
                var kabupaten = button.data('kabupaten')
                var kecamatan = button.data('kecamatan')
                var kelurahan = button.data('kelurahan')
                var jalan = button.data('jalan')
                var kp = button.data('kp')
                var tinggi = button.data('tinggi')
                var berat = button.data('berat')
                var hobi = button.data('hobi')
                var pendidikan = button.data('pendidikan')
                var dk = button.data('dk')
                

                var modal = $(this)
                modal.find('.modal-body #lembaga').val(lembaga);
                modal.find('.modal-body #nip').val(nip);
                modal.find('.modal-body #nuptk').val(nuptk);
                modal.find('.modal-body #nama').val(nama);
                modal.find('.modal-body #jabatan').val(jabatan);
                modal.find('.modal-body #st').val(st);
                modal.find('.modal-body #sp').val(sp);
                modal.find('.modal-body #mengajar').val(mengajar);
                modal.find('.modal-body #mb').val(mb);
                modal.find('.modal-body #nsm').val(nsm);
                modal.find('.modal-body #tsm').val(tsm);
                modal.find('.modal-body #psm').val(psm);
                modal.find('.modal-body #ktp').val(ktp);
                modal.find('.modal-body #npwp').val(npwp);
                modal.find('.modal-body #tl').val(tl);
                modal.find('.modal-body #tgl').val(tgl);
                modal.find('.modal-body #jk').val(jk);
                modal.find('.modal-body #agama').val(agama);
                modal.find('.modal-body #gd').val(gd);
                modal.find('.modal-body #sn').val(sn);
                modal.find('.modal-body #kwgn').val(kwgn);
                modal.find('.modal-body #nohp').val(nohp);
                modal.find('.modal-body #email').val(email);
                modal.find('.modal-body #norek').val(norek);
                modal.find('.modal-body #provinsi').val(provinsi);
                modal.find('.modal-body #kabupaten').val(kabupaten);
                modal.find('.modal-body #kecamatan').val(kecamatan);
                modal.find('.modal-body #kelurahan').val(kelurahan);
                modal.find('.modal-body #jalan').val(jalan);
                modal.find('.modal-body #kp').val(kp);
                modal.find('.modal-body #tinggi').val(tinggi);
                modal.find('.modal-body #berat').val(berat);
                modal.find('.modal-body #hobi').val(hobi);
                modal.find('.modal-body #pendidikan').val(pendidikan);
                modal.find('.modal-body #dk').val(dk);
            })    </script>
</body>

</html>
