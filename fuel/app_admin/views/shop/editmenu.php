 
 <?php //debug($shop_info); ?>

<!-- <shop menu1> -->
            <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Menu</h3>
            </div>
            <!-- /.box-header -->

            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$menu_info['id'];?>">
            <br>



            <div class="box-body">
              <form role="form">
                <!-- text input -->

                <!-- Menu Type -->
                  <div class="col-md-6">
                  <label>Type</label>
                  <select class="form-control" name = "menu_type" value="<?=$menu_info['menu_type'];?>">
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


<!-- /////確認画面///// -->

 <div class="box box-danger">

            <div class="box-header with-border">
              <h3 class="box-title">Confirmation</h3>
            </div>
            <!-- /.box-header -->
            <br>
            <div class="box-body">
              <form role="form">

              <div class="col-md-6">
              <label>Shop ID</label>
              <p name="id" value="<?=$menu_info['id'];?>">
              <?php print ($menu_info['id']);?>
              </p>
              </div>

                <!-- text input -->
                
                <!-- Menu Type -->
                <div class="col-md-6">
                <label>Type</label>
                <p name = "menu_type" value="<?=$menu_info['menu_type'];?>">
                <?php print ($menu_info['menu_type']);?>
                </p>
                </div>
                <!-- /Menu Type -->


                <div class="col-md-6">
                  <label>Menu name</label>
                <p value="<?=$menu_info['menu_name'];?>" placeholder="Enter ..." name="menu_name">
                <?php print ($menu_info['menu_name']);?>
                </p>
                </div>

                <div class="col-md-6">
                <label>Description</label>
                <p value="<?=$menu_info['description'];?>" rows="3" placeholder="Enter ..." name="description">
                <?php print ($menu_info['description']);?>
                </p>
                </div>

                <div class="col-md-6">
                <label>Money</label>
                <p value="<?=$menu_info['money'];?>" placeholder="Enter ..." name="money">
                <?php print ($menu_info['money']);?>
                </p>
                </div>


                <div class="col-md-6">  
                  <label for="exampleInputFile">Menu Photo</label>
                <p id="exampleInputFile" value="<?=$menu_info['photo'];?>" name="photo">
                <?php print ($menu_info['photo']);?>
                </p>
                </div>


                </form>
</div>
<!-- /////確認画面///// -->
                


