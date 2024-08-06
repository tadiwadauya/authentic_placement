<?php
/**
 * Created by Tadiwa Dauya
 * Date: 21/01/2024
 * Time: 12:58 PM
 */
?>

@extends('layouts.admin.app')

@section('content')

<div class="nk-wrap ">

    <div class="nk-content nk-content-fluid">
        <div class="card card-bordered card-preview">
            <div class="container">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card-inner">
                    <div class="col-lg-12">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-3">
                        <div class="brand-logo pb-4 text-center">
                                                <a href="html/index.html" class="logo-link">
                                                    <img class="logo-light logo-img logo-img-lg" src="{{asset('admin/assets/images/logo.png')}}" srcset="{{asset('admin/assets/images/logo2x.png')}} 2x" alt="logo">
                                                    <img class="logo-dark logo-img logo-img-lg" src="{{asset('admin/assets/images/logo-dark.png')}}" srcset="{{asset('admin/assets/images/logo-dark.png')}} 2x" alt="logo-dark">
                                                </a>
                                            </div>
                            <div class="card-title">
                                <h6 class="title"><a href="{{url('/')}}">Home</a></h6>                                               
                            </div>
                        </div><!-- .card-title-group -->
                    </div><!-- .col -->
                    <div class="preview-block">
                        <div class="nk-content-body">                                                
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">                                    
                                    <div class="nk-block-head-content">    
                                            
                                            <h3 class="nk-block-title page-title">Register for an Employer's Account</h3>                                       
                                    </div><!-- .nk-block-head-content -->                                
                                </div><!-- .nk-block-between -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        @if (count($errors) > 0)
                                                            <div class="alert alert-danger">
                                                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                            </div>
                                                        @endif

                <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
        </div> 
        <div class="col">   
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>               
            </div>
        </div>
    </div>
<br>    
   
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="employer">Employer</label>
                <input type="text" class="form-control" id="employer" name="employer">
            </div>
        </div>
        <div class="col">        
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>
    </div>
<br>    
<div class="row">
        <div class="col">
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
        </div>
        <div class="col">        
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" name="website">
            </div>
        </div>
    </div>
<br> 
<div class="row">
        <div class="col">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
        <div class="col">        
           
                <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="user_type">User Type</label>
                <select class="form-control" id="is_admin" name="is_admin" required>
                    <option value="3">Company</option>
                </select>
            </div>
        </div>
    </div>
<br> 
<div class="row">
        <div class="col">
            <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div class="col">
        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>

       
        </div>
    </div>
<br> 
<div class="col-md-6">
     
    <button type="submit" class="btn btn-primary">Register</button>
          
    </div>
                            </form>
                            </div>
</div>
</div>
</div>
</div>
</div>
@endsection