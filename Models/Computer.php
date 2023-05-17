<?php
class Computer
{
    public function __construct(protected String $MAC, protected array $components)
    {
        foreach ($components as $component) {
            if (!($component instanceof Component)) {
                trigger_error('Array of objects passed to constructor must contain instances of Component', E_USER_ERROR);
            }
        }
        $this->MAC = $MAC;
        $this->components = $components;
    }

    public function get_MAC()
    {
        return $this->MAC;
    }

    public function get_components_to_string()
    {
        $return_string = "";
        foreach ($this->components as $component) {
            $return_string = $return_string . $component->get_name() . ", ";
        }
        return rtrim($return_string, ", ");
    }
}
