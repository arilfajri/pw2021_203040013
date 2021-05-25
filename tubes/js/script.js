  const tombolCari = document.querySelector('.tombol-cari');
  const keyword = document.querySelector('.keyword');
  const container = document.querySelector('.containere');


  // event ketika kita menuliskan keyword

    keyword.addEventListener('keyup', function() {
    //jalankan ajax ada dua cara:

    // 1. xmlhttprequest
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        container.innerHTML = xhr.responseText;
      }
    };

    xhr.open('get', '../ajax/ajax_cari.php?keyword=' + keyword.value);
    xhr.send();

    // 2. fetch()
    // fetch('../ajax/ajax_cari.php?keyword=' + keyword.value)
    //   .then((response) => response.text())
    //   .then((response) => (container.innerHTML = response));

    });

    //preview imgae untuk tambah dan ubah
    function previewImage() {
      const gambar = document.querySelector('.gambar');
      const imgPreview = document.querySelector('.img-preview');

      const oFReader = new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);


      oFReader.onload = function (oFReader) {
        imgPreview.src = oFReader.target.result;
      };
    }