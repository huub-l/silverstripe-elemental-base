<?php

namespace Huubl\ElementalBase\Models;

use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use DNADesign\Elemental\Models\BaseElement as ElementalBase;
use SilverStripe\Core\Config\ConfigLoader;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class BaseElement extends ElementalBase
{
    private static $description = 'Base element class';

    private static $table_name = 'ElementBase';

//    private static $db = [
//        'Variant' => 'Varchar(255)',
//        'Options' => 'Varchar(255)'
//    ];
//
//    public function getCMSFields()
//    {
//        $this->beforeUpdateCMSFields(function (FieldList $fields) {
//            $config = $this->owner->config()->get($this->ClassName);
//            $variants = $config["variants"] ?? [];
//            $variants_name = $config["variants_name"] ?? _t(__CLASS__.'.VARIANT', 'Variants');
//
//            if ($variants && count($variants) > 0) {
//                $variantDropdown = DropdownField::create('Variant', $variants_name, $variants);
//
//                $fields->addFieldToTab('Root.Main', $variantDropdown, "TitleAndDisplayed");
//
//                $variantDropdown->setEmptyString(_t(__CLASS__.'.CHOOSE_VARIANT', 'Choose variant'));
//            } else {
//                $fields->removeByName('Variant');
//            }
//
//            $options = $config["options"] ?? [];
//            $options_name = $config["options_name"] ?? _t(__CLASS__.'.VARIANT', 'Variants');
//
//            if ($options && count($options) > 0) {
//                $optionsField = CheckboxSetField::create('Options', $options_name, $options);
//
//                $fields->addFieldToTab('Root.Main', $optionsField, "TitleAndDisplayed");
//            } else {
//                $fields->removeByName('Options');
//            }
//
//
//        });
//
//        return parent::getCMSFields();
//    }
//
//    public function getVariantClasses() {
//        $classes = [];
//        if($this->Variant)
//            $classes[] = $this->Variant;
//        if($options = $this->Options) {
//            $options = json_decode(trim($options));
//            $classes = array_merge($classes, $options);
//        }
//        return implode(" ", $classes);
//    }
//
//    public function HasOption($option) {
//        if($options = $this->Options) {
//            return strstr($options, $option) !== false;
//        }
//    }



}
