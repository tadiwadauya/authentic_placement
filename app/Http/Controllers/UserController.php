<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
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
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
            'gender' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
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
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'phonenumber' => ['required', 'string', 'max:255', 'unique:users'],
        'gender' => ['required', 'string', 'max:255'],
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
