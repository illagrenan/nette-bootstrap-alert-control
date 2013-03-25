# Nette komponenta pro výpis upozornění ve stylu Twitter Bootstrap

*Licence:* MIT

```json
{
	"require": {
	    "illagrenan/nette-bootstrap-alert-control": "dev-master"
	}
}
```

**Závislosti:**
* [illagrenan/nette-base-control](https://github.com/illagrenan/nette-base-control)

## Použití

**Vytvoření komponenty v presenteru**
```php
<?php
protected function createComponentTWAlerts($name)
{
        
        $twAlerts = new \Illagrenan\BootstrapAlert\BootstrapAlert($this, $name);
        return $twAlerts;
}
?>
```

**Použití v šabloně**
```html
{* Bude vykresleno jako blok *}
{widget tWAlerts "Na druhou kolej přijel osobní vlak z Pardubic", "Upozornění pro cestující", \Illagrenan\BootstrapAlert\AlertType::INFO()}

{* Vykreslíme inline s defaultním stylem "Warning" *}
{widget tWAlerts "Natala neznámá chyba"}
```

