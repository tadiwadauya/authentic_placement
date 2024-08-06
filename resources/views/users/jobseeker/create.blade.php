<?php
/**
 * Created by Tadiwa Dauya
 * Date: 21/01/2024
 * Time: 12:58 PM
 */
?>

@extends('layouts.admin.app')

@section('content')
@if(auth()->check())
    @include('includes.sidebar')
@endif

<div class="nk-wrap ">
@if(auth()->check())
    @include('includes.nav')
@endif

<div class="nk-content nk-content-fluid">
<div class="card card-bordered card-preview">
    <div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card-inner">
    <div class="col-lg-12">
                                       
                                            <div class="card-inner">
                                                <div class="card-title-group align-start mb-3">
                                                    <div class="card-title">
                                                        <h6 class="title">Creating A Jobseeker Account</h6>
                                                      
                                                    </div>
                                                   
                                                </div><!-- .card-title-group -->
                                               
                                       
                                    </div><!-- .col -->
                                            <div class="preview-block">
                                            <div class="nk-content-body">
                                                
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    
                                    <div class="nk-block-head-content">
                                        
                                        <h3 class="nk-block-title page-title">Add User</h3>
                                       
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">

                                                <li>
                                                    <a href=" {{ route('users.create') }}" class="btn btn-white btn-dim btn-outline-primary">
                                                    <em class="icon ni ni-plus"></em>
                                                        <span>Add</span>
                                                    </a>
                                                </li>
                                                    <li><a href="{{ url('/admin/home')}}" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-home"></em><span>Home</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-list"></em><span>User list</span></a></li>
                                                                    <li><a href="{{ route('users.create') }}">  <em class="icon ni ni-plus-fill-c"></em><span>Add User</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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
<form action="{{ route('users.seekerstore') }}" method="POST">
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
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>
        <div class="col">    
            <div class="form-group">
                <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
        </div>
    </div>

<br>    
<div class="row">
        <div class="col">
            <div class="form-group">
                <label for="location">Location-City/Town</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Harare">
            </div>
        </div>
        <div class="col">        
        <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone">
        </div>
    </div>
</div>
<br> 
<div class="row">
       
        <div class="col">        
            
                <br> 
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
        </div>
    </div>
<br> 
<div class="row">
        <div class="col">
            <div class="form-group">
                <label class="form-label" for="default-01" for="category_id">Job Category:</label>
                    <div class="form-control-wrap">
                        <select name="category_id" class="form-control" id="category_id">
                        <option value="category_id">Select Job Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('category_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                            @endif
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="speciality">Feild of Speciality</label>
                <input type="text" class="form-control" id="speciality" name="speciality" placeholder="feild of Speciality">
            </div>
        </div>
    </div>
<br> 
<div class="row">
        <div class="col">
            <div class="form-group">
                <label for="position">Position(s) You are intrested in</label>
                <input type="text" class="form-control" id="position" name="position" placeholder="Software Developer">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="salary">Expected Salary</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>
        </div>
    </div>
<br> 
<div class="row">
        <div class="col">
            <div class="form-group">
                <label for="user_type">User Type</label>
                <select class="form-control" id="is_admin" name="is_admin" required>
                    <option value="0">Jobseeker</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
    </div>
<br> 
    <button type="submit" class="btn btn-primary">Create User</button>
</form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection