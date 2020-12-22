<div class="modal fade delete-modal" tabindex="-1" role="dialog" aria-labelledby="smallDeleteModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Delete by ID</h4>
        </div>
        <div class="modal-body">
            <form action="/delete" method="POST">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="id" required>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-block btn-danger">Delete</button>
            </form>
        </div>

    </div>
  </div>
</div>