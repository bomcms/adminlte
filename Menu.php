<?php

namespace BomCMS\AdminLTE;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu {
    public $activateParents = true;
    public $linkTemplate = '<a href="{url}"><i class="{icon}"></i> {label}</a>';
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';
    public $options = ['class' => 'sidebar-menu'];

    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{icon}' => isset($item['icon']) ? $item['icon'] : 'fa fa-circle-o',
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{label}' => $item['label'],
            ]);
        }
    }
}