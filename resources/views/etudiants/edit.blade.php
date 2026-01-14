<h2>Modifier étudiant</h2>

<form method="POST" action="{{ route('etudiants.update', $etudiant->id) }}">
    @csrf
    @method('PUT')

    Nom : <input type="text" name="nom" value="{{ $etudiant->nom }}"><br><br>
    Prénom : <input type="text" name="prenom" value="{{ $etudiant->prenom }}"><br><br>
    Email : <input type="email" name="email" value="{{ $etudiant->email }}"><br><br>
    Téléphone : <input type="text" name="telephone" value="{{ $etudiant->telephone }}"><br><br>

    <button type="submit">Modifier</button>
</form>

<a href="{{ route('etudiants.index') }}">⬅ Retour</a>
