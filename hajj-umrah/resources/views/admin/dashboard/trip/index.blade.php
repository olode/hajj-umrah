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
                    @if (count($trips)>0)
                    <table style="width:100%" class="table table-striped table-responsive dom-jQuery-events">
                      <thead>
                        <tr>
                          <th>نوع الرحلة</th>
                          <th> الوكيل</th>
                          <th>جنسية الحجاج</th>
                          <th>عدد الحجاج</th>
                          <th>الفندق</th>
                          <th>الاتجاه</th>
                          <th>اليوم</th>
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
                          <td class="text-center">
                              <i class="{{$trip->completed == 1 ? 'ft-check-circle' :'ft-x-circle' }}"></i>

                              @if($trip->completed == 0)
                                 <a href="{{route('tracking-movement.create')}}?id={{$trip->id}}&trip=public" class="badge badge-warning">اكمال البيانات  الناقصة</a>
                              @elseif($trip->completed == 1)
                                    <br>
                              <span>بيانات مكتملة</span>
                              @endif
                          </td>
                          <td>
                            <form style="display:inline;" action="{{route('trip.show',$trip->id)}}" method="get">
                              <button style="display:inline;     margin-bottom: 4px;"  type="submit" class="badge badge-info">عرض التفاصيل</button>
                            </form>
                            <form style="display:inline"  action="{{route('trip.edit',$trip->id)}}" method="get">
                                <button style="display:inline;     margin-bottom: 4px;"  type="submit" class="badge badge-warning">تعديل</button>
                            </form>
                            <form style="display:inline"  action="{{route('trip.destroy',$trip->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                                <button style="display:inline"  style="display: inline;" class="badge badge-danger">حذف</button>
                            </form>
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
                          <th> البيانات</th>
                          <th> اعدادات</th>
                        </tr>
                      </tfoot>
                    </table>
                    @else
                      <h2 style="margin-right:15px">لم يتم إضافة تحرك</h2>
                    @endif
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


















  