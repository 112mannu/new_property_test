<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'profile' => 'user.avif'
        ]);

       

        $writer = User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('123456')
        ]);


        $admin_role = Role::create(['name' => 'admin']);
        $writer_role = Role::create(['name' => 'ULB']);


        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);  
        $permission = Permission::create(['name' => 'Permission delete']);


        $permission = Permission::create(['name' => 'form1 access']);
        $permission = Permission::create(['name' => 'form1 edit']);
        $permission = Permission::create(['name' => 'form1 create']);  
        $permission = Permission::create(['name' => 'form1 delete']);


        $permission = Permission::create(['name' => 'form2 access']);
        $permission = Permission::create(['name' => 'form2 edit']);
        $permission = Permission::create(['name' => 'form2 create']);  
        $permission = Permission::create(['name' => 'form2 delete']);

        $permission = Permission::create(['name' => 'Municipal access']);
        $permission = Permission::create(['name' => 'Municipal edit']);
        $permission = Permission::create(['name' => 'Municipal create']);  
        $permission = Permission::create(['name' => 'Municipal delete']);
        $permission = Permission::create(['name' => 'Municipal report']);

        $permission = Permission::create(['name' => 'UlbType access']);
        $permission = Permission::create(['name' => 'UlbType edit']);
        $permission = Permission::create(['name' => 'UlbType create']);  
        $permission = Permission::create(['name' => 'UlbType delete']);

        $permission = Permission::create(['name' => 'Ulbbodies access']);
        $permission = Permission::create(['name' => 'Ulbbodies edit']);
        $permission = Permission::create(['name' => 'Ulbbodies create']);  
        $permission = Permission::create(['name' => 'Ulbbodies delete']);

        $permission = Permission::create(['name' => 'ULB Ward access']);
        $permission = Permission::create(['name' => 'ULB Ward edit']);
        $permission = Permission::create(['name' => 'ULB Ward create']);  
        $permission = Permission::create(['name' => 'ULB Ward delete']);

        $permission = Permission::create(['name' => 'Work assign access']);
        $permission = Permission::create(['name' => 'Work assign edit']);
        $permission = Permission::create(['name' => 'Work assign create']);  
        $permission = Permission::create(['name' => 'Work assign delete']);


        
        $admin->assignRole($admin_role);
        $writer->assignRole($writer_role);
        $admin_role->givePermissionTo(Permission::all());
    }
}
