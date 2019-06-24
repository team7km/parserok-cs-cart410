<?php

/* __string_template__c3037e44271d446c6b11c918edadce194011a1d6060eb567b66c0cbd80ff04fe */
class __TwigTemplate_1f01db23f432da66698c3398ffbd4bcb6eb9d4d4490ba188505ee4808a93ad12 extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "original_price", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__c3037e44271d446c6b11c918edadce194011a1d6060eb567b66c0cbd80ff04fe";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.original_price }}</strong></p>*/
