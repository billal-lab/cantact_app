<?php

namespace App\Http\Controllers\Cantact;

use DateTime;
use Carbon\Carbon;
use App\Models\Cantact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cantactController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){

        $this->validate($request,[
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'pnumber' => 'required|max:10|min:10',
            'adresse' => 'required|max:255',
            'town' => 'required|max:255',
            'codep' => 'required|integer',
            'comment' => 'required',
        ]);
        $cantact = new Cantact;
        $cantact->created_at= Carbon::now();
        $cantact->updated_at= Carbon::now();
        $cantact->firstname = $request->get('fname');
        $cantact->lastname = $request->get('lname');;
        $cantact->adresse = $request->get('adresse');;
        $cantact->email= $request->get('email');;
        $cantact->numberPhone = $request->get('pnumber');;
        $cantact->town = $request->get('town');;
        $cantact->codePostal = $request->get('codep');;
        $cantact->description =  $request->get('comment');;
        $cantact->save();
        session()->flash('success', "Votre message a été envoyé il sera traité trés prochainement.");
        return redirect()->route('cantact_index');
    }

    public function destroy(Cantact $cantact)
    {
        // $this->authorize('delete', $cantact);

        $cantact->delete();
        session()->flash('success', "le contact a été bien supprimé.");
        return back();
    }


    public function editDisplay(Cantact $cantact)
    {
        return view('Admin.editCantact',compact("cantact"));
    }

    public function edit(Cantact $cantact, Request $request)
    {
        if($cantact==null){
            return redirect()->route('admin_index');
        }
        $this->validate($request,[
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'pnumber' => 'required|max:10|min:10',
            'adresse' => 'required|max:255',
            'town' => 'required|max:255',
            'codep' => 'required|integer',
            'comment' => 'required',
        ]);
        $cantact->updated_at= new DateTime();
        $cantact->firstname = $request->get('fname');
        $cantact->lastname = $request->get('lname');;
        $cantact->adresse = $request->get('adresse');;
        $cantact->email= $request->get('email');;
        $cantact->numberPhone = $request->get('pnumber');;
        $cantact->town = $request->get('town');;
        $cantact->codePostal = $request->get('codep');;
        $cantact->description = $request->get('comment');;
        $cantact->save();
        session()->flash('success', "le contact a été bien modifié.");
        return redirect()->route('admin_index');
    }
}
