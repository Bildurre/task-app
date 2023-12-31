<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
  return view('tasks', [
    'tasks' => Task::all()
  ]);
});

Route::get('tasks/{task}', function (Task $task) {
  return view('task', [
    'task' => Task::findOrFail($id)
  ]);
})/*->where('task', '[A-z_\-]+')*/;