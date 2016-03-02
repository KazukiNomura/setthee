    <!-- Main content -->

    <section class="content">
    <?php echo Form::open(array('method' => 'post')); ?>

					    <div class="form-group">
                  <label for="exampleInputEmail1">Shop ID</label>
                  <input type="text" class="form-control" name="id" id="exampleInputEmail1" placeholder="Shop ID">
                </div>

                    <div class="form-group">
                  <label for="exampleInputEmail1">Report Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Report Title">
                </div>

                <div class="form-group">
                <label>Visit Date</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="visit_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Report Textarea
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
              
                <textarea class="textarea" placeholder="Place some text here" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            
            </div>
          </div>
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            <form>
              <?php echo Form::close(); ?>



        <!-- /.col-->
      </div>

      <!-- ./row -->
    </section>

    <!-- /.content -->