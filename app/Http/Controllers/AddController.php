<?php

namespace App\Http\Controllers;

use App\Add;
use App\User;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        $adds = Add::all();
        // dd($adds);
        return view('oglasi', compact('adds'));
    }

    public function klavijature($Klavijature, $id)
    {
        $user = User::find($id);
        $allAdds = Add::where('category', $Klavijature)->get();
        $addCategory = $allAdds[0]->category;
        return view('klavijature', compact('allAdds', 'user', 'addCategory'));
    }

    public function create(User $user)
    {
        $id = $user->id;
        return view('noviOglas', compact('id')); // da posaljem usera
    }

    public function mojiOglasi()
    {
        $user_id = auth()->user()->id;
        $allAdds = Add::where('user_id', $user_id)->get();
        // dd($allAdds);
        return view('mojiOglasi', compact('allAdds'));
    }

    public function store()
    {
        $pureData = request()->validate([
            'category' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'text' => 'required'
        ]);

        // dd($pureData);

        $add = new Add();
        $add->create($pureData);
        return redirect('/')->with('create', 'Novi oglas postavljen');  
    }

    public function show($id, $user_id)
    {
        $user = User::find($user_id);
        $singleAdd = Add::find($id);
        return view('single', compact('singleAdd', 'user'));
    }

    public function usersAdds($id)
    {
        $user = User::find($id);
        // dd($user);
        $allAdds = Add::where('user_id', $id)->get();
        // dd($allAdds);
        return view('ownerAdds', compact('allAdds', 'user'));
    }

    public function moji(Add $add)
    {
        $id = $add->id;
        $singleAdds = Add::where('id', $id)->get();
        // dd($singleAdds);
        return view('myAdd', compact('singleAdds'));
    }

    public function edit(Add $add)  
    {
        return view('edit_add', compact('add'));
    }

    public function update(Add $add)
    {
        $add->update(request()->validate([
            'category' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'text' => 'required'
        ]));
        
        return redirect('/mojiOglasi')->with('update', 'Oglas ISPRAVLJEN');
    }

    public function destroy($id)
    {
        $add = Add::find($id);
        $add->delete();
        return redirect('/mojiOglasi')->with('delete', 'Oglas OBRISAN');
    }
}
