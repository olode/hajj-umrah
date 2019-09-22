<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Direction;
use App\Model\TripInfo;
use App\Model\Arrival;
use App\Model\Departure;
use App\Model\Mazarat;
use App\Model\BetweenCity;
use DB;

class TrackingMovementController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

   $arrivals = Arrival::Select('id', 'trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'arrival_time', 'arrival_date', 'journey_number', 'advance_standby', 'day')
                        ->where('arrival_date', date('Y-m-d'))->get();
   $departures = Departure::Select('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'departure_time', 'departure_date', 'journey_number', 'advance_standby', 'day')
                        ->where('departure_date', date('Y-m-d'))->get();
   $mazarat = Mazarat::Select('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'mazar_time', 'mazar_date', 'journey_number', 'advance_standby', 'day')
                        ->where('mazar_date', date('Y-m-d'))->get();
   $between_cities = BetweenCity::Select('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'move_time', 'move_date', 'journey_number', 'advance_standby', 'day')
                        ->where('move_date', date('Y-m-d'))->get();
    
    return view('admin.dashboard.tracking-movement.index',compact('arrivals', 'departures', 'mazarat', 'between_cities'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {


  }

  /**
   * Store a newly created resource in storage.d
   *
   * @return Response
   */
  public function store(Request $request)
  {

    
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