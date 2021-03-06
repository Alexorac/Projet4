<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f245ea59502db630f6a50e435208e547c6065e89e8ca4fec80679ffbe6b5063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f245ea59502db630f6a50e435208e547c6065e89e8ca4fec80679ffbe6b5063->enter($__internal_9f245ea59502db630f6a50e435208e547c6065e89e8ca4fec80679ffbe6b5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e56e0ad0775d5c8ec7f9d3358ca848c92c0cb46f2d4ba305ad259b8cbecf90c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56e0ad0775d5c8ec7f9d3358ca848c92c0cb46f2d4ba305ad259b8cbecf90c9->enter($__internal_e56e0ad0775d5c8ec7f9d3358ca848c92c0cb46f2d4ba305ad259b8cbecf90c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9f245ea59502db630f6a50e435208e547c6065e89e8ca4fec80679ffbe6b5063->leave($__internal_9f245ea59502db630f6a50e435208e547c6065e89e8ca4fec80679ffbe6b5063_prof);

        
        $__internal_e56e0ad0775d5c8ec7f9d3358ca848c92c0cb46f2d4ba305ad259b8cbecf90c9->leave($__internal_e56e0ad0775d5c8ec7f9d3358ca848c92c0cb46f2d4ba305ad259b8cbecf90c9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5f965c24e3f13317637ca62f6d1734b6e4c9dd16f83cc31075c544c9d2d3c177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f965c24e3f13317637ca62f6d1734b6e4c9dd16f83cc31075c544c9d2d3c177->enter($__internal_5f965c24e3f13317637ca62f6d1734b6e4c9dd16f83cc31075c544c9d2d3c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_23e20029475136b260f79b1f0e9429e1d8e19b83a1b7afa03519acba3e60f917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e20029475136b260f79b1f0e9429e1d8e19b83a1b7afa03519acba3e60f917->enter($__internal_23e20029475136b260f79b1f0e9429e1d8e19b83a1b7afa03519acba3e60f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_23e20029475136b260f79b1f0e9429e1d8e19b83a1b7afa03519acba3e60f917->leave($__internal_23e20029475136b260f79b1f0e9429e1d8e19b83a1b7afa03519acba3e60f917_prof);

        
        $__internal_5f965c24e3f13317637ca62f6d1734b6e4c9dd16f83cc31075c544c9d2d3c177->leave($__internal_5f965c24e3f13317637ca62f6d1734b6e4c9dd16f83cc31075c544c9d2d3c177_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b7c6b91ef6ea49ceba00546d69ce8093df6479cb4324512f741b771edebe2fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c6b91ef6ea49ceba00546d69ce8093df6479cb4324512f741b771edebe2fa7->enter($__internal_b7c6b91ef6ea49ceba00546d69ce8093df6479cb4324512f741b771edebe2fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5ec8fb0aebd5c85f4fbf5d65fab26f75d60edd887a366f0204a87f70387f1b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec8fb0aebd5c85f4fbf5d65fab26f75d60edd887a366f0204a87f70387f1b54->enter($__internal_5ec8fb0aebd5c85f4fbf5d65fab26f75d60edd887a366f0204a87f70387f1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5ec8fb0aebd5c85f4fbf5d65fab26f75d60edd887a366f0204a87f70387f1b54->leave($__internal_5ec8fb0aebd5c85f4fbf5d65fab26f75d60edd887a366f0204a87f70387f1b54_prof);

        
        $__internal_b7c6b91ef6ea49ceba00546d69ce8093df6479cb4324512f741b771edebe2fa7->leave($__internal_b7c6b91ef6ea49ceba00546d69ce8093df6479cb4324512f741b771edebe2fa7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_002bb1fc3c040fc11fed8c5ca1b51bd96c5ded9d9d053b750fb5c944bd29fffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002bb1fc3c040fc11fed8c5ca1b51bd96c5ded9d9d053b750fb5c944bd29fffa->enter($__internal_002bb1fc3c040fc11fed8c5ca1b51bd96c5ded9d9d053b750fb5c944bd29fffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5ce83840ebc4137ff729db6502e8dd7c93011311b4cb28c8d4c2a78aa1661daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce83840ebc4137ff729db6502e8dd7c93011311b4cb28c8d4c2a78aa1661daf->enter($__internal_5ce83840ebc4137ff729db6502e8dd7c93011311b4cb28c8d4c2a78aa1661daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5ce83840ebc4137ff729db6502e8dd7c93011311b4cb28c8d4c2a78aa1661daf->leave($__internal_5ce83840ebc4137ff729db6502e8dd7c93011311b4cb28c8d4c2a78aa1661daf_prof);

        
        $__internal_002bb1fc3c040fc11fed8c5ca1b51bd96c5ded9d9d053b750fb5c944bd29fffa->leave($__internal_002bb1fc3c040fc11fed8c5ca1b51bd96c5ded9d9d053b750fb5c944bd29fffa_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b8fd162b27cab31efaca44ba45a31f152bea76453333d6a338030cb8a84aacc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fd162b27cab31efaca44ba45a31f152bea76453333d6a338030cb8a84aacc7->enter($__internal_b8fd162b27cab31efaca44ba45a31f152bea76453333d6a338030cb8a84aacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_013ac342e9b74921dde85cb06504131df23708069ae7f8b02bf46ed1b1aebaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013ac342e9b74921dde85cb06504131df23708069ae7f8b02bf46ed1b1aebaaf->enter($__internal_013ac342e9b74921dde85cb06504131df23708069ae7f8b02bf46ed1b1aebaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_7f32e5cfac0b6131aacfc57556f92b9707be9aad0e891b33311cda5ea3990625 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_72329de3fb48ab5da167b88045849bc25dedbc2874e62622dd8f404fb4ed3365 = "{{") && ('' === $__internal_72329de3fb48ab5da167b88045849bc25dedbc2874e62622dd8f404fb4ed3365 || 0 === strpos($__internal_7f32e5cfac0b6131aacfc57556f92b9707be9aad0e891b33311cda5ea3990625, $__internal_72329de3fb48ab5da167b88045849bc25dedbc2874e62622dd8f404fb4ed3365)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_013ac342e9b74921dde85cb06504131df23708069ae7f8b02bf46ed1b1aebaaf->leave($__internal_013ac342e9b74921dde85cb06504131df23708069ae7f8b02bf46ed1b1aebaaf_prof);

        
        $__internal_b8fd162b27cab31efaca44ba45a31f152bea76453333d6a338030cb8a84aacc7->leave($__internal_b8fd162b27cab31efaca44ba45a31f152bea76453333d6a338030cb8a84aacc7_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f517f48bed09802c88661dc9b04c5b8efff945a40d6c2c13db9fd1d6241e692b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f517f48bed09802c88661dc9b04c5b8efff945a40d6c2c13db9fd1d6241e692b->enter($__internal_f517f48bed09802c88661dc9b04c5b8efff945a40d6c2c13db9fd1d6241e692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0f25991fa1b2788d316a228b9dddcd8498bfc856ca954e90e87d04726c470211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f25991fa1b2788d316a228b9dddcd8498bfc856ca954e90e87d04726c470211->enter($__internal_0f25991fa1b2788d316a228b9dddcd8498bfc856ca954e90e87d04726c470211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0f25991fa1b2788d316a228b9dddcd8498bfc856ca954e90e87d04726c470211->leave($__internal_0f25991fa1b2788d316a228b9dddcd8498bfc856ca954e90e87d04726c470211_prof);

        
        $__internal_f517f48bed09802c88661dc9b04c5b8efff945a40d6c2c13db9fd1d6241e692b->leave($__internal_f517f48bed09802c88661dc9b04c5b8efff945a40d6c2c13db9fd1d6241e692b_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4d64cec14fb7b0a9fed85b0192b3b3bb6a057399116ce9b880c15a1464fea7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d64cec14fb7b0a9fed85b0192b3b3bb6a057399116ce9b880c15a1464fea7c6->enter($__internal_4d64cec14fb7b0a9fed85b0192b3b3bb6a057399116ce9b880c15a1464fea7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ae28638c105ba3e0818f66f29d121491345b5a50290a24654a03a1b1c62c7d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae28638c105ba3e0818f66f29d121491345b5a50290a24654a03a1b1c62c7d8e->enter($__internal_ae28638c105ba3e0818f66f29d121491345b5a50290a24654a03a1b1c62c7d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_ae28638c105ba3e0818f66f29d121491345b5a50290a24654a03a1b1c62c7d8e->leave($__internal_ae28638c105ba3e0818f66f29d121491345b5a50290a24654a03a1b1c62c7d8e_prof);

        
        $__internal_4d64cec14fb7b0a9fed85b0192b3b3bb6a057399116ce9b880c15a1464fea7c6->leave($__internal_4d64cec14fb7b0a9fed85b0192b3b3bb6a057399116ce9b880c15a1464fea7c6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_449d6e8723a16b5cc7ab75abfc3948c8344f7d22f1fcfa3efc614400e3a245fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449d6e8723a16b5cc7ab75abfc3948c8344f7d22f1fcfa3efc614400e3a245fd->enter($__internal_449d6e8723a16b5cc7ab75abfc3948c8344f7d22f1fcfa3efc614400e3a245fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3b545001fe7d4a256f10d32631048fbc506f432aac4e7cae5e45d6b742a9e158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b545001fe7d4a256f10d32631048fbc506f432aac4e7cae5e45d6b742a9e158->enter($__internal_3b545001fe7d4a256f10d32631048fbc506f432aac4e7cae5e45d6b742a9e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_3b545001fe7d4a256f10d32631048fbc506f432aac4e7cae5e45d6b742a9e158->leave($__internal_3b545001fe7d4a256f10d32631048fbc506f432aac4e7cae5e45d6b742a9e158_prof);

        
        $__internal_449d6e8723a16b5cc7ab75abfc3948c8344f7d22f1fcfa3efc614400e3a245fd->leave($__internal_449d6e8723a16b5cc7ab75abfc3948c8344f7d22f1fcfa3efc614400e3a245fd_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d214bfcac05db0121677c3b41e4d502a986d1acd96b8bbd62eee3efe897b9822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d214bfcac05db0121677c3b41e4d502a986d1acd96b8bbd62eee3efe897b9822->enter($__internal_d214bfcac05db0121677c3b41e4d502a986d1acd96b8bbd62eee3efe897b9822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7e5bd6bd62c8a2495d50f4590d0ff8634f0e5cb799de2049b58b25dfda15060a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5bd6bd62c8a2495d50f4590d0ff8634f0e5cb799de2049b58b25dfda15060a->enter($__internal_7e5bd6bd62c8a2495d50f4590d0ff8634f0e5cb799de2049b58b25dfda15060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_7e5bd6bd62c8a2495d50f4590d0ff8634f0e5cb799de2049b58b25dfda15060a->leave($__internal_7e5bd6bd62c8a2495d50f4590d0ff8634f0e5cb799de2049b58b25dfda15060a_prof);

        
        $__internal_d214bfcac05db0121677c3b41e4d502a986d1acd96b8bbd62eee3efe897b9822->leave($__internal_d214bfcac05db0121677c3b41e4d502a986d1acd96b8bbd62eee3efe897b9822_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ac7bb0cfff43cc241c438f576f8d92d04adc69376862f49a212f90ca03f1b611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7bb0cfff43cc241c438f576f8d92d04adc69376862f49a212f90ca03f1b611->enter($__internal_ac7bb0cfff43cc241c438f576f8d92d04adc69376862f49a212f90ca03f1b611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4f39f32961021821a2e5129531caa4d09ad8ef025b22d42bc2a4bdf227784496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f39f32961021821a2e5129531caa4d09ad8ef025b22d42bc2a4bdf227784496->enter($__internal_4f39f32961021821a2e5129531caa4d09ad8ef025b22d42bc2a4bdf227784496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_4f39f32961021821a2e5129531caa4d09ad8ef025b22d42bc2a4bdf227784496->leave($__internal_4f39f32961021821a2e5129531caa4d09ad8ef025b22d42bc2a4bdf227784496_prof);

        
        $__internal_ac7bb0cfff43cc241c438f576f8d92d04adc69376862f49a212f90ca03f1b611->leave($__internal_ac7bb0cfff43cc241c438f576f8d92d04adc69376862f49a212f90ca03f1b611_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d5aa1e13da4d4b3b1991bbd3317d6089d8f7dc0d5b5c1be60a873a720234e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5aa1e13da4d4b3b1991bbd3317d6089d8f7dc0d5b5c1be60a873a720234e39->enter($__internal_5d5aa1e13da4d4b3b1991bbd3317d6089d8f7dc0d5b5c1be60a873a720234e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7d5622c9f2e34bc744015e414af8ec63d58d187a5004b2eb7289d993333b4a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5622c9f2e34bc744015e414af8ec63d58d187a5004b2eb7289d993333b4a4a->enter($__internal_7d5622c9f2e34bc744015e414af8ec63d58d187a5004b2eb7289d993333b4a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_7d5622c9f2e34bc744015e414af8ec63d58d187a5004b2eb7289d993333b4a4a->leave($__internal_7d5622c9f2e34bc744015e414af8ec63d58d187a5004b2eb7289d993333b4a4a_prof);

        
        $__internal_5d5aa1e13da4d4b3b1991bbd3317d6089d8f7dc0d5b5c1be60a873a720234e39->leave($__internal_5d5aa1e13da4d4b3b1991bbd3317d6089d8f7dc0d5b5c1be60a873a720234e39_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a9ef0b7009fbae5f683811a781747a0de4c5ef49f9d4d9495d5b023e8242108b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ef0b7009fbae5f683811a781747a0de4c5ef49f9d4d9495d5b023e8242108b->enter($__internal_a9ef0b7009fbae5f683811a781747a0de4c5ef49f9d4d9495d5b023e8242108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_430dc5f3994c584bf96d78b59698cfcf90bf8181750a31f2eb19a59382c0add4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430dc5f3994c584bf96d78b59698cfcf90bf8181750a31f2eb19a59382c0add4->enter($__internal_430dc5f3994c584bf96d78b59698cfcf90bf8181750a31f2eb19a59382c0add4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_430dc5f3994c584bf96d78b59698cfcf90bf8181750a31f2eb19a59382c0add4->leave($__internal_430dc5f3994c584bf96d78b59698cfcf90bf8181750a31f2eb19a59382c0add4_prof);

        
        $__internal_a9ef0b7009fbae5f683811a781747a0de4c5ef49f9d4d9495d5b023e8242108b->leave($__internal_a9ef0b7009fbae5f683811a781747a0de4c5ef49f9d4d9495d5b023e8242108b_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ea66e7626230f45da68c78cfa829f50c2e776282ecc2c01c4214f4bfa246973a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea66e7626230f45da68c78cfa829f50c2e776282ecc2c01c4214f4bfa246973a->enter($__internal_ea66e7626230f45da68c78cfa829f50c2e776282ecc2c01c4214f4bfa246973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6b7030643ff10ce20e37bb981abf9141978cf2da0806a656e37ba595da865257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7030643ff10ce20e37bb981abf9141978cf2da0806a656e37ba595da865257->enter($__internal_6b7030643ff10ce20e37bb981abf9141978cf2da0806a656e37ba595da865257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_6b7030643ff10ce20e37bb981abf9141978cf2da0806a656e37ba595da865257->leave($__internal_6b7030643ff10ce20e37bb981abf9141978cf2da0806a656e37ba595da865257_prof);

        
        $__internal_ea66e7626230f45da68c78cfa829f50c2e776282ecc2c01c4214f4bfa246973a->leave($__internal_ea66e7626230f45da68c78cfa829f50c2e776282ecc2c01c4214f4bfa246973a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_77d571e9b0de1f1bfb1d9efe03baa8c6987bf696bb250b89478e5e9d04d7b759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d571e9b0de1f1bfb1d9efe03baa8c6987bf696bb250b89478e5e9d04d7b759->enter($__internal_77d571e9b0de1f1bfb1d9efe03baa8c6987bf696bb250b89478e5e9d04d7b759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8b904ece4ad3e6ab667b0719151ac069506f1b7fd587a5ab226b8b2c6694fc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b904ece4ad3e6ab667b0719151ac069506f1b7fd587a5ab226b8b2c6694fc36->enter($__internal_8b904ece4ad3e6ab667b0719151ac069506f1b7fd587a5ab226b8b2c6694fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_8b904ece4ad3e6ab667b0719151ac069506f1b7fd587a5ab226b8b2c6694fc36->leave($__internal_8b904ece4ad3e6ab667b0719151ac069506f1b7fd587a5ab226b8b2c6694fc36_prof);

        
        $__internal_77d571e9b0de1f1bfb1d9efe03baa8c6987bf696bb250b89478e5e9d04d7b759->leave($__internal_77d571e9b0de1f1bfb1d9efe03baa8c6987bf696bb250b89478e5e9d04d7b759_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e7ae7894460464bfe61957e9e6b32d077a702ade96af8e42d3581886d4b76125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ae7894460464bfe61957e9e6b32d077a702ade96af8e42d3581886d4b76125->enter($__internal_e7ae7894460464bfe61957e9e6b32d077a702ade96af8e42d3581886d4b76125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dbfadd577085b83cce3cd74af0aacc7cfdd39fe73ba3e70817e8840e9800e101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfadd577085b83cce3cd74af0aacc7cfdd39fe73ba3e70817e8840e9800e101->enter($__internal_dbfadd577085b83cce3cd74af0aacc7cfdd39fe73ba3e70817e8840e9800e101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dbfadd577085b83cce3cd74af0aacc7cfdd39fe73ba3e70817e8840e9800e101->leave($__internal_dbfadd577085b83cce3cd74af0aacc7cfdd39fe73ba3e70817e8840e9800e101_prof);

        
        $__internal_e7ae7894460464bfe61957e9e6b32d077a702ade96af8e42d3581886d4b76125->leave($__internal_e7ae7894460464bfe61957e9e6b32d077a702ade96af8e42d3581886d4b76125_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cf1f197583c0d260f8062bc5887b140c4f2710d79bdedfad26fbf216dc55bf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1f197583c0d260f8062bc5887b140c4f2710d79bdedfad26fbf216dc55bf89->enter($__internal_cf1f197583c0d260f8062bc5887b140c4f2710d79bdedfad26fbf216dc55bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9ba32e2720ddf6b504b7f34c672937c0d35fc93fc361938d9e3f9d60ae25ef74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba32e2720ddf6b504b7f34c672937c0d35fc93fc361938d9e3f9d60ae25ef74->enter($__internal_9ba32e2720ddf6b504b7f34c672937c0d35fc93fc361938d9e3f9d60ae25ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9ba32e2720ddf6b504b7f34c672937c0d35fc93fc361938d9e3f9d60ae25ef74->leave($__internal_9ba32e2720ddf6b504b7f34c672937c0d35fc93fc361938d9e3f9d60ae25ef74_prof);

        
        $__internal_cf1f197583c0d260f8062bc5887b140c4f2710d79bdedfad26fbf216dc55bf89->leave($__internal_cf1f197583c0d260f8062bc5887b140c4f2710d79bdedfad26fbf216dc55bf89_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_42255a142f2dfc1534a1cf5e2c8eda8859a3465309e3db100d0cc79ab12652f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42255a142f2dfc1534a1cf5e2c8eda8859a3465309e3db100d0cc79ab12652f9->enter($__internal_42255a142f2dfc1534a1cf5e2c8eda8859a3465309e3db100d0cc79ab12652f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cfdf9c5aa56d346368cf8393d61b80e1c1613ca3f0fbd33133442e9c2d28316d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdf9c5aa56d346368cf8393d61b80e1c1613ca3f0fbd33133442e9c2d28316d->enter($__internal_cfdf9c5aa56d346368cf8393d61b80e1c1613ca3f0fbd33133442e9c2d28316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cfdf9c5aa56d346368cf8393d61b80e1c1613ca3f0fbd33133442e9c2d28316d->leave($__internal_cfdf9c5aa56d346368cf8393d61b80e1c1613ca3f0fbd33133442e9c2d28316d_prof);

        
        $__internal_42255a142f2dfc1534a1cf5e2c8eda8859a3465309e3db100d0cc79ab12652f9->leave($__internal_42255a142f2dfc1534a1cf5e2c8eda8859a3465309e3db100d0cc79ab12652f9_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7f06e9d116dfba506b3ed40d5dea9f2bfc997c20cb8228e0837a99f6f74eaf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f06e9d116dfba506b3ed40d5dea9f2bfc997c20cb8228e0837a99f6f74eaf70->enter($__internal_7f06e9d116dfba506b3ed40d5dea9f2bfc997c20cb8228e0837a99f6f74eaf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_0a53805fbd9c32512b90383fc3627355ab4952e48e7e00eee016dd783f3fbaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a53805fbd9c32512b90383fc3627355ab4952e48e7e00eee016dd783f3fbaa9->enter($__internal_0a53805fbd9c32512b90383fc3627355ab4952e48e7e00eee016dd783f3fbaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0a53805fbd9c32512b90383fc3627355ab4952e48e7e00eee016dd783f3fbaa9->leave($__internal_0a53805fbd9c32512b90383fc3627355ab4952e48e7e00eee016dd783f3fbaa9_prof);

        
        $__internal_7f06e9d116dfba506b3ed40d5dea9f2bfc997c20cb8228e0837a99f6f74eaf70->leave($__internal_7f06e9d116dfba506b3ed40d5dea9f2bfc997c20cb8228e0837a99f6f74eaf70_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3701b10acdb2a7b52a18189b8e1396f8c079a7d6ce977a10a98481f372c5b8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3701b10acdb2a7b52a18189b8e1396f8c079a7d6ce977a10a98481f372c5b8e1->enter($__internal_3701b10acdb2a7b52a18189b8e1396f8c079a7d6ce977a10a98481f372c5b8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ca927cc27985a5835e898c2446bfa56466cf006bb2e864b80c3c454ce4fe1536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca927cc27985a5835e898c2446bfa56466cf006bb2e864b80c3c454ce4fe1536->enter($__internal_ca927cc27985a5835e898c2446bfa56466cf006bb2e864b80c3c454ce4fe1536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_ca927cc27985a5835e898c2446bfa56466cf006bb2e864b80c3c454ce4fe1536->leave($__internal_ca927cc27985a5835e898c2446bfa56466cf006bb2e864b80c3c454ce4fe1536_prof);

        
        $__internal_3701b10acdb2a7b52a18189b8e1396f8c079a7d6ce977a10a98481f372c5b8e1->leave($__internal_3701b10acdb2a7b52a18189b8e1396f8c079a7d6ce977a10a98481f372c5b8e1_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1686ca1fa5d267bb1fb700997ac565ee2ba53cf4d7cbcda119251b8e0631f312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1686ca1fa5d267bb1fb700997ac565ee2ba53cf4d7cbcda119251b8e0631f312->enter($__internal_1686ca1fa5d267bb1fb700997ac565ee2ba53cf4d7cbcda119251b8e0631f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e12fefa9dea6f6407b48ff7cc121174d24565752043b71470c3b15097affd4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12fefa9dea6f6407b48ff7cc121174d24565752043b71470c3b15097affd4cc->enter($__internal_e12fefa9dea6f6407b48ff7cc121174d24565752043b71470c3b15097affd4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_e12fefa9dea6f6407b48ff7cc121174d24565752043b71470c3b15097affd4cc->leave($__internal_e12fefa9dea6f6407b48ff7cc121174d24565752043b71470c3b15097affd4cc_prof);

        
        $__internal_1686ca1fa5d267bb1fb700997ac565ee2ba53cf4d7cbcda119251b8e0631f312->leave($__internal_1686ca1fa5d267bb1fb700997ac565ee2ba53cf4d7cbcda119251b8e0631f312_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5923d4998692549bec8087bed60f363dc9a1d398faf9f045863cb23f78be8bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5923d4998692549bec8087bed60f363dc9a1d398faf9f045863cb23f78be8bc2->enter($__internal_5923d4998692549bec8087bed60f363dc9a1d398faf9f045863cb23f78be8bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_25c5226caca8ab8347955de77e2b7f821dfa2406b763139d6baeb0f81af498a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c5226caca8ab8347955de77e2b7f821dfa2406b763139d6baeb0f81af498a8->enter($__internal_25c5226caca8ab8347955de77e2b7f821dfa2406b763139d6baeb0f81af498a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_25c5226caca8ab8347955de77e2b7f821dfa2406b763139d6baeb0f81af498a8->leave($__internal_25c5226caca8ab8347955de77e2b7f821dfa2406b763139d6baeb0f81af498a8_prof);

        
        $__internal_5923d4998692549bec8087bed60f363dc9a1d398faf9f045863cb23f78be8bc2->leave($__internal_5923d4998692549bec8087bed60f363dc9a1d398faf9f045863cb23f78be8bc2_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_bde591c52dcb3279d872a8e0897dcdd24a49fb10d28696656c210664d5445a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde591c52dcb3279d872a8e0897dcdd24a49fb10d28696656c210664d5445a2a->enter($__internal_bde591c52dcb3279d872a8e0897dcdd24a49fb10d28696656c210664d5445a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ceba13940fe98b5dc8fd78d8134dd749434d47b42a994a3acf15153dca69f1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceba13940fe98b5dc8fd78d8134dd749434d47b42a994a3acf15153dca69f1d0->enter($__internal_ceba13940fe98b5dc8fd78d8134dd749434d47b42a994a3acf15153dca69f1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ceba13940fe98b5dc8fd78d8134dd749434d47b42a994a3acf15153dca69f1d0->leave($__internal_ceba13940fe98b5dc8fd78d8134dd749434d47b42a994a3acf15153dca69f1d0_prof);

        
        $__internal_bde591c52dcb3279d872a8e0897dcdd24a49fb10d28696656c210664d5445a2a->leave($__internal_bde591c52dcb3279d872a8e0897dcdd24a49fb10d28696656c210664d5445a2a_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6e052b584f3c67e335f6518150c69c8f4a108516d717cd90dc6f36495632b16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e052b584f3c67e335f6518150c69c8f4a108516d717cd90dc6f36495632b16b->enter($__internal_6e052b584f3c67e335f6518150c69c8f4a108516d717cd90dc6f36495632b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_70c032bde4b518de251f52b7b9f6d3c32dc0d526a37c616c1995ef7a56fb7d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c032bde4b518de251f52b7b9f6d3c32dc0d526a37c616c1995ef7a56fb7d7c->enter($__internal_70c032bde4b518de251f52b7b9f6d3c32dc0d526a37c616c1995ef7a56fb7d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_70c032bde4b518de251f52b7b9f6d3c32dc0d526a37c616c1995ef7a56fb7d7c->leave($__internal_70c032bde4b518de251f52b7b9f6d3c32dc0d526a37c616c1995ef7a56fb7d7c_prof);

        
        $__internal_6e052b584f3c67e335f6518150c69c8f4a108516d717cd90dc6f36495632b16b->leave($__internal_6e052b584f3c67e335f6518150c69c8f4a108516d717cd90dc6f36495632b16b_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bb67b066ba7d9e52b87a009ba0750da31ac4331c3d196705498ecc5c63dc0473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb67b066ba7d9e52b87a009ba0750da31ac4331c3d196705498ecc5c63dc0473->enter($__internal_bb67b066ba7d9e52b87a009ba0750da31ac4331c3d196705498ecc5c63dc0473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0e77644a5375d6c379afbdf74aa5eda6afd7092d14ad72f00d9ded8d41b0fdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e77644a5375d6c379afbdf74aa5eda6afd7092d14ad72f00d9ded8d41b0fdbe->enter($__internal_0e77644a5375d6c379afbdf74aa5eda6afd7092d14ad72f00d9ded8d41b0fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0e77644a5375d6c379afbdf74aa5eda6afd7092d14ad72f00d9ded8d41b0fdbe->leave($__internal_0e77644a5375d6c379afbdf74aa5eda6afd7092d14ad72f00d9ded8d41b0fdbe_prof);

        
        $__internal_bb67b066ba7d9e52b87a009ba0750da31ac4331c3d196705498ecc5c63dc0473->leave($__internal_bb67b066ba7d9e52b87a009ba0750da31ac4331c3d196705498ecc5c63dc0473_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_edee71d98b12d272114b977d2ab67ba893734be3c3c09b2e2d039e78f37f4ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edee71d98b12d272114b977d2ab67ba893734be3c3c09b2e2d039e78f37f4ac8->enter($__internal_edee71d98b12d272114b977d2ab67ba893734be3c3c09b2e2d039e78f37f4ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8dc493a94d10c7f104e5312f2dad93f1b2e1551d35f331ae03210ff10bdcbdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc493a94d10c7f104e5312f2dad93f1b2e1551d35f331ae03210ff10bdcbdd2->enter($__internal_8dc493a94d10c7f104e5312f2dad93f1b2e1551d35f331ae03210ff10bdcbdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8dc493a94d10c7f104e5312f2dad93f1b2e1551d35f331ae03210ff10bdcbdd2->leave($__internal_8dc493a94d10c7f104e5312f2dad93f1b2e1551d35f331ae03210ff10bdcbdd2_prof);

        
        $__internal_edee71d98b12d272114b977d2ab67ba893734be3c3c09b2e2d039e78f37f4ac8->leave($__internal_edee71d98b12d272114b977d2ab67ba893734be3c3c09b2e2d039e78f37f4ac8_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_00e35c015428b6b2abd3a5a918e166c70c371de639019357bd008860b8e7a6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e35c015428b6b2abd3a5a918e166c70c371de639019357bd008860b8e7a6d9->enter($__internal_00e35c015428b6b2abd3a5a918e166c70c371de639019357bd008860b8e7a6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f23a5c11890151e315a3e0840e754a5c39004e66a6d1262b281560af6f3d7a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23a5c11890151e315a3e0840e754a5c39004e66a6d1262b281560af6f3d7a4e->enter($__internal_f23a5c11890151e315a3e0840e754a5c39004e66a6d1262b281560af6f3d7a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_f23a5c11890151e315a3e0840e754a5c39004e66a6d1262b281560af6f3d7a4e->leave($__internal_f23a5c11890151e315a3e0840e754a5c39004e66a6d1262b281560af6f3d7a4e_prof);

        
        $__internal_00e35c015428b6b2abd3a5a918e166c70c371de639019357bd008860b8e7a6d9->leave($__internal_00e35c015428b6b2abd3a5a918e166c70c371de639019357bd008860b8e7a6d9_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_506c0e92ab944e9a6d80f10d17150b93decb9985e8325fb1b7b8af31924a5d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506c0e92ab944e9a6d80f10d17150b93decb9985e8325fb1b7b8af31924a5d3c->enter($__internal_506c0e92ab944e9a6d80f10d17150b93decb9985e8325fb1b7b8af31924a5d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d4636106ae45bab534972b9b3ce1389caac383820a01b6fe439b1b2ebca14f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4636106ae45bab534972b9b3ce1389caac383820a01b6fe439b1b2ebca14f32->enter($__internal_d4636106ae45bab534972b9b3ce1389caac383820a01b6fe439b1b2ebca14f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_d4636106ae45bab534972b9b3ce1389caac383820a01b6fe439b1b2ebca14f32->leave($__internal_d4636106ae45bab534972b9b3ce1389caac383820a01b6fe439b1b2ebca14f32_prof);

        
        $__internal_506c0e92ab944e9a6d80f10d17150b93decb9985e8325fb1b7b8af31924a5d3c->leave($__internal_506c0e92ab944e9a6d80f10d17150b93decb9985e8325fb1b7b8af31924a5d3c_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_68c59ca2916e7571091c9938abc6f1ead58b6659a66ca4053e812dfa1582d9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c59ca2916e7571091c9938abc6f1ead58b6659a66ca4053e812dfa1582d9be->enter($__internal_68c59ca2916e7571091c9938abc6f1ead58b6659a66ca4053e812dfa1582d9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_76f99dd90e73a917dec14d544f1ea734e83d1281cca52854dbfec4bb3d11c4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f99dd90e73a917dec14d544f1ea734e83d1281cca52854dbfec4bb3d11c4fc->enter($__internal_76f99dd90e73a917dec14d544f1ea734e83d1281cca52854dbfec4bb3d11c4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_76f99dd90e73a917dec14d544f1ea734e83d1281cca52854dbfec4bb3d11c4fc->leave($__internal_76f99dd90e73a917dec14d544f1ea734e83d1281cca52854dbfec4bb3d11c4fc_prof);

        
        $__internal_68c59ca2916e7571091c9938abc6f1ead58b6659a66ca4053e812dfa1582d9be->leave($__internal_68c59ca2916e7571091c9938abc6f1ead58b6659a66ca4053e812dfa1582d9be_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
