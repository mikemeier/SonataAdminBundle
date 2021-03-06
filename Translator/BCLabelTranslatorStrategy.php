<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Translator;

/**
 * Class BCLabelTranslatorStrategy.
 *
 * @author  Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class BCLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function getLabel($label, $context = '', $type = '')
    {
        if ($context == 'breadcrumb') {
            return sprintf('%s.%s_%s', $context, $type, strtolower($label));
        }

        return ucfirst(strtolower($label));
    }
}
