@extends('layouts.app')
@section('title')
    Liste des catégories
@endsection
@section('content')
<h1>{{$categorie->name}}</h1>


<div>
    <p>N°: {{$categorie->id}}</p>
    <p>Date: {{$categorie->created_at}}</p>
    <p>Nom: {{$categorie->name}}</p>
    <p>Description: {{$categorie->description}}</p>
    
    <div>
        <a href="{{route('categories.edit', $categorie->id)}}">Editer</a>
        <a href="{{route('categories.destroy', $categorie->id)}}">Supprimer</a>
    </div>
</div>

@endsection






