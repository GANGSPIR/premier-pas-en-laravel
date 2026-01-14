<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>

<h2>Liste des étudiants</h2>

<a href="{{ route('etudiants.create') }}">➕ Ajouter étudiant</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>

    @foreach($etudiants as $e)
    <tr>
        <td>{{ $e->nom }}</td>
        <td>{{ $e->prenom }}</td>
        <td>{{ $e->email }}</td>
        <td>{{ $e->telephone }}</td>
        <td>
            <a href="{{ route('etudiants.edit', $e->id) }}">✏️</a>

            <form action="{{ route('etudiants.destroy', $e->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Supprimer ?')">🗑️</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
