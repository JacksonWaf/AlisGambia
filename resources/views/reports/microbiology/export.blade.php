<table>
    <thead>
    <tr>
        <th>Date Recieved</th>
        <th>Date Collected</th>
        <th>Patient ID</th>
        <th>Lab ID</th>
        <th>Patient Name</th>
        <th>Ward</th>
        <th>Sex</th>
        <th>Age</th>
        <th>Hospitalized for more than 2 days (48 hours) at time of specimen collection?</th>
        <th>On Antibiotics</th>
        <th>Days on Antibiotics</th>
        <th>List of Drugs</th>
        <th>Diagnosis</th>
        <th>Specimen Type</th>
        <th>Admission Date</th>
        <th>Organism</th>
        @foreach ($drugs as $drug)
        <th>{{$drug->name}}</th>
        @endforeach

    </tr>
    </thead>
    <tbody>
    @foreach($isolatedOrganisms as $isolatedOrganism)
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
    @endforeach
    </tbody>
</table>
