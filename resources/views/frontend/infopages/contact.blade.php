@extends('layouts.app')

@section('title', 'Contact')

@section('content')

{{-- <style>
    .googlemaps {
        width: 100%
    }
</style> --}}
{{-- <div class="col-md-8">
    <div clas="map-wrapper">
        
    </div>
</div> --}}


<div class="contact">
    <div class="contact-map">
    <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2846.469532987605!2d26.054422400000004!3d44.4850451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2037f7d34e04f%3A0x2b54ddd82a3bbf1c!2sFloraria%20Butterflowerss!5e0!3m2!1sro!2sro!4v1665556978571!5m2!1sro!2sro" 
            width="100%" height="auto" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-schedule">
        <h2>Program : </h2>
        <p>Luni : 8:00 - 20:30</p>
        <p>Marti : 8:00 - 20:30</p>
        <p>Miercuri : 8:00 - 20:30</p>
        <p>Joi : 8:00 - 20:30</p>
        <p>Vineri : 8:00 - 20:30</p>
        <p>Sambata : 8:00 - 20:30</p>
        <p>Duminica : 8:00 - 20:30</p>

    </div>
</div>

@endsection