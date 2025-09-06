<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get("/", HomePage::class)->name("home");
Route::get("/categories", action: CategoriesPage::class)->name("categories");
Route::get("/products", ProductsPage::class)->name("products");
Route::get("/cart", CartPage::class)->name("cart");
Route::get("/products/{slug}", ProductDetailPage::class)->name("product-details");
Route::get("/checkout", CheckoutPage::class);
Route::get("/my-orders", MyOrdersPage::class);
Route::get("/my-orders/{orders}", MyOrderDetailPage::class);


Route::get("/login", LoginPage::class);
Route::get("/register", RegisterPage::class);
Route::get("forgot", ForgotPasswordPage::class);
Route::get("/reset", ResetPasswordPage::class);


Route::get("/success", SuccessPage::class);
Route::get("/cancel", CancelPage::class);


// require __DIR__ . '/auth.php';
