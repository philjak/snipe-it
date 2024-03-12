<?php

return array(

    'accepted'                  => 'Oled selle vahendi edukalt vastu võtnud.',
    'declined'                  => 'Oled selle vahendi tagasi lükanud.',
    'bulk_manager_warn'	        => 'Sinu kasutajad on edukalt muudetud, kuid sinu juhi-kirjet ei salvestatud sest juht, kelle valisid oli ka muudatavate kasutajate hulgas ning kasutaja ei või olla ise-enda juht. Palun vali oma kasutajad uuesti, jättes juhi kõrvale.',
    'user_exists'               => 'Kasutaja on juba olemas!',
    'user_not_found'            => 'Kasutajat ei eksisteeri.',
    'user_login_required'       => 'Login väli on kohustuslik',
    'user_has_no_assets_assigned' => 'No assets currently assigned to user.',
    'user_password_required'    => 'Parooli väli on kohustuslik.',
    'insufficient_permissions'  => 'Ebapiisavad õigused.',
    'user_deleted_warning'      => 'See kasutaja on kustutatud. Et kasutajat muuta või talle uusi vahendeid anda, pead ta esmalt taastama.',
    'ldap_not_configured'        => 'LDAP-i integreerimine pole selle installi jaoks konfigureeritud.',
    'password_resets_sent'      => 'Parooli taastamise link on saadetud valitud aktiivsetele kasutajatele kellel on õige emaili aadress.',
    'password_reset_sent'       => 'Parooli taastamise aadress on saadetud :email!',
    'user_has_no_email'         => 'This user does not have an email address in their profile.',
    'log_record_not_found'        => 'A matching log record for this user could not be found.',


    'success' => array(
        'create'    => 'Kasutaja loomine õnnestus.',
        'update'    => 'Kasutaja uuendamine õnnestus.',
        'update_bulk'    => 'Kasutajate uuendamine õnnestus!',
        'delete'    => 'Kasutaja kustutamine õnnestus.',
        'ban'       => 'Kasutaja bännimine õnnestus.',
        'unban'     => 'Kasutaja de-bännimine õnnestus.',
        'suspend'   => 'Kasutaja ajutine peatamine õnnestus.',
        'unsuspend' => 'Kasutaja oli ebaõnnestunud.',
        'restored'  => 'Kasutaja taastamine õnnestus.',
        'import'    => 'Kasutajate importimine õnnestus.',
    ),

    'error' => array(
        'create' => 'Kasutaja loomisel tekkis probleem. Palun proovi uuesti.',
        'update' => 'Kasutaja uuendamisel tekkis probleem. Palun proovi uuesti.',
        'delete' => 'Kasutaja kustutamisel tekkis probleem. Palun proovi uuesti.',
        'delete_has_assets' => 'Sellel kasutajal on elemendid määratud ja neid ei saanud kustutada.',
        'unsuspend' => 'Kasutaja pole probleemi lahendanud. Palun proovi uuesti.',
        'import'    => 'Kasutajate importimisel tekkis probleem. Palun proovi uuesti.',
        'asset_already_accepted' => 'See vahend on juba vastu võetud.',
        'accept_or_decline' => 'Te peate selle vara kas aktsepteerima või loobuma.',
        'incorrect_user_accepted' => 'Varasemat vara, mille olete proovinud aktsepteerida, ei olnud teie jaoks kontrollitud.',
        'ldap_could_not_connect' => 'LDAP-serveriga ei õnnestunud ühendust luua. Palun kontrollige oma LDAP-i serveri konfiguratsiooni LDAP-i konfiguratsioonifailis. <br>Viga LDAP serverist:',
        'ldap_could_not_bind' => 'LDAP-serverit ei saa siduda. Palun kontrollige oma LDAP-i serveri konfiguratsiooni LDAP-i konfiguratsioonifailis. <br>Viga LDAP serverist:',
        'ldap_could_not_search' => 'LDAP-serverit ei õnnestunud otsida. Palun kontrollige oma LDAP-i serveri konfiguratsiooni LDAP-i konfiguratsioonifailis. <br>Viga LDAP serverist:',
        'ldap_could_not_get_entries' => 'LDAP-serverisse tehtud sissekandeid ei saanud. Palun kontrollige oma LDAP-i serveri konfiguratsiooni LDAP-i konfiguratsioonifailis. <br>Viga LDAP serverist:',
        'password_ldap' => 'Selle konto parooli haldab LDAP / Active Directory. Parooli muutmiseks võtke ühendust oma IT-osakonnaga.',
    ),

    'deletefile' => array(
        'error'   => 'Faili ei kustutatud. Palun proovi uuesti.',
        'success' => 'Fail kustutati.',
    ),

    'upload' => array(
        'error'   => 'Fail(e) ei laetud üles. Palun proovi uuesti.',
        'success' => 'Fail(id) laeti edukalt üles.',
        'nofiles' => 'Sa ei valinud üles laadimiseks ühtegi faili',
        'invalidfiles' => 'Üks või mitu sinu failidest on kas liiga suured või ei ole lubatud tüüpi. Lubatud tüübid on png, gif, jpg, doc, docx, pdf ja txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'This user has no email set.',
        'success' => 'The user has been notified about their current inventory.'
    )
);