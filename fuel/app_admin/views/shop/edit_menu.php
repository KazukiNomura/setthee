 
 <?php //debug($shop_info); ?>

<!-- <shop menu1> -->
            <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Menu</h3>
            </div>
            <!-- /.box-header -->

            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$menu_info['id_menu'];?>"
            <br>
            <div class="box-body">
              <form role="form">
                <!-- text input -->

                <!-- Menu Type -->
                  <div class="col-md-6">
                  <label>Type</label>
                  <select class="form-control" name = "menu_type" value="<?=$menu_info['menu_type'];?>"
                    <option>Food</option>
                    <option>Drink</option>
                  </select>
                </div>
                <!-- /Menu Type -->


                <div class="col-md-6">
                  <label>Menu name</label>
                  <input type="text" class="form-control" value="<?=$menu_info['menu_name'];?>" placeholder="Enter ..." name="menu_name">
                </div>

                 <div class="col-md-6">
                  <label>Description</label>
                  <textarea class="form-control" value="<?=$menu_info['description'];?>" rows="3" placeholder="Enter ..." name="description"> </textarea>
                </div>

                 <div class="col-md-6">
                  <label>Money</label>
                  <input type="text" class="form-control" value="<?=$menu_info['money'];?>" placeholder="Enter ..." name="money">
                </div>


                <div class="col-md-6">  
                  <label for="exampleInputFile">Menu Photo</label>
                  <input type="file" id="exampleInputFile" value="<?=$menu_info['photo'];?>" name="photo">
                </div>

              <div class="col-md-6">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div> 

                </form>
                <?php echo Form::close(); ?>
                </div>
                </div>
<!-- <shop menu> -->

