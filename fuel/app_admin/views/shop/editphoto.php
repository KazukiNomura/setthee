<!-- <shop menu1> -->
            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" value="<?=$photo_info['id'];?>" name="id">
            <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Photo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->

                <!-- Menu Type -->
                  <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" value="<?=$photo_info['type'];?>" name="type">
                    <option>Food</option>
                    <option>Drink</option>  
                    <option>Space</option>
                  </select>
                </div>
                <!-- /Menu Type -->





                <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <input type="file" id="exampleInputFile" alue="<?=$photo_info['photo_image'];?>" name="photo_image">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

                </form>
                <?php echo Form::close(); ?>
                </div>
                </div>
<!-- <shop menu> -->