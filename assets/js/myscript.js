const xdata = $('.flash').val();
console.log(xdata);

function berhasil(data, jenis) {
    swal("Selamat!", "Data " + data + " berhasil di" + jenis, "success");
}

function gagal(data, jenis) {
    swal("Informasi!", "Data " + data + " gagal di" + jenis, "error");
}