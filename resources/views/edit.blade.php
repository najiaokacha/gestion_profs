@extends('layouts.app')


@section('content')
 

<form method="POST" action="{{url('professeurs/'.$professeurs->id)}}" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">   
@csrf
   <div class="container">
       <div class="row">
           <div class="col-md-6">
                    
                    <div class="form-group  mb-3">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" value="{{$professeurs->nom}}" name="nom" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control"value="{{$professeurs->prenom}}" name="prenom" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control"value="{{$professeurs->email}}" name="email" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control"value="{{$professeurs->cin}}" name="cin" >
                    </div>
                    
                    @if($professeurs->image)
                    <div class="form-group mb-3">
                        <img src="/storage/{{$professeurs->image}}" alt="">
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" value="{{$professeurs->image}}" name="image" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control"value="{{$professeurs->telephone}}" name="telephone" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_recrutement}}" name="date_recrutement" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_naissance}}" name="date_naissance" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A" {{$professeurs->specialite=="A" ?'selected' :''}}>A</option>
                            <option value="B" {{$professeurs->specialite=="B" ?'selected' :''}}>B</option>
                            <option value="C" {{$professeurs->specialite=="C" ?'selected' :''}}>C</option>
                        </select>

                    </div>
                    
                    <div class="form-group mb-3 has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio" value="Oui" {{ $professeurs->appartenant_a_ENSAJ=="Oui" ? 'checked' : ''}}  name="appartenant_a_ENSAJ">
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio"  value="No" {{ $professeurs->appartenant_a_ENSAJ=="No" ? 'checked' : ''}} name="appartenant_a_ENSAJ" >
                        </div>
                            
                    </div>

                    @if($professeurs->Dossier_scientifique)
                    <div class="form-group mb-3">
                        <a href="/storage/{{$professeurs->Dossier_scientifique}}" class="link-warning"  download>Download Dossier scientifique</a>
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_scientifique}}" name="Dossier_scientifique" >
                        <label for="etat_ds">l'etat de dossier :</label>
                        <select name="etat_ds" class="form-select">
                            <option value="En_attente" {{$professeurs->etat_ds=="En_attente" ?'selected' :''}}>En attente</option>
                            <option value="En_cours" {{$professeurs->etat_ds=="En_cours" ?'selected' :''}}>En cours</option>

                            <option value="valide" {{$professeurs->etat_ds=="valide" ?'selected' :''}}>validé</option>
                            <option value="refuse" {{$professeurs->etat_ds=="refuse" ?'selected' :''}}>refusé</option>
                        </select>
                    </div>
                    
                    @if($professeurs->Dossier_Pedagogique)
                    <div class="form-group mb-3">
                    <a href="/storage/{{$professeurs->Dossier_Pedagogique}}" class="link-warning" download>Download Dossier Dossier_Pedagogique</a>
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <a></a>
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_Pedagogique}}" name="Dossier_Pedagogique" >
                        <label for="etat_dp">l'etat de dossier :</label>
                        <select name="etat_dp" class="form-select">
                            <option value="En_attente" {{$professeurs->etat_dp=="En_attente" ?'selected' :''}}>En attente</option>

                            <option value="En_cours" {{$professeurs->etat_dp=="En_cours" ?'selected' :''}}>En cours</option>

                            <option value="valide" {{$professeurs->etat_dp=="valide" ?'selected' :''}}>validé</option>
                            <option value="refuse" {{$professeurs->etat_dp=="refuse" ?'selected' :''}}>refusé</option>
                            
                        </select>
                    </div>

                    @if($professeurs->Dossier_administratif)
                    <div class="form-group mb-3">
                    <a href="/storage/{{$professeurs->Dossier_administratif}}" class="link-warning" download>Download Dossier Dossier_administratif</a>
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_administratif}}" name="Dossier_administratif" >
                        <label for="etat_da">l'etat de dossier :</label>
                        <select name="etat_da" class="form-select">
                            <option value="En_attente" {{$professeurs->etat_da=="En_attente" ?'selected' :''}}>En attente</option>
                            <option value="En_cours" {{$professeurs->etat_da=="En_cours" ?'selected' :''}}>En cours</option>

                            <option value="valide" {{$professeurs->etat_da=="valide" ?'selected' :''}}>validé</option>
                            <option value="refuse" {{$professeurs->etat_da=="refuse" ?'selected' :''}}>refusé</option>

                        </select>
                    </div>
                <button type="submit" class="btn btn-danger">Modifier</button>

           </div>
       </div>
    </div>
 
</form>

@endsection