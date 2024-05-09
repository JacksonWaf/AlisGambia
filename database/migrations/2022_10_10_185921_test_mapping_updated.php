<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestMappingUpdated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update('TRUNCATE TABLE test_name_mappings');
        DB::update('TRUNCATE TABLE measure_name_mappings');
        DB::table('test_name_mappings')->insert([
['id'=> 1, 'standard_name'=>'CBC',  'system_name'=>'cbc'],
['id'=> 2, 'standard_name'=> 'Hb non automated', 'system_name'=>'hb_non_automated'],
['id'=> 3, 'standard_name'=> 'ESR', 'system_name'=> 'esr'],
['id'=> 4, 'standard_name'=> 'Film Comment', 'system_name'=>'film_comment'],
['id'=> 5, 'standard_name'=> 'Bleeding time', 'system_name'=>'bleeding_time'],
['id'=> 6, 'standard_name'=> 'Prothrombin Time', 'system_name'=>'prothrombin_time'],
['id'=> 7, 'standard_name'=> 'Clotting Time', 'system_name'=>'clotting_time'],
['id'=> 8, 'standard_name'=> 'Sickle Cell', 'system_name'=> 'sickle_cell'],
['id'=> 9, 'standard_name'=> 'ABO Grouping', 'system_name'=> 'abo_grouping'],
['id'=> 10, 'standard_name'=> 'Ahb combs test', 'system_name'=>'ahb_combs_test'],
['id'=> 11, 'standard_name'=> 'Cross Matching', 'system_name'=>'cross_matching'],
['id'=> 12, 'standard_name'=> 'Malaria Microscopy', 'system_name'=>'bs_for_mps'],
['id'=> 13, 'standard_name'=> 'Malaria RDTs', 'system_name'=>'malaria_rdts'],
['id'=> 14, 'standard_name'=> 'Stool Microscopy', 'system_name'=>'stool_microscopy'],
['id'=> 15, 'standard_name'=> 'VDRL/RPR', 'system_name'=>'vdrl_rpr'],
['id'=> 16, 'standard_name'=> 'TPHA', 'system_name'=>'tpha'],
['id'=> 17, 'standard_name'=> 'Shigella Dysentery', 'system_name'=>'shigella_dysentery'],
['id'=> 18, 'standard_name'=> 'hepatitisb_sags', 'system_name'=> 'hepatitisb_sags'],
['id'=> 19, 'standard_name'=> 'Hep C', 'system_name'=>'hep_c'],
['id'=> 20, 'standard_name'=> 'Hep A', 'system_name'=>'hep_a'],
['id'=> 21, 'standard_name'=> 'Brucella', 'system_name'=>'brucella'],
['id'=> 22, 'standard_name'=> 'Pregnancy Test', 'system_name'=>'pregnancy_test'],
['id'=> 23, 'standard_name'=> 'CRAG', 'system_name'=>'crag'],
['id'=> 24, 'standard_name'=> 'Rheumatoid Factor',  'system_name'=>'rheumatoid_factor'],
['id'=> 25, 'standard_name'=> 'CD4',  'system_name'=>'cd4'],
['id'=> 26, 'standard_name'=> 'Hiv viral load', 'system_name'=>'hiv_viral_load'],
['id'=> 27, 'standard_name'=> 'Hepb core ag', 'system_name'=>'hepb_core_ag'],
['id'=> 28, 'standard_name'=> 'TB Genexpert', 'system_name'=>'tb_genexpert'],
['id'=> 29, 'standard_name'=> 'FM for AFBs',  'system_name'=>'fm_for_afbs'],
['id'=> 30, 'standard_name'=> 'ZN for AFBs',  'system_name'=>'zn_for_afb'],
['id'=> 31, 'standard_name'=> 'latent TB',  'system_name'=>'latent_tb'],
['id'=> 32, 'standard_name'=> 'TB LAM', 'system_name'=>'tb_lam'],
['id'=> 33, 'standard_name'=> 'Culture & Sensitivity',  'system_name'=>'culture_sensitivity'],
['id'=> 34, 'standard_name'=> 'Gram Stain', 'system_name'=>'gram'],
['id'=> 35, 'standard_name'=> 'India Ink', 'system_name'=>'india_ink'],
['id'=> 36, 'standard_name'=> 'Wet Prep', 'system_name'=>'wet_prep'],
['id'=> 37, 'standard_name'=> 'Urine Microscopy', 'system_name'=>'urine_microscopy'],
['id'=> 38, 'standard_name'=> 'Renal Profile', 'system_name'=>'renal_profile'],
['id'=> 39, 'standard_name'=> 'Liver Profile', 'system_name'=>'liver_profile'],
['id'=> 40, 'standard_name'=> 'Lipid/Cardiac Profile', 'system_name'=>'lipid_cardiac_profile'],
['id'=> 41, 'standard_name'=> 'Alkaline Phosphates', 'system_name'=>'alkaline_phosphates'],
['id'=> 42, 'standard_name'=> 'Amylase', 'system_name'=>'amylase'],
['id'=> 43, 'standard_name'=> 'Glucose', 'system_name'=>'glucose'],
['id'=> 44, 'standard_name'=> 'Total Bilirubin', 'system_name'=>'total_bilirubin'],
['id'=> 45, 'standard_name'=> 'Lipase', 'system_name'=>'lipase'],
['id'=> 46, 'standard_name'=> 'AFP', 'system_name'=>'afp'],
['id'=> 47, 'standard_name'=> 'HIV', 'system_name'=>'hiv'],
['id'=> 51, 'standard_name'=> 'RPR', 'system_name'=>'rpr'],
['id'=> 53, 'standard_name'=> 'HCG', 'system_name'=>'hcg'],
['id'=> 54, 'standard_name'=> 'Auramine fm', 'system_name'=>'auramine_fm'],
['id'=> 55, 'standard_name'=> 'Leishman stain', 'system_name'=>'leishman_stain'],
['id'=> 56, 'standard_name'=> 'EID', 'system_name'=>'eid'],
['id'=> 57, 'standard_name'=> 'Polio', 'system_name'=>'polio'],
['id'=> 58, 'standard_name'=> 'Sars', 'system_name'=>'sars'],
['id'=> 59, 'standard_name'=> 'MDR TB', 'system_name'=>'mdr_tb'],
['id'=> 60, 'standard_name'=> 'Typhoid fever', 'system_name'=>'typhoid_fever'],
['id'=> 61, 'standard_name'=> 'cholera', 'system_name'=>'cholera'],
['id'=> 62, 'standard_name'=> 'Dysentery', 'system_name'=>'dysentry'],
['id'=> 63, 'standard_name'=> 'Rota virus', 'system_name'=>'rota_virus'],
['id'=> 64, 'standard_name'=> 'meningitis', 'system_name'=>'meningitis'],
['id'=> 65, 'standard_name'=> 'Neonatal tetanus', 'system_name'=>'neonatal_tetanus'],
['id'=> 66, 'standard_name'=> 'plague', 'system_name'=>'plague'],
['id'=> 67, 'standard_name'=> 'measles', 'system_name'=>'measles'],
['id'=> 68, 'standard_name'=> 'vhf', 'system_name'=>'vhf'],
['id'=> 69, 'standard_name'=> 'Animal bites', 'system_name'=>'animal_bites'],
['id'=> 70, 'standard_name'=> 'Hepb vl', 'system_name'=>'hepb_vl'],
['id'=> 71, 'standard_name'=> 'Hepc vl', 'system_name'=>'hepc_vl']
]);
DB::table('measure_name_mappings')->insert([
['id'=> 1, 'test_name_mapping_id'=> 1,  'measure_id'=> NULL, 'standard_name'=>'WBC',  'system_name'=>'wbc'],
['id'=> 2, 'test_name_mapping_id'=> 1,  'measure_id'=> NULL, 'standard_name'=>'RBC',  'system_name'=>'rbc'],
['id'=> 3, 'test_name_mapping_id'=> 1,  'measure_id'=> NULL, 'standard_name'=>'hgb',  'system_name'=>'hgb'],
['id'=> 4, 'test_name_mapping_id'=> 2,  'measure_id'=> NULL, 'standard_name'=> 'Hb non automated', 'system_name'=>'hb_non_automated'],
['id'=> 5, 'test_name_mapping_id'=> 3,  'measure_id'=> NULL, 'standard_name'=>'ESR', 'system_name'=> 'esr'],
['id'=> 6, 'test_name_mapping_id'=> 4,  'measure_id'=> NULL, 'standard_name'=>'Film Comment', 'system_name'=>'film_comment'],
['id'=> 7, 'test_name_mapping_id'=> 5,  'measure_id'=> NULL, 'standard_name'=>'Bleeding time', 'system_name'=>'bleeding_time'],
['id'=> 8, 'test_name_mapping_id'=> 6,  'measure_id'=> NULL, 'standard_name'=>'Prothrombin Time', 'system_name'=>'prothrombin_time'],
['id'=> 9, 'test_name_mapping_id'=> 7,  'measure_id'=> NULL, 'standard_name'=>'Clotting Time', 'system_name'=>'clotting_time'],
['id'=> 10, 'test_name_mapping_id'=> 8,  'measure_id'=> NULL, 'standard_name'=>'Sickle Cell',  'system_name'=>'sickle_cell'],
['id'=> 11, 'test_name_mapping_id'=> 9,  'measure_id'=> NULL, 'standard_name'=>'ABO Grouping', 'system_name'=>'abo_grouping'],
['id'=> 12, 'test_name_mapping_id'=> 10, 'measure_id'=> NULL, 'standard_name'=>'Ahb combs test',  'system_name'=> 'ahb_combs_test'],
['id'=> 13, 'test_name_mapping_id'=> 11, 'measure_id'=> NULL, 'standard_name'=>'Cross Matching',  'system_name'=> 'cross_matching'],
['id'=> 14, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Malaria Microscopy',  'system_name'=> 'bs_for_mps'],
['id'=> 15, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Trypanosoma', 'system_name'=> 'trypanosoma'],
['id'=> 16, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Microfilaria', 'system_name'=>'microfilaria'],
['id'=> 17, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Leishmania',  'system_name'=> 'leishmania'],
['id'=> 18, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Trichinella',  'system_name'=>'trichinella'],
['id'=> 19, 'test_name_mapping_id'=> 12, 'measure_id'=> NULL, 'standard_name'=>'Borrellia', 'system_name'=>'borrellia'],
['id'=> 20, 'test_name_mapping_id'=> 13, 'measure_id'=> NULL, 'standard_name'=>'Malaria RDTs', 'system_name'=>'malaria_rdts'],
['id'=> 21, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Entamoeba', 'system_name'=>'entamoeba'],
['id'=> 22, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Giardia Lumblia', 'system_name'=>'giardia_lumblia'],
['id'=> 23, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Cryptosporidium',  'system_name'=>'cryptosporidium'],
['id'=> 24, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Isospora', 'system_name'=>'isospora'],
['id'=> 25, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Cyclospora', 'system_name'=> 'cyclospora'],
['id'=> 26, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Strongyloides', 'system_name'=>'strongyloides'],
['id'=> 27, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Shistosoma', 'system_name'=>'shistosoma'],
['id'=> 28, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Taenia',  'system_name'=>'taenia'],
['id'=> 29, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Askaris', 'system_name'=>'askaris'],
['id'=> 30, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Hookworm', 'system_name'=>'hookworm'],
['id'=> 31, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Trichuris', 'system_name'=>'trichuris'],
['id'=> 32, 'test_name_mapping_id'=> 14, 'measure_id'=> NULL, 'standard_name'=>'Stool Microscopy', 'system_name'=>'stool_microscopy'],
['id'=> 33, 'test_name_mapping_id'=> 15, 'measure_id'=> NULL, 'standard_name'=>'VDRL/RPR', 'system_name'=>'vdrl_rpr'],
['id'=> 34, 'test_name_mapping_id'=> 16, 'measure_id'=> NULL, 'standard_name'=>'TPHA', 'system_name'=>'tpha'],
['id'=> 35, 'test_name_mapping_id'=> 17, 'measure_id'=> NULL, 'standard_name'=>'Shigella Dysentery', 'system_name'=>'shigella_dysentery'],
['id'=> 36, 'test_name_mapping_id'=> 18, 'measure_id'=> NULL, 'standard_name'=>'hepatitis_b_sags', 'system_name'=>'hepatitis_b_sags'],
['id'=> 37, 'test_name_mapping_id'=> 19, 'measure_id'=> NULL, 'standard_name'=>'Hep C', 'system_name'=>'hep_c'],
['id'=> 38, 'test_name_mapping_id'=> 20, 'measure_id'=> NULL, 'standard_name'=>'Hep A', 'system_name'=>'hep_a'],
['id'=> 39, 'test_name_mapping_id'=> 21, 'measure_id'=> NULL, 'standard_name'=>'Brucella', 'system_name'=>'brucella'],
['id'=> 40, 'test_name_mapping_id'=> 22, 'measure_id'=> NULL, 'standard_name'=>'Pregnancy Test',  'system_name'=>'pregnancy_test'],
['id'=> 41, 'test_name_mapping_id'=> 23, 'measure_id'=> NULL, 'standard_name'=>'CRAG', 'system_name'=>'crag'],
['id'=> 42, 'test_name_mapping_id'=> 24, 'measure_id'=> NULL, 'standard_name'=>'Rheumatoid Factor', 'system_name'=>'rheumatoid_factor'],
['id'=> 43, 'test_name_mapping_id'=> 25, 'measure_id'=> NULL, 'standard_name'=>'CD4', 'system_name'=> 'cd4'],
['id'=> 44, 'test_name_mapping_id'=> 26, 'measure_id'=> NULL, 'standard_name'=>'Hiv viral load',  'system_name'=> 'hiv_viral_load'],
['id'=> 45, 'test_name_mapping_id'=> 27, 'measure_id'=> NULL, 'standard_name'=>'Hepb core ag', 'system_name'=>'hepb_core_ag'],
['id'=> 46, 'test_name_mapping_id'=> 28, 'measure_id'=> NULL, 'standard_name'=>'MTB',  'system_name'=>'mtb'],
['id'=> 47, 'test_name_mapping_id'=> 28, 'measure_id'=> NULL, 'standard_name'=>'RIF RESISTANCE', 'system_name'=>  'rif_resistance'],
['id'=> 48, 'test_name_mapping_id'=> 29, 'measure_id'=> NULL, 'standard_name'=>'FM for AFBs',  'system_name'=>'fm_for_afbs'],
['id'=> 49, 'test_name_mapping_id'=> 30, 'measure_id'=> NULL, 'standard_name'=>'ZN for AFB',  'system_name'=> 'zn_for_afb'],
['id'=> 50, 'test_name_mapping_id'=> 31, 'measure_id'=> NULL, 'standard_name'=>'Latent TB', 'system_name'=>'latent_tb'],
['id'=> 51, 'test_name_mapping_id'=> 32, 'measure_id'=> NULL, 'standard_name'=>'TB LAM',  'system_name'=> 'tb_lam'],
['id'=> 52, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Culture & Sensitivity', 'system_name'=>'culture_sensitivity'],
['id'=> 53, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Blood', 'system_name'=>'blood'],
['id'=> 54, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Urine', 'system_name'=>'urine'],
['id'=> 55, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Stool', 'system_name'=>'stool'],
['id'=> 56, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Swabs', 'system_name'=>'swabs'],
['id'=> 57, 'test_name_mapping_id'=> 33, 'measure_id'=> NULL, 'standard_name'=>'Sputum',  'system_name'=> 'sputum'],
['id'=> 58, 'test_name_mapping_id'=> 34, 'measure_id'=> NULL, 'standard_name'=>'Gram Stain',  'system_name'=> 'gram'],
['id'=> 59, 'test_name_mapping_id'=> 35, 'measure_id'=> NULL, 'standard_name'=>'India Ink', 'system_name'=>'india_ink'],
['id'=> 60, 'test_name_mapping_id'=> 36, 'measure_id'=> NULL, 'standard_name'=>'Wet Prep', 'system_name'=>'wet_prep'],
['id'=> 61, 'test_name_mapping_id'=> 37, 'measure_id'=> NULL, 'standard_name'=>'Urine Microscopy', 'system_name'=>'urine_microscopy'],
['id'=> 62, 'test_name_mapping_id'=> 38, 'measure_id'=> NULL, 'standard_name'=>'Urea', 'system_name'=>'urea'],
['id'=> 63, 'test_name_mapping_id'=> 38, 'measure_id'=> NULL, 'standard_name'=>'Calcium',  'system_name'=>'calcium'],
['id'=> 64, 'test_name_mapping_id'=> 38, 'measure_id'=> NULL, 'standard_name'=>'Potassium', 'system_name'=>'potassium'],
['id'=> 65, 'test_name_mapping_id'=> 38, 'measure_id'=> NULL, 'standard_name'=>'Sodium',  'system_name'=> 'sodium'],
['id'=> 66, 'test_name_mapping_id'=> 38, 'measure_id'=> NULL, 'standard_name'=>'Creatinine',  'system_name'=> 'creatinine'],
['id'=> 67, 'test_name_mapping_id'=> 39, 'measure_id'=> NULL, 'standard_name'=>'ALT',  'system_name'=>'alt'],
['id'=> 68, 'test_name_mapping_id'=> 39, 'measure_id'=> NULL, 'standard_name'=>'AST',  'system_name'=>'ast'],
['id'=> 69, 'test_name_mapping_id'=> 39, 'measure_id'=> NULL, 'standard_name'=>'Albumin', 'system_name'=> 'albumin'],
['id'=> 70, 'test_name_mapping_id'=> 39, 'measure_id'=> NULL, 'standard_name'=>'Total Protein', 'system_name'=>'total_protein'],
['id'=> 71, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'Triglycerides', 'system_name'=>'triglycerides'],
['id'=> 72, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'Cholesterol',  'system_name'=>'cholesterol'],
['id'=> 73, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'Free T3',  'system_name'=>'free_t3'],
['id'=> 74, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'Free T4',  'system_name'=>'free_t4'],
['id'=> 75, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'TSH',  'system_name'=>'tsh'],
['id'=> 76, 'test_name_mapping_id'=> 41, 'measure_id'=> NULL, 'standard_name'=>'Alkaline Phosphates', 'system_name'=> 'alkaline_phosphates'],
['id'=> 77, 'test_name_mapping_id'=> 42, 'measure_id'=> NULL, 'standard_name'=>'Amylase',  'system_name'=>'amylase'],
['id'=> 78, 'test_name_mapping_id'=> 43, 'measure_id'=> NULL, 'standard_name'=>'Glucose',  'system_name'=>'glucose'],
['id'=> 79, 'test_name_mapping_id'=> 44, 'measure_id'=> NULL, 'standard_name'=>'Total Bilirubin',  'system_name'=>'total_bilirubin'],
['id'=> 80, 'test_name_mapping_id'=> 45, 'measure_id'=> NULL, 'standard_name'=>'Lipase',   'system_name'=>'lipase'],
['id'=> 81, 'test_name_mapping_id'=> 46, 'measure_id'=> NULL, 'standard_name'=>'AFP', 'system_name'=> 'afp'],
['id'=> 82, 'test_name_mapping_id'=> 47, 'measure_id'=> NULL, 'standard_name'=>'Determine', 'system_name'=>'determine'],
['id'=> 83, 'test_name_mapping_id'=> 47, 'measure_id'=> NULL, 'standard_name'=>'Stat-pak', 'system_name'=>'stat_pak'],
['id'=> 84, 'test_name_mapping_id'=> 47, 'measure_id'=> NULL, 'standard_name'=>'SD Bioline',  'system_name'=> 'sd_bioline'],
['id'=> 86, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'low_density_lipoproteins', 'system_name'=>'low_density_lipoproteins'],
['id'=> 87, 'test_name_mapping_id'=> 40, 'measure_id'=> NULL, 'standard_name'=>'high_density_lipoprotein', 'system_name'=>'high_density_lipoprotein'],
['id'=> 88, 'test_name_mapping_id'=> 43, 'measure_id'=> NULL, 'standard_name'=>'fbs',  'system_name'=>'fbs'],
['id'=> 89, 'test_name_mapping_id'=> 51, 'measure_id'=> NULL, 'standard_name'=>'RPR', 'system_name'=> 'rpr'],
['id'=> 90, 'test_name_mapping_id'=> 53, 'measure_id'=> NULL, 'standard_name'=>'HCG', 'system_name'=> 'hcg'],
['id'=> 91, 'test_name_mapping_id'=> 54, 'measure_id'=> NULL, 'standard_name'=>'Auramine fm', 'system_name'=> 'auramine_fm'],
['id'=> 92, 'test_name_mapping_id'=> 55, 'measure_id'=> NULL, 'standard_name'=>'Leishman stain',  'system_name'=> 'leishman_stain'],
['id'=> 94, 'test_name_mapping_id'=> 56, 'measure_id'=> NULL, 'standard_name'=>'EID', 'system_name'=> 'eid'],
['id'=> 95, 'test_name_mapping_id'=> 57, 'measure_id'=> NULL, 'standard_name'=>'Polio', 'system_name'=>'polio'],
['id'=> 96, 'test_name_mapping_id'=> 58, 'measure_id'=> NULL, 'standard_name'=>'Sars', 'system_name'=>'sars'],
['id'=> 97, 'test_name_mapping_id'=> 59, 'measure_id'=> NULL, 'standard_name'=>'MDR TB',  'system_name'=> 'mdr_tb'],
['id'=> 98, 'test_name_mapping_id'=> 60, 'measure_id'=> NULL, 'standard_name'=>'Typhoid fever', 'system_name'=>'typhoid_fever'],
['id'=> 99, 'test_name_mapping_id'=> 61, 'measure_id'=> NULL, 'standard_name'=>'cholera',  'system_name'=>'cholera'],
['id'=> 100, 'test_name_mapping_id'=> 62, 'measure_id'=> NULL, 'standard_name'=>'Dysentery', 'system_name'=>'dysentry'],
['id'=> 101, 'test_name_mapping_id'=> 63, 'measure_id'=> NULL, 'standard_name'=>'Rota virus',  'system_name'=> 'rota_virus'],
['id'=> 102, 'test_name_mapping_id'=> 64, 'measure_id'=> NULL,  'standard_name'=>'meningitis',  'system_name'=> 'meningitis'],
['id'=> 103, 'test_name_mapping_id'=> 65, 'measure_id'=> NULL,  'standard_name'=>'Neonatal tetanus', 'system_name'=>'neonatal_tetanus'],
['id'=> 104, 'test_name_mapping_id'=> 66, 'measure_id'=> NULL,  'standard_name'=>'plague',  'system_name'=> 'plague'],
['id'=> 105, 'test_name_mapping_id'=> 67, 'measure_id'=> NULL,  'standard_name'=>'measles', 'system_name'=> 'measles'],
['id'=> 106, 'test_name_mapping_id'=> 68, 'measure_id'=> NULL,  'standard_name'=>'vhf', 'system_name'=> 'vhf'],
['id'=> 107, 'test_name_mapping_id'=> 69, 'measure_id'=> NULL,  'standard_name'=>'Animal bites', 'system_name'=>'animal_bites'],
['id'=> 108, 'test_name_mapping_id'=> 70, 'measure_id'=> NULL,  'standard_name'=>'Hepb vl', 'system_name'=> 'hepb_vl'],
['id'=> 109, 'test_name_mapping_id'=> 71, 'measure_id'=> NULL,  'standard_name'=>'Hepc vl',  'system_name'=>'hepc_vl']
]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
