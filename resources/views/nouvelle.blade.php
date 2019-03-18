@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter une chanson</div>
    
                    <div class="card-body">
                        <form action="/creer" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="titre-chanson" class="col-sm-2 col-form-label">Titre de la chanson</label>
                                <div class="col-sm-10">        
                                    <input class="form-control" type="text" name="nom" required placeholder="Titre..."/>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="style-chanson" class="col-sm-2 col-form-label">Style de la chanson</label>
                                    <div class="col-sm-10">        
                                        <input class="form-control" type="text" name="style" required placeholder="Style..."/>
                                    </div>
                             </div>
                                
                             <div class="form-group row">
                                    <div class="col-sm-10">        
                                        <input type="file" name="chanson" required class="btn btn-primary"/>
                                        {{csrf_field()}} 
                                    </div>
                             </div>

                             <div class="form-group row">
                                    <div class="col-sm-10">        
                                            <input type="submit" class="btn btn-primary"/>
                                    </div>
                             </div>  
                        </form>
                    </div>
                </div>
            </div>
         </div>
</div>
@endsection