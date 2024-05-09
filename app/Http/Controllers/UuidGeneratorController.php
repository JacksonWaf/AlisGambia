<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\UuidGenerator;
use App\Models\UnhlsFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UuidGeneratorController extends Controller
{

    /**
     * Reset Unique Lab Identification Number to desired number
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reset(Request $request)
    {

        $facility_id = Auth::user()->facility->id;
        $facility = UnhlsFacility::where('id', $facility_id)->first();
        $rules = array('image' => 'required');
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {

            if ($request->hasFile('image')) {

                try {

                    $extension = $request->file('image')->getClientOriginalExtension();
                    $destination = public_path() . '/i/users/';
                    $filename = "facility-$facility_id.$extension";
                    $file = $request->file('image')->move($destination, $filename);
                    $facility->image_stamp = "/i/users/$filename";
                    $facility->save();
                    return redirect()->route('resetulin.create')->with('message', 'Facility Stamp Has Been Successfully Updated');
                } catch (Exception $e) {
                }
            }

            // $incrementNum = $request->get('incrementNum');
            // $url = Session::get('SOURCE_URL');

            // $uuid = new UuidGenerator;

            // if ($incrementNum > 1) {
            //     $uuid->truncate();
            //     $uuid->id = $incrementNum;
            //     $uuid->counter = $incrementNum;
            //     $uuid->save();
            //     return redirect()->to($url)->with('message', 'Success! The next ULIN will now start at: ' . $incrementNum);
            // } else {
            //     $uuid->truncate();

            //     return redirect()->route('resetulin.create')->with('message', 'ULIN has been succesfully reset to 1');
            // }
        }
    }

    public function specimen_collection(Request $request)
    {

        $rules = array('incrementNum' => 'required');

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //return Redirect::route('resetulin.create')->with('message', 'Please Enter a number to reset to');
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            DB::statement("ALTER TABLE `specimens` CHANGE `specimen_status_id` `specimen_status_id` INT(10) UNSIGNED NOT NULL DEFAULT '1'");

            return redirect()->route('resetulin.create')->with('message', 'Sample collection option activated');
        }
    }
    /**
     * Display a listing of the resource.
     * GET /uuidgenerator
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /uuidgenerator/create
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $facility_id = Auth::user()->facility->id;
        $facility = UnhlsFacility::where('id', $facility_id)->first();
        return view('resetulin.create')->with('facility', $facility);
    }

    /**
     * Store a newly created resource in storage.
     * POST /uuidgenerator
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /uuidgenerator/{id}
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
     * GET /uuidgenerator/{id}/edit
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
     * PUT /uuidgenerator/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_stamps()
    {

        return view('user.create_stamps');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /uuidgenerator/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
