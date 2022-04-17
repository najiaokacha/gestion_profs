<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use  App\Models\Professeurs;
use Illuminate\Support\Facades\Auth;
class ProfesseursController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   if(Auth::user()->is_admin){
        $professeurs=Professeurs::all();
    }
    else{
        $professeurs=Professeurs::where('user_id',Auth::user()->id)->get();
    }
        
        return view('index',compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeurs=new Professeurs();

        $professeurs->user_id=Auth::user()->id;
        $professeurs->nom=$request->input('nom');
        $professeurs->prenom=$request->input('prenom');
        $professeurs->email=$request->input('email');
        $professeurs->cin=$request->input('cin');
        if($request->hasFile('image')){
            $professeurs->image=$request->image->store('image');

        }
        $professeurs->telephone=$request->input('telephone');
        $professeurs->date_recrutement=$request->input('date_recrutement');
        $professeurs->date_naissance=$request->input('date_naissance');
        $professeurs->specialite=$request->input('specialite');

        $professeurs->appartenant_a_ENSAJ=$request->input('appartenant_a_ENSAJ');

        if($request->hasFile('Dossier_scientifique')){
            $professeurs->Dossier_scientifique=$request->Dossier_scientifique->store('Dossier_scientifique');

        }
        $professeurs->etat_ds=$request->input('etat_ds');

        if($request->hasFile('Dossier_Pedagogique')){
            $professeurs->Dossier_Pedagogique=$request->Dossier_Pedagogique->store('Dossier_Pedagogique');

        }
        $professeurs->etat_dp=$request->input('etat_dp');

        if($request->hasFile('Dossier_administratif')){
            $professeurs->Dossier_administratif=$request->Dossier_administratif->store('Dossier_administratif');

        }
        $professeurs->etat_da=$request->input('etat_da');

        
       
        
        $professeurs->save();

        session()->flash('success','Le professeur saisi ses informations
        personnelles avec succès ');
        
        return redirect('/professeurs');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professeurs $professeur)
    {
        return view('show',compact('professeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professeurs=Professeurs::find($id);
        $this->authorize('update',$professeurs);
        return view('edit',compact('professeurs'));
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
        $professeurs=Professeurs::find($id);

        $professeurs->nom=$request->input('nom');
        $professeurs->prenom=$request->input('prenom');
        $professeurs->email=$request->input('email');
        $professeurs->cin=$request->input('cin');

        if($request->hasFile('image')){
            $professeurs->image=$request->image->store('image');

        }

        $professeurs->telephone=$request->input('telephone');
        $professeurs->date_recrutement=$request->input('date_recrutement');
        $professeurs->date_naissance=$request->input('date_naissance');
        $professeurs->specialite=$request->input('specialite');
        $professeurs->appartenant_a_ENSAJ=$request->input('appartenant_a_ENSAJ');
        
        if($request->hasFile('Dossier_scientifique')){
            $professeurs->Dossier_scientifique=$request->Dossier_scientifique->store('Dossier_scientifique');

        }
        $professeurs->etat_ds=$request->input('etat_ds');

        if($request->hasFile('Dossier_Pedagogique')){
            $professeurs->Dossier_Pedagogique=$request->Dossier_Pedagogique->store('Dossier_Pedagogique');

        }
        $professeurs->etat_dp=$request->input('etat_dp');

        if($request->hasFile('Dossier_administratif')){
            $professeurs->Dossier_administratif=$request->Dossier_administratif->store('Dossier_administratif');

        }
        $professeurs->etat_da=$request->input('etat_da');


        
       
        
        $professeurs->save();
        return redirect('/professeurs'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $professeurs=Professeurs::find($id);
        $this->authorize('delete',$professeurs);
        $professeurs->delete();
        return redirect('/professeurs'); 
    }
}
