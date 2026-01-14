<h2>Ajouter un étudiant</h2>

<form method="POST" action="{{ route('etudiants.store') }}">
    @csrf

    Nom : <input type="text" name="nom"><br><br>
    Prénom : <input type="text" name="prenom"><br><br>
    Email : <input type="email" name="email"><br><br>
    Téléphone : <input type="text" name="telephone"><br><br>

    <button type="submit">Enregistrer</button>
</form>

<a href="{{ route('etudiants.index') }}">⬅ Retour</a>
