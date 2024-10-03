@extends('public.profile.profile-layout')

@section('profile-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Informations de l'utilisateur -->
                <div class="card mb-4" id="user-show">
                    <div class="card-header">
                        <h4 class="card-title">Informations de l'utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nom :</strong> John Doe</li>
                            <li class="list-group-item"><strong>Nom d'utilisateur :</strong> johndoe</li>
                            <li class="list-group-item"><strong>Email :</strong> john.doe@example.com</li>
                            <li class="list-group-item"><strong>Date de création du compte :</strong> 2023-01-01</li>
                            <li class="list-group-item text-center">
                                <button type="button" class="btn btn-primary rounded-pill btn-login w-100 mb-2"
                                    id="btn-edit">Modifier</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 d-none" id="user-edit">
                    <div class="card-header">
                        <h4 class="card-title">Modification de l'utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <form class="text-start mb-3" action="profile-update.html" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-floating mb-4">
                                <img src="https://dummyimage.com/120x120/ced4da/6c757d.jpg" alt="Profil"
                                    id="profileImagePreview" height="120px">
                                <div class="pt-2">
                                    <input type="file" name="avatar" id="avatarUpload" class="form-control"
                                        accept="image/*" hidden>
                                    <button type="button" class="btn btn-primary btn-sm" title="Upload new profile image"
                                        id="uploadBtn">
                                        <i class="uil uil-upload"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Remove my profile image"
                                        id="deletePreviewImageBtn">
                                        <i class="uil uil-trash"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Nom" id="name" name="name"
                                    value="John Doe">
                                <label for="name">Nom</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Pseudo" id="username"
                                    name="username" value="johndoe">
                                <label for="username">Pseudo</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Email" id="email" name="email"
                                    value="john.doe@example.com">
                                <label for="email">Email</label>
                            </div>
                            <button type="button" class="btn btn-warning rounded-pill btn-login w-100 mb-2"
                                id="btn-cancel-edit">Annuler</button>
                            <button type="submit"
                                class="btn btn-primary rounded-pill btn-login w-100 mb-2">Enregistrer</button>
                        </form>
                    </div>
                </div>

                <!-- Modifier le mot de passe -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Modifier le mot de passe</h4>
                    </div>
                    <div class="card-body">
                        <form action="password-update.html" method="POST">
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control" id="current_password" name="current_password"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Compte</h4>
                    </div>
                    <div class="card-body">
                        <form action="account-delete.html" method="POST">
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">Supprimer le
                                compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showCard = document.getElementById('user-show');
            const editCard = document.getElementById('user-edit');
            const btnCancelEdit = document.getElementById('btn-cancel-edit');
            const btnEdit = document.getElementById('btn-edit');

            // Fonction pour basculer entre showCard et editCard
            const toggleCards = (showEdit) => {
                if (showEdit) {
                    showCard.classList.add('d-none');
                    editCard.classList.remove('d-none');
                } else {
                    showCard.classList.remove('d-none');
                    editCard.classList.add('d-none');
                }
            };

            // Vérification des éléments avant d'ajouter des écouteurs d'événements
            const elementExists = (element) => !!element;

            if (elementExists(showCard) && elementExists(editCard) && elementExists(btnCancelEdit) && elementExists(
                    btnEdit)) {
                btnCancelEdit.addEventListener('click', () => toggleCards(false));
                btnEdit.addEventListener('click', () => toggleCards(true));
            }

            // Bascule automatique si des erreurs existent
            if (@json($hasErrors)) {
                toggleCards(true);
            }

            // Exemple d'utilisation des fonctions previewAvatar et removePreview
            previewAvatar('uploadBtn', 'avatarUpload', 'profileImagePreview');
            removePreview('deletePreviewImageBtn',
                'profileImagePreview',
                @json('https://dummyimage.com/120x120/ced4da/6c757d.jpg'),
                'avatarUpload');
        });
    </script>
@endsection
