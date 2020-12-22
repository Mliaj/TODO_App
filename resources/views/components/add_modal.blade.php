<form action="{{ route('store') }}" method="post">
    {{ csrf_field() }}
    <div class="modal fade add-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add TODO</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <label for="">What to do?</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" style="resize: none"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Date and Time of completion</label>
                    <input type="date" name="date" required>
                    <input type="time" name="time" required>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    
    </form>