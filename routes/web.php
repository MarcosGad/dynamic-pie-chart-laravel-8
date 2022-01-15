<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EchartController;

Route::get('echarts', [EchartController::class,'echart']);
