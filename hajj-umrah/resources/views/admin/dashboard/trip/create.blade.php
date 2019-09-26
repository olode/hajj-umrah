@extends('admin.layouts.master')


@section('content')


  <!-- Horizontal navigation-->
  <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-body">

        <!-- Form wizard with step validation section start -->
        <section id="validation">
          <div class="row justify-content-md-center">
            <div class="col-6">


            <div class="card" style="height: 838px;">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">اضافة تحرك جديد</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                    <h4 class="form-section"><i class="ft-user"></i>معلومات الوكيل </h4>
                    <hr>
                      <p></p>
                    </div>
                    <form class="form" method="POST" action="{{route('trip.store')}}">
                        @csrf
                    <div class="form-body">
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="issueinput5">نوع التحرك</label>
                                <select  id="issueinput5" name="trip_type_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="" required>
                                  <option></option>
                                  @foreach($trip_types as $trip_type)
                                <option value="{{$trip_type->id}}">{{$trip_type->type}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="issueinput1">اسم الوكيل</label>
                                <input type="text" maxlength="20" minlength="10"  id="issueinput1" class="form-control" placeholder="اسم الوكيل" name="wakeel_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                            </div>
                        </div>
                    </div>

                      


                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1">جنسية الحجاج</label>
                          <input type="text" id="issueinput1" maxlength="15" minlength="3" class="form-control" placeholder="جنسية الحجاج" name="nationality" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">عدد الحجاج</label>
                          <input type="text" maxlength="9" minlength="0" id="issueinput2" class="form-control" placeholder="عدد الحجاج" name="pilgram_count" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                          </div>
                        </div>
                        
                       
                        <div class="form-group">
                          <label for="issueinput2">الفندق</label>
                          <input type="text" id="issueinput2" maxlength="12" minlength="4" class="form-control" placeholder="الفندق" name="hotel" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput5">الإتجاه</label>
                            <select id="issueinput5" name="direction_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="" required>
                              @foreach($directions as $direction)
                              <option value="{{$direction->id}}">{{$direction->name}}</option>
                              @endforeach
                            </select>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput5">اليوم</label>
                          <select id="issueinput5" name="day" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="" required>
                            <option value="السبت">السبت</option>
                            <option value="الأحد">الأحد</option>
                            <option value="الاثنين">الاثنين</option>
                            <option value="الثلاثاء">الثلاثاء</option>
                            <option value="الاربعاء">الاربعاء</option>
                            <option value="الخميس">الخميس</option>
                            <option value="الجمعة">الجمعة</option>
                          </select>
                        </div>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">الوقت</label>
                          <input type="text" maxlength="7" minlength="1" id="issueinput2" class="form-control" placeholder="وقت الوصول" name="time" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="issueinput4">التاريخ </label>
                              <input type="date" id="issueinput4" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed" data-original-title="" title="" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">وقت الاستعداد المسبق</label>
                          <input type="text" maxlength="7" minlength="1" id="issueinput2" class="form-control" placeholder="وقت الاستعداد المسبق" name="advance_standby" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">رقم الرحلة</label>
                          <input type="text" id="issueinput2" maxlength="7" minlength="3" class="form-control" placeholder="رقم الرحلة" name="trip_number" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                        
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-check-square-o"></i> حفظ
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Form wizard with step validation section end -->



        
      </div>
    </div>
  </div>






  @endsection