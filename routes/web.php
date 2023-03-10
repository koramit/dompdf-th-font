<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {

    return Pdf::setOptions([
            'isRemoteEnabled' => true, // อนุญาตให้ download font จาก link ได้
            'fontDir' => storage_path('fonts'), // folder ต้อง exists และมีสิทธิ์ RW
            'fontCache' => storage_path('fonts'), // folder ต้อง exists และมีสิทธิ์ RW
        ])->loadView('pdf.thai-font', [
            'title' => 'Test DOMPDF',
            'content' => 'just test basic PDF'
        ])->stream();
});
