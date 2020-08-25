<?php
namespace Controller;

abstract class AbstractForm
{
    protected $action;

    protected $method;

    public function __construct(string $action, string $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    abstract public function buildForm(): string;

    protected function startForm(string $action, string $method = 'GET'): string
    {
        return sprintf('<form action="%s" method="%s" >', $action, $method);
    }

    protected function endForm(): string
    {
        return '</form>';
    }

    protected function selectType(string $name, array $options, string $lable): string
    {
        $select = '<select name = " ' . $name . ' " lable= " ' . $lable . ' ">';

        foreach ($options as $value => $label) {
            if (!$value) {
                continue;
            }

            $select .= sprintf('<option value="%s">%s</option>', $value, $label);
        }
        $select .= '</select>';

        return $select;
    }

    protected function submitType(string $name, string $label): string
    {
        return sprintf('<input type="submit" name="%s" value="%s">', $name, $label);
    }
}
