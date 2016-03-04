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
                </tr>
                </thead>
                <tbody>
                <!--  <tabel name> -->

          <?php foreach ($list as $info): ?>
                <!-- <tabel list 1>  -->
                <tr>
                  
                  <td><?=$info['id'];?></td>
                  <td>
                  <a href="/report/edit?id=<?=$info['id'];?>"><?=$info['title'];?></a>
                  </td>
                  <td><a href="/report/edit?id=<?=$info['id'];?>"><?=$info['visit_date'];?></a></a></td>
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

