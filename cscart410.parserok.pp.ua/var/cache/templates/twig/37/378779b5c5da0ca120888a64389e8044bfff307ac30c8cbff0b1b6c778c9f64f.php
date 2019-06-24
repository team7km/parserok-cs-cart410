<?php

/* __string_template__39d1fc44f5711b3844b80fbc95614186c6a42cb3df3e917808c25ccf87474116 */
class __TwigTemplate_8512c7f44eafeaa5f243b192439f5408364172fc210d415de09d7ea0ce55bfd3 extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "low_stock_subj", array("[product]" => (((isset($context["product"]) ? $context["product"] : null) . " #") . (isset($context["product_id"]) ? $context["product_id"] : null))));
    }

    public function getTemplateName()
    {
        return "__string_template__39d1fc44f5711b3844b80fbc95614186c6a42cb3df3e917808c25ccf87474116";
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
/* {{ company_name }}: {{ __("low_stock_subj", {"[product]": "#{product} ##{product_id}"}) }}*/
