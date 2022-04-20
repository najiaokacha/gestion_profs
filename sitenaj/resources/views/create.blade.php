@extends('layouts.app')


@section('content')
 

<form method="POST" action="{{route('professeurs.store')}}" enctype="multipart/form-data">
   @csrf
<div class="d-flex justify-content-center">
   
       <div class="row col-md-5">
           <div class="col-md-12 col-md-offset-4">
   
                    <div class="form-group mb-3">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control" name="cin" >
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control" name="telephone" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control" name="date_recrutement" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control" name="date_naissance" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3 has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio"  value="Oui" name="appartenant_a_ENSAJ" >
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio"  value="NO" name="appartenant_a_ENSAJ" >
                        </div>
                            
                        
                            
                    </div>

                    
                    
                    <div class="form-group mb-3">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control" name="Dossier_scientifique" >
                        <label for="etat_ds">etat de dossier scientifique :</label>
                        <select name="etat_ds" class="form-select">
                            <option value="En_attente">En attente</option>
                            
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control" name="Dossier_Pedagogique" >
                        <label for="etat_dp">etat de dossier Pédagogique :</label>
                        <select name="etat_dp" class="form-select">
                            <option value="En_attente">En attente</option>
                            
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control" name="Dossier_administratif" >
                        <label for="etat_da">etat de dossier administratif :</label>
                        <select name="etat_da" class="form-select">
                            <option value="En_attente">En attente</option>
                            
                        </select>
                    </div>
                <button type="submit" class="btn btn-primary">Add Professeurs</button>

           </div>
       </div>
    
</div>
</form>

@endsection