<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UNHLSFacility;
use App\Models\UNHLSFacilityLevel;

class FacilitySettingsController extends Controller
{
    public function index(Request $request)
    {

        $details = UNHLSFacility::get();
        $level_details = UNHLSFacilityLevel::all();
        $address_info = config('kblis.address-info');
        $telephone_number = config('kblis.telephone-number');
        $email_address = config('kblis.email-address');
        //dd($details);

        // Load the view and pass the patients
        return view('settings.facility')
            ->with('details', $details)
            ->with('level_details', $level_details)
            ->with('address_info', $address_info)
            ->with('telephone_number', $telephone_number)
            ->with('email_address', $email_address)
            ->withInput($request->all());
    }

    public function create()
    {

        //Create Patient
        $ulinFormat = AdhocConfig::where('name','ULIN')->first()->getULINFormat();
        return view('settings.update')
            ->with('ulinFormat', $ulinFormat);
    }

    public function store(Request $request)
    {
        $filename = config('try'); // the file to change
        $search = config('try.FACILITY_ID'); // the content after which you want to insert new stuff
        $insert_facility_id = '123'; // your new stuff
        $insert_facility_name = 'New York'; // your new stuff
        $insert_district_name = 'UK'; // your new stuff
       
        config(['try.FACILITY_ID' => $insert_facility_id]);
        config(['try.FACILITY_NAME' => $insert_facility_name]);
        config(['try.DISTRICT_NAME' => $insert_district_name]);
        // open config file for writing
        $fp = fopen(base_path() .'/config/try.php' , 'w');
        // write updated runtime config to file
        fwrite($fp, '<?php return ' . var_export(config('try'), true) . ';');
        // close the file
        fclose($fp);

        $url = Session::get('SOURCE_URL');
            return redirect()->to($url)
                ->with('message', 'The facility details were successfully updated!');
    }
}
