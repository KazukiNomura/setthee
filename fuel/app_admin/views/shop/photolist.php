          <div class="box">
            <div class="box-header">
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th><i class="fa fa-wrench"></i>Type</th>
                  <th>Photo data</th>
                </thead>
                <tbody>

        <?php foreach ($list as $photo_info): ?>
                <tr>
                  <td><?=$photo_info['id'];?></td>
                  <td>
                  <a href="/shop/editphoto?id=<?=$photo_info['id'];?>"><?=$photo_info['type'];?></a>
                  </td>
                  <td>
                  <a href="/shop/editphoto?id=<?=$photo_info['id'];?>"><?=$photo_info['photo_image'];?></a>
                  </td>
                </tr>
          <?php endforeach; ?>

                </tfoot>
              </table>
            <!-- <ページング> -->
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
            <!-- <ページング> -->

<!-- <shop menu1> -->
            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$photo_info['id'];?>">

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
                  <select class="form-control" name="type">
                    <option>Food</option>
                    <option>Drink</option>  
                    <option>Space</option>
                  </select>
                </div>
                <!-- /Menu Type -->


                <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <input type="file" id="exampleInputFile" name="photo_image">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

                </form>
                <?php echo Form::close(); ?>
                </div>
                </div>
<!-- <shop menu> -->


            </div>
          </div>
        </div>
      </div>
  </div>


