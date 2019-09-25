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
                    <h4 class="form-section"><i class="ft-user"></i>معلومات الموظف  </h4>
                    <hr>
                      <p></p>
                    </div>
                    <form action="{{route('employee.updatepassword',$user->id)}}" method="POST" enctype="multipart/form-data">
                      {{ method_field('PUT') }}
                      @csrf
                        <!-- Form wizard with step validation section start -->
                        <section id="validation">
                        <div class="row justify-content-md-center">
                            <div class="col-12">
                                <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="form-group">
                                        <label for="password">تغيير كلمة المرور</label>
                                        <input type="text" id="password"  minlength="8" maxlength="15" required class="form-control @error('password') is-invalid @enderror" placeholder="ادخل كلمة المرور الجديدة" name="password" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> حفظ
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- Form wizard with step validation section end -->
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