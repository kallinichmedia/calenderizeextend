<?php

namespace Km\KmCalendarizeext\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

final class DiffdaysViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    protected $escapeOutput = false;

    public function initializeArguments()
    {
        $this->registerArgument('startDate', 'DateTime', 'The start date', true);
        $this->registerArgument('endDate', 'DateTime', 'The end date', true);
    }

    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $startDate = $arguments['startDate'];
        $endDate = $arguments['endDate'];

        if ($startDate instanceof \DateTime && $endDate instanceof \DateTime) {
            return $startDate->diff($endDate)->days;
        }

        return 0;
    }
}
