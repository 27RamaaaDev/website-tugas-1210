document.addEventListener("DOMContentLoaded", function () {
    var spinner = document.getElementById("spinner");
    var backToTop = document.querySelector(".back-to-top");
    var clock = document.getElementById("tanggalwaktu");
    var audio = document.getElementById("audioPlayer");
    var durationElem = document.getElementById("duration");
    var progressWrap = document.querySelector(".progress-bar-bg");

    if (spinner) {
        requestAnimationFrame(function () {
            spinner.classList.remove("show");
        });
    }

    updateClock(clock);
    if (clock) {
        setInterval(function () {
            updateClock(clock);
        }, 1000);
    }

    window.addEventListener("scroll", function () {
        var shouldShow = window.scrollY > 300;
        document.querySelectorAll(".sticky-top").forEach(function (nav) {
            nav.style.top = "0px";
        });

        if (backToTop) {
            backToTop.classList.toggle("is-visible", shouldShow);
        }
    }, { passive: true });

    if (backToTop) {
        backToTop.addEventListener("click", function (event) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    if (audio) {
        audio.addEventListener("loadedmetadata", function () {
            if (durationElem && Number.isFinite(audio.duration)) {
                durationElem.innerText = formatTime(audio.duration);
            }
        });

        audio.addEventListener("ended", resetMusicUI);
        audio.addEventListener("pause", stopMusicUI);
        audio.addEventListener("timeupdate", updateMusicUI);
        audio.addEventListener("error", resetMusicUI);
    }

    if (progressWrap && audio) {
        progressWrap.addEventListener("click", function (event) {
            if (!Number.isFinite(audio.duration)) {
                return;
            }

            var rect = progressWrap.getBoundingClientRect();
            var ratio = Math.min(Math.max((event.clientX - rect.left) / rect.width, 0), 1);
            audio.currentTime = ratio * audio.duration;
            updateMusicUI();
        });
    }
});

var musicInterval = null;

function updateClock(target) {
    if (!target) {
        return;
    }

    target.textContent = new Date().toLocaleString("id-ID", {
        dateStyle: "medium",
        timeStyle: "short"
    });
}

function formatTime(seconds) {
    if (!seconds || Number.isNaN(seconds)) {
        return "0:00";
    }

    var min = Math.floor(seconds / 60);
    var sec = Math.floor(seconds % 60).toString().padStart(2, "0");
    return min + ":" + sec;
}

function updateMusicUI() {
    var audio = document.getElementById("audioPlayer");
    var currentTimeElem = document.getElementById("currentTime");
    var progressBar = document.getElementById("progressBar");

    if (!audio) {
        return;
    }

    if (currentTimeElem) {
        currentTimeElem.innerText = formatTime(audio.currentTime);
    }

    if (progressBar && Number.isFinite(audio.duration) && audio.duration > 0) {
        progressBar.style.width = ((audio.currentTime / audio.duration) * 100) + "%";
    }
}

function startMusicUI() {
    stopMusicUI();
    musicInterval = setInterval(updateMusicUI, 500);
}

function stopMusicUI() {
    if (musicInterval) {
        clearInterval(musicInterval);
        musicInterval = null;
    }
}

function resetMusicUI() {
    stopMusicUI();

    var playIcon = document.getElementById("playIcon");
    var albumArt = document.querySelector(".player-album-art");

    if (playIcon) {
        playIcon.className = "fa fa-play";
    }

    if (albumArt) {
        albumArt.style.animationPlayState = "paused";
    }
}

function toggleMusic() {
    var audio = document.getElementById("audioPlayer");
    var playIcon = document.getElementById("playIcon");
    var albumArt = document.querySelector(".player-album-art");

    if (!audio) {
        return;
    }

    if (audio.paused) {
        var playPromise = audio.play();

        if (playPromise !== undefined) {
            playPromise.then(function () {
                if (playIcon) {
                    playIcon.className = "fa fa-pause";
                }

                if (albumArt) {
                    albumArt.style.animationPlayState = "running";
                }

                startMusicUI();
            }).catch(function () {
                resetMusicUI();
            });
        }
    } else {
        audio.pause();
        resetMusicUI();
    }
}
