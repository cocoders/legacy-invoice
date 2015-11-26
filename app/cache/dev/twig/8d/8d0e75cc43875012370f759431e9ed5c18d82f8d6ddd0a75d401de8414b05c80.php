<?php

/* base.html.twig */
class __TwigTemplate_0160e7784e8e2209c0791e19e429729016d7a0cd9aa307d5108c8804d1eec979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df93636f7f411e775335990c513b8cdd721e99067394ead5e2beb9300d5fd8b1 = $this->env->getExtension("native_profiler");
        $__internal_df93636f7f411e775335990c513b8cdd721e99067394ead5e2beb9300d5fd8b1->enter($__internal_df93636f7f411e775335990c513b8cdd721e99067394ead5e2beb9300d5fd8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Invoice\">
        <meta name=\"author\" content=\"cocoders\">
        <title>
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Page Specific CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/morris-0.4.3.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css\" />
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/morris-0.4.3.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Invoice</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                </ul>

                <ul class=\"nav navbar-nav navbar-right navbar-user\">
                    <li class=\"dropdown user-dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/index.php?page=user-profile\"><i class=\"fa fa-user\"></i> Profile</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"\$\"><i class=\"fa fa-power-off\"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">
            ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>

    <!-- Page Specific Plugins -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/morris/chart-data-morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"/js/tablesorter/jquery.tablesorter.js\"></script>
    <script src=\"/js/tablesorter/tables.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js\"></script>
    <script type=\"text/javascript\">
        \$('input.date').datepicker({
            format: \"yyyy-mm-dd\"
        });
    </script>
    </body>
</html>
";
        
        $__internal_df93636f7f411e775335990c513b8cdd721e99067394ead5e2beb9300d5fd8b1->leave($__internal_df93636f7f411e775335990c513b8cdd721e99067394ead5e2beb9300d5fd8b1_prof);

    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ab606983b2577ab843fb8f43ff5621095835c0f85ca0f8d95a9a6eaecc9f449 = $this->env->getExtension("native_profiler");
        $__internal_2ab606983b2577ab843fb8f43ff5621095835c0f85ca0f8d95a9a6eaecc9f449->enter($__internal_2ab606983b2577ab843fb8f43ff5621095835c0f85ca0f8d95a9a6eaecc9f449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Invoice application";
        
        $__internal_2ab606983b2577ab843fb8f43ff5621095835c0f85ca0f8d95a9a6eaecc9f449->leave($__internal_2ab606983b2577ab843fb8f43ff5621095835c0f85ca0f8d95a9a6eaecc9f449_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c431f855f97a08ddcdaeb817893e3dd4d1e8185d13a500a5f291fad86c44de2 = $this->env->getExtension("native_profiler");
        $__internal_6c431f855f97a08ddcdaeb817893e3dd4d1e8185d13a500a5f291fad86c44de2->enter($__internal_6c431f855f97a08ddcdaeb817893e3dd4d1e8185d13a500a5f291fad86c44de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6c431f855f97a08ddcdaeb817893e3dd4d1e8185d13a500a5f291fad86c44de2->leave($__internal_6c431f855f97a08ddcdaeb817893e3dd4d1e8185d13a500a5f291fad86c44de2_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df7f813bc95a23aa6ae9a3107bb481ec66182b91aff54388e485924f3c63f50 = $this->env->getExtension("native_profiler");
        $__internal_0df7f813bc95a23aa6ae9a3107bb481ec66182b91aff54388e485924f3c63f50->enter($__internal_0df7f813bc95a23aa6ae9a3107bb481ec66182b91aff54388e485924f3c63f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0df7f813bc95a23aa6ae9a3107bb481ec66182b91aff54388e485924f3c63f50->leave($__internal_0df7f813bc95a23aa6ae9a3107bb481ec66182b91aff54388e485924f3c63f50_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48c5093d8cf61f867dbd4bfab680fda6c44a642f50cc0ff8ff56d11e3e2f23d0 = $this->env->getExtension("native_profiler");
        $__internal_48c5093d8cf61f867dbd4bfab680fda6c44a642f50cc0ff8ff56d11e3e2f23d0->enter($__internal_48c5093d8cf61f867dbd4bfab680fda6c44a642f50cc0ff8ff56d11e3e2f23d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48c5093d8cf61f867dbd4bfab680fda6c44a642f50cc0ff8ff56d11e3e2f23d0->leave($__internal_48c5093d8cf61f867dbd4bfab680fda6c44a642f50cc0ff8ff56d11e3e2f23d0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  173 => 64,  162 => 26,  150 => 25,  131 => 72,  125 => 68,  123 => 67,  119 => 65,  117 => 64,  102 => 52,  73 => 27,  71 => 26,  67 => 25,  63 => 24,  58 => 22,  53 => 20,  48 => 18,  44 => 17,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <!-- Meta, title, CSS, favicons, etc. -->*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="Invoice">*/
/*         <meta name="author" content="cocoders">*/
/*         <title>*/
/*         </title>*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">*/
/*         <link href="{{ asset('/css/sb-admin.css') }}" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">*/
/*         <!-- Page Specific CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('/css/morris-0.4.3.min.css') }}">*/
/*         <link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />*/
/*         <script src="{{ asset('/js/jquery-1.10.2.js') }}"></script>*/
/*         <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*         <script src="{{  asset('/js/morris-0.4.3.min.js') }}"></script>*/
/*         <title>{% block title %}Invoice application{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div id="wrapper">*/
/* */
/*         <!-- Sidebar -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/">Invoice</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                 </ul>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right navbar-user">*/
/*                     <li class="dropdown user-dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ app.user.username }} <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/index.php?page=user-profile"><i class="fa fa-user"></i> Profile</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="$"><i class="fa fa-power-off"></i> Log Out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/*             {% block body %}{% endblock %}*/
/*         </div><!-- /#page-wrapper -->*/
/*     </div><!-- /#wrapper -->*/
/*     {% block javascripts %}{% endblock %}*/
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Page Specific Plugins -->*/
/*     <script src="{{  asset('/js/morris/chart-data-morris.js') }}"></script>*/
/*     <script src="/js/tablesorter/jquery.tablesorter.js"></script>*/
/*     <script src="/js/tablesorter/tables.js"></script>*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         $('input.date').datepicker({*/
/*             format: "yyyy-mm-dd"*/
/*         });*/
/*     </script>*/
/*     </body>*/
/* </html>*/
/* */
