<?php

/* __string_template__a98991adc3d0e65ef2ba3803bc625b1a50495714adc889a8bf8943a26414b70f */
class __TwigTemplate_7feb00f50f8fb9cfcacbe53eb7294dea2686dafe488fc12b735e3c88b6702529 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "usergroup_request_by_customer")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_usergroup_requested_by", array("[usergroup]" => (isset($context["usergroup"]) ? $context["usergroup"] : null), "[name]" => (($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array()) . " ") . $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "lastname", array())), "[email]" => $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array())));
        echo "
  ";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__a98991adc3d0e65ef2ba3803bc625b1a50495714adc889a8bf8943a26414b70f";
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
/* {{ snippet("header", {"title": __("usergroup_request_by_customer") } ) }}*/
/*     {{ __("text_usergroup_requested_by", {"[usergroup]": usergroup, "[name]": "#{user_data.firstname} #{user_data.lastname}" , "[email]": user_data.email}) }}*/
/*   {{ snippet("footer") }}*/
