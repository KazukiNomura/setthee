      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">News Date</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Date time</th>
                </tr>

          <?php foreach ($list as $info): ?>
                <!-- <tabel list 1>  -->
                <tr>
                  
                  <td><?=$info['id'];?></td>
                  <td>
                  <a href="/headernav/edit?id=<?=$info['id'];?>"><?=$info['title'];?></a>
                  </td>
                  <td><a href="/headernav/edit?id=<?=$info['id'];?>"><?=$info['time'];?></a></a></td>
                </tr>
                <!-- <tabel list 1>  -->
          <?php endforeach; ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>