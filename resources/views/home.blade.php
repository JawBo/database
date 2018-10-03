@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <form action="/admin" method="get">
                    <input type="hidden" value="{{$item->role_id}}" name="roleId">
                    <button type="submit">Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
