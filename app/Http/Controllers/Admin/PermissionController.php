<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Permission;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class PermissionController extends AdminBaseController
{
    public function __construct() 
    {
        parent::__construct();
        if (Gate::denies('create_account')) 
        {
            abort(403,"你沒權限訪問這版！");
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::All();
        $permissions = Permission::getAllLabels();

        return view('admin.permission',['roles'=>$roles,'permissions'=>$permissions]);
    }

}
