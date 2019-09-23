<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\TransportCompany;
use App\Model\Representative;
use App\Model\Direction;
use App\Model\TripType;
use App\Model\TripInfo;
use App\Model\Trip;

class TripController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
    $trips = Trip::all();

    return view('admin.dashboard.trip.index', compact('trips'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $trip_types = TripType::Select('id', 'type')->get();
    $directions = Direction::Select('id', 'name')->get();
    return view('admin.dashboard.trip.create',compact('directions', 'trip_types'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
    $last_inserted_id = TripInfo::create(['info'=>( TripInfo::Select('id')->latest()->first() != null ? TripInfo::Select('id')->latest()->first()->id + 1 : 1 ) .'-'.random_int(1000,9999)]);
    Trip::create(['trip_info_id'=>$last_inserted_id->id, 
                    'wakeel_name'=>$request->wakeel_name, 
                    'nationality'=>$request->nationality, 
                    'trip_type_id'=>$request->trip_type_id, 
                    'pilgram_count'=>$request->pilgram_count, 
                    'hotel'=>$request->hotel, 
                    'direction_id'=>$request->direction_id, 
                    'day'=>$request->day, 
                    'time'=>$request->time, 
                    'date'=>$request->date, 
                    'advance_standby'=>$request->advance_standby, 
                    'trip_number'=>$request->trip_number ]);

      return redirect()->back();
    // $directions = Direction::Select('id', 'name')->get();
    // return view('admin.dashboard.arrival.create')->with('directions', $directions);

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
    

    $completed = Trip::Select('completed')->where('id', $id)->first();
    if($completed->completed == 1){
      $trip = Trip::Find($id);
      $transport = TransportCompany::where('trip_id', $id)->first();
      $representative = Representative::where('trip_id', $id)->first();
      $trip_types = TripType::Select('id', 'type')->get();
      $directions = Direction::Select('id', 'name')->get();
      return view('admin.dashboard.trip.edit',compact('directions', 'trip_types', 'trip', 'transport', 'representative'));


    }elseif($completed->completed == 0){

      $trip = Trip::Find($id);
      $trip_types = TripType::Select('id', 'type')->get();
      $directions = Direction::Select('id', 'name')->get();
     return view('admin.dashboard.trip.edit',compact('directions', 'trip_types', 'trip'));
      
    }

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {

    $completed = Trip::Select('completed')->where('id', $id)->first();
    if($completed->completed == 1){
      $trip = Trip::Find($id);
      $trip->trip_type_id = $request->trip_type_id;
      $trip->wakeel_name = $request->wakeel_name;
      $trip->nationality = $request->nationality;
      $trip->pilgram_count = $request->pilgram_count;
      $trip->hotel = $request->hotel;
      $trip->direction_id = $request->direction_id;
      $trip->day = $request->day;
      $trip->time = $request->time;
      $trip->date = $request->date;
      $trip->advance_standby = $request->advance_standby;
      $trip->trip_number = $request->trip_number;
      $trip->save();

      $transport = TransportCompany::where('trip_id', $id)->first();
      $transport->name = $request->name;
      $transport->driver_name = $request->driver_name;
      $transport->driver_id = $request->driver_id;
      $transport->phone = $request->phone;
      $transport->car_plate = $request->car_plate;
      $transport->save();

      $representative = Representative::where('trip_id', $id)->first();
      $representative->recipient = $request->recipient_name ;
      $representative->name = $request->representative_name ;
      $representative->phone = $request->representative_phone ;
      $representative->terminator = $request->terminator ;
      $representative->save();



      $trips = Trip::all();
      return view('admin.dashboard.trip.index', compact('trips'));

    }elseif($completed->completed == 0){


      $trip = Trip::Find($id);
      $trip->trip_type_id = $request->trip_type_id;
      $trip->wakeel_name = $request->wakeel_name;
      $trip->nationality = $request->nationality;
      $trip->pilgram_count = $request->pilgram_count;
      $trip->hotel = $request->hotel;
      $trip->direction_id = $request->direction_id;
      $trip->day = $request->day;
      $trip->time = $request->time;
      $trip->date = $request->date;
      $trip->advance_standby = $request->advance_standby;
      $trip->trip_number = $request->trip_number;
      $trip->save();

      $trips = Trip::all();
      return view('admin.dashboard.trip.index', compact('trips'));

    }

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