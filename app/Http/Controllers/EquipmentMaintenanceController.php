<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\UNHLSEquipmentInventory;
use App\Models\UNHLSEquipmentMaintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EquipmentMaintenanceController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		//
		$facility_id =  Auth::user()->facility->id;
		$list = UNHLSEquipmentMaintenance::get()->where('facility_id', $facility_id);
		return view('equipment.maintenance.index')
			->with('list', $list);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		//

		$equipment_list = UNHLSEquipmentInventory::get()->pluck('name', 'id')->toArray();
		$supplier_list = Supplier::get()->pluck('name', 'id')->toArray();
		return view('equipment.maintenance.create')
			->with('equipment_list', $equipment_list)
			->with('supplier_list', $supplier_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request)
	{
		//
		$rules = array(
			'equipment_id' => 'required',
			'service_date' => 'required',
			'next_service_date' => 'required',
			'serviced_by' => 'required',
			'serviced_by_phone' => 'required',
			'supplier_id' => 'required'

		);

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		} else {

			$item = new UNHLSEquipmentMaintenance;

			$year = date("Y");
			$currentyear = date("Y", strtotime("-1 year"));
			$item->district_id = Auth::user()->facility->district_id;
			$item->facility_id = Auth::user()->facility->id;
			$item->year_id = $currentyear . '/' . $year;

			$item->equipment_id = $request->get('equipment_id');
			$item->last_service_date = $request->get('service_date');
			$item->next_service_date = $request->get('next_service_date');
			$item->serviced_by_name = $request->get('serviced_by');
			$item->serviced_by_contact = $request->get('serviced_by_phone');
			$item->supplier_id = $request->get('supplier_id');
			$item->comment = $request->get('comment');

			$item->save();

			return redirect('equipmentmaintenance');
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
