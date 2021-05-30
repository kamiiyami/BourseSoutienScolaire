@extends('admin.admin_master')
@section('admin')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <style>

@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 60px;
}

.g-width-50 {
    width: 60px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}
 </style>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('admin.body.header')

        <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="margin-top: 50px; background-color: #d5e6ff">
                        <div class="card-body">
                        <div class="container">
                            <div class="row">
                                @foreach($showData->comments as $comment)
                                <div class="col-md-10">
                                    <div class="media g-mb-30 media-comment">
                                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="{{ (!empty($comment->user['image']) ? url('upload/user_img/'.$comment->user['image']):url('upload/profile.png')) }}" alt="Image Description">
                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="border-radius: 10px;">
                                        <div class="g-mb-15">
                                            <a href="{{ route('studentprofile1', $comment->user['id']) }}"><h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: black; font-size:20px; font-weight: 600">{{ $comment->user['name'] }}</h5></a>
                                            <span class="g-color-gray-dark-v4 g-font-size-12">Le: {{ $comment->created_at }}</span>
                                        </div>
                                    
                                        <p style="color: black; font-size:17px;">{{ $comment->body }}</p>
                                    
                                        <ul class="list-inline d-sm-flex my-0">
                                            <li class="list-inline-item ml-auto">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                                Répondre
                                            </a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
    </div>
    @include('admin.body.footer')
</div>


@endsection