<?php

namespace Illagrenan\BootstrapAlert;

use Illagrenan\BaseControl\BaseControl;

/**
 * @license http://opensource.org/licenses/MIT MIT
 * @author Vašek Dohnal <hello@vaclavdohnal.cz>
 */
class BootstrapAlert extends BaseControl
{

    /**
     * @param string $content
     * @param string $alertHeader     
     * @param \Illagrenan\TWAlerts\AlertType $alertType
     * 
     * Vykreslí upozornění
     * <code>
     * {widget tWAlerts "Pozor! Důležité hlášení", "Na pátou kolej přijíždí rychlík směr Praha", \Illagrenan\TWAlerts\AlertTypes::INFO()}
     * </code>
     */
    public function render($content, $alertHeader = NULL, AlertType $alertType = NULL)
    {
        $template = $this->createTemplateFromName("alert");

        if ($alertType == NULL)
        {
            $alertType = AlertType::WARNING();
        }

        $template->alertHeader = $alertHeader;
        $template->content     = $content;
        $template->alertType   = $alertType->value();

        $template->render();
    }

}
