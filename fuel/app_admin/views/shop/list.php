          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SHOP DATE</h3>
            </div>
            <!-- /.box-header -->


           <!--  <tabel name> -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th><i class="fa fa-wrench"></i> SHOP Name</th>
                  <th>Genre</th>
                  <th>Report</th>
                  <th>Coupon</th>
                  <th>Menu</th>
                  <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                <!--  <tabel name> -->

          <?php foreach ($list as $info): ?>
                <!-- <tabel list 1>  -->
                <tr>
                  
                  <td><?=$info['id'];?></td>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['shop_name'];?></a>
                  </td>
                  <td><?=$master_info['genre'][$info['genre_id']];?></td>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['report_icon'];?></a>
                  </td>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['coupon_icon'];?></a>
                  </td>
                  <td><a href="/shop/menu?shop_id=<?=$info['id'];?>"><button type="button" class="btn btn-block btn-danger">MENU</button></a></td>
                  <td><a href="/shop/photo?shop_id=<?=$info['id'];?>"><button type="button" class="btn btn-block btn-warning">PHOTO</button></a></td>
                </tr>
                <!-- <tabel list 1>  -->
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

            </div>
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

