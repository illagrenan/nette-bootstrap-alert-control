<?php

namespace Illagrenan\BootstrapAlert;

use Nette\Application\IPresenter;
use Nette\Application\UI\Control;
use Nette\Utils\Strings;

/**
 * @license http://opensource.org/licenses/MIT MIT
 * @author Vašek Dohnal <hello@vaclavdohnal.cz>
 */
class BootstrapAlert extends Control
{

    /**
     * Koncovka latte šablon
     */

    const LATTE_EXTENSION = ".latte";

    /**
     * Výchozí cesta úložiště šablon
     */
    const DEFAULT_TEMPLATE_PATH = "templates";

    /**
     * Cesta k šablonám
     * @var string
     */
    private $templatePath;

    /**
     * @param IPresenter $parent
     * @param string $name
     */
    public function __construct(IPresenter $parent = NULL, $name = NULL)
    {
        parent::__construct($parent, $name);
        $this->templatePath = __DIR__ . "/" . self::DEFAULT_TEMPLATE_PATH . "/";
    }

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
        $template = $this->createMainTemplate();

        if ($alertType == NULL)
        {
            $alertType = AlertType::WARNING;
        }

        $template->alertHeader = $alertHeader;
        $template->content     = $content;
        $template->alertType   = $alertType->value();

        $template->render();
    }

    /* ----------------------------------------------
     * *** TVORBA ŠABLON ***
     * ---------------------------------------------- */

    private function createMainTemplate()
    {
        /* @var $template ITemplate */
        $template = $this->createTemplate();

        $menuTemplatePath = $this->getTemplatePath("alert");
        $template->setFile($menuTemplatePath);

        return $template;
    }

    private function getTemplatePath($templateName)
    {
        if (Strings::endsWith($templateName, self::LATTE_EXTENSION) == FALSE)
        {
            $templateName = $templateName . self::LATTE_EXTENSION;
        }

        return $this->templatePath . $templateName;
    }

}
