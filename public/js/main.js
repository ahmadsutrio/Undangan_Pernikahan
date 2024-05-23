// ambil id
function welcome(){
    let btnWelcome = document.getElementById('welcome');
    let tampilan = document.getElementById('tampilan');
    tampilan.classList.toggle('hidden')
btnWelcome.classList.toggle('hidden')
}


function getCounter() {
  var countDownDate = new Date("June 16, 2024 09:00:00").getTime();

  var x = setInterval(function () {
    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var textDays = document.getElementById("days");
    var textHours = document.getElementById("hours");
    var textMinutes = document.getElementById("minutes");
    var textSeconds = document.getElementById("seconds");

    textDays.innerHTML = days < 10 ? "0" + days : days;
    textHours.innerHTML = hours < 10 ? "0" + hours : hours;
    textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
    textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;

    if (distance < 0) {
      clearInterval(x);
    }
  }, 1000);
}


function playPause() {
  let btnPlay = document.getElementById("music-on");
  let playBtn = document.getElementById("play-music");
  let pauseBtn = document.getElementById("pause-music");
  // let playBtn = iconBtn.src="/public/assets/pause.svg";  
  if(playBtn.src="/public/assets/play.svg"){
    playBtn.classList.toggle("hidden")
    playBtn.classList.toggle("show")
    pauseBtn.classList.toggle("show")
    pauseBtn.classList.toggle("hidden")
  }else{
    playBtn.classList.toggle("show")
    playBtn.classList.toggle("hidden")
    pauseBtn.classList.toggle("hidden")
    pauseBtn.classList.toggle("show")
    btnPlay.play();

  }

  if (btnPlay.paused) {
    btnPlay.play();
  } else {
    btnPlay.pause();
  }
}


async function getMessage() {
    try {
        const response = await fetch("../../api.php");
        const data = await response.json();

        // Bersihkan konten chatContainer sebelum menampilkan data baru
        document.getElementById('chatContainer').innerHTML = '';

        // Loop untuk setiap data chat dan tambahkan ke dalam chatContainer
        data.forEach(chat => {
            const chatElement = document.createElement('div');
            chatElement.className = 'bg-white border rounded-lg p-3 flex flex-col text-paragraph flex-wrap';
            chatElement.innerHTML = `
          
            <h5 class="text-[1rem] font-semibold mb-1">${chat.nama}</h5>
            <p class="text-sm text-paragraph/80">Status Kehadiran : ${chat.status_kehadiran === 'Y' ? "hadir" : "tidak Hadir"}</p>
            <p class="text-sm text-paragraph/80">Pesan : ${chat.pesan}</p>
            <p class="text-sm text-paragraph/80 mt-2 font-medium">Pesan : ${chat.waktu}</p>
             
            `;

            document.getElementById('chatContainer').appendChild(chatElement);

            // console.log(chatElement)
        });
        // Data ditampilkan di konsol
    } catch (error) {
        // console.error('Error:', error);
    }
}

function lihatLokasi(){
  let showLokasi = document.getElementById('alamat');
  showLokasi.classList.toggle('hidden')
  console.log('success');
}

function lihatRekening(){
  let rekening = document.getElementById('rekening');
  rekening.classList.toggle('hidden')
}

function submitData() {
  const form = document.getElementById('myForm'); 
  const nama = document.getElementById('nama');
  const status_kehadiran = document.getElementById('status-kehadiran');
  const pesan = document.getElementById('pesan');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("System.php", {
      method: "POST",
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      
      return response.text(); // Mengambil teks dari response
    })
    .then(data => {
      nama.value="";
      status_kehadiran.value="";
      pesan.value="";
      console.log(data); // Output response dari server
    })
    .catch(error => {
      console.error("Fetch Error:", error); // Handling error jika ada
    });
  });
}

// Panggil fungsi getMessage setiap 3 detik menggunakan setInterval
setInterval(() => {
    getMessage(); // Panggil fungsi async di dalam wrapper
}, 3000); // 3000 milidetik = 3 detik

// Memanggil fungsi submitData setelah DOM selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
  submitData();
});



getCounter();