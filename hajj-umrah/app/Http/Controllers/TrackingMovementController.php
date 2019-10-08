<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransportCompany;
use App\Model\Representative;
use App\Model\Direction;
use App\Model\TripInfo;
use App\Model\Trip;
use RealRashid\SweetAlert\Facades\Alert;



class TrackingMovementController extends Controller 
{

  public function __construct()
    {
        $this->middleware('auth');
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {



   $trips = Trip::Select('id', 'trip_info_id', 'trip_type_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'time', 'date', 'trip_number', 'advance_standby', 'day', 'completed')
                        ->where('date', date('Y-m-d'))->get();
    
    return view('admin.dashboard.tracking-movement.index',compact('trips'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
    
    return view('admin.dashboard.tracking-movement.create');

  }

  /**
   * Store a newly created resource in storage.d
   *
   * @return Response
   */
  public function store(Request $request)
  {
   
    //dd($request->all());

    TransportCompany::create(['name'=>$request->name, 
                              'trip_id'=>$request->trip_id, 
                              'driver_name'=>$request->driver_name, 
                              'driver_id'=>$request->driver_id, 
                              'phone'=>$request->phone, 
                              'car_plate'=>$request->car_plate ]);

       Representative::create(['trip_id'=>$request->trip_id, 
                              'name'=>$request->representative_name, 
                              'phone'=>$request->representative_phone, 
                              'recipient'=>$request->recipient_name, 
                              'terminator'=>$request->terminator  ]);
                              
        $trip = Trip::Find($request->trip_id);
        //dd($trip);
        $trip->completed = 1;
        $trip->save();


    if($request->trip_get != null){
      
      $trips = Trip::all();

      return view('admin.dashboard.trip.index', compact('trips'));
    }else{


      $trips = Trip::Select('id', 'trip_info_id', 'trip_type_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'time', 'date', 'trip_number', 'advance_standby', 'day', 'completed')
      ->where('date', date('Y-m-d'))->get();
      Alert::success('تمت العملية بنجاح', 'تم إصافة معلومات النقل ');
      return view('admin.dashboard.tracking-movement.index',compact('trips'));

    }


    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>