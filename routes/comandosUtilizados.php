<?php

Route::get('/prueba', function () {
    
		// Role::create([
		// 	'name' => 'Admin',
		// 	'slug' => 'admin',
		// 	'description' => 'Administrador',
		// 	'full-access' => 'yes'
		// ]);
	// Role::create([
	// 		'name' => 'Guest',
	// 		'slug' => 'guest',
	// 		'description' => 'Usuario Guest',
	// 		'full-access' => 'no'
	// 	]);
	// Role::create([
	// 		'name' => 'Test',
	// 		'slug' => 'test',
	// 		'description' => 'Usuario Test',
	// 		'full-access' => 'no'
	// 	]);

	// $user = User::find(1);
	// $user->roles()->attach([1,2,3]);
	// $user->roles()->detach([2,3]);	

	// $user->roles()->sync([1,2,3]);
	// Permission::create([
	// 		'name' => 'Ver detalle de producto',
	// 		'slug' => 'product.show',
	// 		'description' => 'Ver en detalle cada producto del sistema'
	// 	]);

	// Permission::create([
	// 		'name' => 'Editción de Productos',
	// 		'slug' => 'product.edit',
	// 		'description' => 'Editar cualquier dato de un producto del sistema'
	// 	]);

	// Permission::create([
	// 		'name' => 'Eliminar producto',
	// 		'slug' => 'product.destroy',
	// 		'description' => 'Elimnar cualquier producto del sistema'
	// 	]);	

     $role = Role::find(1);

     $role->permissions()->sync([1,2,3,4]);
	 
	 return $role->permissions; 
});