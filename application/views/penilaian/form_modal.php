<?php $romkel_perwali = $this->db->query("SELECT romkel.*,kelas.*,keahlian.*,wali_kelas.*,siswa.* FROM
(SELECT * FROM tbl_romkel)romkel,
(SELECT * FROM tbl_kelas)kelas,
(SELECT * FROM tbl_keahlian)keahlian,
(SELECT * FROM tbl_guru)wali_kelas,
(SELECT * FROM tbl_siswa)siswa
WHERE romkel.id_kelas=kelas.id_kelas AND romkel.id_siswa=siswa.id_siswa AND kelas.id_keahlian=keahlian.id_keahlian AND
kelas.wali_kelas=wali_kelas.nip AND kelas.wali_kelas='".$this->session->userdata('username')."'"); ?>
<!-- Modal Search Romkel-->
<div style="display: none;" class="modal fade modal_romkel" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchromkel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilih Guru</h4>
      </div>
      <div class="modal-body">
        <table id="sample-table-2" width="100%" class="table  table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>Keahlian</th>
              <th>Kelas</th>
              <th>Tingkat</th>
              <th>Siswa</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($romkel_perwali->result_array() as $data) { ?>
            <tr class="pilih_romkel" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-id_romkel="<?php echo $data['id_romkel']; ?>"
               data-id_keahlian="<?php echo $data['id_keahlian']; ?>"
               data-nama_keahlian="<?php echo $data['nama_keahlian']; ?>"
               data-kode_kelas="<?php echo $data['kode_kelas']; ?>"
               data-tingkat="<?php echo $data['tingkat']; ?>"
               data-id_siswa="<?php echo $data['id_siswa']; ?>"
               data-nama_siswa="<?php echo $data['nama_siswa']; ?>">
              <td><?php echo $data['nama_keahlian']; ?></td>
              <td><?php echo $data['kode_kelas']; ?></td>
              <td><?php echo $data['tingkat']; ?></td>
              <td><?php echo $data['nama_siswa']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>