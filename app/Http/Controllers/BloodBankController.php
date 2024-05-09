<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\BloodTransfusion;
use App\Models\BloodTransfer;
use DateTime;
use PDF;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use LaravelQRCode\Facades\QRCode;

class BloodBankController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		// List all the active specimens
			$bloodunits = BloodBank::where('status','0')->orderBy('id', 'DESC')->get();
			$bloodunits_transfered = BloodTransfer::orderBy('id', 'DESC')->get();
			$bloodunits_used = BloodBank::where('status','1')->orderBy('id', 'DESC')->get();

		// Load the view and pass the bloodunits
		return view('bloodbank.index')->with('bloodunits', $bloodunits)
										->with('bloodunits_transfered', $bloodunits_transfered)
										->with('bloodunits_used', $bloodunits_used);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		//Create Specimen
		return view('bloodbank.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(Request $request)
	{
		//
		$request->validate([
            'unit_no' => 'required',
            'group' => 'required',
            'blood_component' => 'required',
            'amount' => 'required',
            'donation_date' => 'required',
            'expiry_date' => 'required'

        ], [
            'unit_no.required' => 'Unit number is required',
            'group.required' => 'Blood group required',
            'blood_component.required' => 'Blood component required',
            'amount.required' => 'Amount required',
            'donation_date.required' => 'Donation date required',
            'expiry_date.required' => 'Expiry date required'
        ]);
			// store
			$specimen = new BloodBank;
			$specimen->unit_no = $request->get('unit_no');
			$specimen->group = $request->get('group');
			// $specimen->rhs = $request->get('rhs');
			$specimen->blood_component = $request->get('blood_component');
			$specimen->amount = $request->get('amount');
			$specimen->donation_date = $request->get('donation_date');
			$specimen->expiry_date = $request->get('expiry_date');
			$specimen->created_by = Auth::user()->id;
		
			$specimen->save();
			
			return redirect()->route('bloodbank.index')
                    ->with('message', trans('messages.success-creating-blood-unit'));
			

			// redirect
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showDetails($id)
	{
		//Show a specimen
		$specimen = BloodBank::find($id);

		//Show the view and pass the $specimen to it
		return view('bloodbank.show')->with('specimen', $specimen);
	}
	public function show($id)
	{
		//Show a specimen
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		//Get the specimen
		$specimen = BloodBank::find($id);

		//Open the Edit View and pass to it the $specimen
		return view('bloodbank.edit')->with('specimen', $specimen);
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
		//
		$request->validate([
            'unit_no' => 'required',
            'group' => 'required',
            'blood_component' => 'required',
            'amount' => 'required',
            'donation_date' => 'required',
            'status' => 'required',
            'expiry_date' => 'required'

        ], [
            'unit_no.required' => 'Unit number is required',
            'group.required' => 'Blood group required',
            'blood_component.required' => 'Blood component required',
            'amount.required' => 'Amount required',
            'donation_date.required' => 'Donation date required',
            'status.required' => 'Blood unit status required',
            'expiry_date.required' => 'Expiry date required'
        ]);
			// Update
			$specimen = BloodBank::find($id);
			$specimen->unit_no = $request->get('unit_no');
			$specimen->group = $request->get('group');
			// $specimen->rhs = $request->get('rhs');
			$specimen->blood_component = $request->get('blood_component');
			$specimen->amount = $request->get('amount');
			$specimen->donation_date = $request->get('donation_date');
			$specimen->expiry_date = $request->get('expiry_date');
			$specimen->status = $request->get('status');
			$specimen->save();

			// redirect
			$url = Session::get('SOURCE_URL');

			return redirect()->route('bloodbank.index')
			->with('message', trans('messages.success-updating-blood-unit'))->with('activespecimen', $specimen ->id);

	}

	public function transfer($specimenID)
    {
        $specimen = BloodBank::find($specimenID);
        return view('bloodbank.transfer')->with('specimen', $specimen);
    }

	public function transfer_update(Request $request)
	{
		//
		$request->validate([
            'transfer_reason' => 'required',
            'destination' => 'required',
            'reference' => 'required',
            'date' => 'required'

        ], [
            'transfer_reason.required' => 'Transfer reason is required',
            'destination.required' => 'destination required',
            'reference.required' => 'Person talked to required',
            'date.required' => 'Date required'
        ]);
			$transfer = new BloodTransfer;
			$transfer->blood_bank_id = $request->get('blood_bank_id');
			$transfer->transfer_reason = $request->get('transfer_reason');
			$transfer->destination = $request->get('destination');
			$transfer->reference = $request->get('reference');
			$transfer->date = $request->get('date');
			$transfer->created_by = Auth::user()->id;
			$transfer->save();

			// Update blood unit status
			$specimen = BloodBank::find($request->get('blood_bank_id')); 
            $specimen->status = BloodBank::TRANSFERED;
            $specimen->save();

			// redirect
			$url = Session::get('SOURCE_URL');

			return redirect()->route('bloodbank.index')
			->with('message', trans('messages.success-updating-blood-unit'))->with('activespecimen', $transfer ->id);

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
		//Soft delete the specimen
		$specimen = UnhlsSpecimen::find($id);
		$inUseByTesttype = $specimen->testTypes->toArray();
		$inUseBySpecimen = $specimen->specimen->toArray();
		if (empty($inUseByTesttype) && empty($inUseBySpecimen)) {
		    // The specimen type is not in use
			$specimen->delete();
		} else {
		    // The specimen type is in use
		    return redirect()->route('specimen.index')
		    	->with('message', trans('messages.failure-specimen-type-in-use'));
		}
		// redirect
		  $url = Session::get('SOURCE_URL');

			return redirect()->to($url)
			->with('message', trans('messages.success-updating-specimen-type'));
	}
}
