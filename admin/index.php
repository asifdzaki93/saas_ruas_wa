<p>Klik tombol dibawah untuk tahu posisi latitude dan longitude.</p>

<button onclick="dapatLokasi()">Klik Disini</button>
ini halaman untuk admin

namamu 
loikasi
<p id="klik_lokasi"></p>

<script>
var x = document.getElementById("klik_lokasi");

function dapatLokasi() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(tampilPosisi);
  } else { 
    x.innerHTML = "Browser kamu terlalu tua, upgrade ke versi terbaru.";
  }
}

function tampilPosisi(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

