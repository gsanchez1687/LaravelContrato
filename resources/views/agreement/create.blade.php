@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('agreement.store') }}">
                        @csrf
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        <br>
                        <label for="agreement" class="form-label">Agreement</label>
                        <input type="text" class="form-control" name='agreement' id="agreement" placeholder="agreement">
                        <br>
                        <label for="city" class="form-label">City</label>
                        <select name="city_id" id="city_id">
                            @foreach ($modelCity as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="dateAgreement" class="form-label">date Agreement</label>
                        <input type="date" class="form-control" name="date_agreement" id="date" placeholder="date agreement">
                        <br>
                        <label for="valor" class="form-label">Valor</label>
                        <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor">
                        <br>
                        <a class="btn btn-primary" href="{{ url('agreement') }}">Back</a>
                        <input class="btn btn-primary" type='submit' value="Enviar" />
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection;