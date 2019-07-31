<!-- Modal-->
<div style="display: none;" class="modal fade modal_akun" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchakun">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Guru Dan Siswa yang belum mempunyai akun</h4>
      </div>
      <div class="modal-body">
        <div class="tabbable">
          <ul class="nav nav-tabs" id="myTab">
            <li class="active">
              <a data-toggle="tab" href="#home">
                <i class="green ace-icon fa fa-home bigger-120"></i>
                Guru
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#messages">
                Siswa
                <span class="badge badge-danger"></span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h4>Pilih Guru</h4>
              <table id="simple-table" class="table  table-bordered table-hover">
                <thead id="tblHead">
                  <tr>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $guru = $this->db->query("SELECT * FROM tbl_guru WHERE nip NOT IN(SELECT username FROM tbl_login)");
                  foreach ($guru->result_array() as $data) { ?>
                  <tr class="pilih_akun_guru" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
                     data-kode_guru="<?php echo $data['nip']; ?>"
                     data-nama_guru="<?php echo $data['nama_guru']; ?>">
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama_guru']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

            <div id="messages" class="tab-pane fade">
              <h4>Pilih Siswa</h4>
              <table id="simple-table" class="table  table-bordered table-hover">
                <thead id="tblHead">
                  <tr>
                    <th>NIP</th>
                    <th>Nama Siswa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $siswa = $this->db->query("SELECT * FROM tbl_siswa WHERE nis NOT IN(SELECT username FROM tbl_login)");
                  foreach ($siswa->result_array() as $data) { ?>
                  <tr class="pilih_akun_siswa" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
                     data-kode_siswa="<?php echo $data['nis']; ?>"
                     data-nama_siswa="<?php echo $data['nama_siswa']; ?>">
                    <td><?php echo $data['nis']; ?></td>
                    <td><?php echo $data['nama_siswa']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>