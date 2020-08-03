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
 * @description     Admin overview and management for application users.
 */

// Language strings.
$strings = [
    "admin__users__application_management__info" => "Вся информация от зарегистрированных пользователей может быть просмотрена в управлении пользователями. Учетные записи пользователей могут быть заблокированы и разблокированы. Пароли могут быть переназначены пользователями. Если активация учетных записей по электронной почте активна, то счета, которые не были активированы, могут быть активированы или удалены. Имена пользователей и адреса электронной почты могут быть отредактированы. Группы могут быть назначены пользователям. Группы пользователей определяют области, которые пользователи могут просматривать.",
    "admin__users__application_management__registered_since" => "Зарегистрирован с",
    "admin__users__application_management__last_sign_in" => "Последний вход в систему",
    "admin__users__application_management__active" => "активно",
    "admin__users__application_management__not_activated" => "Не активирован",
    "admin__users__application_management__sign_in_error" => "Ошибка входа",
    "admin__users__application_management__locked" => "закрыто",
    "admin__users__application_management__deleted" => "удаленный",
    "admin__users__application_management__ip_first" => "Регистрация IP",
    "admin__users__application_management__ip_last" => "IP последний логин",
    "admin__users__application_management__admin" => "администратор",
    "admin__users__application_management__permissions" => "разрешений",
    "admin__users__application_management__edit_header" => "Изменить учетную запись пользователя",
    "admin__users__application_management__edit_info" => "Будьте осторожны при редактировании учетных записей пользователей. Если имя пользователя, адрес электронной почты или пароль учетной записи изменены, пользователь больше не сможет войти со своими старыми данными.",
    "admin__users__application_management__edit_pass" => "Оставьте пустым, чтобы не менять",
    "admin__users__application_management__edit_min_user" => "Минимальная проверка пользователя (проверка только, если имя пользователя уже существует)",
    "admin__users__application_management__edit_min_pass" => "Проверка минимального пароля (Проверяйте только, если пароль был введен)",
    "admin__users__application_management__edit_err_user_exists" => "Имя пользователя уже занято",
    "admin__users__application_management__edit_err_user_valid" => "Имя пользователя не допускается",
    "admin__users__application_management__edit_err_user_usable" => "Имя пользователя не может быть использовано",
    "admin__users__application_management__edit_err_mail_exists" => "Адрес электронной почты уже используется",
    "admin__users__application_management__edit_err_mail_valid" => "Адрес электронной почты не разрешен",
    "admin__users__application_management__edit_err_pass_valid" => "Пароль не допускается",
    "admin__users__application_management__edit_err_pass_usable" => "Пароль не может быть использован",
    "admin__users__application_management__edit_conf" => "Учетная запись пользователя была отредактирована",
    "admin__users__application_management__err_activate" => "Учетная запись пользователя не может быть активирована",
    "admin__users__application_management__conf_activate" => "Учетная запись пользователя была активирована",
    "admin__users__application_management__lock_header" => "Блокировка учетной записи пользователя",
    "admin__users__application_management__lock_info" => "Будьте осторожны при блокировке учетных записей пользователей. Пользователи с заблокированными учетными записями больше не могут войти.",
    "admin__users__application_management__delete_header" => "Удалить учетную запись пользователя",
    "admin__users__application_management__delete_info" => "Будьте осторожны при удалении учетных записей пользователей. Если учетная запись пользователя удалена, пользователь больше не может войти в систему, но учетная запись пользователя может быть повторно активирована. Если пользователь удаляется из системы, все данные пользователя удаляются из базы данных, и учетная запись не может быть восстановлена.",
    "admin__users__application_management__permissions_header" => "разрешений",
    "admin__users__application_management__permissions_info" => "Будьте внимательны при назначении прав администратора. Пользователи с правами администратора могут войти в раздел администратора и изменить страницу со своим содержимым.",
    "admin__users__application_management__conf_lock" => "Учетная запись пользователя была заблокирована",
    "admin__users__application_management__err_lock" => "Учетная запись пользователя не может быть заблокирована",
    "admin__users__application_management__conf_delete" => "Учетная запись пользователя была удалена",
    "admin__users__application_management__err_delete" => "Учетная запись пользователя не может быть удалена",
    "admin__users__application_management__conf_permissions" => "Права были изменены",
    "admin__users__application_management__err_permissions" => "Разрешения не могут быть изменены",
    "admin__users__application_management__del_from_system" => "Удалить пользователя из системы",
    "admin__users__application_management__err_pass" => "Пароль неверный",
    "admin__users__application_management__add_user" => "Добавить пользователей",
    "admin__users__application_management__add_err_user_enter" => "Пожалуйста, введите имя пользователя",
    "admin__users__application_management__add_err_user_valid" => "Имя пользователя не допускается",
    "admin__users__application_management__add_err_user_exists" => "Имя пользователя уже занято",
    "admin__users__application_management__add_err_user_usable" => "Имя пользователя не может быть использовано",
    "admin__users__application_management__add_err_pass_enter" => "Пожалуйста, введите пароль",
    "admin__users__application_management__add_err_pass_compare" => "Пароль и повтор пароля не идентичны",
    "admin__users__application_management__add_err_pass_valid" => "Пароль не допускается",
    "admin__users__application_management__add_err_pass_usable" => "Пароль не может быть использован",
    "admin__users__application_management__add_err_mail_enter" => "Пожалуйста, введите адрес электронной почты",
    "admin__users__application_management__add_err_mail_valid" => "Электронная почта не разрешена",
    "admin__users__application_management__add_err_mail_exists" => "Адрес электронной почты уже используется",
    "admin__users__application_management__add_conf" => "Учетная запись пользователя была добавлена",
    "admin__users__application_management__add_err" => "Учетная запись пользователя не может быть добавлена",
    "admin__users__application_management__search_registered" => "Регистрация",
    "admin__users__application_management__search_active" => "активно",
    "admin__users__application_management__search_unactive" => "дремоты",
    "admin__users__application_management__search_locked" => "закрыто",
    "admin__users__application_management__search_deleted" => "удаленный",
    "admin__users__application_management__search_all" => "все",
    "admin__users__application_management__restore_conf" => "Учетная запись пользователя была восстановлена",
    "admin__users__application_management__restore_err" => "Учетная запись пользователя не может быть восстановлена",
    "admin__users__application_management__menu_header" => "Управление пользователями",
    "admin__users__application_management__search" => "Поиск",
    "admin__users__application_management__delete" => "Удалить",
    "admin__users__application_management__user_id" => "Идентификатор пользователя",
    "admin__users__application_management__properties" => "Вариантов размещения",
    "admin__users__application_management__edit" => "Редактировать",
    "admin__users__application_management__information" => "Информация",
    "admin__users__application_management__user" => "Пользователя",
    "admin__users__application_management__mail" => "Электронной почты",
    "admin__users__application_management__pass" => "Пароль",
    "admin__users__application_management__save" => "Сохранить",
    "admin__users__application_management__pass_info" => "Оставьте пустым, чтобы не изменить",
    "admin__users__application_management__ip_sign_up" => "IP при регистрации",
    "admin__users__application_management__ip_sign_in" => "IP на последней регистрации",
    "admin__users__application_management__activate" => "Активировать",
    "admin__users__application_management__deactivate" => "Отключить",
    "admin__users__application_management__lock" => "Блокировки",
    "admin__users__application_management__restore" => "Восстановить",
    "admin__users__application_management__account_type" => "Тип учетной записи",
    "admin__users__application_management__standard" => "Стандартный",
    "admin__users__application_management__sign_in_count" => "Количество вхываемых в",
    "admin__users__application_management__no_users" => "Нет пользователей, присутствующих",
    "admin__users__application_management__admin_button" => "Администратора",
    "admin__users__application_management__search_admin" => "Администратора",
    "admin__users__application_management__close" => "Закрыть",
    "admin__users__application_management__edit_err" => "Пользователь не может быть отредактирован",
    "admin__users__application_management__add" => "Добавить",
    "admin__users__application_management_username_up" => "Имя пользователя по возрастанию",
    "admin__users__application_management_username_down" => "Имя пользователя по убыванию",
    "admin__users__application_management__mail_up" => "Адрес электронной почты по возрастанию",
    "admin__users__application_management__mail_down" => "Адрес электронной почты по убыванию",
    "admin__users__application_management__ts_first_up" => "Зарегистрироваться по возрастанию",
    "admin__users__application_management__ts_first_down" => "Зарегистрировать данные по убыванию",
    "admin__users__application_management__id_up" => "ID по возрастанию",
    "admin__users__application_management__id_down" => "ID по убыванию",
    "admin__users__application_management__user_group" => "Группа пользователей",
    "admin__users__application_management__group_id" => "Идентификатор группы",
    "admin__users__application_management__none" => "Ни один",
    "admin__users__application_management__edit_err_group_valid" => "Группа пользователей не существует",
    "admin__users__application_management__image" => "Изображения",
    "admin__users__application_management__delete_image" => "Удаление изображения",
    "admin__users__application_management__edit_err_img_type" => "Неправильный формат изображения",
    "admin__users__application_management__edit_err_img_size" => "Файл изображения слишком большой",
];