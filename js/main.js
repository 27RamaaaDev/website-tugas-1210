(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 25,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

// Script Tambahan: Menampilkan Tanggal dan Waktu (Update Realtime)
function updateClock() {
    var element = document.getElementById("tanggalwaktu");
    if(element) {
        var dt = new Date();
        // Opsi format bahasa Indonesia
        var options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric', 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit' 
        };
        element.innerHTML = dt.toLocaleDateString('id-ID', options).replace('.', ':').replace('.', ':');
    }
}

// --- MUSIC PLAYER LOGIC (ROBUST VERSION) ---
var musicInterval = null; // Variable untuk menyimpan interval update

document.addEventListener('DOMContentLoaded', function() {
    // 1. Jalankan Jam Digital
    updateClock();
    setInterval(updateClock, 1000);
    
    // 2. Setup Audio Listeners (Hanya untuk durasi & ended)
    var audio = document.getElementById("audioPlayer");
    var durationElem = document.getElementById("duration");

    if(audio) {
        // Saat metadata (durasi) termuat
        audio.addEventListener('loadedmetadata', function() {
            if(durationElem && audio.duration && isFinite(audio.duration)) {
                durationElem.innerText = formatTime(audio.duration);
            }
        });

        // Saat lagu selesai
        audio.addEventListener('ended', function() {
            stopMusicUI(); // Reset UI
            var playIcon = document.getElementById("playIcon");
            if(playIcon) {
                playIcon.className = "fa fa-play";
                playIcon.classList.remove("fa-pause");
            }
        });
        
        // Listener tambahan jika interval gagal (backup)
        audio.addEventListener('timeupdate', updateMusicUI);
    }
});

// Format Waktu (Detik ke Menit:Detik)
function formatTime(seconds) {
    if(!seconds || isNaN(seconds)) return "0:00";
    var min = Math.floor(seconds / 60);
    var sec = Math.floor(seconds % 60);
    if (sec < 10) sec = "0" + sec;
    return min + ":" + sec;
}

// Fungsi Update UI (Dipanggil berulang-ulang saat play)
function updateMusicUI() {
    var audio = document.getElementById("audioPlayer");
    var currentTimeElem = document.getElementById("currentTime");
    var progressBar = document.getElementById("progressBar");
    
    if(!audio) return;

    // 1. Update Waktu Berjalan (Force Update)
    if(currentTimeElem) {
        currentTimeElem.innerText = formatTime(audio.currentTime);
    }

    // 2. Update Progress Bar
    if(progressBar && audio.duration && isFinite(audio.duration)) {
        var progress = (audio.currentTime / audio.duration) * 100;
        progressBar.style.width = progress + "%";
    }
}

// Mulai Interval Update
function startMusicUI() {
    // Hentikan interval lama jika ada
    if(musicInterval) clearInterval(musicInterval);
    // Jalankan updateMusicUI setiap 500ms (setengah detik)
    musicInterval = setInterval(updateMusicUI, 500);
}

// Hentikan Interval Update
function stopMusicUI() {
    if(musicInterval) clearInterval(musicInterval);
}

// Fungsi Toggle Play/Pause (Dipanggil dari HTML)
function toggleMusic() {
    var audio = document.getElementById("audioPlayer");
    var playIcon = document.getElementById("playIcon");
    var albumArt = document.querySelector(".player-album-art");
    
    if(!audio) {
        alert("Audio element tidak ditemukan.");
        return;
    }

    if (audio.paused) {
        // --- PLAY ---
        var playPromise = audio.play();
        
        if (playPromise !== undefined) {
            playPromise.then(function() {
                // Play Sukses
                if(playIcon) {
                    playIcon.className = "fa fa-pause"; // Ubah ikon ke Pause
                    playIcon.classList.remove("fa-play");
                }
                if(albumArt) albumArt.style.animationPlayState = "running";
                
                // MULAI UPDATE TIMER
                startMusicUI();
                
            }).catch(function(error) {
                console.error("Play Failed:", error);
                alert("Gagal memutar lagu: " + error.message);
            });
        }
    } else {
        // --- PAUSE ---
        audio.pause();
        
        if(playIcon) {
            playIcon.className = "fa fa-play"; // Ubah ikon ke Play
            playIcon.classList.remove("fa-pause");
        }
        if(albumArt) albumArt.style.animationPlayState = "paused";
        
        // HENTIKAN UPDATE TIMER
        stopMusicUI();
    }
}