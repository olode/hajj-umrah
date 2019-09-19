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
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">الوصول</span>
                        <span class="font-large-3 line-height-1 text-bold-300">100</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">وصول</span>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">المغادرة</span>
                        <span class="font-large-3 line-height-1 text-bold-300">50</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">مغادرة</span>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">المزارات</span>
                        <span class="font-large-3 line-height-1 text-bold-300">80</span>
                      </div>
                      <div class="float-left mt-2">
                        <span class="grey darken-1 block">مزار</span>
                        <span class="block"><i class="ft-arrow-down deep-orange accent-3"></i></span>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 clearfix">
                      <div class="float-left pl-2">
                        <span class="grey darken-1 block">الرحلات</span>
                        <span class="font-large-3 line-height-1 text-bold-300">230</span>
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
                <h4 class="card-title">Activity Chart
                  <span class="text-muted text-bold-400">Weekly</span>
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
                  <ul class="list-inline text-right m-0">
                    <li>
                      <h6><i class="ft-circle primary"></i> Runnig</h6>
                    </li>
                    <li class="ml-1">
                      <h6><i class="ft-circle success"></i> Walking</h6>
                    </li>
                    <li class="ml-1">
                      <h6><i class="ft-circle warning"></i> Cycling</h6>
                    </li>
                  </ul>
                  <div id="weekly-activity-chart" class="height-250"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-content mt-2">
                <div class="card-body">
                  <div id="activity-division" class="height-250 echart-container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ activity charts -->
        <!-- fitness target -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content">
                <div class="row">
                  <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                    <div class="my-1 text-center">
                      <div class="card-header mb-2 pt-0">
                        <span class="info">Steps</span>
                        <h3 class="font-large-2 text-bold-200">3,261</h3>
                      </div>
                      <div class="card-content">
                        <input type="text" value="65" class="knob hide-value responsive angle-offset" data-angleOffset="40"
                        data-thickness=".15" data-linecap="round" data-width="130"
                        data-height="130" data-inputColor="#e1e1e1" data-readOnly="true"
                        data-fgColor="#00BCD4" data-knob-icon="ft-zap">
                        <ul class="list-inline clearfix mt-1 mb-0">
                          <li class="border-right-grey border-right-lighten-2 pr-2">
                            <h2 class="grey darken-1 text-bold-400">65%</h2>
                            <span class="success">Completed</span>
                          </li>
                          <li class="pl-2">
                            <h2 class="grey darken-1 text-bold-400">35%</h2>
                            <span class="danger">Remaining</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                    <div class="my-1 text-center">
                      <div class="card-header mb-2 pt-0">
                        <span class="deep-orange">Distance</span>
                        <h3 class="font-large-2 text-bold-200">7.6
                          <span class="font-medium-1 grey darken-1 text-bold-400">mile</span>
                        </h3>
                      </div>
                      <div class="card-content">
                        <input type="text" value="70" class="knob hide-value responsive angle-offset" data-angleOffset="0"
                        data-thickness=".15" data-linecap="round" data-width="130"
                        data-height="130" data-inputColor="#e1e1e1" data-readOnly="true"
                        data-fgColor="#FF5722" data-knob-icon="ft-trending-up">
                        <ul class="list-inline clearfix mt-1 mb-0">
                          <li>
                            <h2 class="grey darken-1 text-bold-400">10</h2>
                            <span class="deep-orange">Miles Today's Target</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                    <div class="my-1 text-center">
                      <div class="card-header mb-2 pt-0">
                        <span class="success">Calories</span>
                        <h3 class="font-large-2 text-bold-200">4,025
                          <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span>
                        </h3>
                      </div>
                      <div class="card-content">
                        <input type="text" value="81" class="knob hide-value responsive angle-offset" data-angleOffset="20"
                        data-thickness=".15" data-linecap="round" data-width="130"
                        data-height="130" data-inputColor="#e1e1e1" data-readOnly="true"
                        data-fgColor="#009688" data-knob-icon="ft-target">
                        <ul class="list-inline clearfix mt-1 mb-0">
                          <li>
                            <h2 class="grey darken-1 text-bold-400">5000</h2>
                            <span class="success">kcla Today's Target</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="my-1 text-center">
                      <div class="card-header mb-2 pt-0">
                        <span class="danger">Heart Rate</span>
                        <h3 class="font-large-2 text-bold-200">102
                          <span class="font-medium-1 grey darken-1 text-bold-400">BPM</span>
                        </h3>
                      </div>
                      <div class="card-content">
                        <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="20"
                        data-thickness=".15" data-linecap="round" data-width="130"
                        data-height="130" data-inputColor="#e1e1e1" data-readOnly="true"
                        data-fgColor="#DA4453" data-knob-icon="ft-heart">
                        <ul class="list-inline clearfix mt-1 mb-0">
                          <li>
                            <h2 class="grey darken-1 text-bold-400">125</h2>
                            <span class="danger">BPM Highest</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ fitness target -->


        



      </div>
    </div>
  </div>

@endsection