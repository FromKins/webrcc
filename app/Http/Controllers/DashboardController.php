<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Publication;
use App\Models\Contact;
use App\Models\Slider;

class DashboardController extends Controller
{    
    function index()
    {
        
    $sliderCount = Slider::count();
    $serviceCount = Service::count();
    $publicationCount = Publication::count();
    $contactCount = Contact::count();
    $aboutCount = About::count();

    return view('dashboard', compact(
        'sliderCount',
        'serviceCount',
        'publicationCount',
        'contactCount',
        'aboutCount'
    ));        
    }
}