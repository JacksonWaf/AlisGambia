<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use App\Models\Item;
use App\Models\Metric;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		//List all items
		$facility_id =  Auth::user()->facility->id;
		$items = Item::orderBy('name', 'ASC')->get()->where('facility_id', $facility_id);
		//	Barcode
		$barcode = Barcode::first();
		//Load the view and pass the items
		return view('inventory.item.index')->with('items', $items)->with('barcode', $barcode);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		//Create Item
		$metrics = Metric::all()->pluck('name', 'id')->toArray();
		return view('inventory.item.create')->with('metrics', $metrics);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request)
	{
		//Validation
		$itemname = $request->get('name') . " - " . Auth::user()->facility->code;

		$rules = array('name' => 'required');
		// $rules = array('name' => 'required|unique:inv_items,name');
		$validator = Validator::make($request->all(), $rules);

		//process
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		} else {
			//store
			// dd($itemname);
			$item = new Item;
			$item->name = $itemname;
			$item->unit = $request->get('unit');
			$item->remarks = $request->get('remarks');
			$item->min_level = $request->get('min_level');
			$item->max_level = $request->get('max_level');
			$item->storage_req = $request->get('storage_req');
			$facility_id =  Auth::user()->facility->id;
			$item->facility_id = $facility_id;

			$item->user_id = Auth::user()->id;
			try {
				$item->save();
				$url = Session::get('SOURCE_URL');

				return redirect()->to($url)
					->with('message', trans('messages.record-successfully-saved'))->with('activeitem', $item->id);
			} catch (QueryException $e) {
				Log::error($e);
			}
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		//show a Item
		$item = Item::find($id);
		//	Barcode
		$barcode = Barcode::first();
		//show the view and pass the $item to it
		return view('inventory.item.show')->with('item', $item)->with('barcode', $barcode);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		//Get the Item
		$item = Item::find($id);
		$metrics = Metric::all()->pluck('name', 'id')->toArray();
		//Open the Edit View and pass to it the $item
		return view('inventory.item.edit')->with('item', $item)->with('metrics', $metrics);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param int $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(Request $request, $id)
	{
		//Validate
		$rules = array('name' => 'required');
		$validator = Validator::make($request->all(), $rules);

		// process the login
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput($request->except('password'));
		} else {
			//store
			$item = Item::find($id);
			$item->name = $request->get('name');
			$item->unit = $request->get('unit');
			$item->remarks = $request->get('remarks');
			$item->min_level = $request->get('min_level');
			$item->max_level = $request->get('max_level');
			$item->storage_req = $request->get('storage_req');

			$item->user_id = Auth::user()->id;
			$item->save();

			// redirect
			$url = Session::get('SOURCE_URL');

			return redirect()->to($url)
				->with('message', trans('messages.record-successfully-updated'))->with('activeitem', $item->id);
		}
	}

	//Method for uploading stock status
	public function stock_upload_view(Request $request)
	{

		$sql = "select s.id as record_id, t.name as commodity,sp.name as supplier,t.unit, s.lot, s.batch_no, s.expiry_date, s.quantity_supplied, SUM(u.quantity_used) AS used, u.issued_by, us.facility_id FROM inv_supply s JOIN inv_items t ON (s.item_id = t.id) JOIN suppliers sp ON(s.supplier_id = sp.id) LEFT JOIN inv_usage u ON(u.stock_id = s.id) LEFT JOIN users us ON(s.user_id = us.id) GROUP BY s.id, t.name,sp.name,s.lot,s.batch_no,s.expiry_date,s.quantity_supplied,u.quantity_used,u.issued_by, us.facility_id";
		$records = DB::select($sql);


		return view('poc.stock_view')->with('records', $records);
	}

	public function stock_upload()
	{

		$sql = "select s.id as record_id, t.name as commodity,sp.name as supplier,t.unit, s.lot, s.batch_no, s.expiry_date, s.date_of_reception, s.quantity_supplied, SUM(u.quantity_used) AS used, u.issued_by, us.facility_id FROM inv_supply s JOIN inv_items t ON (s.item_id = t.id) JOIN suppliers sp ON(s.supplier_id = sp.id) LEFT JOIN inv_usage u ON(u.stock_id = s.id) LEFT JOIN users us ON(s.user_id = us.id) GROUP BY s.id, t.name,sp.name,s.lot,s.batch_no,s.expiry_date,s.quantity_supplied,u.quantity_used,u.issued_by, us.facility_id";

		// dd(\DB::select($sql));
		if (!$sock = @fsockopen('www.google.com', 80)) {
			return response()->json('No internet connection');
		} else {

			$data = DB::select($sql);
			// $recordss = json_encode($data);
			// $records = json_decode($recordss, true);
			// // dd($records);
			// try{
			// $client = new GuzzleHttp\Client();
			$url = 'http://45.56.79.87:8080/inventory_data/';
			// $url = 'https://www.cphluganda.org/poc_data_pull/';
			$client = new \GuzzleHttp\Client(['base_uri' => $url, 'verify' => false]);

			$res = $client->post('/inventory_data', [
				'json' => [
					$data
				]

			]);
		}
		return view('user.poc_success');
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
	/**
	 * Remove the specified resource from storage (soft delete).
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function delete($id)
	{
		//Soft delete the Item
		$item = Item::find($id);
		$url = Session::get('SOURCE_URL');
		if (count($item->stocks) > 0 || count($item->requests) > 0) {
			return redirect()->to($url)->with('message', trans('messages.failure-delete-record'));
		} else {
			$item->delete();
			return redirect()->to($url)->with('message', trans('messages.record-successfully-deleted'));
		}
	}
}
