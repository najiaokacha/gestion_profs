

@extends('layouts.app')

@section('content')
 
<div class="container rounded text-dark bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div><div class="bg-dark alert text-light">
                <div class="row mt-2">
                <img class="rounded-circle mt-3" width="150px" src="/storage/{{$professeur->image}}"/>
                    <div class="col-md-6"><label class="labels">Nom :   </label><div style="color:red" class="bg-dark text-light" role="">{{$professeur->nom}}</div></div>
                    <div class="col-md-6"><label class="labels">Prenom :    </label><div class="bg-dark text-light" role="">{{$professeur->prenom}}</div></div>
                    
                </div>
                <div class="row mt-3">
                <!--
                    <div class="col-md-12"><label  class="labels">ID     :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->id}}</div></div>
                -->
                    <div class="col-md-12"><label  class="labels">Email  :   </label><div class="bg-dark text-light" role="">{{$professeur->email}}</div></div><br><br><br>
                    <div class="col-md-12"><label  class="labels">Cin    :   </label><div class="bg-dark text-light" role="">{{$professeur->cin}}</div><p  ></p></div><br>
                    <div class="col-md-12"><label  class="labels">Telephone  :   </label><div class="bg-dark text-light" role="">{{$professeur->telephone}}</div></div><br><br>
                    <div class="col-md-12"><label  class="labels">date de recrutement   :   </label><div class="bg-dark text-light" role="">{{$professeur->date_recrutement}}</div></div><br><br>
                    <div class="col-md-12"><label  class="labels">date de naissance :   </label><div class="bg-dark text-light" role="">{{$professeur->date_naissance}}</div></div><br><br>
                    <div class="col-md-12"><label  class="labels">specialite :   </label><div class="bg-dark text-light" role="">{{$professeur->specialite}}</div></div><br><br>
                    <div class="col-md-12"><label  class="labels">appartenant à ENSAJ    :   </label><div class="bg-dark text-light" role="">{{$professeur->appartenant_a_ENSAJ}}</div></div><br><br>
                    <div class="col-md-12"><label  class="labels">Dossier scientifique   :   </label><div class="bg-dark text-light" role=""><a href="/storage/{{$professeur->Dossier_scientifique}}" class="link-success text-light"  download>Download</a><hr><b class="text-danger">{{$professeur->etat_ds}}</b></div></div>
                    <div class="col-md-12"><label  class="labels">Dossier Pedagogique    :   </label><div class="bg-dark text-light" role=""><a href="/storage/{{$professeur->Dossier_Pedagogique}}" class="link-success text-light" download>Download </a><hr><b class="text-danger">{{$professeur->etat_dp}}</b></div></div>
                    <div class="col-md-12"><label  class="labels">Dossier administratif  :   </label><div class="bg-dark text-light" role=""><a href="/storage/{{$professeur->Dossier_administratif}}" class="link-success text-light" download>Download</a><hr><b class="text-danger">{{$professeur->etat_da}}</b></div></div>
                    
                </div></div>
                
       
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

@endsection
