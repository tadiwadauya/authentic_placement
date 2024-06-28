<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->get();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('users.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'gender' => ['nullable', 'string', 'max:255'],
            'employer' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'cell' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'string', 'max:255'],
            'category_id' => ['nullable', 'string', 'max:255'],
            'speciality' => ['nullable', 'string', 'max:255'],
            'position' => ['nullable', 'string', 'max:255'],
            'salary' => ['nullable', 'string', 'max:255'],
            'is_admin' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
    
        return redirect()->route('users.index')
                        ->with('success', 'User created successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['nullable', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
            'employer' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'cell' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'string', 'max:255'],
            'Job_category_id' => ['nullable', 'string', 'max:255'],
            'speciality' => ['nullable', 'string', 'max:255'],
            'position' => ['nullable', 'string', 'max:255'],
            'salary' => ['nullable', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'is_admin' => ['required', 'boolean'],
            'password' => ['nullable', 'string', 'min:8'],
        ]);
    
        $user = User::findOrFail($id);
        $input = $request->all();
    
        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
    
        $user->update($input);
    
        return redirect()->route('users.index')
                        ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
   
    }

    public function register()
    {
    
        return view('users.register');
    }


    public function registerstore(Request $request)
{
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255', 'unique:users'],
        'email' => ['nullable', 'string', 'max:255'],
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:255', 'unique:users'],
        'gender' => ['required', 'string', 'max:255'],
        'employer' => ['nullable', 'string', 'max:255'],
        'address' => ['nullable', 'string', 'max:255'],
        'location' => ['nullable', 'string', 'max:255'],
        'website' => ['nullable', 'string', 'max:255'],
        'description' => ['nullable', 'string'],
        'cell' => ['nullable', 'string', 'max:255'],
        'dob' => ['nullable', 'string', 'max:255'],
        'Job_category_id' => ['nullable', 'string', 'max:255'],
        'speciality' => ['nullable', 'string', 'max:255'],
        'position' => ['nullable', 'string', 'max:255'],
        'salary' => ['nullable', 'string', 'max:255'],
        'is_admin' => ['required', 'boolean'],
        'password' => ['required', 'string', 'min:8'],
    ]);

    $input = $request->all();
    $input['password'] = Hash::make($input['password']);

    $user = User::create($input);

    // Authenticate the user after registration
    auth()->login($user);

    return redirect()->route('welcome')
                    ->with('success', 'Account created successfully');
}
}
