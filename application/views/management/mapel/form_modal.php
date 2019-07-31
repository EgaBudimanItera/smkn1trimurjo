<!-- Modal Search Detail Mapel-->
<div style="display: none;" class="modal fade modal_detail_mapel" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchjurmapel">
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
              <th>Kode Mapel</th>
              <th>Mapel</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jurmapel->result_array() as $data) { ?>
            <tr class="pilih_mapel_keahlian" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-id_mapel_keahlian="<?php echo $data['id_mapel_keahlian']; ?>"
               data-nama_keahlian="<?php echo $data['nama_keahlian']; ?>"
               data-kode_mapel="<?php echo $data['kode_mapel']; ?>"
               data-nama_mapel="<?php echo $data['nama_mapel']; ?>">
              <td><?php echo $data['nama_keahlian']; ?></td>
              <td><?php echo $data['kode_mapel']; ?></td>
              <td><?php echo $data['nama_mapel']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>