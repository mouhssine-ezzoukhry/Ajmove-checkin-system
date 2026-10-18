<x-mail::message>
# Bonjour {{ $registration->prenom }},

Félicitations ! Votre demande d'accréditation en tant que représentant(e) pour **{{ $registration->ecole }}** a été validée avec succès.

Votre **Convocation Officielle au format PDF** est jointe à cet e-mail. Elle contient votre **Pass QR Code unique**, indispensable pour enregistrer votre arrivée à l'accueil le jour du forum.

<x-mail::panel>
**Détails de l'accréditation :**
- **Établissement :** {{ $registration->ecole }}
- **Filière / Spécialité :** {{ $registration->filiere ?? 'N/A' }}
- **Référence Convocation :** #CONV-{{ str_pad($registration->id, 5, '0', STR_PAD_LEFT) }}
</x-mail::panel>

Merci de conserver ce document sur votre téléphone portable ou de l'imprimer avant votre venue.

Cordialement,<br>
**Mouhssine EZZOUKHRY**<br>
*Head of Data & Digitalization Department — Forum Ben M'sik*<br>
**AJMOVE**
</x-mail::message>