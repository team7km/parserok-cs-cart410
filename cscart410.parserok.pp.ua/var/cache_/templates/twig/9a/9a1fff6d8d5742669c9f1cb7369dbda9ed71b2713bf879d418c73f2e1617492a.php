<?php

/* __string_template__00fb875c911e76337dd5e3fbd33c4eee6b65cffa9a3497186bacabd54160dc5f */
class __TwigTemplate_99177ad7a9079cbaa2a15f8bd130536363adaeea5fa423cb46fb4c35b3cb4f45 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_approved_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[date]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "date", array())));
        echo ".
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__00fb875c911e76337dd5e3fbd33c4eee6b65cffa9a3497186bacabd54160dc5f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("vendor_payouts.payout_approved_text", {"[amount]": payment.amount, "[date]": payment.date}) }}.*/
/* {{ snippet("footer") }}*/
