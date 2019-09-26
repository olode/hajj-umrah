@extends('admin.layouts.master')


@section('content')


<?php 

  if(@$_GET['trip']){

   $trip_get = $_GET['trip'];
  }

?>

  <!-- Horizontal navigation-->
  <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-body">

        <!-- Form wizard with step validation section start -->
        <section id="validation">
          <div class="row justify-content-md-center">
            <div class="col-6">

          
            <div class="card" style="height: auto;">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">اضافة معلومات شركة النقل والمندوب</h4>
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
                    <h4 class="form-section"><i class="ft-globe"></i>&nbsp;&nbsp;شركة النقل </h4>
                    <hr>
                      <p></p>
                    </div>
                    <form class="form" method="POST" action="{{route('tracking-movement.store')}}">
                        @csrf
                    <div class="form-body">

                    
                    <input name="id" type="text" value="{{$_GET['id']}}" hidden>
                    <input name="trip_get" type="text" value="{{@$trip_get}}" hidden>
                        <div class="form-group">
                          <label for="issueinput1">اسم الشركة </label>
                          <input type="text" maxlength="20" minlength="7" required id="issueinput1" class="form-control" placeholder="اسم الشركة" name="name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم السائق</label>
                          <input type="text" maxlength="20" minlength="6" required id="issueinput1" class="form-control" placeholder="اسم السائق" name="driver_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم هوية السائق</label>
                          <input type="text" id="issueinput2" maxlength="10" minlength="10" required class="form-control" placeholder="رقم هوية السائق" name="driver_id" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">رقم  جوال السائق</label>
                          <input type="text" id="issueinput2" maxlength="15" minlength="10" required class="form-control" placeholder="رقم  جوال السائق" name="phone" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">رقم لوحة السيارة</label>
                          <input type="text" id="issueinput2" maxlength="5" minlength="2" required class="form-control" placeholder="رقم لوحة السيارة" name="car_plate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>

                        <div class="card-text">
                          <h4 class="form-section"><i class="ft-user"></i> المندوب </h4>
                          <p></p>
                        </div>


                
                        <div class="form-group">
                          <label for="issueinput1">اسم مستلم الحالة </label>
                          <input type="text" id="issueinput1" maxlength="20" minlength="6" required class="form-control" placeholder="اسم مستلم الحالة" name="recipient_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput1"> اسم المندوب</label>
                          <input type="text" id="issueinput1" maxlength="20" minlength="6" required class="form-control" placeholder="اسم المندوب" name="representative_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                        </div>

                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="issueinput2">رقم المندوب</label>
                          <input type="text" id="issueinput2" maxlength="15" minlength="10" required class="form-control" placeholder="رقم المندوب" name="representative_phone" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                        </div>
                          </div>
                        </div>
                        

                        <div class="form-group">
                          <label for="issueinput2">منهي الحالة</label>
                          <input type="text" id="issueinput2" maxlength="20" minlength="6" required class="form-control" placeholder="منهي الحالة" name="terminator" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
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