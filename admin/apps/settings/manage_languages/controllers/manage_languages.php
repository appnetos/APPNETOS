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
 * @description     Admin language management.
 */

// Namespace.
namespace admin\settings;

// Use.
use \core\objects;

// Controller "admin\settings\manage_languages".
class manage_languages
{

    /**
     * Registered AJAX functions.
     *
     * @var array.
     */
    public $ajax = ['search', 'activate', 'deactivate'];

    /**
     *  constructor.
     */
    public function __construct()
    {
        // If is ajax.
        $uri = objects::get('uri');
        if ($uri->getAjax()) {
            return;
        }

        // Set object.
        objects::set('admin/settings/manage_languages', $this);

        // Get model "admin\settings\manage_languages__model".
        $manageLanguagesModel = objects::get('admin/settings/manage_languages__model', true);
        $manageLanguagesModel->init();
    }

    /**
     * Search AJAX request.
     */
    public function search()
    {
        // Get model "admin\settings\manage_languages__search".
        $manageLanguagesSearch = objects::get('admin/settings/manage_languages__search');
        $manageLanguagesSearch->init();
        $manageLanguagesSearch->update();

        // Get model "admin\settings\manage_languages__model".
        $manageLanguagesModel = objects::get('admin/settings/manage_languages__model', true);
        $manageLanguagesModel->init();

        // Render template.
        $render = objects::get('render');
        $output = $render->fetch('admin/apps/settings/manage_languages/views/manage_languages__languages_list.tpl');
        echo $output;
        exit();
    }

    /**
     * Activate AJAX request.
     */
    public function activate()
    {
        // Set object.
        objects::set('admin/settings/manage_languages', $this);

        // Get model "admin\settings\manage_languages__language".
        $manageLanguagesLanguage = objects::get('admin/settings/manage_languages__language', true);
        $manageLanguagesLanguage->activate();
    }

    /**
     * Deactivate AJAX request.
     */
    public function deactivate()
    {
        // Set object.
        objects::set('admin/settings/manage_languages', $this);

        // Get model "admin\settings\manage_languages__language".
        $manageLanguagesLanguage = objects::get('admin/settings/manage_languages__language', true);
        $manageLanguagesLanguage->deactivate();
    }
}