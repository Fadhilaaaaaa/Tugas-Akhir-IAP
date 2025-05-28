<!-- Jumbotron -->
<div class="jumbotron bg-white text-dark text-center" id="home">
  <div class="container py-5">
    <img src="<?= base_url(); ?>assets/img/profile3.jpg" class="rounded-circle img-thumbnail mb-3" width="200" alt="Foto Profil">
    <h1 class="display-4">Ramelsi Fadhila</h1>
    <p class="lead">Mahasiswa Sistem Informasi | Web Enthusiast | [Hobi Kamu]</p>
  </div>
</div>

<!-- Tentang Saya -->
<section id="about" class="bg-light py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2>Tentang Saya</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="<?= base_url(); ?>assets/img/thumbs/a.jpg" class="card-img-top" alt="foto masa kecil">
          <div class="card-body">
            <p class="card-text">Saya lahir di Bukittinggi, pada tanggal 28 Desember 2003 .</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="<?= base_url(); ?>assets/img/thumbs/b.jpg" class="card-img-top" alt="foto sekolah">
          <div class="card-body">
            <p class="card-text">Menempuh pendidikan dasar dan menengah di sekolah-sekolah terbaik di daerah saya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="<?= base_url(); ?>assets/img/thumbs/c.jpg" class="card-img-top" alt="kuliah">
          <div class="card-body">
            <p class="card-text">Saat ini saya kuliah di UIN Imam Bonjol Padang, jurusan Sistem Informasi, dan aktif belajar pemrograman serta desain UI/UX.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Kontak -->
<section id="contact" class="bg-white py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2>Kontak</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-primary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title">Hubungi Saya</h5>
            <p class="card-text">Silakan kirim pesan melalui form di samping, atau kontak langsung melalui alamat dan nomor telepon berikut.</p>
          </div>
        </div>

        <ul class="list-group mb-4">
          <li class="list-group-item"><h3>Alamat</h3></li>
          <li class="list-group-item">Jl. Kenangan No.123, Kota Bukittinggi</li>
          <li class="list-group-item">Sumatera Barat, Indonesia</li>
          <li class="list-group-item">Telp: +62 812 3456 7890</li>
          <li class="list-group-item">Email: ramelsi@email.com</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
          </div>
          <div class="form-group">
            <label for="telepon">Nomor Telepon</label>
            <input type="tel" class="form-control" id="telepon" placeholder="Masukkan nomor telepon">
          </div>
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan Anda di sini"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
