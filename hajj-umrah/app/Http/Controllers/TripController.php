<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Direction;
use App\Model\TripType;
use App\Model\TripInfo;
use App\Model\Trip;

class TripController extends Controller 
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