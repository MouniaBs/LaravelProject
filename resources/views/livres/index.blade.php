@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📚 Liste des livres</h2>
        <a href="{{ route('livres.create') }}" class="btn btn-success">➕ Ajouter un livre</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Année</th>
                <th>Résumé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($livres as $livre)
                <tr>
                    <td>{{ $livre->id }}</td>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->auteur }}</td>
                    <td>{{ $livre->annee }}</td>
                    <td>{{ $livre->resume }}</td>
                    <td>
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Aucun livre enregistré.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-3">
    {{ $livres->links() }}
</div>

@endsection
