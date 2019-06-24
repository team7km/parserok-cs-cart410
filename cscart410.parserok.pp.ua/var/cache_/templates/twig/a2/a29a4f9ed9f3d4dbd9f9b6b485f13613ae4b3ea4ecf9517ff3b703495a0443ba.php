<?php

/* __string_template__74ecc116c76329f7763e00536a9a0b33578e5bb857152ad2724373022e544482 */
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
        return "__string_template__74ecc116c76329f7763e00536a9a0b33578e5bb857152ad2724373022e544482";
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
