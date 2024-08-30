<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////////////////// Start Permissions //////////////////////////////

        // POS

        DB::table('permissions')->insert([
            'name' => 'pos.menu',
            'guard_name' => 'web',
            'group_name' => 'pos'
        ]);

        // Employee

        DB::table('permissions')->insert([
            'name' => 'employee.menu',
            'guard_name' => 'web',
            'group_name' => 'employee'
        ]);

        DB::table('permissions')->insert([
            'name' => 'employee.all',
            'guard_name' => 'web',
            'group_name' => 'employee'
        ]);

        DB::table('permissions')->insert([
            'name' => 'employee.add',
            'guard_name' => 'web',
            'group_name' => 'employee'
        ]);

        DB::table('permissions')->insert([
            'name' => 'employee.edit',
            'guard_name' => 'web',
            'group_name' => 'employee'
        ]);

        DB::table('permissions')->insert([
            'name' => 'employee.delete',
            'guard_name' => 'web',
            'group_name' => 'employee'
        ]);

        // Customer

        DB::table('permissions')->insert([
            'name' => 'customer.menu',
            'guard_name' => 'web',
            'group_name' => 'customer'
        ]);

        DB::table('permissions')->insert([
            'name' => 'customer.all',
            'guard_name' => 'web',
            'group_name' => 'customer'
        ]);

        DB::table('permissions')->insert([
            'name' => 'customer.add',
            'guard_name' => 'web',
            'group_name' => 'customer'
        ]);

        DB::table('permissions')->insert([
            'name' => 'customer.edit',
            'guard_name' => 'web',
            'group_name' => 'customer'
        ]);

        DB::table('permissions')->insert([
            'name' => 'customer.delete',
            'guard_name' => 'web',
            'group_name' => 'customer'
        ]);

        // Supplier

        DB::table('permissions')->insert([
            'name' => 'supplier.menu',
            'guard_name' => 'web',
            'group_name' => 'supplier'
        ]);

        DB::table('permissions')->insert([
            'name' => 'supplier.all',
            'guard_name' => 'web',
            'group_name' => 'supplier'
        ]);

        DB::table('permissions')->insert([
            'name' => 'supplier.add',
            'guard_name' => 'web',
            'group_name' => 'supplier'
        ]);

        DB::table('permissions')->insert([
            'name' => 'supplier.edit',
            'guard_name' => 'web',
            'group_name' => 'supplier'
        ]);

        DB::table('permissions')->insert([
            'name' => 'supplier.delete',
            'guard_name' => 'web',
            'group_name' => 'supplier'
        ]);

        // Salary

        DB::table('permissions')->insert([
            'name' => 'salary.menu',
            'guard_name' => 'web',
            'group_name' => 'salary'
        ]);

        DB::table('permissions')->insert([
            'name' => 'salary.all',
            'guard_name' => 'web',
            'group_name' => 'salary'
        ]);

        DB::table('permissions')->insert([
            'name' => 'salary.add',
            'guard_name' => 'web',
            'group_name' => 'salary'
        ]);

        DB::table('permissions')->insert([
            'name' => 'salary.pay',
            'guard_name' => 'web',
            'group_name' => 'salary'
        ]);

        DB::table('permissions')->insert([
            'name' => 'salary.paid',
            'guard_name' => 'web',
            'group_name' => 'salary'
        ]);

        // Attendance

        DB::table('permissions')->insert([
            'name' => 'attendance.menu',
            'guard_name' => 'web',
            'group_name' => 'attendance'
        ]);

        // Category

        DB::table('permissions')->insert([
            'name' => 'category.menu',
            'guard_name' => 'web',
            'group_name' => 'category'
        ]);

        // Product

        DB::table('permissions')->insert([
            'name' => 'product.menu',
            'guard_name' => 'web',
            'group_name' => 'product'
        ]);

        // Expense

        DB::table('permissions')->insert([
            'name' => 'expense.menu',
            'guard_name' => 'web',
            'group_name' => 'expense'
        ]);

        // Orders

        DB::table('permissions')->insert([
            'name' => 'orders.menu',
            'guard_name' => 'web',
            'group_name' => 'orders'
        ]);

        // Stock

        DB::table('permissions')->insert([
            'name' => 'stock.menu',
            'guard_name' => 'web',
            'group_name' => 'stock'
        ]);

        // Roles

        DB::table('permissions')->insert([
            'name' => 'roles.menu',
            'guard_name' => 'web',
            'group_name' => 'roles'
        ]);
        ////////////////////////////// End Permissions //////////////////////////////

        ////////////////////////////// Start Roles //////////////////////////////

        // Roles

        DB::table('roles')->insert([
            'name' => 'SuperAdmin',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'Account',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'Manager',
            'guard_name' => 'web'
        ]);

        ////////////////////////////// End Roles //////////////////////////////

        ////////////////////////////// Start Role has Permissions //////////////////////////////

        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '4',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '5',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '6',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '8',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '9',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '10',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '11',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '12',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '13',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '14',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '15',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '16',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '17',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '18',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '19',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '20',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '21',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '22',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '23',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '24',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '25',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '26',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '27',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '28',
            'role_id' => '1'
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '8',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '9',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '10',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '11',
            'role_id' => '2'
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => '17',
            'role_id' => '3'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '18',
            'role_id' => '3'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '19',
            'role_id' => '3'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '20',
            'role_id' => '3'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '21',
            'role_id' => '3'
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => '22',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '23',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '24',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '25',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '26',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '27',
            'role_id' => '4'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '28',
            'role_id' => '4'
        ]);

        ////////////////////////////// End Role has Permissions //////////////////////////////

        ////////////////////////////// Start Model Has Roles //////////////////////////////

        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'App\Models\User',
            'model_id' => '1'
        ]);

        ////////////////////////////// End Model Has Roles //////////////////////////////
    }
}
