@extends('front.layout.app')

@section('main_content')
    <style>
        * {
            box-sizing: border-box;
        }
        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }
        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }
        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }
        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }
        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }
        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            display: none;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
        .rating-container .form-control:hover, .rating-container .form-control:focus{
            background: #fff;
            border: 1px solid #ced4da;
        }
        .rating-container textarea:focus, .rating-container input:focus {
            color: #000;
        }
        /* End */
    </style>


<div class="page-top">
    <div class="bg"  ></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Заказать религиозные книги</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content room-detail  " style="background-color:lightgrey ;">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 left ">



                @foreach($excursions as $excursion)
@php
                                {{$avgStar = App\Models\ReviewexcurRating::where ('excursion_id',$excursion->id)->pluck('star_rating')->avg();}}
                    {{  $avgStar1= round($avgStar);}}
 {{$reviewCount = App\Models\ReviewexcurRating::where ('excursion_id',$excursion->id)->pluck('excursion_id')->count();}}

@endphp

<div class="col-md-3">
<div class="card flex-row ; " style="border-color: white;box-shadow: 0 0 20px 0 #ddd;width: 710px;height: 420px ;padding:.5rem 1rem;margin-bottom:30px;border-radius: 30px;">
<div class="photo " >
<div class="photo" style= margin-bottom:10px;">
<img style="width: 160px;height: 230px" src="{{ asset('uploads/excursions/'.$excursion->featured_photo) }}" alt="">
                                </div>


                                    <div class=" review-content">
                                        <p class="mt-1 text-warning" style="margin-bottom:1px;">
                                            {{ $avgStar }}
                                            @for($i=1; $i<=$avgStar; $i++)
                                                <span><i class="fa fa-star text-warning"></i></span>
                                            @endfor
                                        </p>
                                        <div class="text-primary" style="font-style: italic; margin-bottom:20px;"  >
                                            {{ $reviewCount }}  {{trans_choice('отзыв|отзыва|отзывов',$reviewCount)}}
                                        </div>
                                    </div>


                                <div class="button">
                                    <a href="{{ route('excursion_detail',$excursion->id) }}" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div>
                            <div class="text" style="width: 600px;height: 200px ;padding:10px 10px;margin-bottom:50px;">
                                <div class="" style="font-size: 20px;"  >
                                     {{ $excursion->name }}
                                </div>
                                <div style="padding-top:8px;"></div>
                                <div class="text-primary" style="font-style: italic;">
                                    <td style="font-weight: bold;padding-right: 6px">Продолжительность: </td>
                                    @foreach ($excursion->durations as $duration)
                                        {{$duration->start}} {{$duration->finish}}
                                    @endforeach
                                </div>
                                <div style="padding-top:8px;"></div>
                                <table style="width: 500px;height: 200px ">
                                    <tbody>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">Скидки: </td>
                                        <td>@foreach ($excursion->discounts as $discount)
                                                {{$discount->name}} {{$discount->discount}}
                                            @endforeach
                                          </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    <tr>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">Цена: </td>
                                        <td>&#8381;{{ $excursion->price }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">Транспорт: </td>
                                        <td>{{ $excursion->transport }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">Гид: </td>
                                        <td>{{ $excursion->guide }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">По каким дням: </td>
                                        <td>{{ $excursion->on_what_days }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding-right: 6px">Место встречи: </td>
                                        <td>{{ $excursion->placeMeeting }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div style="padding-top:8px;"></div>
                                <div class="" >
                                    {{ $excursion->description }}
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card col-lg-4 col-md-5 col-sm-12 right ">

                <div class="sidebar-container" id="sticky_sidebar">



                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@endsection
