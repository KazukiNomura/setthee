          <div class="box">
            <div class="box-header">
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th><i class="fa fa-wrench"></i>Type</th>
                  <th>Menu name</th>
                  <th>Money</th>
                </thead>
                <tbody>

        <?php foreach ($list as $menu_info): ?>
                <tr>
                  <td><?=$menu_info['id'];?></td>
                  <td>
                  <a href="/shop/editmenu?id=<?=$menu_info['id'];?>"><?=$menu_info['menu_type'];?></a>
                  </td>

				   <td>
                  <a href="/shop/editmenu?id=<?=$menu_info['id'];?>"><?=$menu_info['menu_name'];?></a>
                  </td>

                  <td>
                  <a href="/shop/editmenu?id=<?=$menu_info['id'];?>"><?=$menu_info['money'];?></a>
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
            <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Menu</h3>
            </div>
            <!-- /.box-header -->

            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$menu_info['id'];?>">
            <div class="box-body">
              <form role="form">
                <!-- text input -->

                <!-- Menu Type -->
                  <div class="col-md-6">
                  <label>Type</label>
                  <select class="form-control" name = "menu_type">
                    <option>Food</option>
                    <option>Drink</option>
                  </select>
                </div>
                <!-- /Menu Type -->


                <div class="col-md-6">
                  <label>Menu name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="menu_name">
                </div>

                 <div class="col-md-6">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"> </textarea>
                </div>

                 <div class="col-md-6">
                  <label>Money</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="money">
                </div>


                <div class="col-md-6">  
                  <label for="exampleInputFile">Menu Photo</label>
                  <input type="file" id="exampleInputFile" name="photo">
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


            </div>
          </div>
        </div>
      </div>
  </div>


