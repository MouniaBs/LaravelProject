@extends('layout')

@section('content')
    <h2 class="mb-4">➕ Ajouter un livre</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreurs :</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livres.store') }}" method="POST" class="mb-4">
        @csrf

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" name="auteur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Année</label>
            <input type="number" name="annee" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Résumé</label>
            <textarea name="resume" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('livres.index') }}" class="btn btn-secondary">⬅ Retour</a>
    </form>
@endsection
