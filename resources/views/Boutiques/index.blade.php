@extends('layout.dashboard')

@section('Dilly')
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }
  .block{
    background-image: url("{{asset('images/playbox')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  h3{
    text-align: center;
    font-size: 1.5em;
    color: white; 
  }
 
</style>

<div class="uper block">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
   <h3>Liste des vendeurs</h3>
   <div class="d-flex justify-content-end mb-3"><a type="button" class="btn btn-secondary" href="{{('admin/create')}}">Enregistrer un vendeur</a></div>

  <table class="table table-bordered table-hover" style="color:white;">

    <thead class="table table-success">
        <tr>
          <td scope="col">id</td>
          <td scope="col">Nom</td>
          <td scope="col">Nom boutique</td>
          <td scope="col">Adresse Boutique</td>
          <td scope="col">telephone boutique</td>
          <td scope="col">user</td>
          <td scope="col">type boutique</td>
          <td scope="col">Email</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($boutiques as $boutique)
        <tr>
            <td>{{$boutique->id}}</td>
            <td>{{$boutique->nom_complet}}</td>
            <td>{{$boutique->nom_boutique}}</td>
            <td>{{$boutique->adresse_boutique}}</td>
            <td>{{$boutique->telephone_boutique}}</td>
            <td>{{$boutique->userId }}</td>
            <td>{{$boutique->type_boutiqueId}}</td>
            <td>{{$boutique->email }}</td>
            <td><a href="{{ route('boutique.edit', $boutiques->id)}}" class="btn btn-primary">modifier</a></td>
            <td><a href="{{ route('boutique.show', $boutiques->id)}}" class="btn btn-primary">details</a></td>
            <td>
                <form action="{{ route('boutique.destroy', $boutique->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>
<div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
