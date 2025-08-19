<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            
            $table->string('company_name');
            $table->foreignIdFor(User::class)->nullable()->constrained();

            $table->timestamps();
        });

        Schema::table('jobs', function (Blueprint $table){
            $table->foreignIdFor(\App\Models\Employer::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // For SQLite, we need to drop the jobs table first since it has the foreign key
        // or handle the foreign key constraint differently
        if (Schema::hasColumn('jobs', 'employer_id')) {
            Schema::table('jobs', function (Blueprint $table) {
                $table->dropColumn('employer_id');
            });
        }
        Schema::dropIfExists('employers');
    }
};
