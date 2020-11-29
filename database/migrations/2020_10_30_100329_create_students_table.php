<?php
declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/***
 * Class CreateStudentsTable
 * @author scotttresor@gmail.com
 */
class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('birthdays');
            $table->string('nationality');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('adress');
            $table->string('ville');
            $table->string('school');
            $table->string('province');
            $table->bigInteger('codeExetat');
            $table->string('option');
            $table->year('annee');
            $table->string('matricule');
            $table->integer('pourcent');
            $table->string('Department');
            $table->string('Depart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
