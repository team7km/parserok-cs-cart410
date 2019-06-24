<?php

/* __string_template__af88dd60306e2cd125389def8502cd081f365bb4784c7a1d5298019e82ce468b */
class __TwigTemplate_6b4c49a70f96c54a6f64928b602dac726b8530de8bd1381674534839d288311c extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "usergroup_request_by_customer");
        echo " \"";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "\"";
    }

    public function getTemplateName()
    {
        return "__string_template__af88dd60306e2cd125389def8502cd081f365bb4784c7a1d5298019e82ce468b";
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
/* {{ company_name }}: {{ __("usergroup_request_by_customer") }} "{{ user_data.email }}"*/
