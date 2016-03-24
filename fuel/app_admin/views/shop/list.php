          <div class="box">
            <div class="box-header">
            </div>

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

        <?php foreach ($list as $info): ?>
                <tr>
                  <td><?=$info['id'];?></td>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['shop_name'];?></a>
                  </td>
                  <?php $value = $info['genre_id']; ?>  
                    <?php if ($value != 0): ?>
                      <td><?=$master_info['genre'][$value];?></td>
                    <?php else: ?>
                    <td><?=" ";?></td>
                    <?php endif; ?>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['report_icon'];?></a>
                  </td>
                  <td>
                  <a href="/shop/edit?id=<?=$info['id'];?>"><?=$info['coupon_icon'];?></a>
                  </td>
                  <td><a href="/shop/menulist?id=<?=$info['id'];?>"><button type="button" class="btn btn-block btn-danger">MENU</button></a></td>
                  <td><a href="/shop/photolist?id=<?=$info['id'];?>"><button type="button" class="btn btn-block btn-warning">PHOTO</button></a></td>
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
            </div>
          </div>
        </div>
      </div>
  </div>