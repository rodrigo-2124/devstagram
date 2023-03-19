<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user, Request $request)
    {
        //para relacionar tablas se usa el attach, en lugar del create
        $user->followers()->attach( auth()->user()->id );
        return back();
    }

    public function destroy(User $user)
    {
        //para relacionar tablas se usa el attach, en lugar del create
        $user->followers()->detach( auth()->user()->id );
        return back();
    }
}
