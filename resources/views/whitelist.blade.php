@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a href="{{route('whitelist_add')}}"
                                                class="btn btn-success float-right">Добавить устройство</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">IMEI</th>
                                <th scope="col">IMSI</th>
                                <th scope="col">MSISDN</th>
                                <th scope="col">Дата создания</th>
                                <th scope="col">Дата последнего изменения</th>
                                <th scope="col">Создатель записи</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
