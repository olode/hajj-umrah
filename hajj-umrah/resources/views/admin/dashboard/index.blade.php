@extends('admin.layouts.master')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!--fitness stats-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="row">
                    
                    <div class="col-xl-2 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">الوصول</span>
                        <span class="font-large-3 line-height-1 text-bold-300">{{$trips->where('trip_type_id', 1)->count()}}</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">وصول</span>
                      </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">المغادرة</span>
                        <span class="font-large-3 line-height-1 text-bold-300">{{$trips->where('trip_type_id', 2)->count()}}</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">مغادرة</span>
                      </div>
                    </div>

                    <div class="col-xl-2 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">المزارات</span>
                        <span class="font-large-3 line-height-1 text-bold-300">{{$trips->where('trip_type_id', 3)->count()}}</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">مزار</span>
                        <span class="block"><i class="ft-arrow-down deep-orange accent-3"></i></span>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">بين المدن</span>
                        <span class="font-large-3 line-height-1 text-bold-300">{{$trips->where('trip_type_id', 4)->count()}}</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">حركة</span>
                        <span class="block"><i class="ft-arrow-down deep-orange accent-3"></i></span>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-12 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">الرحلات</span>
                        <span class="font-large-3 line-height-1 text-bold-300">{{$trips->count()}}</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">رحلة</span>
                        <span class="block"><i class="ft-arrow-up success"></i></span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--fitness stats-->
        <!-- activity charts -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header no-border-bottom">
                <h4 class="card-title">احصائيات التحركات  
                  <span class="text-muted text-bold-400">العامة</span>
                </h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
              
                  <div id="piechart" style="width: 700px; height: 500px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <br>
              
            <h4 class="card-title">&nbsp;&nbsp;&nbsp;
              احصائيات التحركات  
                  <span class="text-muted text-bold-400">اليومية</span>
                </h4>
              <div class="card-content mt-2">
                <div class="card-body">
                  <div id="daily"  class="height-450 echart-container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ activity charts -->
        <!-- fitness target -->

                  <!-- Donut Chart -->
        
        

      </div>
    </div>
  </div>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['الوصول',     {{$trips->where('trip_type_id', 1)->count()}}],
          ['المغادرة',     {{$trips->where('trip_type_id', 2)->count()}}],
          ['المزارات',  {{$trips->where('trip_type_id', 3)->count()}}],
          ['بين المدن', {{$trips->where('trip_type_id', 4)->count()}}],
          
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['الوصول',     {{$trips->where('trip_type_id', 1)->where('date', date('Y-m-d'))->count()}}],
          ['المغادرة',     {{$trips->where('trip_type_id', 2)->where('date', date('Y-m-d'))->count()}}],
          ['المزارات',  {{$trips->where('trip_type_id', 3)->where('date', date('Y-m-d'))->count()}}],
          ['بين المدن', {{$trips->where('trip_type_id', 4)->where('date', date('Y-m-d'))->count()}}],
          
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('daily'));

        chart.draw(data, options);
      }
      
    </script>
@endsection