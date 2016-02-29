 
 <?php //debug($shop_info); ?>

<!-- Shop_Header -->
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SHOP HEADER</h3>
            </div>

            <!-- form start -->
            <?php echo Form::open(array('method' => 'post')); ?>
            <input type="hidden" name="id" value="<?=$shop_info['id'];?>"
            <br>
              <div class="box-body">
                <div class="col-md-6">
                  <i class="fa fa-cutlery">&nbsp;<label for="exampleInputEmail1">Shop name</label></i>
                  <input type="textarea" name = "shop_name" class="form-control" value="<?=$shop_info['shop_name'];?>"  id="exampleInputEmail1" placeholder="shop name">
                </div>
                <div class="col-md-6">
                   <i class="fa fa-cab">&nbsp;<label for="exampleInputPassword1">Address</label></i>
                  <input type="textarea" name="address" value="<?=$shop_info['address'];?>" class="form-control" id="exampleInputPassword1" placeholder="Shop address">
                </div>

               <div class="col-md-6">
                <i class="fa fa-phone">&nbsp;<label>phone</label></i>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="phone" value="<?=$shop_info['phone'];?>" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>

             

                  <div class="col-md-6">
                  <i class="fa fa-plus-square">&nbsp;<label>Coupon icon</label></i>
                  <select class="form-control" name="coupon_icon" value="<?=$shop_info['coupon_icon'];?>">
                    <option>ON</option>
                    <option>OFF</option>
                  </select>
                </div>
                  <div class="col-md-6">
                  <i class="fa fa-pencil">&nbsp;<label>Report icon</label></i>
                  <select class="form-control" name="report_icon" value="<?=$shop_info['report_icon'];?>">
                    <option>ON</option>
                    <option>OFF</option>
                  </select>
                </div>

          

                <!-- Select multiple-->
                <div class="col-md-6">
                  <i class="fa fa-users">&nbsp;<label>Genre</label></i>
                  <select multiple class="form-control" name="genre_id" value="<?=$shop_info['genre_id'];?>">
                    <option>Myanmar Food</option>
                    <option>Japanese Food</option>
                    <option>Italian Food</option>
                    <option>Vietnam Food</option>
                    <option>Thailand Food</option>
                  </select>
                </div>
                <!-- /Select multiple-->


                <div class="form-group">
                  <i class="fa fa-camera">&nbsp;<label for="exampleInputFile">Main visual</label></i>
                  <input type="file" id="exampleInputFile" name="header_img" value="<?=$shop_info['header_img'];?>">

                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </div>

              </div>
              <!-- /.box-body -->

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
                  <i class="fa fa-money">&nbsp;<label for="exampleInputPassword1">Average price</label></i>
                  <input type="textarea" class="form-control" name="price" value="<?=$shop_info['price'];?>"  id="exampleInputPassword1" placeholder="Average price">
                </div>

                 


                  <div class="col-md-6">
                  <i class="fa fa-credit-card">&nbsp;<label>Credit Card</label></i>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                      Not
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                      Visa
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                      MasterCard
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                      JCB
                    </label>
                  </div>

                    <div class="checkbox">
                    <label>
                      <input type="checkbox" name="credit_id" value="<?=$shop_info['credit_id'];?>">
                      UnionPay
                    </label>
                  </div>

                </div>

                <div class="col-md-6">
                <i class="fa fa-phone">&nbsp;<label>phone</label></i>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="phone_number" value="<?=$shop_info['phone_number'];?>" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>


                  <div class="col-md-6">
                  <i class="fa fa-wifi">&nbsp;<label>wi-fi</label></i>
                  <select class="form-control" name="wi-fi" value="<?=$shop_info['wi-fi'];?>">
                    <option>yes</option>
                    <option>no</option>
                  </select>
                </div>
                </div>
  
<div class="form-group">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

                          
            </form>
            <?php echo Form::close(); ?>

          </div>
<!-- Shop Info -->