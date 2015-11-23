<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c3f75662f1323604721177665501b2392891ba5a39dcdbee884f555b8b175fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b2c2c378b882cb29ad299c1b06a506691ea9eb5d858807ce441d590ba535553 = $this->env->getExtension("native_profiler");
        $__internal_0b2c2c378b882cb29ad299c1b06a506691ea9eb5d858807ce441d590ba535553->enter($__internal_0b2c2c378b882cb29ad299c1b06a506691ea9eb5d858807ce441d590ba535553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2c2c378b882cb29ad299c1b06a506691ea9eb5d858807ce441d590ba535553->leave($__internal_0b2c2c378b882cb29ad299c1b06a506691ea9eb5d858807ce441d590ba535553_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c753eb9b57c1d7fd5f98a202df4a0d96288993d7f82a745250262c1885e19690 = $this->env->getExtension("native_profiler");
        $__internal_c753eb9b57c1d7fd5f98a202df4a0d96288993d7f82a745250262c1885e19690->enter($__internal_c753eb9b57c1d7fd5f98a202df4a0d96288993d7f82a745250262c1885e19690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c753eb9b57c1d7fd5f98a202df4a0d96288993d7f82a745250262c1885e19690->leave($__internal_c753eb9b57c1d7fd5f98a202df4a0d96288993d7f82a745250262c1885e19690_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88427613318971969d94f6ef3e5c446b17fbfee4dbb5837229fc783933534258 = $this->env->getExtension("native_profiler");
        $__internal_88427613318971969d94f6ef3e5c446b17fbfee4dbb5837229fc783933534258->enter($__internal_88427613318971969d94f6ef3e5c446b17fbfee4dbb5837229fc783933534258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88427613318971969d94f6ef3e5c446b17fbfee4dbb5837229fc783933534258->leave($__internal_88427613318971969d94f6ef3e5c446b17fbfee4dbb5837229fc783933534258_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8556d85b05d23c1fd4a1924115e4fc94e960c5c8096634ba884573e3849a7956 = $this->env->getExtension("native_profiler");
        $__internal_8556d85b05d23c1fd4a1924115e4fc94e960c5c8096634ba884573e3849a7956->enter($__internal_8556d85b05d23c1fd4a1924115e4fc94e960c5c8096634ba884573e3849a7956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8556d85b05d23c1fd4a1924115e4fc94e960c5c8096634ba884573e3849a7956->leave($__internal_8556d85b05d23c1fd4a1924115e4fc94e960c5c8096634ba884573e3849a7956_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
