<?php

/* __string_template__309f0748f1a2dc1bc427289a4838f51ce446180025f03cc30825730d885241ae */
class __TwigTemplate_ce80e50044071fdd66ed417ebe2d9b211882d19b7235f5cd67a7198a21f17bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_has_been_changed");
    }

    public function getTemplateName()
    {
        return "__string_template__309f0748f1a2dc1bc427289a4838f51ce446180025f03cc30825730d885241ae";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ __("vendor_plans.plan_has_been_changed") }}*/
