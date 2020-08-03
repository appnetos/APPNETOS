<?php
/**
 * START LICENSE HEADER
 *
 * The license header may not be removed.
 *
 * This file is a part of APPNET OS (Application Internet Operating System).
 * @link            http://www.appnetos.com
 * @mail            info@appnetos.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * @copyright       (C) xtrose Media Studio 2019
 * @author          Moses Rivera
 *                  Im Wiesengrund 24
 *                  73540 Heubach
 * @mail            media.studio@xtrose.de
 *
 * END LICENSE HEADER
 *
 * @description     Mailer logs, blacklist, settings, mailboxes.
 */

// Language strings.
$strings = [
    "admin__mailer__mailer__logs__info" => "APPNET OS Mailer è un sistema semplice per controllare l'invio di posta complessa. Le cassette postali vengono create nel General Mailer. Queste caselle di posta possono essere utilizzate per inviare messaggi di app. L'invio funziona esclusivamente sull'app Mailer. L'App Mailer ha diverse misure per proteggersi dallo spam. L'app Mailer deve essere impostata nello stesso URI prima dell'applicazione che invia una mail. L'App Mailer genera un ID mailer che deve essere passato per ogni invio. Questo ID è cambiato con ogni posta inviata o qualsiasi tentativo di inviare una email. Pertanto, è garantito che la forma di robot non possa essere copiata per inviare spam. L'App Mailer genera un log che può essere letto tramite l'area admin per ogni mail inviata e per ogni consegna fallita. Qualsiasi tentativo di inviare un messaggio è abbinato al log di spedizione. Un utente che tenta di inviare troppe e-mail, l'indirizzo e-mail utilizzato su una lista nera, che nessun'altra consegna di posta è possibile. La lista nera può essere modificata in qualsiasi momento nell'area di amministrazione.",
    "admin__mailer__mailer__logs__header_error" => "Registro errori",
    "admin__mailer__mailer__logs__header_confirm" => "Conferma il registro",
    "admin__mailer__mailer__logs__datetime" => "Appuntamento",
    "admin__mailer__mailer__logs__address" => "Indirizzare",
    "admin__mailer__mailer__logs__message" => "Messaggio",
    "admin__mailer__mailer__logs__word_info" => "Informazioni",
    "admin__mailer__mailer__logs__clear_error" => "Cancella registro errori",
    "admin__mailer__mailer__logs__clear_confirm" => "Cancella conferma registro",
    "admin__mailer__mailer__logs__conf_clear" => "I log sono stati cancellati",
    "admin__mailer__mailer__logs__blacklist" => "Corrispondenza blacklist",
    "admin__mailer__mailer__settings__info" => "APPNET OS Mailer è un sistema semplice per controllare l'invio di posta complessa. Le cassette postali vengono create nel General Mailer. Queste caselle di posta possono essere utilizzate per inviare messaggi di app. L'invio funziona esclusivamente sull'app Mailer. L'App Mailer ha diverse misure per proteggersi dallo spam. L'app Mailer deve essere impostata nello stesso URI prima dell'applicazione che invia una mail. L'App Mailer genera un ID mailer che deve essere passato per ogni invio. Questo ID è cambiato con ogni posta inviata o qualsiasi tentativo di inviare una email. Pertanto, è garantito che la forma di robot non possa essere copiata per inviare spam. L'App Mailer genera un log che può essere letto tramite l'area admin per ogni mail inviata e per ogni consegna fallita. Qualsiasi tentativo di inviare un messaggio è abbinato al log di spedizione. Un utente che tenta di inviare troppe e-mail, l'indirizzo e-mail utilizzato su una lista nera, che nessun'altra consegna di posta è possibile. La lista nera può essere modificata in qualsiasi momento nell'area di amministrazione.",
    "admin__mailer__mailer__settings__log_error" => "Registro degli errori di dimensione",
    "admin__mailer__mailer__settings__log_confirm" => "Dimensione conferma registro",
    "admin__mailer__mailer__settings__emails" => "ha inviato e-mail",
    "admin__mailer__mailer__settings__mailbox" => "Casella di posta standard",
    "admin__mailer__mailer__settings__confirm" => "Le impostazioni sono state modificate",
    "admin__mailer__mailer__settings__never" => "Mai",
    "admin__mailer__mailer__settings__unlimited" => "Illimitato",
    "admin__mailer__mailer__blacklist__info" => "APPNET OS Mailer è un sistema semplice per controllare l'invio di posta complessa. Le cassette postali vengono create nel General Mailer. Queste caselle di posta possono essere utilizzate per inviare messaggi di app. L'invio funziona esclusivamente sull'app Mailer. L'App Mailer ha diverse misure per proteggersi dallo spam. L'app Mailer deve essere impostata nello stesso URI prima dell'applicazione che invia una mail. L'App Mailer genera un ID mailer che deve essere passato per ogni invio. Questo ID è cambiato con ogni posta inviata o qualsiasi tentativo di inviare una email. Pertanto, è garantito che la forma di robot non possa essere copiata per inviare spam. L'App Mailer genera un log che può essere letto tramite l'area admin per ogni mail inviata e per ogni consegna fallita. Qualsiasi tentativo di inviare un messaggio è abbinato al log di spedizione. Un utente che tenta di inviare troppe e-mail, l'indirizzo e-mail utilizzato su una lista nera, che nessun'altra consegna di posta è possibile. La lista nera può essere modificata in qualsiasi momento nell'area di amministrazione.",
    "admin__mailer__mailer__blacklist__edit_info" => "Indirizzi email bloccati separati da un punto e virgola ( ; )",
    "admin__mailer__mailer__blacklist__confirm" => "La lista nera è stata modificata",
    "admin__mailer__mailer__mailboxes__info" => "APPNET OS Mailer è un sistema semplice per controllare l'invio di posta complessa. Le cassette postali vengono create nel General Mailer. Queste caselle di posta possono essere utilizzate per inviare messaggi di app. L'invio funziona esclusivamente sull'app Mailer. L'App Mailer ha diverse misure per proteggersi dallo spam. L'app Mailer deve essere impostata nello stesso URI prima dell'applicazione che invia una mail. L'App Mailer genera un ID mailer che deve essere passato per ogni invio. Questo ID è cambiato con ogni posta inviata o qualsiasi tentativo di inviare una email. Pertanto, è garantito che la forma di robot non possa essere copiata per inviare spam. L'App Mailer genera un log che può essere letto tramite l'area admin per ogni mail inviata e per ogni consegna fallita. Qualsiasi tentativo di inviare un messaggio è abbinato al log di spedizione. Un utente che tenta di inviare troppe e-mail, l'indirizzo e-mail utilizzato su una lista nera, che nessun'altra consegna di posta è possibile. La lista nera può essere modificata in qualsiasi momento nell'area di amministrazione.",
    "admin__mailer__mailer__mailboxes__add" => "Aggiungi casella di posta",
    "admin__mailer__mailer__mailboxes__name" => "Nome della mailbox",
    "admin__mailer__mailer__mailboxes__mail" => "Indirizzo email",
    "admin__mailer__mailer__mailboxes__host" => "Ospite",
    "admin__mailer__mailer__mailboxes__user" => "Nome utente",
    "admin__mailer__mailer__mailboxes__pass" => "Parola d'ordine",
    "admin__mailer__mailer__mailboxes__is_smtp" => "Invia come SMTP",
    "admin__mailer__mailer__mailboxes__smtp_auth" => "SMTP richiede l'autenticazione",
    "admin__mailer__mailer__mailboxes__err_no_name" => "Nessun nome inserito",
    "admin__mailer__mailer__mailboxes__err_name_exists" => "C'è già una casella di posta con quel nome",
    "admin__mailer__mailer__mailboxes__err_mail" => "L'indirizzo email non può essere utilizzato",
    "admin__mailer__mailer__mailboxes__err_host" => "Nessun ospite inserito",
    "admin__mailer__mailer__mailboxes__err_user" => "Nessun nome utente inserito",
    "admin__mailer__mailer__mailboxes__err_pass" => "Nessuna password inserita",
    "admin__mailer__mailer__mailboxes__conf_add" => "La cassetta postale è stata aggiunta",
    "admin__mailer__mailer__mailboxes__edit" => "Modifica casella di posta",
    "admin__mailer__mailer__mailboxes__edit_info" => "Fai attenzione quando cambi i nomi delle cassette postali. Se una regola di distribuzione utilizza questa cassetta postale, non invierà più email. Quando si modifica il nome, è necessario riconfigurare il distributore.",
    "admin__mailer__mailer__mailboxes__conf_edit" => "La casella di posta è stata modificata",
    "admin__mailer__mailer__mailboxes__delete_info" => "Fai attenzione quando elimini le cassette postali. Se una casella di posta viene cancellata e un distributore utilizza quella casella, non sarà più in grado di inviare posta. Il distributore deve quindi essere riconfigurato.",
    "admin__mailer__mailer__mailboxes__conf_delete" => "La casella di posta è stata cancellata",
    "admin__mailer__mailer__mailboxes__delete" => "Elimina la casella di posta",
    "admin__mailer__mailer__mailboxes__err_delete" => "La casella di posta non può essere cancellata",
    "admin__mailer__mailer__mailboxes__port" => "Porta",
    "admin__mailer__mailer__mailboxes__secure" => "Secure SMTP",
    "admin__mailer__mailer__mailboxes__none" => "nessuna",
    "admin__mailer__mailer__mailboxes__sent" => "Inviato",
    "admin__mailer__mailer__mailboxes__failed" => "mancato",
    "admin__mailer__mailer__menu_header" => "Mailer",
    "admin__mailer__mailer__menu_logs" => "Registri",
    "admin__mailer__mailer__menu_blacklist" => "Lista nero",
    "admin__mailer__mailer__menu_whitelist" => "Lista bianca",
    "admin__mailer__mailer__menu_settings" => "Impostazioni",
    "admin__mailer__mailer__menu_mailboxes" => "Cassette postali",
    "admin__mailer__mailer__menu_header_logs" => "Registri di posta",
    "admin__mailer__mailer__menu_header_blacklist" => "Lista nera dei Mailer",
    "admin__mailer__mailer__menu_header_whitelist" => "Lista bianca dei Mailer",
    "admin__mailer__mailer__menu_header_settings" => "Impostazioni del mailer",
    "admin__mailer__mailer__menu_header_mailboxes" => "Cassette postali",
    "admin__mailer__mailer__menu_save" => "Salvare",
    "admin__mailer__mailer__settings_log_conf" => "Salvare",
    "admin__mailer__mailer__settings_ip_lock" => "Pubblica IP nella blacklist",
    "admin__mailer__mailer__minute" => "Minuto",
    "admin__mailer__mailer__minutes" => "Minuti",
    "admin__mailer__mailer__requests" => "Richieste in",
    "admin__mailer__mailer__settings_ip_expire" => "Rimuovi IP dalla Blacklist per",
    "admin__mailer__mailer__hour" => "Ora",
    "admin__mailer__mailer__hours" => "Ore",
    "admin__mailer__mailer__manually" => "Manualmente",
    "admin__mailer__mailer__settings_mail_lock" => "Pubblica l'indirizzo email nella blacklist",
    "admin__mailer__mailer__add" => "Aggiungere",
    "admin__mailer__mailer__close" => "Chiudersi",
    "admin__mailer__mailer__mailboxes_no_mailboxes" => "Nessuna cassetta postale ancora configurata",
    "admin__mailer__mailer__mailboxes_firewall" => "Firewall del mailer",
    "admin__mailer__mailer__mailboxes_firewall_true" => "Firewall attivato",
    "admin__mailer__mailer__mailboxes_firewall_false" => "Firewall disattivato",
    "admin__mailer__mailer__mailboxes_delete_header" => "Elimina cassetta postale",
    "admin__mailer__mailer__delete" => "Eliminare",
    "admin__mailer__mailer__edit" => "Curare",
    "admin__mailer__mailer__properties" => "Proprietà",
    "admin__mailer__mailer__pass_info" => "Lasciare vuoto per non apportare modifiche",
    "admin__mailer__mailer__settings__none" => "Nessuno",
    "admin__mailer__mailer__settings__error" => "Impossibile salvare le impostazioni",
    "admin__mailer__mailer__whitelist__info" => "Il Mailer del sistema operativo APPNET ha un firewall per la protezione contro lo spam. Il firewall blocca automaticamente gli indirizzi e-mail e gli indirizzi IP che tentano di inviare messaggi troppo spesso. Gli indirizzi email e gli indirizzi IP bloccati sono nella lista nera. Gli indirizzi IP e gli indirizzi di posta elettronica presenti nella whitelist sono esclusi dal firewall.",
    "admin__mailer__mailer__email_or_ip" => "Indirizzo IP o indirizzo e-mail",
    "admin__mailer__mailer__no_entries" => "Nessuna voce disponibile",
    "admin__mailer__mailer__list_add_err" => "Impossibile aggiungere la voce",
    "admin__mailer__mailer__list_add_conf" => "La voce è stata aggiunta",
    "admin__mailer__mailer__address" => "Indirizzo",
    "admin__mailer__mailer__type" => "Digitare",
    "admin__mailer__mailer__email" => "Indirizzo email",
    "admin__mailer__mailer__ip" => "IP",
    "admin__mailer__mailer__remove" => "Togliere",
    "admin__mailer__mailer__err_exists" => "La voce esiste già",
    "admin__mailer__mailer__list_remove_err" => "Impossibile rimuovere la voce",
    "admin__mailer__mailer__list_remove_conf" => "La voce è stata rimossa",
    "admin__mailer__mailer__blacklist_static" => "Bloccare in modo permanente",
    "admin__mailer__mailer__static" => "Permanentemente",
    "admin__mailer__mailer__expiration" => "Scadenza",
    "admin__mailer__mailer__mailbox" => "Cassetta postale",
    "admin__mailer__mailer__logs__clear_info" => "Prestare attenzione quando si svuotano i registri. Gli indirizzi di posta elettronica dei nuovi messaggi vengono associati ai registri. Questo determina il numero di messaggi inviati per le impostazioni della blacklist.",
    "admin__mailer__mailer__logs__clear" => "Chiaro",
    "admin__mailer__mailer__mailboxes_from_name" => "Nome mittente",
    "admin__mailer__mailer__mailboxes_not_defined" => "Indefinito",
    "admin__mailer__mailer__mailboxes__timeout" => "Timeout in secondi",
    "appnetos__mailer__error_ip_in_blacklist" => "L'indirizzo IP è nella lista nera",
    "appnetos__mailer__error_ip_to_blacklist" => "Troppe richieste. L'indirizzo IP è stato inserito nella lista nera",
    "appnetos__mailer__error_id_set" => "ID Mailer non impostato",
    "appnetos__mailer__error_mailbox_set" => "Mailbox non impostata",
    "appnetos__mailer__error_to_addr_set" => "Indirizzo email del destinatario non impostato",
    "appnetos__mailer__error_body_set" => "Contenuto non impostato",
    "appnetos__mailer__error_id_match" => "L'ID Mailer non corrisponde",
    "appnetos__mailer__error_to_addr" => "L'indirizzo email del destinatario è errato",
    "appnetos__mailer__error_mailbox_ex" => "Mailbox non esiste",
    "appnetos__mailer__error_phpmailer" => "Errore di PHP Mailer",
    "appnetos__mailer__error_email_in_blacklist" => "L'indirizzo email è nella lista nera",
    "appnetos__mailer__error_email_to_blacklist" => "Troppe richieste di e-mail. L'indirizzo email è stato impostato sulla lista nera",
    "appnetos__mailer__error_no_settings" => "Nessuna impostazione mailer disponibile.",
    "appnetos__mailer__error_no_mailboxes" => "Non sono presenti cassette postali.",
];