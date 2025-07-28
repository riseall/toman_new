<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $fillable = [
        'req_name',
        'req_date',
        'user_id',
        'prod_name',
        'act_ingredient',
        'act_ingredient_group',
        'prod_category',
        'work_scope',
        'bentuk',
        'color',
        'bobot_range_bobot',
        'diameter',
        'tebal',
        'tablet_type',
        'kadar_air',
        'kadar_zat_aktif',
        'dissolusi',
        'capsule_size',
        'type',
        'package',
        'volume_range_volume',
        'volume',
        'ph',
        'osmolaritas',
        'weight_type',
        'mikroba_endotoksin',
        'partikel_asing',
        'viskositas',
        'pemerian_fisik',
        'max_temp',
        'max_humidity',
        'light_sensitivity',
        'oxidation_sensitivity',
        'pmry_pkg_type',
        'pmry_pkg_material',
        'pmry_pkg_width',
        'pmry_pkg_spec',
        'scnd_etiket',
        'scnd_dus',
        'scnd_dus_col',
        'trsr_box_mstr',
        'trsr_etiket',
        'penyedia_rm_pm',
        'flowchart_process',
        'is_formulation',
        'is_weighing',
        'is_procces',
        'is_package',
        'qc_inspect',
        'is_formula_dev',
        'is_process_val',
        'is_clean_val',
        'is_analyst_val',
        'is_stabil_test',
        'any_test',
        'is_limbah_handling',
        'hjp_estimated',
        'hna_estimated',
        'fc_1',
        'fc_2',
        'fc_3',
        'fc_4',
        'fc_5',
        'any_note',
        'doc_cpob',
        'doc_permiss',
        'doc_siup',
        'doc_tdp',
        'doc_npwp',
        'doc_pkp',
        'doc_prmy_draw',
        'doc_coa',
        'doc_msds',
        'doc_protap',
        'doc_process',
        'any_doc',
    ];

    protected $dates = ['req_date'];

    protected $casts = [
        'req_date' => 'date',
        'is_formulation' => 'boolean',
        'is_weighing' => 'boolean',
        'is_procces' => 'boolean',
        'is_package' => 'boolean',
        'is_formula_dev' => 'boolean',
        'is_process_val' => 'boolean',
        'is_clean_val' => 'boolean',
        'is_analyst_val' => 'boolean',
        'is_stabil_test' => 'boolean',
        'is_limbah_handling' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
