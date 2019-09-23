@extends('admin.layouts.master')


@section('content')



  <!-- Horizontal navigation-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          
        </div>
       
      </div>
      <div class="content-body">
        <!-- DOM - jQuery events table -->
        <section id="dom">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">الاستعلام عن التحركات</h4>
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
                  <div class="card-body card-dashboard">
                    <!-- <p class="card-text"> متابعة تحركات لتاريخ ٢٠١٩/٠٨/٠٥</p> -->
                    <table class="table table-striped table-responsive dom-jQuery-events">
                      <thead>
                        <tr>
                          <th>نوع الرحلة</th>
                          <th> الوكيل</th>
                          <th>جنسية الحجاج</th>
                          <th>عدد الحجاج</th>
                          <th>الفندق</th>
                          <th>الاتجاه</th>
                          <th>اليوم</th>
                          <th>الوقت</th>
                          <th>التاريخ</th>
                          <th>الاستعداد المسبق</th>
                          <th>رقم الرحلة</th>
                          <th>شركة النقل</th>
                          <th>السائق</th>
                          <th>هوية السائق</th>
                          <th>جوال السائق</th>
                          <th>لوحة السيارة</th>
                          <th>مستلم الحالة</th>
                          <th>المندوب</th>
                          <th>جوال المندوب</th>
                          <th>منهي الحالة</th>
                          <th> البيانات</th>

                          <th> اعدادات</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($trips as $trip)
                        <tr>
                          <td>{{$trip->trip_type->type}}</td>
                          <td>{{$trip->wakeel_name}}</td>
                          <td>{{$trip->nationality}}</td>
                          <td>{{$trip->pilgram_count}}</td>
                          <td>{{$trip->hotel}}</td>
                          <td>{{$trip->direction->name}}</td>
                          <td>{{$trip->day}}</td>
                          <td>{{$trip->time}}</td>
                          <td>{{$trip->date}}</td>
                          <td>{{$trip->advance_standby}}</td>
                          <td>{{$trip->trip_number}}</td>
                          <td>
                              @if($trip->transport)
                              {{$trip->transport->name}}
                              @endif
                           </td>
                           <td>
                              @if($trip->transport)
                              {{$trip->transport->driver_name}}
                              @endif
                           </td>
                           <td>
                              @if($trip->transport)
                              {{$trip->transport->driver_id}}
                              @endif
                           </td>
                           <td>
                              @if($trip->transport)
                              {{$trip->transport->phone}}
                              @endif
                           </td>
                           <td>
                              @if($trip->transport)
                              {{$trip->transport->car_plate}}
                              @endif
                           </td>

                           <td>
                              @if($trip->repersentative)
                              {{$trip->repersentative->recipient}}
                              @endif
                            </td>
                            <td>
                              @if($trip->repersentative)
                              {{$trip->repersentative->name}}
                              @endif
                            </td>
                          <td>
                              @if($trip->repersentative)
                              {{$trip->repersentative->phone}}
                              @endif
                            </td>
                            <td>
                              @if($trip->repersentative)
                              {{$trip->repersentative->terminator}}
                              @endif
                            </td>
                            
                
                          <td>
                              <i class="{{$trip->completed == 1 ? 'ft-check-circle' :'ft-x-circle' }}"></i>
                          <td>
                          <a href="{{route('trip.edit',$trip->id)}}" class="badge badge-warning">تعديل</a>
                          <button class="badge badge-danger">حذف</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>نوع الرحلة</th>
                          <th> الوكيل</th>
                          <th>جنسية الحجاج</th>
                          <th>عدد الحجاج</th>
                          <th>الفندق</th>
                          <th>الاتجاه</th>
                          <th>اليوم</th>
                          <th>الوقت</th>
                          <th>التاريخ</th>
                          <th>الاستعداد المسبق</th>
                          <th>رقم الرحلة</th>
                          <th>شركة النقل</th>
                          <th>السائق</th>
                          <th>هوية السائق</th>
                          <th>جوال السائق</th>
                          <th>لوحة السيارة</th>
                          <th>مستلم الحالة</th>
                          <th>المندوب</th>
                          <th>جوال المندوب</th>
                          <th>منهي الحالة</th>
                          <th> البيانات</th>
                          <th> اعدادات</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <!-- DOM - jQuery events table -->
        
      </div>
    </div>
  </div>




@endsection


















  