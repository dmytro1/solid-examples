<?php

use App\Reporting\SalesHtmlOutput;
use App\Reporting\SalesReporter;
use App\Reporting\ShapesHtmlOutput;
use App\Repositories\CollectionSalesRepository;
use App\Repositories\LessonRepositoryInterface;
use App\Shapes\AreaCalculator;
use App\Shapes\Circle;
use App\Shapes\Square;
use App\Space\Captain;
use App\Space\Workers\AndroidWorker;
use App\Space\Workers\HumanWorker;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('single-responsibility', function () {

    $report = new SalesReporter(new CollectionSalesRepository);

    $begin = new Carbon('2021-03-18 14:43:40');
    $end = new Carbon('2021-03-20 14:43:40');

    return $report->between($begin, $end, new SalesHtmlOutput);
});

Route::get('open-closed', function () {

    $calculator = new AreaCalculator();

    $shapes = collect([
        new Square(3, 4),
        new Circle(3),
    ]);

    $area = $calculator->calculate($shapes);
    $output = new ShapesHtmlOutput();

    return $output->output($area);
});

Route::get('liskov-substitution', function (LessonRepositoryInterface $lesson) {

    $lesson = $lesson->getAll();

    if (is_array($lesson)) {
        return response('Follow the Liskov substitution principle. Type of data which returns should be expected.');
    }

    return response('Something is wrong with type of data');
});

Route::get('interface-segregation', function (Captain $captain) {
    $humanWork = $captain->manage(new HumanWorker);
    $androidWork = $captain->manage(new AndroidWorker);

    return response([$humanWork, $androidWork]);
});
