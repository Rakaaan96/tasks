<html>
<h1>fibonacci</h1>

<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Collection;

Route::get('/fibonacci', function () {
    $length = 4; // Specify the desired length of the Fibonacci sequence
    $sequence = generateFibonacciSequence($length);
    
    return implode(', ', $sequence);
});

function generateFibonacciSequence($length) {
    $sequence = Collection::make([0, 1]);

    for ($i = 2; $i < $length; $i++) {
        $nextNumber = $sequence[$i - 1] + $sequence[$i - 2];
        $sequence->push($nextNumber);
    }

    return $sequence->toArray();
}

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

Route::get('/', function () {
    return view('welcome');
});
?>
</html>