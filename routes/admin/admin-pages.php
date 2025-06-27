<?php
// Alle routes i `routes/admin/...` har både `web`, `auth` og EnsureUserHasRole::class.':admin' middleware, de har `/admin` prefixed til deres url. se mere i `bootstrap/app.php`

use Illuminate\Support\Facades\Route;

Route::get('/admin_test', function () { // `/admin/admin_test` (har `/admin` prefixed til url)
	return view('blade_pages.admin.admin_test');
})->name('admin.admin-pages.admin');