<?= $this->extend('template/user'); ?>

<?= $this->section('content-user'); ?>
<div class="container">
  <div class="page-inner">
    <?php if (session()->getFlashdata('state')) { ?>
      <script>
        function myFunction() {
          var placementFrom = 'top';
          var placementAlign = 'right';
          var state = '<?= session()->getFlashdata('state'); ?>';
          var style = 'withicon';
          var content = {};

          content.message = '<?= session()->getFlashdata('message'); ?>';
          content.title = '<?= session()->getFlashdata('title'); ?>';
          content.icon = '<?= session()->getFlashdata('icon'); ?>';
          content.url = '';
          content.target = "_blank";

          $.notify(content, {
            type: state,
            placement: {
              from: placementFrom,
              align: placementAlign,
            },
            time: 1000,
            delay: 5,
            animate: {
              enter: 'animated fadeInDown',
              exit: 'animated fadeOutUp'
            }
          });
        }

        window.onload = myFunction;
      </script>
    <?php }; ?>
    <h3 class="fw-bold mb-4">About</h3>
    <div class="row">
      <div class="col-md-12">
        <ul class="timeline">
          <li>
            <div class="timeline-badge black">
              <i class="fas fa-home"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Dashboard</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman dashboard menyajikan informasi penting terkait data karyawan, data penilaian,
                  data laporan, data akun. Halaman ini juga menjelaskan metode TOPSIS, yang digunakan
                  untuk menentukan karyawan terbaik, membantu keputusan yang lebih objektif.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge black">
              <i class="fas fa-user-tie"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Karyawan</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman karyawan menyajikan informasi data seperti nama, lahir, telepon, emai, dan
                  alamat. Detail tampilan yang terstruktur dan mudah diakses, halaman karyawan memudahkan
                  dalam memantau dan mengelola sumber daya manusia secara efektif.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge black">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Kriteria</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman kriteria menyajikan informasi penting mengenai berbagai kriteria yang digunakan
                  dalam penilaian karyawan terbaik. Mencakup nama kriteria, keterangan relevansinya, serta
                  bobot tingkat kepentingan relatif dalam proses evaluasi.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge black">
              <i class="fas fa-sync"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Alternatif</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman alternatif menyajikan informasi mengenai berbagai pilihan atau alternatif yang
                  dapat dipertimbangkan dalam proses penilaian kinerja karyawan. Di dalamnya, detail
                  tentang setiap alternatif, serta hasil evaluasi yang telah dilakukan.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge black">
              <i class="fas fa-balance-scale"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Penilaian</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman penilaian terdiri dari dua bagian utama: halaman print penilaian dan halaman
                  perhitungan. Halaman print penilaian menyediakan format yang siap cetak untuk laporan
                  hasil penilaian kinerja karyawan, sehingga memudahkan secara formal.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge black">
              <i class="fas fa-book"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Laporan</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman laporan menyajikan dokumen PDF yang berisi hasil penilaian karyawan secara
                  komprehensif. Dokumen ini mencakup skor penilaian karyawan, serta analisis yang mendalam
                  tentang area kekuatan dan bidang yang perlu ditingkatkan.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge black">
              <i class="fas fa-id-badge"></i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Akun</h4>
              </div>
              <div class="timeline-body" style="text-align: justify;">
                <p>
                  Halaman akun menyajikan informasi lengkap mengenai data pengguna, termasuk nama,
                  alamat email, dan informasi profil lainnya. Di halaman ini, pengguna dapat memperbarui
                  pengaturan akun, mengubah kata sandi, dan mengelola preferensi data akun.
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>