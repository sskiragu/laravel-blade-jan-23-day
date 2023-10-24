<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // permission
            // on users
            Permission::create(['name' => 'create-users']);
            Permission::create(['name' => 'edit-users']);
            Permission::create(['name' => 'delete-users']);
                // on posts
            Permission::create(['name' => 'create-posts']);
            Permission::create(['name' => 'edit-posts']);
            Permission::create(['name' => 'delete-posts']);
    
            // role
            $adminRole = Role::create(['name' => 'Admin']);
            
            $adminRole->givePermissionTo([
                'create-users',
                'delete-users',
                'create-posts',
                'edit-posts',
                'delete-posts',
            ]);

            $user = User::create([
                'name' => 'admin', 
                'email' => 'admin@example.com',
                'password' => bcrypt('123456')
            ]);
             
            $permissions = Permission::pluck('id','id')->all();
           
            $adminRole->syncPermissions($permissions);
             
            $user->assignRole([$adminRole->id]);

    }
}
