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


            <div class="card" style="height: 741px;">
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
                    <form action="{{route('employee.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                      {{ method_field('PUT') }}
                      @csrf
                        <!-- Form wizard with step validation section start -->
                        <section id="validation">
                        <div class="row justify-content-md-center">
                            <div class="col-12">
            
            
                                <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form">
            
                                    <div class="form-body">
                                        <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input type="text" maxlength="20" minlength="10" required value="{{ $user->name }}" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="اسم الموظف" name="name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title" data-original-title="" title="" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input type="text" value="{{ $user->email }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="البريدالالكتروني" name="email" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="username">اسم المستخدم</label>
                                        <input type="text" minlength="5" maxlength="10" required value="{{ $user->username }}" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="اسم المستخدم" name="username" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="phone_number">الهاتف</label>
                                        <input type="text" maxlength="15" required minlength="10" value="{{ $user->phone_number }}" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="هاتف الموظف" name="phone_number" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By" data-original-title="" title="" required>
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="rule_id">نوع الموظف</label>
                                        <select id="rule_id" name="rule_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="" required>
                                            <option value="{{ $user->rule_id }}">اختر نوع الموظف</option>
                                            <option value="1">مشرف العام</option>
                                            <option value="2">مشرف</option>
                                        </select>
                                        </div>
                                        <a href="{{route('employee.password',$user->id)}}">اذا كنت ترغب بتغيير كلمة المرور اضغط هنا</a>
                                        
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