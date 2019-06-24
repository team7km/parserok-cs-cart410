<?php

/* __string_template__c499de14b377b1a3c0867b3e796c139baba5695beb6ae5eb1f77017e5002568e */
class __TwigTemplate_799e4dfe69b3aed9204051d241c75cf3a7a47f9985d32dff429e8ce7442d9357 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "display_subtotal", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__c499de14b377b1a3c0867b3e796c139baba5695beb6ae5eb1f77017e5002568e";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.display_subtotal }}</strong></p>*/
