<div class="modal-dialog modal-lg">
    
    <form id="modal-form" action="../admin/news/add_save" method="post" enctype="multipart/form-data" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add News</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">

              <div id="return_message"></div>

              <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control input-sm" id="title" name="title" 
                              placeholder="Title" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Picture</label>
                      <input type="file" class="form-control input-sm" id="picture" name="picture"   >   
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Details</label>
                      <textarea type="text" class="form-control input-sm" id="details" name="details" 
                              placeholder="Title" style="resize:vertical;height:200px;max-height:300px;" ></textarea>
                    </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Save" >
        </div>
      </div>
      </form>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js'); ?>">

      </script>
<script type="text/javascript">tinymce.init({
                  selector: "textarea",
                  plugins: [
                      "advlist autolink lists link image charmap print preview anchor",
                      "searchreplace visualblocks code fullscreen",
                      "insertdatetime media table contextmenu paste"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
              });</script>