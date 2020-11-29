@component('mail::message')

    # Bienvenue {{ $student->username }}-{{ $student->prenom }} a  l'institut superieur de commerce

    - Votre option département choisi est {{ $student->Department }}
    - Votre numéro matricule est {{ $student->matricule }}

    Merci d'avoir  choisi l'ISC/Lubumbashi comme votre  institution de formation universitaire
@endcomponent
