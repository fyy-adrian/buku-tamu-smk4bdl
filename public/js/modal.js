function modalList() {
    document.getElementById("modalInput").classList.add("hidden");
    document.getElementById("modalList").classList.toggle("hidden");
}

function modalProfile() {
    document.getElementById("modalProfile").classList.toggle("hidden");
    document.getElementById("modalProfile").classList.toggle("flex");
}

function modalCam() {
    document.getElementById("modalInput").classList.toggle("hidden");
    document.getElementById("modalCam").classList.toggle("hidden");

    navigator.mediaDevices
        .getUserMedia({
            video: true,
        })
        .then(function (stream) {
            var video = document.getElementById("video");
            video.srcObject = stream;
            video.play();
        })
        .catch(function (err) {
            console.log("Gagal mengakses kamera: " + err);
        });
}

document.getElementById('closeBtn').addEventListener('click', function() {
    Swal.fire({
        icon: 'warning',
        title: 'Anda yakin?',
        text: 'Semua data yang sudah diinput akan hilang!',
        showCancelButton: true,
        confirmButtonText: 'OK',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            location.reload();
        }
    });
});
