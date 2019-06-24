<?php

/* __string_template__7cb688aa2aba1e217f8c302bfa86e8f06b7b3994622fa5a471e48f18c88bd846 */
class __TwigTemplate_07cec0b9e8dd7397f2d561880238c098383a9379cd8326e13b43a46e151fe3a0 extends Twig_Template
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
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_candidate_notification", array("[href]" => (isset($context["company_update_url"]) ? $context["company_update_url"] : null)));
        echo "

<br/><br/>

<table>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 9
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "company_name");
        echo ":&nbsp;</td>
        <td>";
        // line 10
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company", array());
        echo "</td>
    </tr>

    ";
        // line 13
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_description", array())) {
            // line 14
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 15
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "description");
            echo ":&nbsp;</td>
        <td>";
            // line 16
            echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_description", array());
            echo "</td>
    </tr>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "request_account_name", array())) {
            // line 21
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 22
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "account_name");
            echo ":&nbsp;</td>
        <td>";
            // line 23
            echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "request_account_name", array());
            echo "</td>
    </tr>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "admin_firstname", array())) {
            // line 28
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 29
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "first_name");
            echo ":&nbsp;</td>
        <td>";
            // line 30
            echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "admin_firstname", array());
            echo "</td>
    </tr>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "admin_lastname", array())) {
            // line 35
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 36
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "last_name");
            echo ":&nbsp;</td>
        <td>";
            // line 37
            echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "admin_lastname", array());
            echo "</td>
    </tr>
    ";
        }
        // line 40
        echo "
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 42
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":&nbsp;</td>
        <td>";
        // line 43
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "email", array());
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 46
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "phone");
        echo ":&nbsp;</td>
        <td><bdi>";
        // line 47
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "phone", array());
        echo "</bdi></td>
    </tr>
    <tr>

    ";
        // line 51
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "url", array())) {
            // line 52
            echo "        <td class=\"form-field-caption\" nowrap>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "url");
            echo ":&nbsp;</td>
        <td >";
            // line 53
            echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "url", array());
            echo "</td>
    </tr>
    ";
        }
        // line 56
        echo "
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 58
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "address");
        echo ":&nbsp;</td>
        <td>";
        // line 59
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "address", array());
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 62
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "city");
        echo ":&nbsp;</td>
        <td>";
        // line 63
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "city", array());
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 66
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "country");
        echo ":&nbsp;</td>
        <td>";
        // line 67
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "country", array());
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 70
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "state");
        echo ":&nbsp;</td>
        <td>";
        // line 71
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "state", array());
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 74
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "zip_postal_code");
        echo ":&nbsp;</td>
        <td >";
        // line 75
        echo $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "zipcode", array());
        echo "</td>
    </tr>
</table>

";
        // line 79
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7cb688aa2aba1e217f8c302bfa86e8f06b7b3994622fa5a471e48f18c88bd846";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 79,  198 => 75,  194 => 74,  188 => 71,  184 => 70,  178 => 67,  174 => 66,  168 => 63,  164 => 62,  158 => 59,  154 => 58,  150 => 56,  144 => 53,  139 => 52,  137 => 51,  130 => 47,  126 => 46,  120 => 43,  116 => 42,  112 => 40,  106 => 37,  102 => 36,  99 => 35,  97 => 34,  94 => 33,  88 => 30,  84 => 29,  81 => 28,  79 => 27,  76 => 26,  70 => 23,  66 => 22,  63 => 21,  61 => 20,  58 => 19,  52 => 16,  48 => 15,  45 => 14,  43 => 13,  37 => 10,  33 => 9,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/* {{ __("vendor_candidate_notification", {"[href]": company_update_url}) }}*/
/* */
/* <br/><br/>*/
/* */
/* <table>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("company_name") }}:&nbsp;</td>*/
/*         <td>{{ company.company }}</td>*/
/*     </tr>*/
/* */
/*     {% if company.company_description %}*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("description") }}:&nbsp;</td>*/
/*         <td>{{ company.company_description }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* */
/*     {% if company.request_account_name %}*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("account_name") }}:&nbsp;</td>*/
/*         <td>{{ company.request_account_name }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* */
/*     {% if company.admin_firstname %}*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("first_name") }}:&nbsp;</td>*/
/*         <td>{{ company.admin_firstname }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* */
/*     {% if company.admin_lastname %}*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("last_name") }}:&nbsp;</td>*/
/*         <td>{{ company.admin_lastname }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* */
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("email") }}:&nbsp;</td>*/
/*         <td>{{ company.email }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("phone") }}:&nbsp;</td>*/
/*         <td><bdi>{{ company.phone }}</bdi></td>*/
/*     </tr>*/
/*     <tr>*/
/* */
/*     {% if company.url %}*/
/*         <td class="form-field-caption" nowrap>{{ __("url") }}:&nbsp;</td>*/
/*         <td >{{ company.url }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/* */
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("address") }}:&nbsp;</td>*/
/*         <td>{{ company.address }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("city") }}:&nbsp;</td>*/
/*         <td>{{ company.city }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("country") }}:&nbsp;</td>*/
/*         <td>{{ company.country }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("state") }}:&nbsp;</td>*/
/*         <td>{{ company.state }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td class="form-field-caption" nowrap>{{ __("zip_postal_code") }}:&nbsp;</td>*/
/*         <td >{{ company.zipcode }}</td>*/
/*     </tr>*/
/* </table>*/
/* */
/* {{ snippet("footer") }}*/
/* */
