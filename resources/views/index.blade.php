<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inviteen | Sifa & Tony</title>
    <link rel="icon" href="{{URL::asset('assets/themes/rusteen/img/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/rusteen/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/rusteen/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/rusteen/css/color.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
</head>
<body uk-scrollspy="target: cls: uk-animation-fade; delay: 150">
    <section class="uk-section uk-section-secondary banner" id="home">
        <div class="uk-container">
            <hr class="uk-divider-vertical" style="border: 0px; height: 50px;">
            <div style="background:rgba(255, 255,255, 0.5) ; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); opacity:1;">
                <div class="banner-trans">
                    <div>
                        <hr class="uk-divider-vertical" style="border: 0px; height: 20px;">
                        <p class="uk-text-center wedding-text">THE WEDDING OF</p>
                    </div>
                    <div style="margin-top:70px;" >
                        <h2 class="couple-text"  style=" color:#333; " > Sifa </h2>
                        <h2 class="couple-text"  style=" color:#333; "> & </h2>
                        <h2 class="couple-text"  style=" color:#333; "> Tony </h2>
                        <p class="uk-text-center" style="font-size:14px; color:#333; margin-top:35px">
                        <span class="padding-date">JAN</span>
                        <span class="margin-date">25</span>
                        <span class="padding-date">2021</span>
                        </p>
                        <p class="uk-text-center" style="font-size:14px; color:#333;">
                        Jl. Selokambang RT 07 RW 04, Kelurahan Purwosono
                        <br>Sumbersuko
                        </p>
                        <hr class="uk-divider-vertical divider-banner-bot" >
                    </div>
                </div>
            </div>
            
            <hr class="uk-divider-vertical" style="border: 0px;">
        </div>
    </section> 
    <section id="mempelai" class="uk-section uk-section-default bg-couple">
        <div class="uk-container uk-container-small uk-margin-top">
            <img class="uk-align-center" src="{{ URL::asset('assets/themes/rusteen/img/bismillah.png') }}" style=" opacity: 0.7; width: 212px;">
            <P class="uk-text-center uk-margin-small-bottom uk-margin-small-top">Assalamualaikum warahmatullahi wabarakatuh </p>
            <P class="uk-text-justify uk-margin-large-bottom uk-margin-small-top">Dengan memohon rahmat dan ridho-Mu Ya Allah, Kami bermaksud mengadakan acara pernikahan putra dan putri kami.</p>
            <div>
                <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-text-center" uk-grid>
                    <div class="thumb-fitur">
                    <span class="thumb-icon"><img src="{{ URL::asset('assets/themes/rusteen/img/wanita.png')}}"></span>
                        <h3 class="uk-margin-remove-bottom uk-margin-top " style="font-size:28px;">Sifa Kasifatul M</h3>
                        <p class="uk-text-small" style="margin-top:5px;">Putri Ketiga dari Bapak Musikram dan Ibu Sutami</p>
                    </div>
                    <div class="thumb-fitur">
                        <span class="thumb-icon"><img src="{{ URL::asset('assets/themes/rusteen/img/pria.png')}}"></span>
                        <h3 class="uk-margin-remove-bottom uk-margin-top " style="font-size:28px;">Toni Saputra</h3>
                        <p class="uk-text-small" style="margin-top:5px;">Putra Kedua dari Bapak Sukatam dan Ibu Sulasmiati</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="acara" class="uk-section uk-section-secondary acara">
        <div class="uk-container uk-container-small">
            <h2 class="uk-text-center uk-margin-bottom midnight " style="padding-top:20px;color:#333;">Save the Date</h2>
            <div class="uk-width-1-1 uk-text-center" style="color:#fff">
                <div class="uk-grid-small uk-child-width-expand" uk-grid>
                    <div>
                        <p class="uk-card-title 2" style="margin:8px 0 8px 0;color:#333; font-weight:500;" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Resepsi</p>
                        <p style="margin:0px; font-weight:500;color:#333;">25 Januari 2021</p>
                        <p style="margin:4px 0px 16px 0px; font-size:13px;color:#333;">(Pukul 11.00 - 16.00 WIB)</p>
                    </div>
                </div>
                <div class="uk-grid-small uk-flex-center uk-child-width-auto uk-margin-top" uk-grid uk-countdown="date: 2020-09-11T08:00:00+07:00" style="font-weight:500">
                    <div>
                        <div class="uk-countdown-number" id="days" style="color:#333;"></div>
                        <div class="uk-countdown-label uk-text-center " style="color:#333;">Hari</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number" id="hours" style="color:#333;"></div>
                        <div class="uk-countdown-label uk-text-center " style="color:#333;">Jam</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number" id="minutes" style="color:#333;"></div>
                        <div class="uk-countdown-label uk-text-center " style="color:#333;">Menit</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number" id="seconds" style="color:#333;"></div>
                        <div class="uk-countdown-label uk-text-center " style="color:#333;">Detik</div>
                    </div>
                </div>
                <hr class="style-2w">
                <p style="font-size:14px; margin: 0px 0 16px 0;color:#333;">
                    Ungkapan terima kasih yang tulus dari kami apabila Bapak/Ibu/Teman-teman berkenan hadir dan memberikan do’a restu. 
                </p>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe  class="iframe_gmap_canvas" src="https://maps.google.com/maps?q=hotel%20wyndham%20surabaya&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.611783527385!2d113.15258911478043!3d-8.140944394139892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMDgnMjcuNCJTIDExM8KwMDknMTcuMiJF!5e0!3m2!1sen!2sid!4v1608557838600!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <p style="font-size:14px; text-align:center; margin: 8px 0 0px 0; color:#333;">
                    Kediaman mempelai wanita <br>(Jl. Selokambang RT 07 RW 04, Kelurahan Purwosono - Sumbersuko) 
                </p>
                <a href="https://g.page/wyndhamsurabaya?share" class="uk-button uk-button-default uk-button-small btn-white" style="margin-top:16px; padding: 4px 16px; border-radius: 20px;">Petunjuk Arah
                <span uk-icon="icon: arrow-right"></span></a>
            </div>
        </div>
    </section> 
    <section id="gallery" class="uk-section uk-section-secondary" style="padding-bottom: 40px;">
        <div class="uk-container uk-container-small">
            <h2 class="uk-text-center uk-margin-bottom midnight" style="color:#333;">
                Gallery
            </h2>
            <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid uk-lightbox="animation: slide">
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-1.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-1.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-2.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-2.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline" href="{{URL::asset('assets/themes/rusteen/img/gallery-3.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-3.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-4.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-4.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-5.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-5.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-6.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-6.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-7.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-7.jpg')}}">
                    </a>
                </div>
                <div>
                    <a class="uk-inline " href="{{URL::asset('assets/themes/rusteen/img/gallery-8.jpg')}}">
                        <img class="gallery" src="{{URL::asset('assets/themes/rusteen/img/gallery-8.jpg')}}">
                    </a>
                </div>
            </div>
        </div>
    </section> 
    <section id="bukutamu" class="uk-section uk-section-default">
        <div class="uk-container uk-container-small">
            @include('components.rsvp-modal')
            @if ($message = Session::get('success'))
                <div class="uk-alert-success uk-text-center" uk-alert style="margin-top: 30px;" id="successMessage">
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <br>
                @if(!empty($visitor))
                    @foreach($visitor as $key => $value)
                    <article class="uk-comment uk-comment-primary"s>
                        <header class="uk-comment-header">
                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="profile-comment" >
                                       <p class="profile-text"> {!! Str::of($value['name'])->limit(1,'') !!} </p>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove">{{ $value['name'] }}</h4>
                                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                        @if($value['status'] == 'hadir')
                                        <li> <span style="text-transform: none; padding:3px; border-radius:5px; background :#ccf6c8; color: #333;"> Berkenan hadir </span> </li>
                                       
                                        @else 
                                        <li> <span style="text-transform: none; padding:3px; border-radius:5px; background :#f9c0c0; color: #333;">Maaf tidak bisa hadir </span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <div class="uk-comment-body">
                            <p> {!! $value['description'] !!}</p>
                        </div>
                    </article>
                    @endforeach
                @endif

                
                    
        </div>
        {{-- {{ $visitor->links() }} --}}
        
    </section> 
    <footer class=" uk-section-default">
        <div class="uk-container uk-text-center">
        <p class="uk-text-small uk-text-center" style="margin-top:4px;margin-bottom:4px;">Invitation by <span><img src="{{ URL::asset('assets/themes/rusteen/img/logo.png')}}" style="width:30px; opacity:0.7;"><span><a href="https://inviteen.id/"> inviteen.id</a></p>
            <p class="uk-text-small uk-text-center" style="margin-top:4px;margin-bottom:50px;">@inviteen.id
            <a href="https://www.instagram.com/inviteen.id" target="_blank" data-uk-tooltip><span data-uk-icon="instagram"></span></a></p>
        </div>
    </footer>

    <div id="navbar" class="uk-section uk-section-xsmall uk-section-muted uk-position-bottom uk-position-fixed bg-menu" style="z-index:121; bottom:0;">
        <div class="uk-container uk-container-small">
            <div class="uk-text-small menu">
            <nav class="" uk-navbar>
                <div class="uk-navbar-center">
                    <ul  class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true">
                        <li class="icon-menu"><a href="#home" uk-scroll><img src="{{URL::asset('assets/themes/rusteen/icon/home.svg')}}"></a></li>
                        <li class="icon-menu"><a href="#mempelai" uk-scroll><img src="{{URL::asset('assets/themes/rusteen/icon/couple.svg')}}"></a></li>
                        <li class="icon-menu"><a href="#acara" uk-scroll><img src="{{URL::asset('assets/themes/rusteen/icon/calendar.svg')}}"></a></li>
                        <li class="icon-menu"><a href="#gallery" uk-scroll><img src="{{URL::asset('assets/themes/rusteen/icon/gallery.svg')}}"></a></li>
                        <li class="icon-menu"><a href="#bukutamu" uk-scroll><img src="{{URL::asset('assets/themes/rusteen/icon/rsvp.svg')}}"></a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
        </div>
    </div>
<div class="music-box">
    <button class="music-box-toggle-btn">
        <audio id='song' autoplay loop>
            <source src="{{ URL::asset('assets/themes/rusteen/sound/main.mp3')}}">
        </audio>
        <button class="music" id="unmute-sound">
            <span class="uk-icon uk-icon-image" style="background-image: url(../assets/themes/rusteen/img/unmute2.png);"></span>
        </button>
        <button class="music" id="mute-sound">
            <span class="uk-icon uk-icon-image" style="background-image: url(../assets/themes/rusteen/img/mute2.png);"></span>
        </button>
    </button>
</div>
<div id="modal" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center " style="background: transparent; background-image: url('../assets/themes/rusteen/img/invitation-card.png'); padding:20px 15px 60px 15px; background-position: center;
        background-repeat: unset;
        background-size: cover; border-radius:16px;  height: 400px;
        width: 342px;
        ">
        <p class="uk-text-medium uk-margin-remove-bottom txt-simple" style="margin-top:70px;">HELLO</p>
        
        <p class="uk-text-medium txt-simple" style="margin-top: 20px;">YOU'RE INVITED TO OUR WEDDING</p>
        <h2 class="uk-text-center uk-margin-remove" style="line-height:1; margin-bottom:9px !important; font-size:28px;">
        Sifa & Tony</h2>
        <p class="uk-text-center">
        <button id="play-sound" class="uk-button uk-button-primary uk-modal-close" type="button" style="
            border-radius: .5rem;
            background-color: #fff;
            color: #333;
            margin-top: 106px;
            line-height: 34px;
            padding-top: 4px;
            font-weight: 400;">OPEN INVITATION</button>
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js" type="text/javascript"></script>
<script type="text/javascript">
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function () {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.bottom = "0";
			} else {
				document.getElementById("navbar").style.bottom = "-78px";
			}
			prevScrollpos = currentScrollPos;
		}

		$(function () {
			var modal = UIkit.modal("#modal");
			modal.show();
		});

		document.getElementById('play-sound').addEventListener('click', function (event) {
        	document.getElementById('song').play();
        });


$("#status").change(function() {
  if ($(this).val() == "hadir") {
    $('#person').show();
  } else {
    $('#person').hide();
  }
});
$("#seeAnotherField").trigger("change");


</script>

<script>
    document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
</script>

@if(Session::get('success'))

    <script>

    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
    }, 10000);

    $('html, body').animate({
    scrollTop: $("#list-tamu").offset().top
    }, 3000);

    </script>

@endif
<script type="text/javascript" src="{{ URL::asset('assets/themes/rusteen/js/main.js') }}"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="1dafe858be15d8421fab611c-|49" defer=""></script></body>
</html>