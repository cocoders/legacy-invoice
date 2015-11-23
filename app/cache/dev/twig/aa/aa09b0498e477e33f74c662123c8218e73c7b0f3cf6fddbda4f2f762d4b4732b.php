<?php

/* invoice/listOutgoing.html.twig */
class __TwigTemplate_e69f85311d9c34e947af5417a366a7c36f29e17dfb9979d7d47fdfe51feee293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/listOutgoing.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e22f9f5e18cef00eb81a10c4d53023c603a39277f4e8efd18afefef7b77b2e = $this->env->getExtension("native_profiler");
        $__internal_49e22f9f5e18cef00eb81a10c4d53023c603a39277f4e8efd18afefef7b77b2e->enter($__internal_49e22f9f5e18cef00eb81a10c4d53023c603a39277f4e8efd18afefef7b77b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoice/listOutgoing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e22f9f5e18cef00eb81a10c4d53023c603a39277f4e8efd18afefef7b77b2e->leave($__internal_49e22f9f5e18cef00eb81a10c4d53023c603a39277f4e8efd18afefef7b77b2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54c23083d960d9b8caf1ec3647a82814e2f45db6daf7e95d25526bd158f0c9da = $this->env->getExtension("native_profiler");
        $__internal_54c23083d960d9b8caf1ec3647a82814e2f45db6daf7e95d25526bd158f0c9da->enter($__internal_54c23083d960d9b8caf1ec3647a82814e2f45db6daf7e95d25526bd158f0c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table>
        <thead>
            <th><td>Numer</td></th>
        </thead>
        <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) ? $context["invoices"] : $this->getContext($context, "invoices")));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 10
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "number", array()), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </tbody>
    </table>
";
        
        $__internal_54c23083d960d9b8caf1ec3647a82814e2f45db6daf7e95d25526bd158f0c9da->leave($__internal_54c23083d960d9b8caf1ec3647a82814e2f45db6daf7e95d25526bd158f0c9da_prof);

    }

    public function getTemplateName()
    {
        return "invoice/listOutgoing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body%}*/
/*     <table>*/
/*         <thead>*/
/*             <th><td>Numer</td></th>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for invoice in invoices %}*/
/*             <tr><td>{{ invoice.number }}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock body %}*/
/* */
