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


                 <div class="form-group">
                  <label>Report Textarea</label>
                  <textarea class="form-control" rows="3" style="padding-top:200px" placeholder="Enter ..." name="description"> </textarea>
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