

@extends('layouts.app')


@section('content')
 



<div class="container ">
       <div class="row">
           <div class="col-lg-12">
                

               
               <div class="bs-component">
               <div class="row">
                @foreach($professeurs as $professeur)
                    <div class="col-sm-6 col-md-4">
                        <div class="bg-dark alert text-light">
                        <div class="thumbnail">
                        <img src="/storage/{{$professeur->image}}" width="150" height="150" class="img-thumbnail" >
                        <div class="caption">
                            <h3>{{$professeur->nom}}  {{$professeur->prenom}}</h3>
                            <br>
                            <h5>Specialité :</h5>
                            <h3>{{$professeur->specialite}}</h3>
                            <br>
                            <h4>Dossiers scientifique :</h3>
                            
                            <h6><a href="/storage/{{$professeur->Dossier_scientifique}}" class="text-success"  download> Download   </a><b class="text-info">{{$professeur->etat_ds}}</b></h5>
                            <br>
                            <h4>Dossiers scientifique :</h3>
                            
                            <h6><a href="/storage/{{$professeur->Dossier_Pedagogique}}" class="text-success"  download> Download   </a><b class="text-info">{{$professeur->etat_dp}}</b></h5>
                            <br>
                            <h4>Dossiers scientifique :</h3>
                            
                            <h6><a href="/storage/{{$professeur->Dossier_administratif}}" class="text-success"  download> Download   </a><b class="text-info">{{$professeur->etat_da}}</b></h5>
                            <p><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-info">Consulter profile</a></form> <form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">Éditer</a></form></p>
                        </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
           
           
            </div>
            </div>
        </div>
</div>



@endsection