@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    .dashboard-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .dashboard-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<h1>Selamat Datang Di Admin Company Profile</h1>

<div class="row mt-4">
    @php
    $cards = [
    ['title' => 'DATA HOME', 'count' => $sliderCount, 'color' => 'primary', 'icon' => 'house-door-fill'],
    ['title' => 'DATA SERVICE', 'count' => $serviceCount, 'color' => 'success', 'icon' => 'gear-fill'],
    ['title' => 'DATA PUBLICATION', 'count' => $publicationCount, 'color' => 'info', 'icon' => 'journal-text'],
    ['title' => 'DATA CONTACT', 'count' => $contactCount, 'color' => 'warning', 'icon' => 'telephone-fill'],
    ['title' => 'DATA ABOUT', 'count' => $aboutCount, 'color' => 'danger', 'icon' => 'info-circle-fill'],
    ];
    @endphp

    @foreach($cards as $card)
    <div class="col-md-3 mb-3">
        <div class="card text-white bg-{{ $card['color'] }} dashboard-card">
            <div class="card-body d-flex">
                <div class="me-3 d-flex align-items-center justify-content-center"
                    style="font-size: 2rem; width: 40px;">
                    <i class="bi bi-{{ $card['icon'] }}"></i>
                </div>
                <div>
                    <h6 class="card-title mb-1">{{ $card['title'] }}</h6>
                    <p class="card-text fs-4 mb-0">{{ $card['count'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection