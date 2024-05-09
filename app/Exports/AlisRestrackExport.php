<?php

namespace App\Exports;

use App\Models\UnhlsTest;
use App\Models\Drug;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AlisRestrackExport implements FromView
{
    use Exportable;

    protected $dateFrom, $dateTo;

    public function __construct($dateFrom, $dateTo)
    {

        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }


    public function view(): View
    {
        // dd($this->dateFrom);
        $sql = "SELECT DISTINCT(ut.sample_tracker_barcode) AS 'SAMPLE_BARCODE', utl.visit_id AS 'VISIT_ID', uv.patient_id AS 'PATIENT_ID', up.name AS 'FULL_NAME', up.ulin AS 'ULIN', IF(up.gender>0, 'FEMALE', 'MALE') AS 'GENDER', up.nationality AS 'NATIONALITY', ut.time_created AS 'TIME_CREATED', up.village_residence AS 'RESIDENCE' FROM unhls_tests ut LEFT JOIN unhls_tests utl ON utl.visit_id = ut.visit_id LEFT JOIN unhls_visits uv ON uv.id = utl.visit_id LEFT JOIN unhls_patients up ON up.id = uv.patient_id WHERE ut.sample_tracker_barcode IS NOT NULL";
        $new_con = \DB::connection('mysql_restrack');
        // using the connection in eloquent
        $patients = $new_con->select("SELECT sp.facilityid, fl.name as 'Source_Facility', 
        sp.patient_id, sp.patient_name as 'Patient_Name', sp.barcode as 'Sample_Barcode', 
        sp.test_type, sp.package_id, pk.barcode as 'Package_Barcode', 
        tt.name as 'Suspected_Disease', sp.date_picked from samples sp 
        left join facility fl on fl.id = sp.facilityid 
        left join package pk on pk.id = sp.package_id 
        left join testtypes tt on tt.id = sp.test_type 
        where sp.patient_id is not null and date(sp.date_picked) between '" .$this->dateFrom. "' AND '".$this->dateTo."'");
        
        // $patients = \DB::select($sql);
        // dd($qry);
        $drugs = Drug::orderBy('name', 'asc')->get();

        $isolatedOrganisms = UnhlsTest::selectRaw('specimens.time_accepted as Recieved, specimens.time_collected as collected,
            unhls_patients.patient_number as number, unhls_patients.ulin as labID,  unhls_patients.name as PatientName,unhls_patients.admission_date,
            unhls_districts.name as DistrictofResident,unhls_visits.hospitalized, unhls_patients.gender, unhls_patients.dob as age,
            unhls_visits.visit_type,unhls_visits.on_antibiotics as onAntibiotics ,wards.name as Ward,micro_patients_details.clinical_notes as diagnosis, specimen_types.name as SpecimenType,
            unhls_tests.test_type_id, micro_patients_details.days_on_antibiotic as DonAntibiotics,unhls_tests.id as testID,
            group_concat(distinct drugs.name) as Drugs, organisms.name as IsolatedOrganism, isolated_organisms.id as isoID')

            ->leftjoin('unhls_visits', 'unhls_visits.id', '=', 'unhls_tests.visit_id')
            ->leftjoin('wards', 'wards.id', '=', 'unhls_visits.ward_id')
            ->leftjoin('unhls_patients', 'unhls_patients.id', '=', 'unhls_visits.patient_id')
            ->leftjoin('unhls_districts', 'unhls_districts.id', '=', 'unhls_patients.district_residence')
            ->leftjoin('micro_patients_details', 'unhls_patients.id', '=', 'micro_patients_details.patient_id')
            ->leftjoin('patient_antibiotics', 'patient_antibiotics.patient_id', '=', 'unhls_patients.id')
            ->leftjoin('drugs', 'drugs.id', '=', 'patient_antibiotics.drug_id')
            ->leftjoin('specimens', 'specimens.id', '=', 'unhls_tests.specimen_id')
            ->leftjoin('specimen_types', 'specimen_types.id', '=', 'specimens.specimen_type_id')
            ->leftjoin('isolated_organisms', 'unhls_tests.id', '=', 'isolated_organisms.test_id')
            ->leftjoin('organisms', 'organisms.id', '=', 'isolated_organisms.organism_id')
            ->leftjoin('drug_susceptibility', 'isolated_organisms.id', '=', 'drug_susceptibility.isolated_organism_id')
            ->leftjoin('drug_susceptibility_measures', 'drug_susceptibility_measures.id', '=', 'drug_susceptibility.drug_susceptibility_measure_id')
            ->where('unhls_tests.test_type_id', '=', 18)
            ->where('unhls_tests.test_status_id', '!=', UnhlsTest::REJECTED)
            ->whereBetween('specimens.time_accepted', [$this->dateFrom, $this->dateTo . ' 23:59:59'])
            ->orderBy('specimens.time_accepted', 'DESC')
            ->groupBy('unhls_patients.name', 'specimens.time_accepted', 'specimens.time_collected', 'unhls_patients.patient_number', 'unhls_patients.ulin', 'unhls_patients.admission_date', 'unhls_districts.name', 'unhls_patients.gender', 'unhls_visits.hospitalized', 'unhls_patients.dob', 'unhls_visits.visit_type', 'onAntibiotics', 'Ward', 'diagnosis', 'SpecimenType', 'unhls_tests.test_type_id', 'DonAntibiotics', 'testID', 'drugs.name', 'IsolatedOrganism', 'isoID')
            ->groupBy('isolated_organisms.id')
            ->orderBy('specimens.time_accepted', 'DESC')
            ->get();

        return view('reports.alisrestrack.export', compact('isolatedOrganisms', 'drugs', 'patients'));
    }
}
