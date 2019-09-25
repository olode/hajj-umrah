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
                  <h4 class="card-title">عرض الموظفين</h4>
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
                    <table class="table table-striped table-bordered dom-jQuery-events">
                      <thead>
                        <tr>
                          <th>الاسم</th>
                          <th>الهاتف</th>
                          <th>البريد الالكتروني</th>
                          <th>اسم المستخدم</th>
                          <th>نوع المستخدم</th>
                          <th>اعدادات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employies as $employee)  
                          <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->phone_number}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->username}}</td>
                            <td>{{$employee->rule_id}}</td>
                            <td>
                            <form action="#" method="post"><button type="submit" class="badge badge-warning">تعديل</button></form>
                            <button class="badge badge-danger">حذف</button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>الاسم</th>
                          <th>الهاتف</th>
                          <th>البريد الالكتروني</th>
                          <th>اسم المستخدم</th>
                          <th>نوع المستخدم</th>
                          <th>اعدادات</th>
                            
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


















  