 
 <?php //debug($shop_info); ?>

<!-- Shop_Header -->
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SHOP HEADER</h3>
            </div>

            <!-- form start -->
            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$shop_info['id'];?>">
            <br>
              <div class="box-body">
                <div class="col-md-6">
                  <i class="fa fa-cutlery">&nbsp;<label for="exampleInputEmail1">Shop name</label></i>
                  <input type="textarea" name = "shop_name" class="form-control" value="<?=$shop_info['shop_name'];?>"  id="exampleInputEmail1" placeholder="shop name">
                </div>

                <div class="col-md-6">
                <br>
                   <i class="fa fa-cab">&nbsp;<label for="exampleInputPassword1">Address</label></i>
                
                <!--  <region チェックボックス> -->
                  <div class="radio" name="region" value="<?=$shop_info['region'];?>">
                    <?php foreach ($master_info['region'] as $master_id => $master_value): ?>
                      <?php if ($master_id == $shop_info['region']): ?>
                        <?php $master_radio = 'radioed="radioed"'; ?>
                      <?php else: ?>
                        <?php $master_radio = ''; ?>
                      <?php endif; ?>
                      <label>
                      <input type="radio" name="region" <?= $shop_info['region']  ? 'checked' : '' ?><?=$master_radio;?>><?=$master_value;?>
                      </label>
                    <?php endforeach; ?>
                  </div>
                   <!--  <region チェックボックス> -->
                  
                  <input type="textarea" name="address" value="<?=$shop_info['address'];?>" class="form-control" id="exampleInputPassword1" placeholder="Shop address">
                </div>

               <div class="col-md-6">
               <br>
                <i class="fa fa-phone">&nbsp;<label>Phone</label></i>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="phone" value="<?=$shop_info['phone'];?>" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
              </div>
            
                  <div class="col-md-6">
                  <br>
                  <i class="fa fa-plus-square">&nbsp;<label>Coupon icon</label></i>
                  <select class="form-control" name="coupon_icon" value="<?=$shop_info['coupon_icon'];?>">
                    <option>ON</option>
                    <option>OFF</option>
                  </select>
                </div>
                  <div class="col-md-6">
                  <br>
                  <i class="fa fa-pencil">&nbsp;<label>Report icon</label></i>
                  <select class="form-control" name="report_icon" value="<?=$shop_info['report_icon'];?>">
                    <option>ON</option>
                    <option>OFF</option>
                  </select>
                </div>

                <!-- genre チェックボックス-->
                <div class="col-md-6">
                <br>
                  <i class="fa fa-users">&nbsp;<label>Genre</label></i>
                  <div class="checkbox" name="genre_id" value="<?=$shop_info['genre_id'];?>">
                    <?php foreach ($master_info['genre'] as $master_id => $master_value): ?>
                      <?php if ($master_id == $shop_info['genre_id']): ?>
                        <?php $master_checkboxed = 'checkboxed="checkboxed"'; ?>
                      <?php else: ?>
                        <?php $master_checkboxed = ''; ?>
                      <?php endif; ?>
                      <label>
                      <input type="checkbox" name="genre_id" value="<?=$master_id;?>" <?=$master_checkboxed;?>><?=$master_value;?>
                      </label>
                    <?php endforeach; ?>
                  </div>
                </div>
                <!-- genre チェックボックス-->

                <div class="col-md-6">           
                  <i class="fa fa-camera">&nbsp;<label for="exampleInputFile">Main visual</label></i>
                  <input type="file" id="exampleInputFile" name="header_img" value="<?=$shop_info['header_img'];?>">
                </div>
              </div>

              <p align="center">
                <button type="submit" class="btn btn-primary" style="margin:15px">Submit</button>
              </p>    
              </div>    

<!-- Shop_Header -->

<!-- Shop Info -->
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SHOP INFO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <i class="fa fa-cab">&nbsp;<label for="exampleInputEmail1">Address</label></i>
                  <input type="textarea" class="form-control" name="address_info" value="<?=$shop_info['address_info'];?>" id="exampleInputEmail1" placeholder="Address">
                </div>

                <div class="col-md-6">
                   <i class="fa fa-clock-o">&nbsp;<label for="exampleInputPassword1">Business hours</label></i>
                  <input type="textarea" class="form-control" value="<?=$shop_info['businesshours'];?>" name="businesshours" id="exampleInputPassword1" placeholder="Business hours">
                </div>

               <div class="col-md-6">
               <br>
                  <i class="fa fa-money">&nbsp;<label for="exampleInputPassword1">Average price</label></i>
                  <input type="textarea" class="form-control" name="price" value="<?=$shop_info['price'];?>"  id="exampleInputPassword1" placeholder="Average price">
                </div>      

                <!--  <credit チェックボックス> -->
                <div class="col-md-6">
                <br>
                  <i class="fa fa-users">&nbsp;<label>Credit</label></i>
                  <div class="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                    <?php foreach ($master_info['credit_id'] as $master_id => $master_value): ?>
                      <?php if ($master_id == $shop_info['genre_id']): ?>
                        <?php $master_checkboxed = 'checkboxed="checkboxed"'; ?>
                      <?php else: ?>
                        <?php $master_checkboxed = ''; ?>
                      <?php endif; ?>
                      <label>
                      <input type="checkbox" name="credit_id" value="<?=$master_id;?>" <?=$master_checkboxed;?>><?=$master_value;?>
                      </label>
                    <?php endforeach; ?>
                  </div>
                </div>
               <!--  <credit チェックボックス> -->

                <div class="col-md-6">
                <br>
                <i class="fa fa-phone">&nbsp;<label>Phone</label></i>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="phone_number" value="<?=$shop_info['phone_number'];?>" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>

                  <div class="col-md-6">
                  <br>
                  <i class="fa fa-wifi">&nbsp;<label>Wi-fi</label></i>
                  <select class="form-control" name="wi-fi" value="<?=$shop_info['wi-fi'];?>">
                    <option>yes</option>
                    <option>no</option>
                  </select>
                </div>
                </div>

              <p align="center">
                <button type="submit" class="btn btn-primary" style="margin:15px">Submit</button>
              </p>                        
             </form>                       
</div>
          <?php echo Form::close(); ?>
<!-- Shop Info -->