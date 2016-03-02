    <!-- Main content -->
    <section class="content">
    <?php echo Form::open(array('method' => 'post')); ?>

					    <div class="form-group">
                  <label for="exampleInputEmail1">Shop ID</label>
                  <input type="text" class="form-control" name="id" id="exampleInputEmail1" placeholder="Shop ID">
                </div>


                    <div class="form-group">
                  <label for="exampleInputEmail1">Coupon Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Coupon Title">
                </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Coupon thumbnail</label>
                  <input type="file" name="thumbnail" id="exampleInputFile">
                </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Coupon Description
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>

            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
            
            <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Coupon Conditions</h3>
            </div>
            <div class="box-body">
              <input class="form-control input-lg" type="text" name="Conditions1" placeholder="Conditions1">
              <br>
              <input class="form-control" type="text" name="Conditions2" placeholder="Conditions2">
              <br>
              <input class="form-control input-sm" type="text" name="Conditions3" placeholder="Conditions3">
              <br>
              <input class="form-control input-sm" type="text" name="Conditions4" placeholder="Conditions4">
            </div>
            <!-- /.box-body -->
          </div>  
          </div>

                <div class="form-group">
                <label>Expiration date(Day)</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="expirationdate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>


               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        <!-- /.col-->
         <form>
     <?php echo Form::close(); ?>
      <!-- ./row -->
    </section>
    <!-- /.content -->