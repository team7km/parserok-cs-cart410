<?php

/* __string_template__fb7d9c67f119178afdab4cb8ad1d7804df086dacc219f91d256990ed6613a138 */
class __TwigTemplate_172cda7e4dba11d2b4b64b0fc5fb45984e66d9c757fd05b3614f3304c0b7fd2a extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__fb7d9c67f119178afdab4cb8ad1d7804df086dacc219f91d256990ed6613a138";
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
/* {{ __("vendor_plans.plan_payment") }}*/
