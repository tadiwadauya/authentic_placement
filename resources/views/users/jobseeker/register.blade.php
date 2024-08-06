@extends('layouts.admin.app')

@section('content')
<div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                <body class="img js-fullheight" style="background-image: url('{{asset('assets/front/img/banner/s_slider_bg.jpg')}}');">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                    <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('assets/admin/assets/images/logo.png')}}" srcset="{{asset('admin/assets/images/logo2x.png')}} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('assets/admin/assets/images/logo-dark.png')}}" srcset="{{asset('admin/assets/images/logo-dark.png')}} 2x" alt="logo-dark">
                            </a>
                        </div>
                                        <h4 class="nk-block-title">Register</h4>
                                        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                                        <div class="nk-block-des">
                                            <p>Fill in the form to become a member and download for free</p>
                                        </div>
                                    </div>
                                </div>
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
        <div class="col-md-6">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>
        </div>
    </div>
<br> 
    <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
@endsection