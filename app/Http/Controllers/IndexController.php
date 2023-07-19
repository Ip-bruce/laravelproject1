<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'hello from Laravel!'
                
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }

}
