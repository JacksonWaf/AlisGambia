<table>
    <thead>
        <tr>
            <th>Source Facility</th>
            <th>Patient Name</th>
            <th>Sample Barcode</th>
            <th>Package Barcode</th>
            <th>Suspected Disease</th>
            <th>Time Picked</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->Source_Facility }}</td>
            <td>{{ $patient->Patient_Name }}</td>
            <td>{{ $patient->Sample_Barcode }}</td>
            <td>{{ $patient->Package_Barcode }}</td>
            <td>{{ $patient->Suspected_Disease }}</td>
            <td>{{ $patient->date_picked }}</td>
        </tr>
        @endforeach
        <!-- @foreach($isolatedOrganisms as $isolatedOrganism)
        <tr>
            <td>{{ substr($isolatedOrganism->Recieved,0,-9) }}</td>
            <td>{{ substr($isolatedOrganism->collected,0,-9) }}</td>
            <td>{{ $isolatedOrganism->number }}</td>
            <td>{{ $isolatedOrganism->labID }}</td>
            <td>{{ $isolatedOrganism->PatientName }}</td>
            <td>{{ $isolatedOrganism->Ward }}</td>
            <td>{{ ($isolatedOrganism->gender == 1) ? 'F' : 'M' }}</td>
            <td>{{ $isolatedOrganism->age }}</td>
            <td>{{ ($isolatedOrganism->hospitalized == 1) ? 'Yes' : (($isolatedOrganism->hospitalized == '0') ? 'No' : '') }}</td>
            <td>{{ ($isolatedOrganism->onAntibiotics == 1) ? 'Yes' : '' }}</td>
            <td>{{ $isolatedOrganism->DonAntibiotics }}</td>
            <td>{{ $isolatedOrganism->Drugs }}</td>
            <td>{{ $isolatedOrganism->diagnosis }}</td>
            <td>{{ $isolatedOrganism->SpecimenType }}</td>
            <td>{{ $isolatedOrganism->admission_date }}</td>
            <td>{{ $isolatedOrganism->IsolatedOrganism }}</td>
            @foreach ($drugs as $drug)
            <td>
                {{ \getIsolatedOrganismResult($isolatedOrganism->isoID, $drug->id) }}
            </td>
            @endforeach
        </tr>
        @endforeach -->
    </tbody>
</table>