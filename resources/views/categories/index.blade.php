@extends('layouts.app')
@section('title')
    Liste des catégories
@endsection
@section('content')
    <h1>Liste des catégories</h1>
    <p><a href="{{route('categories.create')}}" class="btn btn-primary">+ Nouveau </a></p>
    @if(@session('succes'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
     </div>
    @endsession
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $i => $item)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{route('categories.show', $item->id)}}" class="btn btn-info">Voir</a>
                        <a href="{{route('categories.edit', $item->id)}}" class="btn btn-secondary">Editer</a>
                        <a href="{{route('categories.destroy', $item->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" onclick="supprimer(event)">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer catégorie</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous supprimer cette catégorie??
        </div>
        <div class="modal-footer">
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-danger" >Supprimer</button>
            </form>
        </div>
      </div>
    </div>
  </div>
    @endsection

    @section('script')
    <script>
        function supprimer(event) {
            
            const lien = event.target.getAttribute('href')
            document.querySelector("#exampleModal form").setAttribute('action', lien)
        }
    </script>

    @endsection
    