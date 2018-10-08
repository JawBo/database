<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>

<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>Page Administration</h1>
    <a href="/home">Home</a>
    <a href="/login">Login</a>
    <form action="/create" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"value="{{ old('name') }}"">
        <input type="email" name="email" placeholder="Email"value="{{ old('email') }}"">
        <input type="file" name="image">
        <input type="password" name="password" placeholder="Password"value="{{ old('password') }}"">
        <button type="submit">Create</button>
    </form>
    <section class="container">
        <div class="row">
            @foreach($users as $key => $item)
            <div class="col-3">
                <div class="card">
                    <h3 class="my-2 mx-3 text-center"><u>Name:</u> {{$item->name}}</h3>
                    <span> <u> Adresse: </u>{{$item->profil->adresse}}</span>
                    <div class="test">
                        <img class="img-fluid" src="{{$item->image->img}}" alt="profil_pic">
                        @if(\Auth::user()->role_id==1)
                        <form action="/image/{{$item->id}}" method="post">
                        @csrf   
                            <select name="imgid" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <button type="submit">Save</button>
                        </form>
                        @endif
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <u> Contact:</u> {{$item->email}}
                        </p>
                        <span>
                            <u>Niveaux d'Administration:</u>
                            <br> 
                            {{$item->role->name}}
                        </span>
                        <section class="row">
                            <div class="col-md-4 ">
                                <form action="/save/{{$item->id}}" method="post">
                                    @csrf
                                    @can('view-user',$item)
                                    <select name="roleid" class="form-control ">
                                        <option value="1">Admin</option>
                                        <option value="2">Member</option>
                                        <option value="3">Guest</option>
                                    </select>
                            </div>
                            <div class="col-md-4 ">
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <form action="/delete/{{$item->id}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"> Delete</button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</body>

</html>
