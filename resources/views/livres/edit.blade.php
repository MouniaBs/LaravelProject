@extends('layout')

@section('content')
    <h2 class="mb-4">✏️ Modifier le livre</h2>

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

    <form action="{{ route('livres.update', $livre->id) }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" value="{{ $livre->titre }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" name="auteur" value="{{ $livre->auteur }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Année</label>
            <input type="number" name="annee" value="{{ $livre->annee }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Résumé</label>
            <textarea name="resume" rows="4" class="form-control" required>{{ $livre->resume }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="{{ route('livres.index') }}" class="btn btn-secondary">⬅ Retour</a>
    </form>
@endsection
