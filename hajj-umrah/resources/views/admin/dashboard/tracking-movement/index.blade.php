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
                        @foreach($trips as $trip)
                        

                        <tr>
                          <td>{{$trip->day}}</td>
                          <td>{{$trip->time}}</td>
                          <td>{{$trip->trip_type->type}}</td>
                          <td>{{$trip->direction->name}}</td>
                          <td>{{$trip->wakeel_name}}</td>
                          <td>

                          @if( $trip->completed == 1)
                          
                          <span> معلومات مكتملة <i class="ft-check-circle"></i></span>
                          @elseif($trip->completed == 0)
                          <a href="{{route('tracking-movement.create')}}?id={{$trip->id}}"  id="arrival"  class="badge badge-info">النقل والمندوب</a>

                          @endif
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

