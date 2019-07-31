<!-- Modal Search Olah-->
<div style="display: none;" class="modal fade modal_olah" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearcholah">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h4>Pilih Kelas beserta Mapel</h4>
        <table id="simple-table" class="table  table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>Kode Kelas</th>
              <th>Kode Mapel</th>
              <th>Mata Pelajaran</th>
              <th>Paket Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_olah->result_array() as $data) { ?>
            <tr class="pilih_olah" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-id_olah="<?php echo $data['id_olah']; ?>"
               data-kode_kelas="<?php echo $data['kode_kelas']; ?>"
               data-kode_mapel="<?php echo $data['kode_mapel']; ?>"
            >
              <td><?php echo $data['kode_kelas']; ?></td>
              <td><?php echo $data['kode_mapel']; ?></td>
              <td><?php echo $data['nama_mapel']; ?></td>
              <td><?php echo $data['nama_paket_keahlian']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Search Siswa-->
<div style="display: none;" class="modal fade modal_siswa" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchsiswa">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h4>Pilih Siswa</h4>
        <table id="simple-table" class="table  table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_siswa->result_array() as $data) { ?>
            <tr class="pilih_siswa" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-nis="<?php echo $data['nis']; ?>"
               data-nama_siswa="<?php echo $data['nama_siswa']; ?>"
            >
              <td><?php echo $data['nis']; ?></td>
              <td><?php echo $data['nama_siswa']; ?></td>
              <td><?php echo $data['jk']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Search Kelas-->
<div style="display: none;" class="modal fade modal_kelas" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchkelas">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h4>Pilih Kelas</h4>
        <table id="simple-table" class="table table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>Kode Kelas</th>
              <th>Nama Kelas</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_kelas->result_array() as $data) { ?>
            <tr class="pilih_kelas" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-id_kelas="<?php echo $data['id_kelas']; ?>"
               data-kode_kelas="<?php echo $data['kode_kelas']; ?>"
               data-nama_kelas="<?php echo $data['nama_paket_keahlian']; ?>"
            >
              <td><?php echo $data['kode_kelas']; ?></td>
              <td><?php echo $data['nama_paket_keahlian']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search Mapel-->
<div style="display: none;" class="modal fade modal_mapel" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchmapel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h4>Pilih Mata Pelajaran</h4>
        <table id="simple-table" class="table  table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>Kode Pelajaran</th>
              <th>Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_mapel->result_array() as $data) { ?>
            <tr class="pilih_mapel" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
              data-id_mapel="<?php echo $data['id_mapel']; ?>"
              data-kode_mapel="<?php echo $data['kode_mapel']; ?>"
              data-nama_mapel="<?php echo $data['nama_mapel']; ?>"
            >
              <td><?php echo $data['kode_mapel']; ?></td>
              <td><?php echo $data['nama_mapel']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>