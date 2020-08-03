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
 * @description     Allows other apps to send messages through the set-up mailmail mailboxes. Creates logs for advanced
 *                  information and a widget for the dashboard.
 */

// Strings.
$strings = [
    "appnetos__mailer__widget_header" => "Mailer",
    "appnetos__mailer__widget_sent" => "Inviato",
    "appnetos__mailer__widget_failed" => "mancato",
    "appnetos__mailer__widget_last_sent" => "Ultimo registro conferma",
    "appnetos__mailer__widget_last_failed" => "Ultimo log degli errori",
    "appnetos__mailer__widget_datetime" => "Appuntamento",
    "appnetos__mailer__widget_address" => "Indirizzare",
    "appnetos__mailer__widget_message" => "Messaggio",
    "appnetos__mailer__widget_word_info" => "Informazioni",
    "appnetos__mailer__widget_blacklist" => "Corrispondenza blacklist",
    "appnetos__mailer__widget_mailbox" => "Cassetta postale",
    "appnetos__mailer__widget_ip" => "IP",
    "appnetos__mailer__widget_not_defined" => "Indefinito",
    "appnetos__mailer__widget_logs" => "Registri mailer",
    "appnetos__mailer__widget_reset_counter" => "Resetta contatore",
    "appnetos__mailer__widget_conf_counter_reset" => "Il contatore è stato azzerato",
    "appnetos__mailer__error_id_set" => "Mailer ID non défini",
    "appnetos__mailer__error_mailbox_set" => "Boîte aux lettres non définie",
    "appnetos__mailer__error_to_addr_set" => "Adresse e-mail du destinataire non définie",
    "appnetos__mailer__error_body_set" => "Contenu non défini",
    "appnetos__mailer__error_id_match" => "L'ID de l'expéditeur ne correspond pas",
    "appnetos__mailer__error_to_addr" => "L'adresse email du destinataire est fausse",
    "appnetos__mailer__error_mailbox_ex" => "La boîte aux lettres n'existe pas",
    "appnetos__mailer__error_phpmailer" => "Erreur PHP Mailer",
    "appnetos__mailer__error_email_in_blacklist" => "L'adresse email est dans la liste noire",
    "appnetos__mailer__error_email_to_blacklist" => "Trop de demandes par courrier électronique. L'adresse email a été définie sur la liste noire",
    "appnetos__mailer__error_email" => "Indirizzo email",
    "appnetos__mailer__error_limit" => "Limite",
    "appnetos__mailer__error_no_settings" => "Nessuna impostazione mailer disponibile.",
    "appnetos__mailer__error_no_mailboxes" => "Non sono presenti cassette postali.",
    "appnetos__mailer__error_ip_in_blacklist" => "L'indirizzo IP è nella lista nera",
    "appnetos__mailer__error_ip_to_blacklist" => "Troppe richieste di posta elettronica. L'indirizzo IP è stato inserito nella lista nera",
];