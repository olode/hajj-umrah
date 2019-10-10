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


            <div class="card" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls"> تفاصيل التحرك</h4>
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
                    <h4 class="form-section"><i class="ft-user"></i> الوكيل </h4>
                    <hr>
                    </div>
                    <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="issueinput5">نوع التحرك</label>
                                <p>{{$trip->trip_type->type}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="issueinput1">اسم الوكيل</label>
                                <p>{{$trip->wakeel_name}}</p>
                            </div>
                        </div>
                    </div>

                      


                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1">جنسية الحجاج</label>
                          <p>{{$trip->nationality}}</p>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">عدد الحجاج</label>
                          <p>{{$trip->pilgram_count}}</p>
                        </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">الفندق</label>
                          <p>{{$trip->hotel}}</p>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput5">الإتجاه</label>
                          <p>{{$trip->direction->name}}</p>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput5">اليوم</label>
                          <p>{{$trip->day}}</p>
                        </div>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">الوقت</label>
                          <p>{{$trip->time}}</p>
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="issueinput4">التاريخ </label>
                              <p>{{$trip->date}}</p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">وقت الاستعداد المسبق</label>
                          <p>{{$trip->advance_standby}}</p>
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">رقم الرحلة</label>
                          <p>{{$trip->trip_number}}</p>
                        </div>

                        @if($trip->completed == 1)
                        <h4 class="form-section"><i class="ft-globe"></i> شركة النقل </h4>
                        <hr>
                        <div class="form-group">
                          <label for="issueinput1">اسم الشركة </label>
                          <p>{{$transport->name}}</p>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم السائق</label>
                          <p>{{$transport->driver_name}}</p>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم هوية السائق</label>
                          <p>{{$transport->driver_id}}</p>
                        </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">رقم  جوال السائق</label>
                          <p>{{$transport->phone}}</p>
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">رقم لوحة السيارة</label>
                          <p>{{$transport->car_plate}}</p>
                        </div>

                        <div class="card-text">
                          <h4 class="form-section"><i class="ft-user"></i> المندوب </h4>
                          <hr>
                        </div>

                        <div class="form-group">
                          <label for="issueinput1">اسم مستلم الحالة </label>
                          <p>{{$representative->recipient}}</p>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم المندوب</label>
                          <p>{{$representative->name}}</p>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم المندوب</label>
                          <p>{{$representative->phone}}</p>
                        </div>
                          </div>
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">منهي الحالة</label>
                          <p>{{$representative->terminator}}</p>
                        </div>
                        @endif
                        
                      </div>
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

