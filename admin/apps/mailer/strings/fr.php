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
    "admin__mailer__mailer__logs__info" => "APPNET OS Mailer est un système simple permettant de contrôler l’envoi de courrier complexe. Les boîtes aux lettres sont créées dans le courrier général. Ces boîtes aux lettres peuvent être utilisées pour envoyer les messages des applications. L'envoi s'exécute exclusivement sur l'application Mailer. L'application Mailer comporte plusieurs mesures de protection contre le spam. L'application Mailer doit être définie dans le même URI avant l'application qui envoie un courrier. L'application Mailer génère un identifiant de messagerie qui doit être transmis pour chaque envoi. Cet identifiant est modifié à chaque courrier envoyé ou toute tentative d'envoi d'un courrier électronique. Ainsi, il est garanti que la forme de robots ne peut pas être copiée pour envoyer du spam. L'application Mailer génère un journal qui peut être lu via la zone d'administration pour chaque courrier envoyé et pour chaque livraison ayant échoué. Toute tentative d'envoi d'un message est comparée au journal des envois. Un utilisateur qui tente d'envoyer trop d'e-mails, l'adresse utilisée par e-mail sur une liste noire, pour laquelle aucune autre distribution de courrier n'est possible. La liste noire peut être modifiée à tout moment dans la zone d'administration.",
    "admin__mailer__mailer__logs__header_error" => "Journal des erreurs",
    "admin__mailer__mailer__logs__header_confirm" => "Confirmer le journal",
    "admin__mailer__mailer__logs__datetime" => "Date-heure",
    "admin__mailer__mailer__logs__address" => "Adresser",
    "admin__mailer__mailer__logs__message" => "Message",
    "admin__mailer__mailer__logs__word_info" => "Info",
    "admin__mailer__mailer__logs__clear_error" => "Effacer le journal des erreurs",
    "admin__mailer__mailer__logs__clear_confirm" => "Effacer le journal de confirmation",
    "admin__mailer__mailer__logs__conf_clear" => "Les journaux ont été effacés",
    "admin__mailer__mailer__logs__blacklist" => "Match de liste noire",
    "admin__mailer__mailer__settings__info" => "APPNET OS Mailer est un système simple permettant de contrôler l’envoi de courrier complexe. Les boîtes aux lettres sont créées dans le courrier général. Ces boîtes aux lettres peuvent être utilisées pour envoyer les messages des applications. L'envoi s'exécute exclusivement sur l'application Mailer. L'application Mailer comporte plusieurs mesures de protection contre le spam. L'application Mailer doit être définie dans le même URI avant l'application qui envoie un courrier. L'application Mailer génère un identifiant de messagerie qui doit être transmis pour chaque envoi. Cet identifiant est modifié à chaque courrier envoyé ou toute tentative d'envoi d'un courrier électronique. Ainsi, il est garanti que la forme de robots ne peut pas être copiée pour envoyer du spam. L'application Mailer génère un journal qui peut être lu via la zone d'administration pour chaque courrier envoyé et pour chaque livraison ayant échoué. Toute tentative d'envoi d'un message est comparée au journal des envois. Un utilisateur qui tente d'envoyer trop d'e-mails, l'adresse utilisée par e-mail sur une liste noire, pour laquelle aucune autre distribution de courrier n'est possible. La liste noire peut être modifiée à tout moment dans la zone d'administration.",
    "admin__mailer__mailer__settings__log_error" => "Journal des erreurs de taille",
    "admin__mailer__mailer__settings__log_confirm" => "Journal de confirmation de taille",
    "admin__mailer__mailer__settings__emails" => "e-mails envoyés",
    "admin__mailer__mailer__settings__mailbox" => "Boîte aux lettres standard",
    "admin__mailer__mailer__settings__confirm" => "Les paramètres ont été modifiés",
    "admin__mailer__mailer__settings__never" => "Jamais",
    "admin__mailer__mailer__settings__unlimited" => "Illimité",
    "admin__mailer__mailer__blacklist__info" => "APPNET OS Mailer est un système simple permettant de contrôler l’envoi de courrier complexe. Les boîtes aux lettres sont créées dans le courrier général. Ces boîtes aux lettres peuvent être utilisées pour envoyer les messages des applications. L'envoi s'exécute exclusivement sur l'application Mailer. L'application Mailer comporte plusieurs mesures de protection contre le spam. L'application Mailer doit être définie dans le même URI avant l'application qui envoie un courrier. L'application Mailer génère un identifiant de messagerie qui doit être transmis pour chaque envoi. Cet identifiant est modifié à chaque courrier envoyé ou toute tentative d'envoi d'un courrier électronique. Ainsi, il est garanti que la forme de robots ne peut pas être copiée pour envoyer du spam. L'application Mailer génère un journal qui peut être lu via la zone d'administration pour chaque courrier envoyé et pour chaque livraison ayant échoué. Toute tentative d'envoi d'un message est comparée au journal des envois. Un utilisateur qui tente d'envoyer trop d'e-mails, l'adresse utilisée par e-mail sur une liste noire, pour laquelle aucune autre distribution de courrier n'est possible. La liste noire peut être modifiée à tout moment dans la zone d'administration.",
    "admin__mailer__mailer__blacklist__edit_info" => "Adresses de messagerie bloquées séparées par un point-virgule ( ; )",
    "admin__mailer__mailer__blacklist__confirm" => "La liste noire a été modifiée",
    "admin__mailer__mailer__mailboxes__info" => "APPNET OS Mailer est un système simple permettant de contrôler l’envoi de courrier complexe. Les boîtes aux lettres sont créées dans le courrier général. Ces boîtes aux lettres peuvent être utilisées pour envoyer les messages des applications. L'envoi s'exécute exclusivement sur l'application Mailer. L'application Mailer comporte plusieurs mesures de protection contre le spam. L'application Mailer doit être définie dans le même URI avant l'application qui envoie un courrier. L'application Mailer génère un identifiant de messagerie qui doit être transmis pour chaque envoi. Cet identifiant est modifié à chaque courrier envoyé ou toute tentative d'envoi d'un courrier électronique. Ainsi, il est garanti que la forme de robots ne peut pas être copiée pour envoyer du spam. L'application Mailer génère un journal qui peut être lu via la zone d'administration pour chaque courrier envoyé et pour chaque livraison ayant échoué. Toute tentative d'envoi d'un message est comparée au journal des envois. Un utilisateur qui tente d'envoyer trop d'e-mails, l'adresse utilisée par e-mail sur une liste noire, pour laquelle aucune autre distribution de courrier n'est possible. La liste noire peut être modifiée à tout moment dans la zone d'administration.",
    "admin__mailer__mailer__mailboxes__add" => "Ajouter une boîte aux lettres",
    "admin__mailer__mailer__mailboxes__name" => "Nom de la boîte aux lettres",
    "admin__mailer__mailer__mailboxes__mail" => "Adresse électronique",
    "admin__mailer__mailer__mailboxes__host" => "Hôte",
    "admin__mailer__mailer__mailboxes__user" => "Nom d'utilisateur",
    "admin__mailer__mailer__mailboxes__pass" => "Mot de passe",
    "admin__mailer__mailer__mailboxes__is_smtp" => "Envoyer en tant que SMTP",
    "admin__mailer__mailer__mailboxes__smtp_auth" => "SMTP nécessite une authentification",
    "admin__mailer__mailer__mailboxes__err_no_name" => "Aucun nom entré",
    "admin__mailer__mailer__mailboxes__err_name_exists" => "Il y a déjà une boîte aux lettres avec ce nom",
    "admin__mailer__mailer__mailboxes__err_mail" => "L'adresse email ne peut pas être utilisée",
    "admin__mailer__mailer__mailboxes__err_host" => "Aucun hôte entré",
    "admin__mailer__mailer__mailboxes__err_user" => "Aucun nom d'utilisateur entré",
    "admin__mailer__mailer__mailboxes__err_pass" => "Aucun mot de passe entré",
    "admin__mailer__mailer__mailboxes__conf_add" => "La boîte aux lettres a été ajoutée",
    "admin__mailer__mailer__mailboxes__edit" => "Modifier la boîte aux lettres",
    "admin__mailer__mailer__mailboxes__edit_info" => "Soyez prudent lorsque vous modifiez les noms de boîtes aux lettres. Si une règle de distribution utilise cette boîte aux lettres, elle n'enverra plus de courrier électronique. Lors du changement de nom, le distributeur doit être reconfiguré.",
    "admin__mailer__mailer__mailboxes__conf_edit" => "La boîte aux lettres a été modifiée",
    "admin__mailer__mailer__mailboxes__delete_info" => "Faites attention lorsque vous supprimez des boîtes aux lettres. Si une boîte aux lettres est supprimée et qu'un distributeur l'utilise, il ne pourra plus envoyer de courrier. Le distributeur doit ensuite être reconfiguré.",
    "admin__mailer__mailer__mailboxes__conf_delete" => "La boîte aux lettres a été supprimée",
    "admin__mailer__mailer__mailboxes__delete" => "Supprimer la boîte aux lettres",
    "admin__mailer__mailer__mailboxes__err_delete" => "La boîte aux lettres n'a pas pu être supprimée",
    "admin__mailer__mailer__mailboxes__port" => "Port",
    "admin__mailer__mailer__mailboxes__secure" => "SMTP sécurisé",
    "admin__mailer__mailer__mailboxes__none" => "aucun",
    "admin__mailer__mailer__mailboxes__sent" => "Envoyé",
    "admin__mailer__mailer__mailboxes__failed" => "Échoué",
    "admin__mailer__mailer__menu_header" => "Mailer",
    "admin__mailer__mailer__menu_logs" => "Journaux",
    "admin__mailer__mailer__menu_blacklist" => "Liste noire",
    "admin__mailer__mailer__menu_whitelist" => "Whitelist",
    "admin__mailer__mailer__menu_settings" => "Paramètres",
    "admin__mailer__mailer__menu_mailboxes" => "Boîtes aux lettres",
    "admin__mailer__mailer__menu_header_logs" => "Journaux Mailer",
    "admin__mailer__mailer__menu_header_blacklist" => "Liste noire de Mailer",
    "admin__mailer__mailer__menu_header_whitelist" => "Liste blanche De Mailer",
    "admin__mailer__mailer__menu_header_settings" => "Paramètres Mailer",
    "admin__mailer__mailer__menu_header_mailboxes" => "Boîtes aux lettres",
    "admin__mailer__mailer__menu_save" => "Sauver",
    "admin__mailer__mailer__settings_log_conf" => "Sauver",
    "admin__mailer__mailer__settings_ip_lock" => "Afficher IP sur liste noire",
    "admin__mailer__mailer__minute" => "Minute",
    "admin__mailer__mailer__minutes" => "Minutes",
    "admin__mailer__mailer__requests" => "Demandes en",
    "admin__mailer__mailer__settings_ip_expire" => "Supprimer l'IP de la liste noire à",
    "admin__mailer__mailer__hour" => "Heure",
    "admin__mailer__mailer__hours" => "Heures",
    "admin__mailer__mailer__manually" => "Manuellement",
    "admin__mailer__mailer__settings_mail_lock" => "Afficher l'adresse e-mail sur la liste noire",
    "admin__mailer__mailer__add" => "Ajouter",
    "admin__mailer__mailer__close" => "Fermer",
    "admin__mailer__mailer__mailboxes_no_mailboxes" => "Pas encore de boîte aux lettres",
    "admin__mailer__mailer__mailboxes_firewall" => "Pare-feu Mailer",
    "admin__mailer__mailer__mailboxes_firewall_true" => "Pare-feu activé",
    "admin__mailer__mailer__mailboxes_firewall_false" => "Pare-feu désactivé",
    "admin__mailer__mailer__mailboxes_delete_header" => "Supprimer la boîte aux lettres",
    "admin__mailer__mailer__delete" => "Supprimer",
    "admin__mailer__mailer__edit" => "Réviser",
    "admin__mailer__mailer__properties" => "Propriétés",
    "admin__mailer__mailer__pass_info" => "Laisser vide pour aucun changement",
    "admin__mailer__mailer__settings__none" => "Aucun",
    "admin__mailer__mailer__settings__error" => "Les paramètres n'ont pas pu être sauvegardés",
    "admin__mailer__mailer__whitelist__info" => "L'APPNET OS Mailer dispose d'un pare-feu pour se protéger contre le spam. Le pare-feu bloque automatiquement les adresses e-mail et ip qui tentent d'envoyer des messages trop souvent. Les adresses e-mail bloquées et les adresses IP sont sur la liste noire. Les adresses IP et e-mail qui figurent sur la liste blanche sont exclues du pare-feu.",
    "admin__mailer__mailer__email_or_ip" => "Adresse IP ou e-mail",
    "admin__mailer__mailer__no_entries" => "Aucune entrée disponible",
    "admin__mailer__mailer__list_add_err" => "L'entrée n'a pas pu être ajoutée",
    "admin__mailer__mailer__list_add_conf" => "L'entrée a été ajoutée",
    "admin__mailer__mailer__address" => "Adresse",
    "admin__mailer__mailer__type" => "Type",
    "admin__mailer__mailer__email" => "Adresse e-mail",
    "admin__mailer__mailer__ip" => "IP",
    "admin__mailer__mailer__remove" => "Enlever",
    "admin__mailer__mailer__err_exists" => "L'entrée existe déjà",
    "admin__mailer__mailer__list_remove_err" => "L'entrée n'a pas pu être supprimée",
    "admin__mailer__mailer__list_remove_conf" => "L'entrée a été supprimée",
    "admin__mailer__mailer__blacklist_static" => "Verrouillage permanent",
    "admin__mailer__mailer__static" => "Définitivement",
    "admin__mailer__mailer__expiration" => "Expiration",
    "admin__mailer__mailer__mailbox" => "Boîte à lettres",
    "admin__mailer__mailer__logs__clear_info" => "Soyez prudent lorsque vous videz les billots. Les adresses e-mail des nouveaux messages sont assorties aux journaux. Cela détermine le nombre de messages envoyés pour les paramètres de la liste noire.",
    "admin__mailer__mailer__logs__clear" => "Débarrasser",
    "admin__mailer__mailer__mailboxes_from_name" => "Nom de l'expéditeur",
    "admin__mailer__mailer__mailboxes_not_defined" => "Indéfini",
    "admin__mailer__mailer__mailboxes__timeout" => "Temps d'arrêt en quelques secondes",
    "appnetos__mailer__error_ip_in_blacklist" => "L'adresse IP est dans la liste noire",
    "appnetos__mailer__error_ip_to_blacklist" => "Trop de demandes. L'adresse IP a été mise sur liste noire",
    "appnetos__mailer__error_id_set" => "L'ID de l'expéditeur n'est pas défini",
    "appnetos__mailer__error_mailbox_set" => "Boîte aux lettres non définie",
    "appnetos__mailer__error_to_addr_set" => "Adresse e-mail du destinataire non définie",
    "appnetos__mailer__error_body_set" => "Contenu non défini",
    "appnetos__mailer__error_id_match" => "L'ID de l'expéditeur ne correspond pas",
    "appnetos__mailer__error_to_addr" => "L'adresse email du destinataire est fausse",
    "appnetos__mailer__error_mailbox_ex" => "La boîte aux lettres n'existe pas",
    "appnetos__mailer__error_phpmailer" => "Erreur PHP Mailer",
    "appnetos__mailer__error_email_in_blacklist" => "L'adresse email est dans la liste noire",
    "appnetos__mailer__error_email_to_blacklist" => "Trop de demandes par courrier électronique. L'adresse email a été définie sur la liste noire",
    "appnetos__mailer__error_no_settings" => "Aucun réglage d'expéditeur disponible.",
    "appnetos__mailer__error_no_mailboxes" => "Il n'y a pas de boîtes aux lettres.",
];