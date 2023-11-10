@extends('admin.layout.app')

@section('heading', 'Заказы пользователей')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>Номер</th>
                                    <th>Номер заказа</th>
                                    <th>Метод оплаты</th>
                                    <th>Дата бронирования</th>
                                    <th>Оплаченная сумма</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->order_no }}</td>
                                    <td>{{ $row->payment_method }}</td>
                                    <td>{{ $row->booking_date }}</td>
                                    <td>{{ $row->paid_amount }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_invoice',$row->id) }}" class="btn btn-primary">Подробнее</a>
                                        <a href="{{ route('admin_order_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Вы уверены?');">Удалить</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
