@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/main.jpg" alt="" class="rounded-circle" style="width: 100px">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Laravel Social App</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">LaravelSocialApp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.mmeest.org</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="img/01.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/02.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/03.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
