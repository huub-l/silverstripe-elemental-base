<?php

namespace Huubl\ElementalBase\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use Heyday\ColorPalette\Fields\ColorPaletteField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\ORM\DataObject;

class BaseElementExt extends DataExtension {
    
    private static $controller_template = 'ElementHolder';

    private static $db = [
        'TitleSize' => 'Enum("h1, h2, h3, h4, h5, h6", "h2")',
        'TitleAlign' => 'Enum("left, center, right", "left")',
        'BackgroundColour' => 'Text',
        'EnableBackgroundColour' => 'Boolean',
        'BackgroundPosition' => 'Enum("left top,left center,left bottom,right top,right center,right bottom,center top,center center,center bottom","left top")',
        'BackgroundParalax'=>'Boolean',
        'BackgroundRepeat'=>'Boolean',
        'MarginTop' => 'Boolean',
        'MarginBottom' => 'Boolean',
        'AddBorderBottom' => 'Boolean',
        'BorderBottomColour' => 'Text',
        'BorderBottomStyle' => 'Enum("--,thema","--")',
        'RemoveBottomPadding' => 'Boolean',
        'RemoveTopPadding' => 'Boolean',
        'AOSEffect' => 'Enum("---,fade-up","---")',
        'Mascotte' => 'Enum("---,sem-lente-sem,sem-lente-lente,fonzy-leaning-paddle,fonzy-walking,fonzy-waves,fonzy-swim-fins-waves,fonzy-swim-fins-walking,fonzy-sporting,fonzy-guitar,fonzy-exited,fonzy-chef,fonzy-pyjamas","---")',
        'MascottePosition' => 'Enum("mascotte-right mascotte-bottom,mascotte-right mascotte-top,mascotte-left mascotte-bottom,mascotte-left mascotte-top","mascotte-right mascotte-bottom")'
    ];

    private static $has_one = [
        'BackgroundImage' => Image::class
    ];

    private static $owns = [
        'BackgroundImage'
    ];

    public function grid($col)
    {
        return ($this->owner->config()->get('grid')) * ($col / 12);
    }

    public function padding()
    {
        return $this->owner->config()->get('padding');
    }

    public function test()
    {
//        $fields = BackgroundColour::get();

        $colors = $this->owner->config()->get('colors');
        $colorsClass = array();
        foreach ($colors as $key => $value) array_push($colorsClass, $key);

//        $players = parent::getCMSFields();


//      return print_r($players);
    }


    public function updateCMSFields(FieldList $fields) {


        $colors = $this->owner->config()->get('colors');

        $colors = $this->owner->config()->get('colors');
        $colorsClass = array();
        foreach ($colors as $key => $value) array_push($colorsClass, $key);


        $fields->removeByName('AOSEffect');
        $fields->removeByName('MarginTop');
        $fields->removeByName('MarginBottom');
        $fields->removeByName('RemoveTopPadding');
        $fields->removeByName('RemoveBottomPadding');
        $fields->removeByName('ExtraClass');
        $fields->removeByName('EnableBackgroundColour');
        $fields->removeByName('BackgroundColour');
        $fields->removeByName('BackgroundImage');
        $fields->removeByName('BackgroundPosition');
        $fields->removeByName('BackgroundRepeat');
        $fields->removeByName('BackgroundParalax');
        $fields->removeByName('AddBorderBottom');
        $fields->removeByName('BorderBottomColour');
        $fields->removeByName('BorderBottomStyle');
        $fields->removeByName('Mascotte');
        $fields->removeByName('MascottePosition');



        $fields->addFieldsToTab('Root.Settings', array(
            TabSet::create('SettingsTabs',
                Tab::create('CssClass',
                    TextField::create('ExtraClass','Custom CSS classes')
                ),
//                Tab::create('MarginPadding',
//                    CheckboxField::create('MarginTop', 'Add margin to the top of this element?'),
//                    CheckboxField::create('MarginBottom', 'Add margin to the bottom of this element?'),
//                    CheckboxField::create('RemoveTopPadding', 'Remove top padding?'),
//                    CheckboxField::create('RemoveBottomPadding', 'Remove bottom padding?')
//                ),
                Tab::create('AOS',
                    DropdownField::create('AOSEffect', 'AOS Effect', $this->owner->dbObject('AOSEffect')->enumValues(),'---')
                ),
                Tab::create('BackgroundColor',
                    CheckboxField::create('EnableBackgroundColour','Enable Background Colour?'  ),
                    ColorPaletteField::create(
                        'BackgroundColour',
                        'Background Colour',
                        $colors

                    )
                ),
                Tab::create('BackgroundImage',
                    UploadField::create('BackgroundImage','Background Image'),
                    DropdownField::create('BackgroundPosition', 'Background Position', $this->owner->dbObject('BackgroundPosition')->enumValues(),'left top'),
                    CheckboxField::create('BackgroundParalax','Turn background paralax on?'),
                    CheckboxField::create('BackgroundRepeat','Background repeat?')
                ),
                Tab::create('Border',
                    CheckboxField::create('AddBorderBottom', 'Add a border to the bottom of this element?'),
                    DropdownField::create('BorderBottomStyle', 'Border Stijl', $this->owner->dbObject('BorderBottomStyle')->enumValues(),'--')
//                    ColorPaletteField::create(
//                        'BorderBottomColour',
//                        'Bottom Border Colour',
//                        $colors
//                    )
                ),
                Tab::create('AddMascotte',
                    DropdownField::create('Mascotte', 'Kies mascotte', $this->owner->dbObject('Mascotte')->enumValues(),'---'),
                    DropdownField::create('MascottePosition', 'Positie', $this->owner->dbObject('MascottePosition')->enumValues(),'mascotte-right mascotte-bottom')
                )
            )
        ));
        
        
    }
}
