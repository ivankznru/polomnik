@extends('admin.layout.app')

@section('heading', 'Панель статистики')

@section('main_content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Выполненные заказы</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_completed_orders }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Ожидающие заказы</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_pending_orders }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fa fa-user-plus"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Активные пользователи</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_active_customers }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fa fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Ожидающие пользователи</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_pending_customers }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fa fa-home"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Всего книг</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_books }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fa fa-home"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Всего экскурсий</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_excursions }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fa fa-home"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Всего комнат</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_rooms }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Подписчики подтвержденные</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_subscribers }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Подписчики ожидающие</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_nonconfirmedsubscribers }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Христианские требы</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_prayordertrebs }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Мусульманские молитвы</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_prayordermuslims }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <section class="section">
                <div class="section-header">
                    <h1>Последние заказы</h1>
                </div>
            </section>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Номер</th>
                                            <th>Заказ No</th>
                                            <th>Способ оплаты</th>
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
                                                    <a href="{{ route('admin_invoice',$row->id) }}" class="btn btn-primary">Подробнееl</a>
                                                    <a href="{{ route('admin_order_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Вы уверенны?');">Удалить</a>
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
        </div>
    </div>
@endsection
