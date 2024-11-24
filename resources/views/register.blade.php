@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/register" method="POST"> 
            @csrf              
                
            <div class="form-group">                
                    <label for="name">User Name:</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="User Name">
                </div>

                <div class="form-group">                
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
