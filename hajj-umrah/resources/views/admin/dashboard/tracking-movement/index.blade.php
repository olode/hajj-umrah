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
                  <h4 class="card-title">جدول متابعة </h4>
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
                    <p class="card-text"> متابعة تحركات تاريخ  {{date('Y-m-d')}}</p>
                    <table class="table table-striped table-bordered dom-jQuery-events">
                      <thead>
                        <tr>
                          <th>اليوم</th>
                          <th>الساعة</th>
                          <th>الحركة</th>
                          <th>الاتجاه</th>
                          <th>الوكيل</th>
                          <th>اضافة معلومات شركة النقل والمندوب</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($arrivals as $arrival)
                        

                        <tr>
                          <td>{{$arrival->day}}</td>
                          <td>{{$arrival->arrival_time}}</td>
                          <td>{{$arrival->trip->type}}</td>
                          <td>{{$arrival->direction->name}}</td>
                          <td>{{$arrival->wakeel_name}}</td>
                          <td>
                            
                              @include('admin.dashboard.tracking-movement.form-model')

                          <button  id="arrival" data-arrivid="{{$arrival->id}}" class="badge badge-info" data-toggle="modal" data-target="#myModal">النقل والمندوب</button>

                          <!-- <button class="badge badge-danger">حذف</button> -->
                          </td>
                        </tr>
                        @endforeach
                        @foreach($departures as $departure)

                        <tr>
                          <td>{{$departure->day}}</td>
                          <td>{{$departure->arrival_time}}</td>
                          <td>{{$departure->trip->type}}</td>
                          <td>{{$departure->direction->name}}</td>
                          <td>{{$departure->wakeel_name}}</td>
                          <td>
                          <button class="badge badge-info" data-toggle="modal" data-target="#myModal">النقل والمندوب</button>

                          <!-- <button class="badge badge-danger">حذف</button> -->
                          </td>
                        </tr>
                        @endforeach
                        @foreach($mazarat as $mazar)

                        <tr>
                          <td>{{$mazar->day}}</td>
                          <td>{{$mazar->mazar_time}}</td>
                          <td>{{$mazar->trip->type}}</td>
                          <td>{{$mazar->direction->name}}</td>
                          <td>{{$mazar->wakeel_name}}</td>
                          <td>
                          <button  class="badge badge-info" data-toggle="modal" data-target="#myModal">النقل والمندوب</button>
                          <!-- <button class="badge badge-danger">حذف</button> -->
                          </td>
                        </tr>
                        @endforeach
                        @foreach($between_cities as $between_city)

                        <tr>
                          <td>{{$between_city->day}}</td>
                          <td>{{$between_city->move_time}}</td>
                          <td>{{$between_city->trip->type}}</td>
                          <td>{{$between_city->direction->name}}</td>
                          <td>{{$between_city->wakeel_name}}</td>
                          <td>
                          <button class="badge badge-info" data-toggle="modal" data-target="#myModal">النقل والمندوب</button>
                          <!-- <button class="badge badge-danger">حذف</button> -->
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                      <tfoot>
                      <tr>
                          <th>اليوم</th>
                          <th>الساعة</th>
                          <th>الحركة</th>
                          <th>الاتجاه</th>
                          <th>الوكيل</th>
                          <th>اضافة معلومات شركة النقل والمندوب</th>
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






  <!-- ////////////////////////////////////////////////////////////////////////////-->

