<?php

/**
 *   To aid quick referencing, keep entries in the same section ALPHABETICALLY ORDERED
 */

return [

    /**
     *   Generic names
     */

    'actions' => 'Actions',
    'add-another' => 'Add Another',
    'approve' => 'Approve',
    'approved' => 'Tests Approved',
    'back' => 'Previous Page',
    'both' => 'Both',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'create' => 'Create',
    'comment' => 'Comment',
    'date-created' => 'Date Created',
    'delete' => 'Delete',
    'description' => 'Description',
    'disease' => 'Disease|Diseases',
    'edit' => 'Edit',
    'email' => 'Email',
    'female' => 'Female',
    'for' => 'For',
    'email-address' => 'Email Address',
    'gender' => 'Gender',
    'horizontal' => 'Horizontal',
    'field-required' => 'This field is required',
    'full-name' => 'Full Name',
    'home' => 'Home',
    'image-alternative' => 'No photo available',
    'login' => 'Login',
    'male' => 'Male',
    'logout' => 'Logout',
    'name' => 'Name|Names',
    'names' => 'Names',
    'next' => 'Next',
    'password' => 'Password|Passwords',
    'photo' => 'Photo',
    'role' => 'Role|Roles',
    'save' => 'Save',
    'save-request' => 'Save and Request',
    'submit' => 'Submit',
    'save-all' => 'Save All',
    'type' => 'Type',
    'unit' => 'Unit',
    'update' => 'Update',
    'user' => 'User|Users',
    'username' => 'Username',
    'view' => 'View',
    'person' => 'Person',
    'contacts' => 'Contacts',
    'refer' => 'Refer',
    'in' => 'In',
    'others-specify' => 'Others (Specify)', //UNHLS entry
    'out' => 'Out',
    'vertical' => 'Vertical', //UNHLS terminology

    /**
     *   Generic phrases
     */
    'confirm-delete-title' => 'Confirm Delete',
    'confirm-delete-message' => 'Do you wish to delete this item?',
    'confirm-delete-irreversible' => 'This action is irreversible.',
    'court-of-arms' => 'Court of Arms',

    /**
     *   User
     */
    'create-user' => 'Create User',
    'change-password' => 'Change Password',
    'current-password' => 'Current Password',
    'designation' => 'Designation',
    'edit-user' => 'Edit User',
    'edit-user-details' => 'Edit User Details',
    'edit-profile' => 'Edit Profile',
    'failure-creating-user' => 'Failed to create user.',
    'incorrect-current-passord' => 'Incorrect \'' . trans('validation.attributes.current_password') . '\' Entered',
    'invalid-login' => 'Username and/or password invalid.',
    'new-password' => 'New Password',
    'new-user' => 'New User',
    'password-mismatch' => 'Passwords do not match',
    'repeat-password' => 'Retype Password',
    'reset-password' => 'Reset Password',
    'success-creating-user' => 'Successfully created the user!',
    'success-deleting-user' => 'The user was successfully deleted!',
    'user-details' => 'User Details',
    'user-profile-edit-success' => 'The user details were successfully updated!',
    'sample-patient' => 'Microbiology Specimen',

    /**
     *  Patient
     */

    'age' => 'Age',
    'create-patient' => 'Create Patient',
    'date-created' => 'Registration Date',
    'date-of-birth' => 'Date of Birth',
    'date-registered' => 'Registration Date',
    'edit-patient' => 'Edit Patient',
    'edit-patient-details' => 'Edit Patient Details',
    'email-address' => 'Email Address',
    'external-patient-number' => 'External Patient Number',
    'list-patients' => 'List Patients',
    'new-patient' => 'New Patient',
    'national-id' => 'National Identification No: (NIN)', //Unhls terminology
    'occupation' => 'Occupation', //Unhls entry
    'patient' => 'Patient|Patients',
    'patient-unhls' => 'Patient Information',
    'patient-details' => 'Patient Details',
    'patient-id' => 'Patient ID',
    'patient-contact' => 'Contact',
    //'patient-search-button' => 'Go!', UNHLS Terminology
    'patient-search-button' => 'View!',
    'patient-number' => 'Patient OPD/IPD Number.',
    'phone-number' => 'Phone Number',
    'physical-address' => 'Physical Address',
    'register-new-patient' => 'Register New Patient', //Unhls entry
    'view-patients' => 'View Existing Patients', //Unhls entry
    'residence-village' => 'Village of Residence', //Unhls entry
    'sex' => 'Sex', //Unhls prefers this to Gender
    'ulin' => 'ULIN',
    'workplace-village' => 'Village of Workplace', //Unhls entry

    /**
     *   Specimen
     */
    'not-paid' => 'Not Paid',
    'accept-specimen' => 'Accept',
    'accept-specimen-title' => 'Accept Specimen',
    'date-specimen-collected' => 'Date of Sample Collection', //unhls terminolgy
    'date-dispatch' => 'Date of Sample Dispatch', //UNHLS terminology
    'destination-facility' => 'Destination Facility/Hub', //unhls terminology
    'change-specimen' => 'Change',
    'change-specimen-title' => 'Change Specimen Type',
    'create-specimen-type' => 'Create Specimen Type',
    'collect-specimen-title' => 'Collect Sample',
    'edit-specimen-type' => 'Edit Specimen Type',
    'list-specimen-types' => 'List Specimen Types',
    'new-specimen-type' => 'New Specimen Type',
    'reject' => 'Reject',
    'reject-explained-to' => 'Person Talked To',
    'import-results-title' => 'Import PoC Results',
    'reject-title' => 'Reject Specimen',
    'rejection-reason' => 'Reason',
    'rejection-reason-title' => 'Rejection Reason',
    'reasons-for-referral' => 'Reasons for referral', //UNHLS terminology
    'specimen' => 'Specimen',
    'specimen-accepted' => 'Accepted',
    'specimen-accepted-label' => 'Specimen Accepted',
    'specimen-details' => 'Specimen Details',
    'specimen-id' => 'Specimen ID',
    'specimen-information' => 'Sample Information', //UNHLS terminology
    'specimen-number' => 'ID',
    'specimen-number-title' => 'Specimen ID',
    'specimen-not-collected' => 'Not Collected',
    'specimen-not-received-label' => 'Specimen Not Received',
    'specimen-rejected' => 'Rejected',
    'specimen-rejected-at-analysis' => 'Specimen Rejected at Analysis',
    'specimen-rejected-label' => 'Specimen Rejected',
    'specimen-status' => 'Status',
    'specimen-type' => 'Type|Specimen Types',
    'specimen-type-details' => 'Specimen Type Details',
    //'specimen-type-title' => 'Specimen Type',
    'specimen-type-title' => 'Sample Type', //UNHLS terminolgy of the above
    'storage-condition' => 'Storage Condition', //UNHLS terminolgy
    'success-rejecting-specimen' => 'The specimen was rejected!',
    'transport-type' => 'Type of Transport', //UNHLS terminology
    'update' => 'Update',
    'priority-of-specimen' => 'Priority of Specimen',
    'refer-sample' => 'Refer sample',
    'referrals' => 'Referrals',
    'referral-type' => 'Type of Referral',
    'referring-health-worker' => 'Referring Health Worker', //UNHLS terminology
    'rejecting-officer' => 'Recieving/Rejecting Officer',
    'specimen-successful-refer' => 'The specimen was referred',
    'specimen-referred-label' => 'Specimen Referred',
    'person-involved' => 'Person involved',
    'intended-reciepient' => 'Intended Reciepient',
    'originating-from' => 'Originating From',
    'referred-by' => 'Referred by',
    'recieved-by' => 'Recieved by',
    'collect-specimen' => 'Collect Sample',
    'time-specimen-collected' => 'Time Specimen Collected', //UNHLS terminolgy
    'time-dispatch' => 'Time of Sample dispatch: ', //UNHLS terminolgy
    'specimen-collected-by' => 'Specimen Collected and Recieved By', //UNHLS terminology

    /**
     *   Test Catalog
     */
    /*Measure*/
    'add-new-measure-range' => 'Add New Range',
    'add-new-measure' => 'Add New Measure',
    'agemax' => 'Age Max',
    'agemin' => 'Age Min',
    'create-measure' => 'Create Measure',
    'error-creating-measure' => 'Error occured while creating measure!',
    'edit-measure' => 'Edit Measure',
    'edit-measure-details' => 'Edit Measure Details',
    'failure-test-measure-in-use' => 'This Measure is in use',
    'freetext-measure-config-input-message' => 'A text box will appear for results entry',
    'list-measures' => 'List Measures',
    'measure' => 'Measure|Measures',
    'measure-age-range' => 'Age Range',
    'measure-details' => 'Measure Details',
    'measure-range' => 'Measure Range',
    'measure-range-values' => 'Range Values',
    'measure-type' => 'Measure Type',
    'new-measure' => 'New Measure',
    'range' => 'Range',
    'rangemin' => 'Range Lower Limit',
    'rangemax' => 'Range Upper Limit',
    'save-measure' => 'Save Measure',
    'select-measure-type' => 'Select Measure Type',
    'success-creating-measure' => 'Successfully created measure!',
    'success-deleting-measure' => 'Successfully deleted the Measure!',
    'success-updating-measure' => 'The measure details were successfully updated!',
    'update-measure' => 'Update Measure',
    'value' => 'Value',

    /*Specimen Type*/

    'failure-specimen-type-in-use' => 'This Specimen Type is in use',
    'success-creating-specimen-type' => 'Successfully created specimen type!',
    'success-deleting-specimen-type' => 'Successfully deleted the Specimen Type!',
    'success-updating-specimen-type' => 'The specimen type details were successfully updated!',

    /*Specimen Rejection*/

    'add-rejection-reason' => 'Add New Rejection Reason',
    'edit-rejection-reason' => ' Edit Rejection Reason',
    'failure-specimen-rejection-reason-in-use' => 'This Rejection Reason is in Use',
    'specimen-rejection' => 'Specimen Rejection',
    'success-creating-rejection-reason' => 'Rejection Reason Successfully Created',
    'success-deleting-rejection-reason' => 'Rejection Reason Successfully Deleted',
    'success-updating-rejection-reason' => 'Rejection Reason Successfully Updated',

    /*Test Categories*/

    'create-test-category' => 'Create Lab Section',
    'edit-test-category' => 'Edit Lab Section',
    'failure-test-category-in-use' => 'This category is a group of Test Types in use',
    'success-creating-test-category' => 'Successfully created Lab Section.',
    'success-deleting-test-category' => 'Successfully deleted the Lab Section.',
    'success-updating-test-category' => 'The lab section was successfully updated!',
    'test-category' => 'Lab Section|Lab Sections',
    'test-category-details' => 'Lab Section Details',
    'list-test-categories' => 'List Lab Sections',

    /* Test Types*/

    'compatible-specimen' => 'Compatible Specimen',
    'create-test-type' => 'Create Test Type',
    'edit-test-type' => 'Edit Test Type',
    'failure-test-type-in-use' => 'This Test Type is in use',
    'list-test-types' => 'List Test Types',
    'new-test-type' => 'New Test Type',
    'prevalence-threshold' => 'Prevalence Threshold',
    'select-measures' => 'Select Measures',
    'select-specimen-types' => 'Select Specimen Types',
    'success-creating-test-type' => 'Successfully created Test Type.',
    'success-deleting-test-type' => 'The Test Type was successfully deleted.',
    'success-updating-test-type' => 'The Test Type details were successfully updated.',
    'target-turnaround-time' => 'Target Turnaround Time',
    'test-type' => 'Test Type|Test Types',
    'test-type-details' => 'Test Type Details',
    'orderable-test' => 'Can order test',

    /* Drugs */

    'drug' => 'Drug|Drugs',
    'create-drug' => 'Create Drug',
    'edit-drug' => 'Edit Drug',
    'failure-drug-in-use' => 'This Drug is in use',
    'success-creating-drug' => 'Successfully created Drug.',
    'success-deleting-drug' => 'Successfully deleted the Drug.',
    'success-updating-drug' => 'The Drug was successfully updated!',
    'drug-details' => 'Drug Details',
    'list-drugs' => 'List Drugs',

    /* Organisms */

    'organism' => 'Organism|Organisms',
    'create-organism' => 'Create Organism',
    'edit-organism' => 'Edit Organism',
    'failure-organism-in-use' => 'This Organism is in use',
    'success-creating-organism' => 'Successfully created Organism.',
    'success-deleting-organism' => 'Successfully deleted the Organism.',
    'success-updating-organism' => 'The Organism was successfully updated!',
    'organism-details' => 'Organism Details',
    'list-organisms' => 'List Organisms',
    'compatible-drugs' => 'Compatible Drugs',
    'no-compatible-drugs' => 'No compatible drugs found for this organism.',
    /* Culture worksheet */
    'culture-worksheet' =>  'CULTURE WORKSHEET',
    'culture-work-up' =>  'CULTURE OBSERVATIONS AND WORK-UP',
    'show-culture-worksheet'    =>  'Show Culture Worksheet?',
    'select-organisms'  =>  'Select Organisms',
    'date'  =>  'Date',
    'tech-initials' =>  'Tech Initials',
    'observations-and-work-up'  =>  'Observations and work-up',
    'susceptibility-test-results'   =>  'SUSCEPTIBILITY TEST RESULTS',
    'select-isolates'   =>  'Select Isolated Organisms',
    'zone-size' =>  'Zone size (mm)',
    'interp'    =>  'Interpretation (S, I, R)',
    'set-to-completed' =>  'Set to Completed',

    /**
     *  Visits
     */
    'visit-status' => 'Status',
    'appointment-made' => 'New Visits',
    'test-request-made' => 'Lab Requests',
    'specimen_received' => 'Pending Requests',
    'tests-completed' => 'Lab Reports',

    /**
     *  Tests
     */

    'all' => 'All',
    'create-new-test' => 'Create New Test',
    'comments' => 'Comment on Sample Suitability',
    'completed' => 'Test Completed',
    'completed-tests' => 'Completed Tests',
    'date-ordered' => 'Date Ordered',
    'fetch-test-data' => 'Fetch',
    'fetch-test-data-title' => 'Fetch Test data from associated equipment.',
    'first-select-patient' => 'First select a patient below',
    'in-patient' => 'In Patient',
    'refferrals' => 'Refferral',
    'interpretation' => 'Interpretation',
    'lab-receipt-date' => 'Receipt Date',
    'list-tests' => 'Test Requests',
    'new-test' => 'Request For a Test',
    'not-received' => 'Test Not Received',
    'out-patient' => 'Out Patient',
    'patient-name' => 'Patient name',
    'pending' => 'Pending',
    'pending-tests' => 'Pending Tests',
    'purpose' => 'Purpose',
    'physician' => 'Requesting Physician',
    'receive-test' => 'Receive',
    'receive-test-title' => 'Receive Test',
    'registered-by' => 'Registered By',
    'save-test' => 'Save Test Request',
    'select-tests' => 'Select Test(s)',
    'start-test' => 'Analysis',
    'start-test-title' => 'Start Test',
    'started' => 'Test Started',
    'success-creating-test' => 'Successfully created test! with ULIN:',
    'test' => 'Test|Tests|Test-Request',
    'test-unhls' => 'Test|List of All Test Requests', //Unhls  terminology
    'test-catalog' => 'Test Catalog',
    'test-details' => 'Test Details',
    'test-phase' => 'Test Phase',
    'test-remarks' => 'Remarks',
    'test-status' => 'Test Status',
    'test-request-status' => 'Actions', //unhls terminology
    'tested-by' => 'Performed By',
    'turnaround-time' => 'Turnaround Time',
    'turnaround-timee' => 'Time Range',
    'unknown' => 'Unknown',
    'update-test-results' => 'Update Test Results',
    'verification-pending' => 'Verification Pending',
    'verified-by' => 'Reviewed By',
    'verified' => 'Test Reviewed',
    'verify' => 'Review',
    'verify-title' => 'Review Test Results',
    'view-details' => 'View',
    'view-details-title' => 'View Test Details',
    'patient-lab-number' => 'Lab No.',
    'visit-number' => 'Visit No.',
    'visit-lab-number' => 'Visit Lab No.', //This number is issued at each patient visit in the Lab
    'visit-type' => 'Visit Type',
    'sample-source' => 'Sample Source',
    'visit-test-details' => 'View List of Tests',


    /**
     *   Tests search panel
     */
    'empty-search' => 'Your search did not match any test record!',
    'from' => 'From',
    'search' => 'Search',
    'search-patient-placeholder' => 'Enter patient name or ID',
    'to' => 'To',


    /**
     *   Tests Results
     */
    'edit-test-results' => 'Edit Test Results',
    'recall-test-results' => 'Recall Test Results',
    'enter-results' => 'Enter Results',
    'enter-results-title' => 'Enter Test Results',
    'enter-test-results' => 'Enter Test Results',
    'save-test-results' => 'Save Results',
    'success-saving-results' => 'The results successfully saved!',
    'test-results' => 'Results',

    /**
     *   Access Controls
     */

    'access-controls' => 'Access Controls',
    'assign-roles' => 'Assign Roles',
    'assign-roles-to-users' => 'Assign roles to Users',
    'edit-role' => 'Edit Role',
    'new-role' => 'New Role',
    'no-permissions-found' => 'No permissions found',
    'no-roles-found' => 'No roles found',
    'no-users-found' => 'No Users found',
    'permission' => 'Permission|Permissions',
    'success-updating-permission' => 'Roles/permissions successfully updated!',
    'success-adding-role' => 'Roles successfully added!',
    'success-deleting-role' => 'Roles successfully deleted!',
    'success-updating-role' => 'Roles successfully updated!',
    'user-accounts' => 'User Accounts',

    /**
     *   Reports
     */
    'aggregate-reports' => 'Aggregate Reports',
    'collected-by'  =>  'Collected By',
    'counts' => 'Counts',
    'daily-log' => 'Daily Log',
    'daily-reports' => 'Daily Reports',
    'date-checked'  =>  'Date Checked',
    'date-tested' => 'Date Tested',
    'date-verified' => 'Date Verified',
    'export-to-pdf' => 'Export to PDF',
    'export-to-word' => 'Export to Word',
    'hospital-number'   =>  'Hospital number',
    'include-pending-tests' => 'Include Pending Tests',
    'include-range-visualization' => 'Include Range Visualization',
    'no-records-found' => 'No records found.',
    'patient-report' => 'Report',
    'report-date' => 'Report Date',
    'positivity-rates' => 'Positivity Rates',
    'report' => 'Report|Reports',
    'print' => 'Print',
    'rejected-by'   =>  'Rejected by',
    'requesting-facility-department' => 'Requesting Facility/Department',
    'results-entry-date' => 'Results Entry Date',
    'test-results-values' => 'Test Results',
    'view-report' => 'View Report',
    'recall-report' => 'Recall Report',
    'recall-test' => 'Recall Test',
    'view-final-report' => 'View Final Report',
    'view-interim-report' => 'View Interim Report',
    'view-visit-report' => 'View Visit Report',
    'view-visits' => 'View Visits',
    'view-test-report' => 'View Test Report',
    'test-records'  =>  'Test Records',
    'patient-records' =>    'Patient Records',
    'rejected-specimen' =>  'Rejected Specimen Records',
    'show-hide' =>  'Show/Hide Summary',
    'total-visits'  =>  'Total Visits',
    'summary'   =>  'Summary',
    'daily-visits' =>  'Daily visits',
    'pending-only'  =>  'Pending Tests Only',
    'all-tests' =>  'All Tests',
    'date-rejected' =>  'Date Rejected',
    'complete-tests'    =>  'Complete Tests',
    'total-specimen'    =>  'Total Specimen',
    'positive'  =>  'Positive',
    'negative'  =>  'Negative',
    'prevalence-rates-label'    =>  'Cummulative Percentage (%)',
    'tat-rates-label'    =>  'Percentage (%)',
    'tat-label'    =>  'Number of Tests Within TAT',
    'no-match'  =>  'Your filter did not match any records.',
    'check-date-range'  =>  'Please check your dates range and try again!',
    'time-in-years' =>  'Time(yrs)',
    'time-in-months'    =>  'Time(months)',
    'time-in-weeks' =>  'Time(weeks)',
    'time-in-days'  =>  'Time(Days)',
    'for-the-year'  =>  'For the Year',
    'select-lab-section' => 'Select Lab Section',
    'select-test-type'  =>  'Select Test Type',
    'pending-tests' =>  'Pending Tests',
    'ungrouped-test-counts' =>  'Test Counts (Ungrouped)',
    'grouped-test-counts' =>  'Test Counts (Grouped)',
    'ungrouped-specimen-counts' =>  'Specimen Counts (Ungrouped)',
    'grouped-specimen-counts' =>  'Specimen Counts (Grouped)',
    'select-date'   =>  'Select Date',
    'checked-by'    =>  'Checked by',
    'patient-report-no' =>  'Form No. BDHL-QUA-017F3',
    'patient-report-version'    =>  'Version 1',
    'signature-holder'  =>  '............................................',
    'surveillance'    =>  'Surveillance',
    'request-origin'    =>  'Request origin',
    'laboratory'    =>  'Laboratory',
    'tested'    =>  'Tested',
    'less-five'    =>  '< 5 Years',
    'greater-five'    =>  '≥ 5 Years',
    'laboratory-report' => 'LABORATORY REPORT',

    /* Infection Report*/
    'age-ranges'    =>  'Age Ranges',
    'infection-report' => 'Test Report',
    'mf-total'  =>  'M/F Total',
    'total'   =>  'Total|Totals',
    'total-tests'   =>  'Total Tests',
    'select-interval'   =>  'Select Interval',
    'interval'  =>  'Interval',
    'expected-tat'  =>  'Expected TAT',
    'actual-tat'    =>  'Actual TAT',
    'waiting-time'  =>  'Waiting Time',
    'monthly'   =>  'Monthly',
    'weekly'    =>  'Weekly',
    'daily' =>  'Daily',

    /* Usage Statistics Reports*/
    'accepted-specimen' => 'Specimen Collected',
    'no-data-found' => 'No data available!',
    'performed-tests' => 'Tests Performed',
    'received-tests' => 'Tests Received',
    'registration-date' => 'Registration Date',
    'rejected-specimen' => 'Specimen Rejected',
    'report-type' => 'Report Type|Report Types',
    'specimen-id' => 'Specimen ID',
    'test-id' => 'Test ID',
    'user-statistics-report' => 'User Statistics Report',
    'user-statistics-patients-register-report-title' => 'Patients Register (Period: [FROM] - [TO] [USER])',
    'user-statistics-specimens-register-report-title' => 'Specimen Register (Period: [FROM] - [TO] [USER])',
    'user-statistics-summary-report-title' => 'User Summary Report (Period: [FROM] - [TO] [USER])',
    'user-statistics-tests-performed-report-title' => 'Tests Performed (Period: [FROM] - [TO] [USER])',
    'user-statistics-tests-register-report-title' => 'Tests Registered (Period: [FROM] - [TO] [USER])',
    'verified-tests' => 'Tests Verified',
    'approved-tests' => 'Tests Approved',

    /* Inventory Reports*/
    'inventory-reports' => 'Inventory Reports',
    'stock-levels' => 'Stock Levels',
    'stock-level-report' => 'Stock Level Report',
    'monthly-stock-level-report-title' => 'Monthly Stock Levels (Period: [FROM] - [TO])',
    'quarterly-stock-level-report-title' => 'Quarterly Stock Levels (Period: [FROM] - [TO] )',
    'phone' => 'Phone',
    'address' => 'Address',
    'details' => 'Details',
    'item' => 'Item',
    'storage' => 'Storage',
    'new' => 'New',
    'log-usage' => 'Log Usage',
    'stock' => 'Stock',
    'lot-no' => 'Lot No',
    'expiry' => 'Expiry',
    'manufacturer' => 'Manufacturer',
    'supplied' => 'Amount Supplied',
    'cost-per-unit' => 'Cost per unit',
    'date-received' => 'Date Received',
    'record-successfully-saved' => 'Record successfully saved',
    'usage' => 'Usage',
    'record-successfully-updated' => 'Record successfully Updated',
    'record-successfully-deleted' => 'Record successfully Deleted',
    'available-qty' => 'Available Quantity',
    'signed-out' => 'Signed Out',
    'date-of-usage' => 'Date of Usage',
    'received-by' => 'Received By',
    'ordered-by' => 'Ordered By',
    'request' => 'Request',
    'issued' => 'Issued',
    'status' => 'Status',
    'quantity-remaining' => 'Quantity Remaining',
    'order-quantity' => 'Quantity Ordered',
    'not-issued' => 'Not issued',
    'update-stock' => 'Update stock',
    'stock-usage' => 'Stock Usage',
    'issued-greater-than-ordered' => 'Issued greater than ordered',
    'top-up' => 'Top Up',




    /**
     *   Configurations
     */
    'add-facility' => 'Add a facility',
    'edit-facility' => 'Edit facility',
    'lab-configuration' => 'Lab Configuration',
    'list-facilities' => 'List of facilities',
    'new-disease' => 'New Disease',
    'successfully-updated-facility' => 'Facility was successfully updated!',
    'successfully-deleted-facility' => 'Facility was successfully deleted!',

    /*
    *   Instrumentation
    */
    'add-instrument' => 'Add Equipment',
    'driver-file' => 'Select File',
    'edit-instrument' => 'Edit Equipment',
    'compatible-test-types' => 'Can perform:',
    'failure-creating-instrument' => 'The equipment could not be added!',
    'failure-updating-instrument' => 'The equipment could not be updated!',
    'host' => 'Hostname',
    'host-name' => 'Hostname',
    'import-instrument-driver-title' => 'Add New Equipment Drivers',
    'import-trusted-sources-only' => 'WARNING: Do not install plugins from untrusted sources!',
    'instrument' => 'Equipment|Equipment',
    'instrument-details' => 'Equipment Details',
    'interfacing-class' => 'Equipment Interfacing Class for ',
    'invalid-driver-file' => 'Invalid plugin file!',
    'ip' => 'IP Address',
    'list-instruments' => 'List Equipment',
    'new-instrument' => 'New Equipment',
    'new-instrument-driver' => 'New Driver',
    'select-test-types' => 'Select Test Types',
    'success-creating-instrument' => 'The equipment was added successfully!',
    'success-deleting-instrument' => 'The equipment was successfully deleted!',
    'success-importing-driver' => 'The equipment driver was successfully imported!',
    'success-updating-instrument' => 'The equipment details were successfully updated!',
    'supported-test-types' => 'Supported Tests',
    'unwriteable-destination-folder' => 'Unable to write to the plugins folder',

    /**
     *   Dates
     */
    'year' => 'Year|Years',
    'week' => 'Week|Weeks',
    'day' => 'Day|Days',
    'hour' => 'Hour|Hours',
    'minute' => 'Minute|Minutes',
    'second' => 'Second|Seconds',

    /**
     *   Inventory
     */

    'facility' => 'Facility|Facilities',
    'inventory' => 'Inventory',
    'inventory-list' => 'Inventory List',
    'new-inventory' => 'New Inventory',
    'labStockCard' => 'Laboratory Stock Card',
    'topup' => 'Top Up',
    'stockTakeCard' => 'Stock Take Card',
    'received-from' => 'Received From',
    'commodity' => 'Commodity ',
    'doc-no' => 'Doc. No.',
    'quantity' => 'Quantity',
    'qty-avl' => 'Quantity available',
    'quantity-required' => 'Quantity Required',
    'qty-issued' => 'Quantity Issued',
    'batch-no' => 'Batch No.',
    'expiry-date' => 'Expiry Date',
    'location' => 'Location',
    'receivers-name' => 'Receivers Name',
    'receivers_name' => 'Receivers Name',
    'issue' => 'Issue|Issues',
    'receipt' => 'Receipt|Receipts',
    'destination' => 'Destination',
    'stock-bal' => 'Stock Balance',
    'unit-of-issue' => 'Unit of Issue',
    'date' => 'Date',
    'current-bal' => 'Current Balance',
    'tests-done' => 'Tests Done',
    'order-qty' => 'Order Quantity',
    'issue-qty' => 'Issue Quantity',
    'issued-by' => 'Issued By',
    'remarks' => 'Remarks',
    'code' => 'Code',
    'physical-count' => 'Physical Count',
    'unit-price' => 'Unit Price',
    'total-price' => 'Total Price',
    'discrepancy' => 'Discrepancy',
    'monthly' => 'Monthly',
    'quarterly' => 'Quarterly',
    'receiptsList' => 'Receipts List',
    'issue-date' => 'Issue Date',
    'issuesList' => 'Issues List',
    'edit-commodity-details' => 'Edit Commodity Details ',
    'stockTake' => 'Stock Take',
    'qty-on-stock-card' => 'Quantity on Stock Card',
    'commodities' => 'Commodities',
    'supplier' => 'Supplier',
    'suppliers' => 'Suppliers',
    'item-code' => 'Item Code',
    'storage-req' => 'Storage Requirements',
    'average-consumption' => 'Average Monthly Consumption',
    'min-level' => 'Minimum Level',
    'max-level' => 'Maximum Level',
    'metrics' => 'Metrics',
    'add-metrics' => 'Add Metrics',
    'add-issue' => 'Add Issue',
    'add-receipts' => 'Add Receipts',
    'add-commodity' => 'Add Commodity',
    'add-supplier' => 'Add Supplier',
    'request-topup' => 'Request Top-Up',
    'commodityList' => 'Commodity List',
    'metricsList' => 'Metrics List',
    'suppliersList' => 'Suppliers List',
    'editMetrics' => 'Edit Metrics',
    'edit-receipt-details' => 'Edit receipt details',
    'edit-issue-details' => 'Edit issue details',
    'editSuppliers' => 'Edit Suppliers',
    'editCommodities' => 'Edit Commodities',
    'metric-succesfully-deleted' => 'Metric has been succesfully deleted',
    'metric-succesfully-added' => 'Successifully added a new metric',
    'commodity-succesfully-added' => 'Successifully added a new commodity',
    'issue-succesfully-deleted' => 'The issue was successfully deleted!',
    'commodity-succesfully-deleted' => 'The commodity was successfully deleted!',
    'supplier-succesfully-deleted' => 'The supplier was successfully deleted!',
    'receipt-succesfully-updated' => 'The receipt was successfully updated',
    'receipt-succesfully-added' => 'The receipt was successfully added',
    'receipt-succesfully-deleted' => 'The receipt was successfully deleted!',
    'success-updating-metric' => 'The metric was succesfully updated',
    'success-updating-supplier' => 'The supplier was succesfully updated',
    'success-updating-commodity' => 'The commodity was succesfully updated',

    /**
     *
     * Quality controls
     */
    'quality-control' => 'Quality Control|Quality Controls',
    'instrument' => 'Instrument|Instruments',
    'lot' => 'Lot|Lots',
    'control' => 'Control|Controls',
    'list-controls' => 'List of controls',
    'add-control' => 'Add control',
    'edit-control' => 'Edit control',
    'controlresults' => 'Control Results',
    'add-lot' => 'Add lot',
    'edit-lot' => 'Edit lot',
    'lot-number' => 'Lot number',
    'lot-details' => 'Lot details',
    'expected-value' => 'Expected value',
    'enter-control-results' => 'Enter control results',
    'control-details' => 'Control details',
    'control-name' => 'Control name',
    'date-performed' => 'Date performed',
    'successfully-created-lot' => 'The lot has been successfully created',
    'success-deleting-lot' => 'The lot has been successfully deleted',
    'successfully-updated-lot' => 'The lot has been successfully updated',
    'successfully-added-control' => 'The Control has been successfully added',
    'success-updating-control' => 'The Control has been successfully updated',
    'success-deleting-control' => 'The Control has been successfully deleted',
    'success-adding-control-result' => 'The control results have been succesfully added',

    /**
     *   MOH 706 report
     */
    'moh-706'   =>  'MOH 706',
    'moh'   =>  'Ministry of Health',
    'lab-tests-data-report'  =>  'Laboratory Tests Data Summary Report Form',
    'affiliation'   =>  'Affiliation',
    'reporting-period'  =>  'Reporting Period',
    'begin-end' =>  'Begining|Ending',
    /**
     *   Controls
     */
    'gok'   =>  'GOK',
    'no-service'    =>  'N/B: INDICATE N/S Where there is no service',
    'control-results-edit' => 'Results Edit',
    'edit-results' => 'Edit Results',
    'show-results' => 'Results',
    'list-results' => 'List of Results',
    'created-at' => 'Date Entered',
    'result-name' => 'Result',
    'success-updating-control-result' => 'The control results have been succesfully updated',
    /**
     *
     * 15189 Accreditation
     */
    'accredited'    =>  'Accredited?',
    'quality-manager'   =>  'Quality Manager',
    'lab-manager'   =>  'Laboratory Manager',
    'lab-director'   =>  'Laboratory Director',
    'authorized-by' =>  'Authroized By: ',
    /**
     *
     * Barcode
     */
    'barcode'    =>  'Barcode',
    'barcode-settings'   =>  'Barcode Settings',
    'encoding-format'   =>  'Encoding Format',
    'barcode-width'   =>  'Barcode Width',
    'barcode-height'   =>  'Barcode Height',
    'text-size'   =>  'Text Size',
    'configure-barcode-settings'    => 'Configure Barcode Format Settings',
    'barcode-update-success' => 'Barcode settings successfully updated.',
    /**
     *
     * BLIS client interfacer
     */
    'interfaced-equipment'  =>  'Interfaced Equipment',
    'equipment' =>  'Equipment',
    'uni'   =>  'Uni-directional',
    'bi'    =>  'Bi-directional',
    'select-equipment'  =>  'Select Equipment to be interfaced through BLISInterfaceClient',
    /**
     * cd4 report
     */
    'cd4-report'  =>  'CD4 Report',
    'baseline'  =>  'Baseline',
    'follow-up' =>  'Follow Up',
    'cd4-less'  =>  '< 500',
    'cd4-greater'   =>  '> 500',


    /**
     * BB Incidences
     */
    'bbincidence' => 'BB Incidence | BB Incidences',
    'new-bbincidence' => 'New BB Incidence',
    'incident-serial-number' => 'Incident Serial Number',
    'date-of-occurrence' => 'Date of Occurrence',
    'time-of-occurrence' => 'Time of Occurrence',
    'age' => 'Age',
    'dob' => 'Date of Birth',
    'filter' => 'Filter',



    //BLIS uganda
    'stock-card' => 'Stock card',
    'equipment-log' => 'Equipment log',
    'requisition-voucher' => 'Requisition voucher',
    'stock-entries' => 'Stock Entries',
    'add-stock' => 'Add',
    'stock-list' => 'Stock List',
    'stock-requisition' => 'Stockbook',
    'edit-stock-entry' => 'Edit',
    'stock-succesfully-deleted' => 'Stock has been succesfully deleted',
    'stock-succesfully-added' => 'Successifully added a new stock entry',
    'settings' => 'Settings',
    'add-stock' => 'Add',
    'equipment-list' => 'Equipment List',
    'equipment-breakdown' => 'Equipment breakdown',
    'equipment-breakdown-list' => 'Equipment breakdown list',
    'equipment-maintenance' => 'Equipment maintenance',
    'supplier-list' => 'Supplier List',
    'add' => 'Add',

    //
    'ward-type' => 'Type of unit location',

    //Lab configuration-ulin reset
    'reset-ulin' => 'Reset Ulin',

    /* Blood bank*/

    'compatible-specimen' => 'Compatible Specimen',
    'create-blood-unit' => 'Create Blood Unit',
    'edit-blood-unit' => 'Edit Blood Unit',
    'failure-blood-bank-in-use' => 'This Blood bank is in use',
    'list-blood-bank' => 'List Blood Bank',
    'new-blood-bank' => 'New Blood Bank',
    'prevalence-threshold' => 'Prevalence Threshold',
    'select-measures' => 'Select Measures',
    'select-specimen-types' => 'Select Specimen Types',
    'success-creating-blood-unit' => 'Successfully created Blood Unit.',
    'success-deleting-blood-unit' => 'The Blood Unit was successfully deleted.',
    'success-updating-blood-unit' => 'The Blood Unit details were successfully updated.',
    'target-turnaround-time' => 'Target Turnaround Time',
    'blood-bank' => 'Blood Bank',
    'blood-transfer' => 'Blood Transfer',
    'blood-unit' => 'Blood Unit',
    'blood-bank-details' => 'Blood Bank Details',
    'orderable-blood' => 'Can order Blood',

];
