let stream;
 
function modalInput() {
    document.getElementById("modalInput").classList.toggle("hidden");
    document.getElementById("modalList").classList.add("hidden");

    navigator.mediaDevices
    .getUserMedia({
        video: true,
    })
    .then(function (videoStream) {
        var video = document.getElementById("video");
        stream = videoStream;
        video.srcObject = stream;
        video.play();
    })
    .catch(function (err) {
        console.log("Gagal mengakses kamera: " + err);
    });
}

 // Fungsi untuk mengambil foto
 function takePicture() {
    var video = document.getElementById('video');
    var canvas = document.getElementById('canvas');
    var photo = document.getElementById('photo');
    var context = canvas.getContext('2d');

    context.drawImage(video, 0, 0, 320, 240);
    photo.src = canvas.toDataURL('image/png');
    photo.style.display = 'block';
    video.style.display = 'none';

    if (stream) {
        stream.getTracks().forEach(track => track.stop());
    }
}

// Ambil elemen tombol "Ambil Foto"
var captureBtn = document.getElementById('captureBtn');

// Ketika tombol "Ambil Foto" ditekan
captureBtn.onclick = function() {
    takePicture();
    document.getElementById("submitBtn").classList.toggle("hidden");
    document.getElementById("captureBtn").classList.toggle("hidden");
};

var submitBtn = document.getElementById('submitBtn');

// Ketika tombol "Selesai" ditekan
submitBtn.onclick = function() {
    // Ambil foto dari canvas
    var canvas = document.getElementById('canvas');
    var dataURL = canvas.toDataURL('image/png');

    // Masukkan data foto ke dalam input tersembunyi
    document.getElementById('photoInput').value = dataURL;

    // Submit form
    document.getElementById('form_list').submit();
};