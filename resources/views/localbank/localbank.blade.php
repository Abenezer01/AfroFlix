@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ethiopian Bank Payment</div>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                               @foreach($errors->all() as $error)
                                   <li>{{$error}}</li>
                               @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif

                <div class="card-body">
                <form method="POST" action="{{url('offpay')}}">
                    {{csrf_field()}}

                        <div class="form-group row">
                            <label for="bank" class="col-md-4 col-form-label text-md-right"> Bank </label>
                            <div class="col-md-6">
                                <select id="bank" name = "bank"type="text" class="form-control" value = "bank" autofocus>
                                    <option vlaue = "CBE">CBE</option>
                                    <option vlaue = "Dashen">Dashen Bank</option>
                                    <option vlaue = "Awash">Awash Bank</option>
                                    <option vlaue = "Addis">Addis Bank</option>
                                    <option vlaue = "Anbesa">Anbesa Bank</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Reffernce Noumber</label>

                            <div class="col-md-6">
                                <input id="refno" name="refno" type="text" class="form-control" placeholder="reffernce ">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply Payment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
