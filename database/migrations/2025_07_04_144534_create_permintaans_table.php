<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->enum('req_name', ['Tablet', 'Kapsul', 'Parental', 'Cairan', 'Powder', 'Semisolid']);
            $table->dateTime('req_date');
            // $table->string('company_name', 100);
            // $table->string('company_address');
            // $table->string('pic_name', 100);
            // $table->string('pic_email', 100);
            // $table->string('pic_phone', 20);
            $table->string('username', 100); // Foreign key to users table
            $table->string('prod_name', 100);
            $table->string('act_ingredient', 100);
            $table->string('act_ingredient_group', 50)->nullable();
            $table->string('prod_category', 50)->nullable();
            $table->string('work_scope', 50)->nullable();
            $table->string('bentuk', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('bobot_range_bobot', 50)->nullable();
            $table->string('diameter', 50)->nullable();
            $table->string('tebal', 50)->nullable();
            $table->string('tablet_type', 50)->nullable();
            $table->string('kadar_air', 50)->nullable();
            $table->string('kadar_zat_aktif', 50)->nullable();
            $table->string('dissolusi', 50)->nullable();
            $table->string('capsule_size', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('package', 50)->nullable();
            $table->string('volume_range_volume', 50)->nullable();
            $table->string('volume', 50)->nullable();
            $table->string('ph', 50)->nullable();
            $table->string('osmolaritas', 50)->nullable();
            $table->string('weight_type', 50)->nullable();
            $table->string('mikroba_endotoksin', 50)->nullable();
            $table->string('partikel_asing', 50)->nullable();
            $table->string('viskositas', 50)->nullable();
            $table->string('pemerian_fisik', 50)->nullable();
            $table->string('max_temp', 50)->nullable();
            $table->string('max_humidity', 50)->nullable();
            $table->string('light_sensitivity', 50)->nullable();
            $table->string('oxidation_sensitivity', 50)->nullable();
            $table->string('pmry_pkg_type', 50)->nullable();
            $table->string('pmry_pkg_material', 50)->nullable();
            $table->string('pmry_pkg_width', 50)->nullable();
            $table->string('pmry_pkg_spec', 50)->nullable();
            $table->string('scnd_etiket', 50)->nullable();
            $table->string('scnd_dus', 50)->nullable();
            $table->string('scnd_dus_col', 50)->nullable();
            $table->string('trsr_box_mstr', 50)->nullable();
            $table->string('trsr_etiket', 50)->nullable();
            $table->string('penyedia_rm_pm', 20)->nullable();
            $table->string('flowchart_process', 20)->default('terlampir');
            $table->boolean('is_formulation')->default(0);
            $table->boolean('is_weighing')->default(0);
            $table->boolean('is_procces')->default(0);
            $table->boolean('is_package')->default(0);
            $table->string('qc_inspect', 100)->nullable();
            $table->boolean('is_formula_dev')->default(0);
            $table->boolean('is_process_val')->default(0);
            $table->boolean('is_clean_val')->default(0);
            $table->boolean('is_analyst_val')->default(0);
            $table->boolean('is_stabil_test')->default(0);
            $table->string('any_test', 100)->nullable();
            $table->boolean('is_limbah_handling')->default(0);
            $table->string('hjp_estimated', 50)->nullable();
            $table->string('hna_estimated', 50)->nullable();
            $table->string('fc_1', 50)->nullable();
            $table->string('fc_2', 50)->nullable();
            $table->string('fc_3', 50)->nullable();
            $table->string('fc_4', 50)->nullable();
            $table->string('fc_5', 50)->nullable();
            $table->string('any_note')->nullable();
            $table->string('doc_cpob')->nullable();
            $table->string('doc_permiss')->nullable();
            $table->string('doc_siup')->nullable();
            $table->string('doc_tdp')->nullable();
            $table->string('doc_npwp')->nullable();
            $table->string('doc_pkp')->nullable();
            $table->string('doc_prmy_draw')->nullable();
            $table->string('doc_coa')->nullable();
            $table->string('doc_msds')->nullable();
            $table->string('doc_protap')->nullable();
            $table->string('doc_process')->nullable();
            $table->string('any_doc')->nullable();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan');
    }
}
