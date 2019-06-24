<?php

/* __string_template__f549af5da62730adb0eae7a81aab2ecda39fc29517ae877c8f8d749b73fc6f84 */
class __TwigTemplate_523701cbc1ea9e8c9d33fda6df0013d438f27148097f5307a05bff8e358f638e extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__f549af5da62730adb0eae7a81aab2ecda39fc29517ae877c8f8d749b73fc6f84";
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
/* {{ company_name }}: {{ __("update_profile_notification") }}*/
