          <div class="box">
            <div class="box-header">
              <h3 class="box-title">REPORT DATE</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th><i class="fa fa-wrench"></i> Report Title</th>
                  <th>Visit Date</th>
                  <th><i class="fa fa-share"></i> Delete</th>
                </tr>
                </thead>
                <tbody>
                <!--  <tabel name> -->

          <?php foreach ($list as $menu_info): ?>
                <!-- <tabel list 1>  -->
                <tr>
                  
                  <td><?=$menu_info['id'];?></td>
                  <td>
                  <a href="/shop/reportedit?id=<?=$menu_info['shop_id'];?>"><?=$menu_info['title'];?></a>
                  </td>
                  <td><a href="/shop/reportedit?id=<?=$menu_info['shop_id'];?>"><?=$menu_info['visit_date'];?></a></a></td>
                   <td><a href="/shop/deletreport?id=<?=$menu_info['id'];?>"><i class="fa fa-share"></i></a></td>
                </tr>
                <!-- <tabel list 1>  -->
          <?php endforeach; ?>


                </tfoot>
              </table>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            </div>

          
          <!-- 登録フォーム -->
          <section class="content">
          <?php echo Form::open(array('method'=>'get', 'enctype'=>'multipart/form-data')); ?>
            <input type="hidden" name="shop_id" value="<?=$shop_id;?>">

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
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"> </textarea>
                </div>

               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            <form>
              <?php echo Form::close(); ?>

       </div>
      </section>
    <!-- 登録フォーム -->

            <!-- /.box-body -->
          </div>
           <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




        <!-- jQuery 2.2.0 -->

    <!-- /.content -->

  </div>


  <!-- /.content-wrapper -->

