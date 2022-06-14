<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function rentRecord()
    {
        return view('staff.rent-record');
    }

    public function bookList()
    {
        return view('admin.book-list');
    }

    public function bookCategory()
    {
        return view('admin.book-category');
    }


    public function userList()
    {
        $users = User::all();

        return view('admin.user-list', compact('users'));
    }

    public function createList()
    {
        return view('admin.create-list');
    }

    public function report()
    {
        return view('admin.report');
    }
    public function profile(User $user)
    {
        $roleName = Role::find($user->role);
        $roles = Role::all();
        return view('admin.profile', compact('user','roleName', 'roles'));
//        /return view('admin.profile', compact('user'));
    }


    public function create(Request $request)
    {
        return view('admin.profile-add', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string','max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string','max:255'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->ic = $request->ic;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->phone = $request->phone;

        $user->save();

        $users = User::all();
        return view('admin.user-list', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.profile-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'role' => ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $user->update([
            'name' => $request->name,
            'ic' => $request->ic,
            'email' => $request->email,
            'role'=> $request->role,
            'address' => $request->address,
            'phone' => $request->phone,

        ]);

        $users = User::all();

        return view('admin.user-list', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
