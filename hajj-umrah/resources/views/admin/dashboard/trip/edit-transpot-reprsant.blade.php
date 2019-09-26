                    <h4 class="form-section"><i class="ft-globe"></i>شركة النقل </h4>
                        <div class="form-group">
                          <label for="issueinput1">اسم الشركة </label>
                          <input value="{{$transport->name}}" type="text" id="issueinput1" class="form-control" placeholder="اسم الشركة" name="name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم السائق</label>
                          <input value="{{$transport->driver_name}}" type="text" id="issueinput1" class="form-control" placeholder="اسم السائق" name="driver_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="">
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم هوية السائق</label>
                          <input value="{{$transport->driver_id}}" type="text" id="issueinput2" class="form-control" placeholder="رقم هوية السائق" name="driver_id" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="">
                        </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">رقم  جوال السائق</label>
                          <input value="{{$transport->phone}}" type="text" id="issueinput2" class="form-control" placeholder="رقم  جوال السائق" name="phone" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="">
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">رقم لوحة السيارة</label>
                          <input value="{{$transport->car_plate}}" type="text" id="issueinput2" class="form-control" placeholder="رقم لوحة السيارة" name="car_plate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="">
                        </div>

                        <div class="card-text">
                          <h4 class="form-section"><i class="ft-user"></i> المندوب </h4>
                          <p></p>
                        </div>


                
                        <div class="form-group">
                          <label for="issueinput1">اسم مستلم الحالة </label>
                          <input value="{{$representative->recipient}}" type="text" id="issueinput1" class="form-control" placeholder="اسم مستلم الحالة" name="recipient_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم المندوب</label>
                          <input value="{{$representative->name}}" type="text" id="issueinput1" class="form-control" placeholder="اسم المندوب" name="representative_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="">
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم المندوب</label>
                          <input value="{{$representative->phone}}" type="text" id="issueinput2" class="form-control" placeholder="رقم المندوب" name="representative_phone" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="">
                        </div>
                          </div>
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">منهي الحالة</label>
                          <input value="{{$representative->terminator}}" type="text" id="issueinput2" class="form-control" placeholder="منهي الحالة" name="terminator" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="">
                        </div>
                        