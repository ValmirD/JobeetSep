<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_947a536cccd19149ef6cdc983b72e0acfe440c88be74d504bd58c0c995a749d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42fc7e175f91d02384abe505dc98ca7de20a0438bc3771b050727d6c6f5d72f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fc7e175f91d02384abe505dc98ca7de20a0438bc3771b050727d6c6f5d72f0->enter($__internal_42fc7e175f91d02384abe505dc98ca7de20a0438bc3771b050727d6c6f5d72f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig"));

        $__internal_fe671cc0822bf15152a078cf601ab7c2738839a970599028331b472c8afc78f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe671cc0822bf15152a078cf601ab7c2738839a970599028331b472c8afc78f9->enter($__internal_fe671cc0822bf15152a078cf601ab7c2738839a970599028331b472c8afc78f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        if ((array_key_exists("read_only", $context) && (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
            echo " readonly=\"readonly\"";
        }
        // line 15
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 17
        echo "    />

    <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 20
        if ((array_key_exists("read_only", $context) && (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
            echo " readonly=\"readonly\"";
        }
        // line 21
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 23
        echo "    >";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            if ((($context["idx"] . "") != "_labels")) {
                // line 25
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "_labels", array(), "array"), $context["idx"], array(), "array"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</select>

    <div id=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 30
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 32
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
                    echo "[]\"";
                    if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 35
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 37
        echo "</div>

    <script>
        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 50
        $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")) &&  !(isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")))) ? (" ") : (""));
        // line 51
        echo "placeholder: '";
        echo twig_escape_filter($this->env, (((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ((isset($context["allowClearPlaceholder"]) ? $context["allowClearPlaceholder"] : $this->getContext($context, "allowClearPlaceholder")))), "html", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 52
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 53
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 54
        echo ((((array_key_exists("read_only", $context) && (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "readonly", array())))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 56
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 62
        echo (((isset($context["dropdown_auto_width"]) ? $context["dropdown_auto_width"] : $this->getContext($context, "dropdown_auto_width"))) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 63
        echo twig_escape_filter($this->env, ((isset($context["container_css_class"]) ? $context["container_css_class"] : $this->getContext($context, "container_css_class")) . " form-control"), "html", null, true);
        echo "',
                dropdownCssClass: '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 66
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["quiet_millis"]) ? $context["quiet_millis"] : $this->getContext($context, "quiet_millis")), "html", null, true);
        echo ",
                    cache: ";
        // line 69
        echo (((isset($context["cache"]) ? $context["cache"] : $this->getContext($context, "cache"))) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 78
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 118
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 126
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 133
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 179
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 180
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 190
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 192
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 200
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 201
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 211
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 213
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 219
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 220
            echo "data =";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "[";
            }
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 222
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 223
                    echo "{id: '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["val"], "js"), "html", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "_labels", array(), "array"), $context["idx"], array(), "array"), "js"), "html", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 228
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_42fc7e175f91d02384abe505dc98ca7de20a0438bc3771b050727d6c6f5d72f0->leave($__internal_42fc7e175f91d02384abe505dc98ca7de20a0438bc3771b050727d6c6f5d72f0_prof);

        
        $__internal_fe671cc0822bf15152a078cf601ab7c2738839a970599028331b472c8afc78f9->leave($__internal_fe671cc0822bf15152a078cf601ab7c2738839a970599028331b472c8afc78f9_prof);

    }

    // line 78
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        $__internal_0c6f2fc1ffb918b77a48b4475b4cffce7b8661c66f2e7f509f464d7fa7824cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6f2fc1ffb918b77a48b4475b4cffce7b8661c66f2e7f509f464d7fa7824cb8->enter($__internal_0c6f2fc1ffb918b77a48b4475b4cffce7b8661c66f2e7f509f464d7fa7824cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        $__internal_2f78896d155b123ee38bfe7e13f83cc43407754db21e48d96d7ab9ab2af78f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f78896d155b123ee38bfe7e13f83cc43407754db21e48d96d7ab9ab2af78f03->enter($__internal_2f78896d155b123ee38bfe7e13f83cc43407754db21e48d96d7ab9ab2af78f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 79
        echo "                        return {
                                //search term
                                '";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "': term,

                                // page size
                                '";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "': page,

                                // admin
                                ";
        // line 90
        if ( !(null === $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()))) {
            // line 91
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
            echo "',
                                    'admin_code': '";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
            echo "',
                                ";
        } elseif (        // line 93
(isset($context["admin_code"]) ? $context["admin_code"] : $this->getContext($context, "admin_code"))) {
            // line 94
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, (isset($context["admin_code"]) ? $context["admin_code"] : $this->getContext($context, "admin_code")), "html", null, true);
            echo "',
                                ";
        }
        // line 96
        echo "
                                 // subclass
                                ";
        // line 98
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 99
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "html", null, true);
            echo "',
                                ";
        }
        // line 101
        echo "
                                ";
        // line 102
        if (((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "filter")) {
            // line 103
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), array("filter[" => "", "][value]" => "", "__" => ".")), "html", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 106
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "'
                                ";
        }
        // line 108
        echo "
                                // other parameters
                                ";
        // line 110
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 112
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "'";
                // line 113
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 116
        echo "                        };
                        ";
        
        $__internal_2f78896d155b123ee38bfe7e13f83cc43407754db21e48d96d7ab9ab2af78f03->leave($__internal_2f78896d155b123ee38bfe7e13f83cc43407754db21e48d96d7ab9ab2af78f03_prof);

        
        $__internal_0c6f2fc1ffb918b77a48b4475b4cffce7b8661c66f2e7f509f464d7fa7824cb8->leave($__internal_0c6f2fc1ffb918b77a48b4475b4cffce7b8661c66f2e7f509f464d7fa7824cb8_prof);

    }

    // line 126
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_b48e76506b9cf4b19eac1d4a29d217286b557a41856a340794a9abb22451255c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48e76506b9cf4b19eac1d4a29d217286b557a41856a340794a9abb22451255c->enter($__internal_b48e76506b9cf4b19eac1d4a29d217286b557a41856a340794a9abb22451255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        $__internal_2cd6c2ec59b5de143a0585554393de5476389bd2f63783babc7f4c1ec2bec32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd6c2ec59b5de143a0585554393de5476389bd2f63783babc7f4c1ec2bec32e->enter($__internal_2cd6c2ec59b5de143a0585554393de5476389bd2f63783babc7f4c1ec2bec32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        echo "'<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) ? $context["dropdown_item_css_class"] : $this->getContext($context, "dropdown_item_css_class")), "html", null, true);
        echo "\">'+item.label+'<\\/div>'";
        
        $__internal_2cd6c2ec59b5de143a0585554393de5476389bd2f63783babc7f4c1ec2bec32e->leave($__internal_2cd6c2ec59b5de143a0585554393de5476389bd2f63783babc7f4c1ec2bec32e_prof);

        
        $__internal_b48e76506b9cf4b19eac1d4a29d217286b557a41856a340794a9abb22451255c->leave($__internal_b48e76506b9cf4b19eac1d4a29d217286b557a41856a340794a9abb22451255c_prof);

    }

    // line 133
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_92df3034694014de17ad6f2fd5e85addfb643dfc7f22f381806b43384cbe00c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92df3034694014de17ad6f2fd5e85addfb643dfc7f22f381806b43384cbe00c8->enter($__internal_92df3034694014de17ad6f2fd5e85addfb643dfc7f22f381806b43384cbe00c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        $__internal_0d20e60700a85a78e85c8047998cbdd80e648cc750abcf5f68cea80f7017a1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d20e60700a85a78e85c8047998cbdd80e648cc750abcf5f68cea80f7017a1fe->enter($__internal_0d20e60700a85a78e85c8047998cbdd80e648cc750abcf5f68cea80f7017a1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        echo "item.label";
        
        $__internal_0d20e60700a85a78e85c8047998cbdd80e648cc750abcf5f68cea80f7017a1fe->leave($__internal_0d20e60700a85a78e85c8047998cbdd80e648cc750abcf5f68cea80f7017a1fe_prof);

        
        $__internal_92df3034694014de17ad6f2fd5e85addfb643dfc7f22f381806b43384cbe00c8->leave($__internal_92df3034694014de17ad6f2fd5e85addfb643dfc7f22f381806b43384cbe00c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 133,  557 => 126,  546 => 116,  529 => 113,  523 => 112,  506 => 111,  503 => 110,  499 => 108,  493 => 106,  486 => 103,  484 => 102,  481 => 101,  475 => 99,  473 => 98,  469 => 96,  463 => 94,  461 => 93,  457 => 92,  452 => 91,  450 => 90,  444 => 87,  436 => 84,  430 => 81,  426 => 79,  417 => 78,  392 => 228,  385 => 225,  371 => 223,  367 => 222,  356 => 221,  351 => 220,  349 => 219,  343 => 213,  338 => 211,  331 => 208,  322 => 201,  320 => 200,  310 => 192,  305 => 190,  300 => 187,  291 => 180,  289 => 179,  240 => 133,  230 => 126,  220 => 118,  218 => 78,  206 => 69,  202 => 68,  197 => 66,  192 => 64,  188 => 63,  184 => 62,  175 => 56,  171 => 55,  167 => 54,  163 => 53,  159 => 52,  154 => 51,  152 => 50,  142 => 44,  136 => 43,  128 => 37,  116 => 35,  100 => 32,  95 => 31,  93 => 30,  89 => 29,  85 => 27,  74 => 25,  69 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 17,  44 => 16,  40 => 15,  36 => 14,  33 => 13,  30 => 12,  28 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% spaceless %}

    <input type=\"text\" id=\"{{ id }}_autocomplete_input\" value=\"\"
        {%- if read_only is defined and read_only %} readonly=\"readonly\"{% endif -%}
        {%- if disabled %} disabled=\"disabled\"{% endif -%}
        {%- if required %} required=\"required\"{% endif %}
    />

    <select id=\"{{ id }}_autocomplete_input_v4\" data-sonata-select2=\"false\"
        {%- if read_only is defined and read_only %} readonly=\"readonly\"{% endif -%}
        {%- if disabled %} disabled=\"disabled\"{% endif -%}
        {%- if required %} required=\"required\"{% endif %}
    >
        {%- for idx, val  in value if idx~'' != '_labels' -%}
            <option value=\"{{ val }}\" selected>{{ value['_labels'][idx] }}</option>
        {%- endfor -%}
    </select>

    <div id=\"{{ id }}_hidden_inputs_wrap\">
        {% if multiple -%}
            {%- for idx, val in value if idx~'' != '_labels' -%}
                <input type=\"hidden\" name=\"{{ full_name }}[]\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ val }}\">
            {%- endfor -%}
        {% else -%}
            <input type=\"hidden\" name=\"{{ full_name }}\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ value[0]|default('') }}\">
        {% endif -%}
    </div>

    <script>
        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#{{ id }}_autocomplete_input' : '#{{ id }}_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#{{ id }}_autocomplete_input_v4' : '#{{ id }}_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {
                {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}
                placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly
                allowClear: {{ required ? 'false' : 'true' }},
                enable: {{ disabled ? 'false' : 'true' }},
                readonly: {{ read_only is defined and read_only or attr.readonly is defined and attr.readonly ? 'true' : 'false' }},
                minimumInputLength: {{ minimum_input_length }},
                multiple: {{ multiple ? 'true' : 'false' }},
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},
                containerCssClass: '{{ container_css_class ~ ' form-control' }}',
                dropdownCssClass: '{{ dropdown_css_class }}',
                ajax: {
                    url:  '{{ url ?: path(route.name, route.parameters|default([]))|e('js') }}',
                    dataType: 'json',
                    quietMillis: {{ quiet_millis }},
                    cache: {{ cache ? 'true' : 'false' }},
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        {% block sonata_type_model_autocomplete_ajax_request_parameters %}
                        return {
                                //search term
                                '{{ req_param_name_search }}': term,

                                // page size
                                '{{ req_param_name_items_per_page }}': {{ items_per_page }},

                                // page number
                                '{{ req_param_name_page_number }}': page,

                                // admin
                                {% if sonata_admin.admin is not null %}
                                    'uniqid': '{{ sonata_admin.admin.uniqid }}',
                                    'admin_code': '{{ sonata_admin.admin.code }}',
                                {% elseif admin_code %}
                                    'admin_code':  '{{ admin_code }}',
                                {% endif %}

                                 // subclass
                                {% if app.request.query.get('subclass') %}
                                    'subclass': '{{ app.request.query.get('subclass') }}',
                                {% endif %}

                                {% if context == 'filter' %}
                                    'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',
                                    '_context': 'filter'
                                {% else %}
                                    'field':  '{{ name }}'
                                {% endif %}

                                // other parameters
                                {% if req_params is not empty %},
                                    {%- for key, value in req_params -%}
                                        '{{- key|e('js') -}}': '{{- value|e('js') -}}'
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                {% endif %}
                        };
                        {% endblock %}
                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return {% block sonata_type_model_autocomplete_dropdown_item_format %}'<div class=\"{{ dropdown_item_css_class }}\">'+item.label+'<\\/div>'{% endblock %};// format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return {% block sonata_type_model_autocomplete_selection_format %}item.label{% endblock %};// format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    {% if multiple %}
                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val('');
                    {%- endif %}
                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    {% if multiple %}
                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+el.id+'\" />');
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);
                    {%- endif %}
                }
            });

            // Initialise the autocomplete
            var data = [];

            {%- if value is not empty -%}
                data = {%- if multiple -%}[ {%- endif -%}
                {%- for idx, val  in value if idx~'' != '_labels' -%}
                    {%- if not loop.first -%}, {% endif -%}
                    {id: '{{ val|e('js') }}', label:'{{ value['_labels'][idx]|e('js') }}'}
                {%- endfor -%}
                {%- if multiple -%} ] {%- endif -%};
            {% endif -%}

            // Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });
        });
    </script>
{% endspaceless %}
", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
