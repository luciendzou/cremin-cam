<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index')->name('home');

function getServicesData() {
    return [
        'encaissement-cheque' => [
            'title' => 'Encaissement chèque',
            'tag' => 'Service 01',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16v10H4z"></path><path d="M7 11h10"></path><path d="M8 4h8"></path></svg>',
            'hook' => 'Un traitement encadré pour vos remises de chèques.',
            'description' => "Déposez et encaissez vos chèques avec un accompagnement en agence, un suivi clair du dossier et des délais communiqués selon la banque émettrice.",
            'highlights' => ['Dépôt en agence', 'Suivi du traitement', 'Accompagnement conseiller'],
            'benefits' => [
                'Sécurisation de vos remises et vérification du dossier avant traitement.',
                'Visibilité sur les étapes d’encaissement et les éventuels compléments à fournir.',
                'Accompagnement personnalisé pour les particuliers comme pour les professionnels.',
            ],
            'steps' => [
                'Présentation du chèque et des pièces utiles en agence.',
                'Vérification de conformité et enregistrement du dépôt.',
                'Transmission pour traitement et information sur la suite du dossier.',
            ],
        ],
        'transferts-nationaux-internationaux' => [
            'title' => 'Transferts internationaux et nationaux',
            'tag' => 'Service 02',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 1l4 4-4 4"></path><path d="M3 11V9a4 4 0 014-4h14"></path><path d="M7 23l-4-4 4-4"></path><path d="M21 13v2a4 4 0 01-4 4H3"></path></svg>',
            'hook' => 'Transferts nationaux et internationaux avec l’appui de partenaires reconnus.',
            'description' => "CREMIN-CAM propose des transferts nationaux et internationaux avec l'appui de divers partenaires : MTN Mobile Money, Orange Money, MoneyGram, RIA et WorldRemit. Ce service vous permet d'envoyer et de recevoir des fonds plus facilement selon le canal le plus adapté à votre besoin.",
            'highlights' => ['MTN Mobile Money', 'Orange Money', 'MoneyGram', 'RIA', 'WorldRemit'],
            'benefits' => [
                'Accès à plusieurs canaux de transfert pour les opérations locales et internationales.',
                'Souplesse dans le choix du partenaire selon la destination, le délai et le mode de retrait.',
                'Accompagnement en agence pour identifier la solution la plus adaptée à votre besoin.',
            ],
            'steps' => [
                'Choix du partenaire de transfert selon votre besoin : MTN Mobile Money, Orange Money, MoneyGram, RIA ou WorldRemit.',
                'Vérification des informations utiles et des modalités du canal retenu.',
                'Envoi, réception ou mise à disposition des fonds selon la procédure du partenaire choisi.',
            ],
            'image_slots' => [
                'Espace image partenaire ou visuel transfert',
                'Espace image interface ou mise en situation',
            ],
        ],
        'bancassurance' => [
            'title' => 'Bancassurance',
            'tag' => 'Service 03',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
            'hook' => 'Des solutions de protection complémentaires à vos besoins bancaires.',
            'description' => "Accédez à des offres de couverture et de protection pour mieux sécuriser votre activité, votre famille ou certains engagements financiers.",
            'highlights' => ['Protection adaptée', 'Accompagnement conseiller', 'Solutions partenaires'],
            'benefits' => [
                'Couvertures pensées pour les besoins du quotidien et les imprévus.',
                'Possibilité d’adosser certains besoins de protection à votre relation bancaire.',
                'Explication claire des garanties, exclusions et modalités d’adhésion.',
            ],
            'steps' => [
                'Analyse de votre besoin de couverture avec un conseiller.',
                'Présentation des offres adaptées à votre profil.',
                'Souscription et suivi de la mise en place du service.',
            ],
        ],
        'ventes-devises' => [
            'title' => 'Ventes des devises',
            'tag' => 'Service 04',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z"></path></svg>',
            'hook' => 'Réalisez vos opérations de change dans un cadre conforme.',
            'description' => "Pour vos déplacements, règlements ou besoins professionnels, CREMIN-CAM vous accompagne sur les opérations de change selon les règles en vigueur.",
            'highlights' => ['Change encadré', 'Traitement conforme', 'Assistance en agence'],
            'benefits' => [
                'Traitement de vos demandes dans le respect des exigences réglementaires.',
                'Accompagnement sur les pièces justificatives à produire.',
                'Orientation claire selon la devise et la nature de l’opération.',
            ],
            'steps' => [
                'Expression du besoin et vérification de l’éligibilité de l’opération.',
                'Constitution du dossier avec les justificatifs requis.',
                'Traitement de la demande de change selon disponibilité et cadre réglementaire.',
            ],
        ],
        'sms-banking' => [
            'title' => 'SMS Banking',
            'tag' => 'Service 05',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.09 3.12 2 2 0 012 0h3a2 2 0 012 1.72"></path></svg>',
            'hook' => 'Restez informé en temps réel des mouvements sur votre compte.',
            'description' => "Recevez des alertes utiles sur l’activité de votre compte afin de mieux suivre vos opérations et réagir rapidement en cas de besoin.",
            'highlights' => ['Alertes en temps réel', 'Meilleur suivi', 'Activation simple'],
            'benefits' => [
                'Meilleure visibilité sur les opérations importantes de votre compte.',
                'Réduction du risque de découverte tardive de certains mouvements.',
                'Activation simple avec accompagnement en agence si nécessaire.',
            ],
            'steps' => [
                'Souscription au service auprès de nos équipes.',
                'Association du numéro de téléphone au compte concerné.',
                'Réception progressive des notifications selon les opérations éligibles.',
            ],
        ],
        'domiciliation-bancaire' => [
            'title' => 'Domiciliation bancaire',
            'tag' => 'Service 06',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V8h14v13"></path><path d="M9 4h6v4H9z"></path></svg>',
            'hook' => 'Centralisez vos revenus et flux réguliers chez CREMIN-CAM.',
            'description' => "La domiciliation bancaire simplifie la gestion de vos flux récurrents et vous aide à mieux structurer vos opérations personnelles ou professionnelles.",
            'highlights' => ['Flux réguliers', 'Meilleure organisation', 'Suivi simplifié'],
            'benefits' => [
                'Centralisation pratique des revenus ou paiements réguliers.',
                'Meilleure lecture de vos flux pour vos besoins de gestion et de financement.',
                'Accompagnement sur la mise en place avec vos partenaires ou employeurs.',
            ],
            'steps' => [
                'Identification des revenus ou flux à domicilier.',
                'Mise en place des informations de compte nécessaires.',
                'Suivi de l’activation effective de la domiciliation.',
            ],
        ],
        'cremin-cam-money' => [
            'title' => 'CREMIN-CAM Money',
            'tag' => 'Service 07',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10H3M21 6H3M21 14H3M21 18H3"></path></svg>',
            'hook' => 'Un dispositif pratique pour certaines opérations courantes.',
            'description' => "CREMIN-CAM Money vous aide à régler certaines opérations et factures courantes via un dispositif simple et connecté à nos partenaires.",
            'highlights' => ['Opérations courantes', 'Canal pratique', 'Service connecté'],
            'benefits' => [
                'Gain de temps sur certaines opérations de routine.',
                'Accès à un canal complémentaire aux services en agence.',
                'Usage pensé pour plus de fluidité au quotidien.',
            ],
            'steps' => [
                'Vérification de l’éligibilité du service pour votre besoin.',
                'Activation ou orientation par un conseiller.',
                'Utilisation du service selon les cas d’usage disponibles.',
            ],
        ],
        'cremin-cam-messenger' => [
            'title' => 'CREMIN-CAM Messenger',
            'tag' => 'Service 08',
            'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg>',
            'hook' => 'Un canal rapide pour vos demandes simples et suivis d’information.',
            'description' => "Échangez plus facilement avec l’institution pour certaines demandes courantes, besoins d’orientation ou suivis d’information.",
            'highlights' => ['Canal rapide', 'Demandes simples', 'Orientation pratique'],
            'benefits' => [
                'Prise de contact rapide pour des demandes de premier niveau.',
                'Orientation plus fluide vers le bon service ou la bonne agence.',
                'Canal complémentaire pratique pour le suivi d’information.',
            ],
            'steps' => [
                'Prise de contact via le canal concerné.',
                'Qualification rapide de votre besoin.',
                'Orientation, réponse ou redirection vers le bon interlocuteur.',
            ],
        ],
    ];
}

Route::get('/services', function () {
    return view('services', ['services' => getServicesData()]);
})->name('services');

Route::get('/services/{slug}', function (string $slug) {
    $services = getServicesData();
    abort_unless(array_key_exists($slug, $services), 404);
    return view('service-detail', [
        'slug' => $slug,
        'service' => $services[$slug],
    ]);
})->name('services.show');

Route::view('/solutions', 'solutions')->name('solutions');
Route::view('/solutions/solo', 'solutions.solo')->name('solutions.solo');
Route::view('/solutions/carte-visa-prepayee', 'solutions.visa')->name('solutions.visa');
Route::view('/solutions/epargne', 'solutions.epargne')->name('solutions.epargne');
Route::view('/solutions/credits', 'solutions.credits')->name('solutions.credits');
Route::view('/projets', 'projects')->name('projects');
Route::view('/projets/immobilier', 'projets.immobilier')->name('projects.immobilier');
Route::view('/projets/agricole', 'projets.agricole')->name('projects.agricole');
Route::view('/agences', 'branches')->name('branches');
Route::view('/a-propos', 'about')->name('about');
Route::view('/notre-histoire', 'history')->name('history');
Route::view('/nos-organes', 'governance')->name('governance');
Route::view('/contact', 'contact')->name('contact');
Route::view('/faq', 'faq')->name('faq');
Route::view('/ouvrir-un-compte', 'solutions.open-account')->name('open-account');
