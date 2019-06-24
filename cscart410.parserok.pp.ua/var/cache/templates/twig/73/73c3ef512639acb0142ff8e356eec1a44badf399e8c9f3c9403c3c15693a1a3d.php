<?php

/* __string_template__da619b6f1792b82000ab7d58cb6f06bdca9ca206e453c84d752c02b7517c9f71 */
class __TwigTemplate_7c3f4082aa3b2faa8600efe8b27e6fdbd32e8f606858ef5e3cffb3d508ed9091 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()), "[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__da619b6f1792b82000ab7d58cb6f06bdca9ca206e453c84d752c02b7517c9f71";
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
/* {{ company_name }}: {{ __("change_order_status_default_subj", {"[order]": order_info.order_id, "[status]": order_status.description}) }}*/
