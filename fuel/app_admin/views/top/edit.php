    <!-- Main content -->
    <?php echo Form::open(array('method' => 'post')); ?>
     <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit</h3>
        </div>
        <input type="hidden" name="id" value="<?=$top_info['id'];?>">

        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputFile">Main Visual</label>
              <input type="file" id="exampleInputFile" name="header_img" value="<?=$top_info['header_img'];?>">
            </div>

        <!-- coupon -->
          <div class="form-group">
            <div class="box-header with-border">
              <h3 class="box-title">Coupon ID</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder="id number" name="coupon_id" value="<?=$top_info['report_id'];?>">
                </div>
              </div>
            </div>
          </div>
        <!-- coupon -->

        <!-- Report -->
          <div class="form-group">
            <div class="box-header with-border">
              <h3 class="box-title">Report ID</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder="id number" name="report_id" value="<?=$top_info['report_id'];?>">
                </div>
              </div>
            </div>
          </div>
        <!-- Report -->
    
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    <?php echo Form::close(); ?>
