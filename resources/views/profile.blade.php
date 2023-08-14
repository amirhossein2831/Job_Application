@extends('layouts.app')

@section('contact')
    <section class="home">
        <div class="home-content">
            <h1>Hi,I am amirhossein</h1>
            <h3>web developer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus, alias amet animi debitis eveniet,
                modi nisi nulla possimus quae quasi quia quos, recusandae saepe sapiente? Asperiores at distinctio in
                numquam odio officiis qui! Aut, eius illo ipsa possimus rem saepe voluptatem voluptatibus! Cupiditate
                est ipsa, nesciunt temporibus ut velit!</p>
            <a href="" class="btn-hire">Hire Me</a>
        </div>
        <div class="home-image">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                    <img
                        src="{{\Illuminate\Support\Facades\Storage::url('image/ywvsgvDYAuAGT0GjVxDJPoLdwlnFby7ivSatqAvh.jpg')}}"
                        alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
