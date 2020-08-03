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
    "appnetos__mailer__widget_sent" => "Sent",
    "appnetos__mailer__widget_failed" => "Failed",
    "appnetos__mailer__widget_last_sent" => "Last confirm log",
    "appnetos__mailer__widget_last_failed" => "Last error log",
    "appnetos__mailer__widget_datetime" => "Date-Time",
    "appnetos__mailer__widget_address" => "Email address",
    "appnetos__mailer__widget_message" => "Message",
    "appnetos__mailer__widget_word_info" => "Info",
    "appnetos__mailer__widget_blacklist" => "Blacklist matching",
    "appnetos__mailer__widget_mailbox" => "Mailbox",
    "appnetos__mailer__widget_ip" => "IP",
    "appnetos__mailer__widget_not_defined" => "Undefined",
    "appnetos__mailer__widget_logs" => "Mailer Logs",
    "appnetos__mailer__widget_reset_counter" => "Reset counter",
    "appnetos__mailer__widget_conf_counter_reset" => "The counter has been reset",
    "appnetos__mailer__error_id_set" => "Mailer ID not set",
    "appnetos__mailer__error_mailbox_set" => "Mailbox not set",
    "appnetos__mailer__error_to_addr_set" => "Recipient email address not set",
    "appnetos__mailer__error_body_set" => "Content not set",
    "appnetos__mailer__error_id_match" => "Mailer ID not match",
    "appnetos__mailer__error_to_addr" => "Recipient email address is wrong",
    "appnetos__mailer__error_mailbox_ex" => "Mailbox not exists",
    "appnetos__mailer__error_phpmailer" => "PHP Mailer error",
    "appnetos__mailer__error_email_in_blacklist" => "Email address is in the blacklist",
    "appnetos__mailer__error_email_to_blacklist" => "Too many email requests. Email address has been set on the Blacklist",
    "appnetos__mailer__error_email" => "Email",
    "appnetos__mailer__error_limit" => "Limit",
    "appnetos__mailer__error_no_settings" => "No mailer settings available.",
    "appnetos__mailer__error_no_mailboxes" => "There are no mailer mailboxes.",
    "appnetos__mailer__error_ip_in_blacklist" => "IP address is in the blacklist",
    "appnetos__mailer__error_ip_to_blacklist" => "Too many email requests. IP address has been blacklisted",
];