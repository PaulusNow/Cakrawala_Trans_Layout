var input = document.querySelector(".input-box")
input.onclick = function() {
  this.classList.toggle("open")
  let list = this.nextElementSibling
  if (list.style.maxHeight) {
    list.style.maxHeight = null
  }
  else {
    list.style.maxHeight = list.scrollHeight + "px";
    list.style.boxShadow = "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
  }
}

var rad = document.querySelectorAll(".radio");
rad.forEach((item) => {
  item.addEventListener("change", () => {
    input.innerHTML = item.nextElementSibling.innerHTML;
    input.click();
  });
});

window.onload = function() {
  var semuaProsedur = document.getElementsByClassName('prosedur');
  for (var i = 0; i < semuaProsedur.length; i++) {
    semuaProsedur[i].style.display = 'none';
  }
};

// Fungsi untuk menampilkan teks prosedur berdasarkan pilihan radio
function tampilkanProsedur() {
  // Sembunyikan semua teks prosedur terlebih dahulu
  var semuaProsedur = document.getElementsByClassName('prosedur');
  for (var i = 0; i < semuaProsedur.length; i++) {
    semuaProsedur[i].style.display = 'none';
  }

  // Periksa nilai radio yang dipilih dan tampilkan teks prosedur yang sesuai
  var radioProsedur = document.querySelector('input[name="drop1"]:checked');
  var nilaiRadio = radioProsedur ? radioProsedur.id : null;

  if (nilaiRadio) {
    var teksProsedur = document.getElementById(nilaiRadio + "-prosedur");
    teksProsedur.style.display = 'block';
  }
}