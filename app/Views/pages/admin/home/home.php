<?= $this->extend('template/admin'); ?>

<?= $this->section('content-admin'); ?>
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
    <h3 class="fw-bold mb-4">Dashboard</h3>
    <div class="row">
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card card-stats card-black card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-users fa-lg"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Karyawan</p>
                  <h4 class="card-title"><?= count($karyawan); ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card card-stats card-black card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-balance-scale fa-lg"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Penilaian</p>
                  <h4 class="card-title"><?= count($perangkingan); ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card card-stats card-black card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-book fa-lg"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Laporan</p>
                  <h4 class="card-title"><?= count($laporan); ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card card-stats card-black card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-id-badge fa-lg"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Akun</p>
                  <h4 class="card-title"><?= count($akun); ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body" style="text-align: justify">
            <h1 class="text-center">METODE TOPSIS</h1>
            <br>
            <p>Metode TOPSIS (Technique for Order Preference by Similarity to Ideal Solution) merupakan salah satu pendekatan yang efektif dalam proses pemilihan karyawan terbaik, di mana metode ini bekerja dengan cara membandingkan alternatif-alternatif kandidat berdasarkan sejumlah kriteria yang telah ditentukan, seperti kinerja, komunikasi, kerjasama, kreativitas, dan disiplin. dengan demikian, TOPSIS memungkinkan manajer untuk menentukan kandidat yang memiliki kesamaan paling dekat dengan kriteria ideal, sekaligus memudahkan dalam pengambilan keputusan yang objektif dan sistematis, serta meningkatkan kemungkinan pemilihan karyawan yang akan berkontribusi secara signifikan terhadap kemajuan organisasi.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>