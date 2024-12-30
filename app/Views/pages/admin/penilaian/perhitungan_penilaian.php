<?= $this->extend('template/admin'); ?>

<?= $this->section('content-admin'); ?>
<div class="container">
  <div class="page-inner">

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Data Setiap Alternatif</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($alternatif as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Data Setiap Pembagi Alternatif</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pembagi as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>Pembagi</td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Data Matrix Ternomalisasi Terbobo R</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($terbobot_r as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Data Matrix Ternomalisasi Terbobo Y</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($terbobot_y as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Solusi Ideal Positif A+</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($ideal_positif as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>Pembagi</td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Solusi Ideal Negatif A-</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kinerja</th>
                    <th>Komunikasi</th>
                    <th>Kerjasama</th>
                    <th>Kreativitas</th>
                    <th>Disiplin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($ideal_negatif as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>Pembagi</td>
                      <td><?= $data['kinerja']; ?></td>
                      <td><?= $data['komunikasi']; ?></td>
                      <td><?= $data['kerjasama']; ?></td>
                      <td><?= $data['kreativitas']; ?></td>
                      <td><?= $data['disiplin']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Jarak Terbobot Ideal Positif D+</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($jarak_positif as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['nilai']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Jarak Terbobot Ideal Negatif D-</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($jarak_negatif as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['nilai']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Perangkingan Nilai Akhir</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table viewData">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Rank</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($penilaian as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['nilai']; ?></td>
                      <td><?= $data['rank']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card-action">
      <button type="button" class="btn btn-rounded btn-sm btn-black mx-2" id="kembali" data-pages="<?= $kembali; ?>"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
      <a class="btn btn-black btn-round ms-auto btn-sm mx-2" href="admin-perhitungan-print" rel="noopener" target="_blank"><i class="fas fa-print"></i> Print Perhitungan</a>
    </div>

  </div>
</div>
<?= $this->endSection(); ?>