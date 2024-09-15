function showModal(selector, condition) {
    const modalElement = document.querySelector(selector);
    if (modalElement && condition) {
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
}

function initializeModalForm(modalSelector, formSelector, callback) {
    const modalElement = document.querySelector(modalSelector);

    modalElement.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const form = document.querySelector(formSelector);

        if (button && typeof callback === 'function') {
            callback(button, form);
        }
    });
}


function logout(event, route, csrfToken) {
    // Prévenir le comportement par défaut du formulaire ou du lien
    event.preventDefault();

    // Créer un formulaire
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = route;

    // Créer un input pour le CSRF token
    const csrfTokenInput = document.createElement('input');
    csrfTokenInput.type = 'hidden';
    csrfTokenInput.name = '_token';
    csrfTokenInput.value = csrfToken;
    form.appendChild(csrfTokenInput);

    // Créer un input pour la méthode DELETE
    // const methodInput = document.createElement('input');
    // methodInput.type = 'hidden';
    // methodInput.name = '_method';
    // methodInput.value = 'DELETE';
    // form.appendChild(methodInput);

    // Ajouter le formulaire au DOM
    document.body.appendChild(form);

    // Confirmer l'action de déconnexion
    if (confirm("Voulez-vous vraiment vous déconnecter ?")) {
        // Soumettre le formulaire
        form.submit();
    } else {
        // Supprimer le formulaire si l'utilisateur annule
        document.body.removeChild(form);
    }
}

/**
 * Fonction pour prévisualiser l'image de profil
 *
 * @param {string} uploadBtnId - L'ID du bouton d'upload
 * @param {string} avatarInputId - L'ID de l'input de fichier pour l'avatar
 * @param {string} profileImagePreviewId - L'ID de l'élément d'image pour la prévisualisation de l'avatar
 */
function previewAvatar(uploadBtnId, avatarInputId, profileImagePreviewId) {
    const uploadBtn = document.getElementById(uploadBtnId);
    const avatarInput = document.getElementById(avatarInputId);
    const profileImagePreview = document.getElementById(profileImagePreviewId);

    // Vérifie si les éléments existent
    if (!uploadBtn || !avatarInput || !profileImagePreview) {
        console.error('Élément(s) non trouvé(s) pour la prévisualisation de l\'avatar.');
        return;
    }

    // Quand l'utilisateur clique sur le bouton d'upload
    uploadBtn.addEventListener('click', function () {
        avatarInput.click(); // Déclenche le clic sur l'input file
    });

    // Lorsque l'utilisateur sélectionne un fichier
    avatarInput.addEventListener('change', function () {
        const file = avatarInput.files[0];
        if (file) {
            // Vérifie que le fichier est bien une image
            if (!file.type.startsWith('image/')) {
                console.error('Le fichier sélectionné n\'est pas une image.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                profileImagePreview.src = e.target.result; // Met à jour la source de l'image de prévisualisation
            };
            reader.onerror = function () {
                console.error('Erreur lors de la lecture du fichier.');
            };
            reader.readAsDataURL(file); // Lit le fichier comme une URL de données
        } else {
            console.warn('Aucun fichier sélectionné.');
        }
    });
}

/**
 * Fonction pour retirer la prévisualisation de l'image de profil
 *
 * @param {string} deletePreviewImageBtnId - L'ID du bouton pour supprimer la prévisualisation
 * @param {string} profileImagePreviewId - L'ID de l'élément d'image pour la prévisualisation de l'avatar
 * @param {string} defaultImage - L'URL de l'image par défaut
 * @param {string} avatarInputId - L'ID de l'input de fichier pour l'avatar
 */
function removePreview(deletePreviewImageBtnId, profileImagePreviewId, defaultImage, avatarInputId) {
    const deletePreviewImageBtn = document.getElementById(deletePreviewImageBtnId);
    const profileImagePreview = document.getElementById(profileImagePreviewId);

    // Vérifie si les éléments existent
    if (!deletePreviewImageBtn || !profileImagePreview) {
        console.error('Élément(s) non trouvé(s) pour la suppression de la prévisualisation.');
        return;
    }

    // Lorsque l'utilisateur clique sur le bouton pour supprimer la prévisualisation
    deletePreviewImageBtn.addEventListener('click', function () {
        profileImagePreview.src = defaultImage; // Réinitialise l'image de prévisualisation à l'image par défaut
        const avatarInput = document.getElementById(avatarInputId);
        if (avatarInput) {
            avatarInput.value = ''; // Réinitialise l'input file
        } else {
            console.error('Input de fichier pour l\'avatar non trouvé.');
        }
    });
}

