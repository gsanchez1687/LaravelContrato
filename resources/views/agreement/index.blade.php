@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   
                   <h3>Admin Agreement</h3>
                   <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Agreement</th>
                        <th>City</th>
                        <th>Date Agreement</th>
                        <th>Valor</th>
                        <th>Create</th>
                        <th>Modified</th>
                    </tr>
                    @foreach($model as $item)
                    <tr>
                       
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['agreement'] }}</td>
                            <td>{{ $item['city_id'] }}</td>
                            <td>{{ $item['date_agreement'] }}</td>
                            <td>{{ $item['valor'] }}</td>
                            <td>{{ $item['create_at'] }}</td>
                            <td>{{ $item['updated_at'] }}</td>
                       
                    </tr>
                    @endforeach
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection;