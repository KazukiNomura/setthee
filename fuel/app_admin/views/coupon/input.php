    <!-- Main content -->
    <?php echo Form::open(array('method' => 'post')); ?>
      <section class="content">

              <div class="form-group">
                  <label for="exampleInputEmail1">Coupon Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Coupon Title">
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Coupon thumbnail</label>
                  <input type="file" name="thumbnail" id="exampleInputFile">
              </div>
              
              

                    <div class="form-group">
                  <label>Coupon Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"> </textarea>
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
          </div>  
         

          <div class="form-group">
            <label>Expiration date(Day)</label>
              <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
                <input type="text" class="form-control" name="expirationdate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
              </div>
              </div>
          
          <div class="box-footer">
            <input type="submit" id="submit" class="btn btn-primary" value="Submit"/>
          </div>
      </section>
    <?php echo Form::close(); ?>