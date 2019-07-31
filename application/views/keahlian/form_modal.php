<!-- Modal Search Guru-->
<div style="display: none;" class="modal fade modal_guru" tabindex="-1" role="dialog" aria-hidden="true" id="modalsearchguru">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilih Guru</h4>
      </div>
      <div class="modal-body">
        <table id="simple-table" class="table  table-bordered table-hover">
          <thead id="tblHead">
            <tr>
              <th>NIP</th>
              <th>Nama Guru</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_guru->result_array() as $data) { ?>
            <tr class="pilih_fjurusan" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Klik untuk memilihnya"
               data-nip="<?php echo $data['nip']; ?>"
               data-nama_guru="<?php echo $data['nama_guru']; ?>">
              <td><?php echo $data['nip']; ?></td>
              <td><?php echo $data['nama_guru']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>