<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Publication;
use App\Models\Contact;
use App\Models\Slider;

class HomeController extends Controller
{
    function index()
    {
        $sliders = Slider::orderBy('id', 'asc')->take(3)->get();
        $abouts = About::first();
        $services = Service::all();
        $contacts = Contact::first();

        return view('home.index', compact(
            'sliders',
            'abouts',
            'services',
            'contacts',
        ));
    }
    function slider()
    {
        $sliders = Slider::all();

        return view('home.slider', compact('sliders'));
    }
    function about()
    {
        $abouts = About::first();

        return view('home.about', compact('abouts'));
    }
    function service()
    {
        $services = Service::all();

        return view('home.services', compact('services'));
    }
    function publication()
    {
        $publications = Publication::all();

        return view('home.publication', compact('publications'));
    }
    function contact()
    {
        $contacts = Contact::first();

        return view('home.contact', compact('contacts'));
    }
}