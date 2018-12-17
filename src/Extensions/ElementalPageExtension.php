<?php
namespace Huubl\ElementalBase\Extensions;

use Huubl\ElementalBase\Models\BaseElement;
use DNADesign\Elemental\Models\BaseElement as DNABase;
use DNADesign\Elemental\Extensions\ElementalPageExtension as BaseExtension;
use DNADesign\Elemental\Models\ElementalArea;
use SilverStripe\Core\ClassInfo;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;

class ElementalPageExtension extends BaseExtension {
    

    /**
     * Get the available element types for this page type,
     *
     * Uses allowed_elements, stop_element_inheritance, disallowed_elements in
     * order to get to correct list.
     *
     * Only subclasses of our subclass
     *
     * @return array
     */
    public function getElementalTypes()
    {
        $config = $this->owner->config();

        if (is_array($config->get('allowed_elements'))) {
            if ($config->get('stop_element_inheritance')) {
                $availableClasses = $config->get('allowed_elements', Config::UNINHERITED);
            } else {
                $availableClasses = $config->get('allowed_elements');
            }
        } else {
            $availableClasses = ClassInfo::subclassesFor(BaseElement::class);
        }

        $disallowedElements = (array) $config->get('disallowed_elements');
        $list = array();

        foreach ($availableClasses as $availableClass) {
            /** @var BaseElement $inst */
            $inst = singleton($availableClass);

            if (!in_array($availableClass, $disallowedElements) && $inst->canCreate()) {
                if ($inst->hasMethod('canCreateElement') && !$inst->canCreateElement()) {
                    continue;
                }

                $list[$availableClass] = $inst->getType();
            }
        }

        if ($config->get('sort_types_alphabetically') !== false) {
            asort($list);
        }

        if (isset($list[DNABase::class])) {
            unset($list[DNABase::class]);
        }
        if (isset($list[BaseElement::class])) {
            unset($list[BaseElement::class]);
        }

        $this->owner->invokeWithExtensions('updateAvailableTypesForClass', $class, $list);

        return $list;
    }



}
