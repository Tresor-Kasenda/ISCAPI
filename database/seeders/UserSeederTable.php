<?php
declare(strict_types=1);
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

/***
 * Class UserSeederTable
 * @author scotttresor@gmail.com
 * @package Database\Seeders
 */
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.comm',
            'password' => \Illuminate\Support\Facades\Hash::make('scotttresor')
        ]);
    }
}
