<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_dbaf50560aed7559c48b51cb4ea7caffca074bfae0bbd0b495a34089ab8064e5 extends Twig_Template
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
        $__internal_3435efb3b7858e4c151be6b0216601187771fee5c077c8c48c3595f46ae3cd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3435efb3b7858e4c151be6b0216601187771fee5c077c8c48c3595f46ae3cd06->enter($__internal_3435efb3b7858e4c151be6b0216601187771fee5c077c8c48c3595f46ae3cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_517f68f64bb422d3deaeda39b7b18f479bd538a60b195366c7c046f42bfb6062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517f68f64bb422d3deaeda39b7b18f479bd538a60b195366c7c046f42bfb6062->enter($__internal_517f68f64bb422d3deaeda39b7b18f479bd538a60b195366c7c046f42bfb6062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_3435efb3b7858e4c151be6b0216601187771fee5c077c8c48c3595f46ae3cd06->leave($__internal_3435efb3b7858e4c151be6b0216601187771fee5c077c8c48c3595f46ae3cd06_prof);

        
        $__internal_517f68f64bb422d3deaeda39b7b18f479bd538a60b195366c7c046f42bfb6062->leave($__internal_517f68f64bb422d3deaeda39b7b18f479bd538a60b195366c7c046f42bfb6062_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
