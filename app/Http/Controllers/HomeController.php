<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Permission::create(['name'=> 'Will Generate Payslips']);
       
        //  Role::create(['name'=> 'Payroll Admin']);
        $role = Role::findByName('Payroll Admin');
        $role->givePermissionTo('Will Generate Payslips');
        // return view('home');
      
        return view('admin.admin');
    }
    
   

}
