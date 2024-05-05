@extends('layouts.app')
@section('content')

<div class="home mt-5">
    <div class="container py-5 px-5 rounded-4">
        <div class="row">
            <div class="col-5 text-center">
                <img class="" src="{{ Vite::asset('resources/image/foto.jpg')}}" alt="">
            </div>
            <div class="col-7">
                <h2 class="fw-bold">Moh. Rizky Pramudita</h2>
                <hr />
                <div class="row">
                    <div class="col-1">
                        <p>Email</p>
                        <p>City</p>
                        <p>Country</p>
                        <P>Phone</P>
                    </div>
                    <div class="col-10">
                        <p class="fw-bold">mozabang1@gmail.com</p>
                        <p class="fw-bold">Surabaya</p>
                        <p class="fw-bold">Indonesia</p>
                        <p class="fw-bold">+62-8592-4135-28</p>
                    </div>
                </div>
        </div>


        </div>
    </div>

</div>
@endsection
