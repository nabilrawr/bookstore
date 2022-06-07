<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\StaffExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin.role.create', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate ([
            'user_id' => 'required',
            'role_id' => 'required',
        ]);

        // return $request;
        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        if (filled($user) && filled($role)) {
            $user = $user->assignRole($role);
        }

        return redirect()->route('admin.create-role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('borrower.profile-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('borrower.profile-edit', compact('user'));
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

        return
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $user->update([
            'name' => $request->name,
            'ic' => $request->ic,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,

        ]);

        return redirect()->route('profile-show', $user);
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
    //excel controller user
    public function export()
    {
        return (new UsersExport)->download('users.xlsx');
    }

    //excel controller staff
    public function staffexport()
    {
        return (new StaffExport)->download('staff.xlsx');
    }
}
