<?php

/* __string_template__ff522a6401a9e4fd4080ccb2810053033e6afcbca2957c62929e81ac0cd0b60d */
class __TwigTemplate_a7a96da21cb2b4906c3d393eb8fcdf77feed50cc20c1374f599e90d944e080d1 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_approval_pending");
    }

    public function getTemplateName()
    {
        return "__string_template__ff522a6401a9e4fd4080ccb2810053033e6afcbca2957c62929e81ac0cd0b60d";
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
/* {{ __("vendor_approval_pending") }}*/
