<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile_category = Profile::find(1);
        $profile_category->permissions()->createMany([
            [ 'name' => 'module_category','description' => 'Permite acesso ao módulo de gestão de categorias' ],
            [ 'name' => 'module_category_create','description' => 'Permite criar uma categoria' ],
            [ 'name' => 'module_category_show','description' => 'Permite visualizar detalhes de uma categoria' ],
            [ 'name' => 'module_category_edit','description' => 'Permite editar uma categoria' ],
            [ 'name' => 'module_category_delete','description' => 'Permite deletar uma categoria' ]
        ]);

        $profile_product = Profile::find(2);
        $profile_product->permissions()->createMany([
            [ 'name' => 'module_product','description' => 'Permite acesso ao módulo de gestão de produtos' ],
            [ 'name' => 'module_product_create','description' => 'Permite criar um produto' ],
            [ 'name' => 'module_product_show','description' => 'Permite visualizar detalhes de um produto' ],
            [ 'name' => 'module_product_edit','description' => 'Permite editar um produto' ],
            [ 'name' => 'module_product_delete','description' => 'Permite deletar um produto' ]
        ]);

        $profile_table = Profile::find(3);
        $profile_table->permissions()->createMany([
            [ 'name' => 'module_table','description' => 'Permite acesso ao módulo de gestão de mesas' ],
            [ 'name' => 'module_table_create','description' => 'Permite criar uma mesa' ],
            [ 'name' => 'module_table_show','description' => 'Permite visualizar detalhes de uma mesa' ],
            [ 'name' => 'module_table_edit','description' => 'Permite editar uma mesa' ],
            [ 'name' => 'module_table_delete','description' => 'Permite deletar uma mesa' ]
        ]);

        

        
        
    }
}
