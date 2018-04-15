<div class="modal fade" id="exampleModalCenter<?= $game['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajoutez une image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="img_jeux" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="id" value=<?=$game['id']?>>
            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
            </br>
          </div>
          <div style="text-align: right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulez</button>
            <input type="submit" class="btn btn-primary" value="Upload">
          </div>
        </form>
      </div>

      
    </div>
  </div>
</div>