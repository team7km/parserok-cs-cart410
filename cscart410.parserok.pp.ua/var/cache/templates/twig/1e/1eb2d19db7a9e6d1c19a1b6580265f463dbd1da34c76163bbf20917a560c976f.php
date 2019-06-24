<?php

/* __string_template__e7b44ad5b5b31fa238eeb28e77121678ec68a5b474ba172e7eebc9299a92f64e */
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
        return "__string_template__e7b44ad5b5b31fa238eeb28e77121678ec68a5b474ba172e7eebc9299a92f64e";
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
