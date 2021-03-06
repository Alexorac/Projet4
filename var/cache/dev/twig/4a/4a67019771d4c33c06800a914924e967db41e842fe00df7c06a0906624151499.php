<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d4220ca26b1d1dc8d342e7a52279fbdfbf17e5edfce31c17c00e2d17ddcb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d4220ca26b1d1dc8d342e7a52279fbdfbf17e5edfce31c17c00e2d17ddcb68->enter($__internal_a6d4220ca26b1d1dc8d342e7a52279fbdfbf17e5edfce31c17c00e2d17ddcb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_39591f2c36f3dcd394acb13bd4d8c8fd69d0b2443cf79127fa35567a6dbd54c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39591f2c36f3dcd394acb13bd4d8c8fd69d0b2443cf79127fa35567a6dbd54c3->enter($__internal_39591f2c36f3dcd394acb13bd4d8c8fd69d0b2443cf79127fa35567a6dbd54c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d4220ca26b1d1dc8d342e7a52279fbdfbf17e5edfce31c17c00e2d17ddcb68->leave($__internal_a6d4220ca26b1d1dc8d342e7a52279fbdfbf17e5edfce31c17c00e2d17ddcb68_prof);

        
        $__internal_39591f2c36f3dcd394acb13bd4d8c8fd69d0b2443cf79127fa35567a6dbd54c3->leave($__internal_39591f2c36f3dcd394acb13bd4d8c8fd69d0b2443cf79127fa35567a6dbd54c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e5723b71e416d8fcba16844faa0faee609596bf87a7b425aa8ed4ee29c93c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5723b71e416d8fcba16844faa0faee609596bf87a7b425aa8ed4ee29c93c84->enter($__internal_3e5723b71e416d8fcba16844faa0faee609596bf87a7b425aa8ed4ee29c93c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_efbf10911bf1eb1209893c6a8177328a6b2690bbcfc09987c68f54401140392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbf10911bf1eb1209893c6a8177328a6b2690bbcfc09987c68f54401140392e->enter($__internal_efbf10911bf1eb1209893c6a8177328a6b2690bbcfc09987c68f54401140392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_efbf10911bf1eb1209893c6a8177328a6b2690bbcfc09987c68f54401140392e->leave($__internal_efbf10911bf1eb1209893c6a8177328a6b2690bbcfc09987c68f54401140392e_prof);

        
        $__internal_3e5723b71e416d8fcba16844faa0faee609596bf87a7b425aa8ed4ee29c93c84->leave($__internal_3e5723b71e416d8fcba16844faa0faee609596bf87a7b425aa8ed4ee29c93c84_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd820a5199feeb3ad7e3525b755a45567dcb835f4f485250552cc2f4add08d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd820a5199feeb3ad7e3525b755a45567dcb835f4f485250552cc2f4add08d3b->enter($__internal_fd820a5199feeb3ad7e3525b755a45567dcb835f4f485250552cc2f4add08d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fbfa716fa3d48cb85dded35b02e757769eaa27fbf834506efd6a71db9ef277c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbfa716fa3d48cb85dded35b02e757769eaa27fbf834506efd6a71db9ef277c->enter($__internal_2fbfa716fa3d48cb85dded35b02e757769eaa27fbf834506efd6a71db9ef277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2fbfa716fa3d48cb85dded35b02e757769eaa27fbf834506efd6a71db9ef277c->leave($__internal_2fbfa716fa3d48cb85dded35b02e757769eaa27fbf834506efd6a71db9ef277c_prof);

        
        $__internal_fd820a5199feeb3ad7e3525b755a45567dcb835f4f485250552cc2f4add08d3b->leave($__internal_fd820a5199feeb3ad7e3525b755a45567dcb835f4f485250552cc2f4add08d3b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_64643208210f835a3c68750c93f532a3d1579b16aca6b5b83018b5e343df5949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64643208210f835a3c68750c93f532a3d1579b16aca6b5b83018b5e343df5949->enter($__internal_64643208210f835a3c68750c93f532a3d1579b16aca6b5b83018b5e343df5949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84d488acbb08554e2d4b3b7febe1da29c8c079569af37ab2b3b527645ebe981c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d488acbb08554e2d4b3b7febe1da29c8c079569af37ab2b3b527645ebe981c->enter($__internal_84d488acbb08554e2d4b3b7febe1da29c8c079569af37ab2b3b527645ebe981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_84d488acbb08554e2d4b3b7febe1da29c8c079569af37ab2b3b527645ebe981c->leave($__internal_84d488acbb08554e2d4b3b7febe1da29c8c079569af37ab2b3b527645ebe981c_prof);

        
        $__internal_64643208210f835a3c68750c93f532a3d1579b16aca6b5b83018b5e343df5949->leave($__internal_64643208210f835a3c68750c93f532a3d1579b16aca6b5b83018b5e343df5949_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
