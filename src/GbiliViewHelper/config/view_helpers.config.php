<?php
namespace GbiliViewHelper;
return array(
    'invokables' => array(
        'elementsFlatArray' => __NAMESPACE__ . '\View\Helper\FieldsetElementFlattener',
        'since'             => __NAMESPACE__ . '\View\Helper\Since',
        'renderTree'        => __NAMESPACE__ . '\View\Helper\NestedTreeBuilder',
        'nlToBr'            => __NAMESPACE__ . '\View\Helper\NlToBr',
        'paginator'         => __NAMESPACE__ . '\View\Helper\Paginator',
        'message'           => __NAMESPACE__ . '\View\Helper\Message',
        'notify'            => __NAMESPACE__ . '\View\Helper\Notify',
        'highlight'         => __NAMESPACE__ . '\View\Helper\TermsHighlighter',
        'cssClass'          => __NAMESPACE__ . '\View\Helper\CategoryCssClass',
        'renderElement'     => __NAMESPACE__ . '\View\Helper\FormElement',
        'renderForm'        => __NAMESPACE__ . '\View\Helper\Form',
        'formActionPrepare' => __NAMESPACE__ . '\View\Helper\FormActionPrepare',
        'numberInLetters'   => __NAMESPACE__ . '\View\Helper\NumberToString',
        'renderNavigation'  => __NAMESPACE__ . '\View\Helper\RenderNavigation',
        'simpleMessage'     => __NAMESPACE__ . '\View\Helper\SimpleMessage',
        'string'            => __NAMESPACE__ . '\View\Helper\ExpressivePregTransform',
        'bulkForm'          => __NAMESPACE__ . '\View\Helper\BulkForm',
        'formElementStaticValueOptions' => __NAMESPACE__ . '\View\Helper\FormElementStaticValueOptions',
        'wrapInPopup'       => __NAMESPACE__ . '\View\Helper\PopupWrapper',
    ),

    'factories' => array(
        'scriptalicious'    => function ($viewHelperPluginManager) {
            $sm = $viewHelperPluginManager->getServiceLocator();
            $scriptalicious = $sm->get('Scriptalicious');
            $helper = new View\Helper\Scriptalicious($scriptalicious);
            return $helper;
        },
        'conditionalNavigation' => function ($viewHelperPluginManager) {
            $sm = $viewHelperPluginManager->getServiceLocator();
            $navHelper = new View\Helper\ConditionalNavigation;
            $navHelper->setServiceLocator($sm);
            return $navHelper;
        },
    ),
);
