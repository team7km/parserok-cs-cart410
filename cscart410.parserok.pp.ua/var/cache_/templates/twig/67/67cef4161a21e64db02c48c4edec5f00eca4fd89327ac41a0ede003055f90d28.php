<?php

/* __string_template__376f652785ead80baffa486c01f2cf85113a7e7f91eecf85ef07d7f2e09da3f2 */
class __TwigTemplate_2659c2d72f2a9b0e775101eecb293b7fe307801d7e8a95543a8e9147ccf6bc24 extends Twig_Template
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
        if ((((((isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D")) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P")))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_disable_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif (((((isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A")) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A")))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__376f652785ead80baffa486c01f2cf85113a7e7f91eecf85ef07d7f2e09da3f2";
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
/* {% if (status_from == "A" and status_to == "D") or (status_from == "P" and status_to == "D") or (status_from == "D" and status_to == "P") %}    {{ __("text_company_status_disabled_subj") }}{% elseif status_from == "A" and status_to == "P" %}    {{ __("text_company_status_pending_subj") }}{% elseif status_from == "N" and status_to == "A" %}    {{ __("text_company_status_new_to_active_subj") }}{% elseif status_from == "N" and status_to == "D" %}    {{ __("text_company_status_new_to_disable_subj") }}{% elseif status_from == "N" and status_to == "P" %}    {{ __("text_company_status_new_to_active_subj") }}{% elseif (status_from == "P" and status_to == "A") or (status_from == "D" and status_to == "A") %}    {{ __("text_company_status_active_subj") }}{% endif %}*/
