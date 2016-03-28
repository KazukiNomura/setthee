<?php echo Form::open(array('method' => 'post')); ?>
<input type="hidden" name="shop_id" value="<?=$shop_id;?>">
<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">
                shop ID :<?echo "$shop_id";?>
                 </h4>
              </div>
              <div class="modal-body">
                <p>Do you really want to delete?</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Delete Submit</button>
              </div>
            </div>
<?php echo Form::close(); ?>