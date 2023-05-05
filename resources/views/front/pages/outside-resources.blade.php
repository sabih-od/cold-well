@extends('front.layouts.app')

@section('title', 'OUTSIDE RESOURCES')
@section('description', '')
@section('keywords', '')

@section('content')

    <section class="innerpage" style="background: url({{ !empty($resource->getMedia('banner_image')->first())
                        ? $resource->getMedia('banner_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">
        <h2 class="slideOne">{{$resource->content['resource_title']}}</h2>
    </section>
{{--@dd($resource->content['description'])--}}
    <section class="resources">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="heading mb-5 fw-500 text-center slideTwo" >{{$resource->content['resource_section_title']}}</h2>
                    <h1 class="heading fw-700 mb-4 slideThree">{{$resource->content['resource_section_heading']}}</h1>
                    {!! $resource->content['description'] !!}
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
