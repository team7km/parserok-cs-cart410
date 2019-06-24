<?php

/* __string_template__07eaf7f8b0b12c646fc273ef08698dadd2d6155dd9c457f10261852e7eab47d5 */
class __TwigTemplate_7ea44630f8fa2dfc1d72376b2f62e0cb2a84a9571806a9024209ae5b2ef7a6be extends Twig_Template
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
        echo $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "vendor", array());
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_approved");
    }

    public function getTemplateName()
    {
        return "__string_template__07eaf7f8b0b12c646fc273ef08698dadd2d6155dd9c457f10261852e7eab47d5";
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
/* {{ payment.vendor }}: {{ __("vendor_payouts.payout_approved") }}*/
