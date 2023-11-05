@extends('admin.layout.app')

@section('heading', 'Редактировать скидку')

@section('right_top_button')
<a href="{{ route('admin_discount_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>Посмотреть все</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_discount_update',$discount_data->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mb-4">
                                    <label class="form-label">Имя</label>
                                    <input type="text" class="form-control" name="name" value="{{ $discount_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Скидка</label>
                                    <input type="text" class="form-control" name="discount" value="{{ $discount_data->discount }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
