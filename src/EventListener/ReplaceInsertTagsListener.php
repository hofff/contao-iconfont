<?php

namespace Hofff\Contao\IconFont\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @author Nicky Hoff <nick@hofff.com>
 *
 * @Hook("replaceInsertTags")
 */
final class ReplaceInsertTagsListener
{
    private const ICONS = [
        // Icons Standard
        'icon-fas'                 => '<i class="fas fa-%s" aria-hidden="true"></i>',
        'icon-far'                 => '<i class="far fa-%s" aria-hidden="true"></i>',
        'icon-fal'                 => '<i class="fal fa-%s" aria-hidden="true"></i>',
        'icon-fab'                 => '<i class="fab fa-%s" aria-hidden="true"></i>',
        'icon'                     => '<i class="icon %s" aria-hidden="true"></i>',

        // Icons mit fester Breite
        'icon-fas-fw'              => '<i class="fas fa-%s fa-fw" aria-hidden="true"></i>',
        'icon-far-fw'              => '<i class="far fa-%s fa-fw" aria-hidden="true"></i>',
        'icon-fal-fw'              => '<i class="fal fa-%s fa-fw" aria-hidden="true"></i>',
        'icon-fab-fw'              => '<i class="fab fa-%s fa-fw" aria-hidden="true"></i>',

        // Icons im Textfluss (links)
        'icon-fas-left'            => '<i class="fas fa-%s fa-2x fa-pull-left" aria-hidden="true"></i>',
        'icon-far-left'            => '<i class="far fa-%s fa-2x fa-pull-left" aria-hidden="true"></i>',
        'icon-fal-left'            => '<i class="fal fa-%s fa-2x fa-pull-left" aria-hidden="true"></i>',
        'icon-fab-left'            => '<i class="fab fa-%s fa-2x fa-pull-left" aria-hidden="true"></i>',

        // Icons im Textfluss (rechts)
        'icon-fas-right'           => '<i class="fas fa-%s fa-2x fa-pull-right" aria-hidden="true"></i>',
        'icon-far-right'           => '<i class="far fa-%s fa-2x fa-pull-right" aria-hidden="true"></i>',
        'icon-fal-right'           => '<i class="fal fa-%s fa-2x fa-pull-right" aria-hidden="true"></i>',
        'icon-fab-right'           => '<i class="fab fa-%s fa-2x fa-pull-right" aria-hidden="true"></i>',

        // Icons mit Rahmen im Textfluss (links)
        'icon-fas-border-left'     => '<i class="fas fa-%s fa-2x fa-pull-left fa-border" aria-hidden="true"></i>',
        'icon-far-border-left'     => '<i class="far fa-%s fa-2x fa-pull-left fa-border" aria-hidden="true"></i>',
        'icon-fal-border-left'     => '<i class="fal fa-%s fa-2x fa-pull-left fa-border" aria-hidden="true"></i>',
        'icon-fab-border-left'     => '<i class="fab fa-%s fa-2x fa-pull-left fa-border" aria-hidden="true"></i>',

        // Icons mit Rahmen im Textfluss (rechts)
        'icon-fas-border-right'    => '<i class="fas fa-%s fa-2x fa-pull-right fa-border" aria-hidden="true"></i>',
        'icon-far-border-right'    => '<i class="far fa-%s fa-2x fa-pull-right fa-border" aria-hidden="true"></i>',
        'icon-fal-border-right'    => '<i class="fal fa-%s fa-2x fa-pull-right fa-border" aria-hidden="true"></i>',
        'icon-fab-border-right'    => '<i class="fab fa-%s fa-2x fa-pull-right fa-border" aria-hidden="true"></i>',

        // Icons drehend
        'icon-fas-spin'            => '<i class="fas fa-%s fa-spin" aria-hidden="true"></i>',
        'icon-far-spin'            => '<i class="far fa-%s fa-spin" aria-hidden="true"></i>',
        'icon-fal-spin'            => '<i class="fal fa-%s fa-spin" aria-hidden="true"></i>',
        'icon-fab-spin'            => '<i class="fab fa-%s fa-spin" aria-hidden="true"></i>',

        // Icons pulsierend
        'icon-fas-pulse'           => '<i class="fas fa-%s fa-pulse" aria-hidden="true"></i>',
        'icon-far-pulse'           => '<i class="far fa-%s fa-pulse" aria-hidden="true"></i>',
        'icon-fal-pulse'           => '<i class="fal fa-%s fa-pulse" aria-hidden="true"></i>',
        'icon-fab-pulse'           => '<i class="fab fa-%s fa-pulse" aria-hidden="true"></i>',

        // Icons rotieren um 90° im Uhrzeigersinn
        'icon-fas-rotate-90'       => '<i class="fas fa-%s fa-rotate-90" aria-hidden="true"></i>',
        'icon-far-rotate-90'       => '<i class="far fa-%s fa-rotate-90" aria-hidden="true"></i>',
        'icon-fal-rotate-90'       => '<i class="fal fa-%s fa-rotate-90" aria-hidden="true"></i>',
        'icon-fab-rotate-90'       => '<i class="fab fa-%s fa-rotate-90" aria-hidden="true"></i>',

        // Icons rotieren um 180° im Uhrzeigersinn
        'icon-fas-rotate-180'      => '<i class="fas fa-%s fa-rotate-180" aria-hidden="true"></i>',
        'icon-far-rotate-180'      => '<i class="far fa-%s fa-rotate-180" aria-hidden="true"></i>',
        'icon-fal-rotate-180'      => '<i class="fal fa-%s fa-rotate-180" aria-hidden="true"></i>',
        'icon-fab-rotate-180'      => '<i class="fab fa-%s fa-rotate-180" aria-hidden="true"></i>',

        // Icons rotieren um 270° im Uhrzeigersinn
        'icon-fas-rotate-270'      => '<i class="fas fa-%s fa-rotate-270" aria-hidden="true"></i>',
        'icon-far-rotate-270'      => '<i class="far fa-%s fa-rotate-270" aria-hidden="true"></i>',
        'icon-fal-rotate-270'      => '<i class="fal fa-%s fa-rotate-270" aria-hidden="true"></i>',
        'icon-fab-rotate-270'      => '<i class="fab fa-%s fa-rotate-270" aria-hidden="true"></i>',

        // Icons horizontal spiegeln
        'icon-fas-flip-horizontal' => '<i class="fas fa-%s fa-flip-horizontal" aria-hidden="true"></i>',
        'icon-far-flip-horizontal' => '<i class="far fa-%s fa-flip-horizontal" aria-hidden="true"></i>',
        'icon-fal-flip-horizontal' => '<i class="fal fa-%s fa-flip-horizontal" aria-hidden="true"></i>',
        'icon-fab-flip-horizontal' => '<i class="fab fa-%s fa-flip-horizontal" aria-hidden="true"></i>',

        // Icons vertikal spiegeln
        'icon-fas-flip-vertical'   => '<i class="fas fa-%s fa-flip-vertical" aria-hidden="true"></i>',
        'icon-far-flip-vertical'   => '<i class="far fa-%s fa-flip-vertical" aria-hidden="true"></i>',
        'icon-fal-flip-vertical'   => '<i class="fal fa-%s fa-flip-vertical" aria-hidden="true"></i>',
        'icon-fab-flip-vertical'   => '<i class="fab fa-%s fa-flip-vertical" aria-hidden="true"></i>',

        // Icons vertikal & horizontal spiegeln
        'icon-fas-flip-both'       => '<i class="fas fa-%s fa-flip-both" aria-hidden="true"></i>',
        'icon-far-flip-both'       => '<i class="far fa-%s fa-flip-both" aria-hidden="true"></i>',
        'icon-fal-flip-both'       => '<i class="fal fa-%s fa-flip-both" aria-hidden="true"></i>',
        'icon-fab-flip-both'       => '<i class="fab fa-%s fa-flip-both" aria-hidden="true"></i>',

        // Icons mit quadratischem Hintergrund
        'icon-fas-square'          => '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fas fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-far-square'          => '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="far fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-fal-square'          => '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fal fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-fab-square'          => '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fab fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',

        // Icons mit quadratischem Hintergrund - nur Umrandung
        'icon-fas-square-border'   => '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fas fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-far-square-border'   => '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="far fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-fal-square-border'   => '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fal fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-fab-square-border'   => '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fab fa-%s fa-stack-1x" aria-hidden="true"></i></span>',

        // Icons mit rundem Hintergrund
        'icon-fas-circle'          => '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fas fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-far-circle'          => '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="far fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-fal-circle'          => '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fal fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',
        'icon-fab-circle'          => '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fab fa-%s fa-stack-1x fa-inverse" aria-hidden="true"></i></span>',

        // Icons mit rundem Hintergrund - nur Umrandung
        'icon-fas-circle-border'   => '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fas fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-far-circle-border'   => '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="far fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-fal-circle-border'   => '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fal fa-%s fa-stack-1x" aria-hidden="true"></i></span>',
        'icon-fab-circle-border'   => '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fab fa-%s fa-stack-1x" aria-hidden="true"></i></span>',

        // Icons mit Verbotsschild (Farbe für .fa-ban muss per CSS gesetzt werden)
        'icon-fas-ban'             => '<span class="fa-stack"><i class="fas fa-%s fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>',
        'icon-far-ban'             => '<span class="fa-stack"><i class="far fa-%s fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>',
        'icon-fal-ban'             => '<span class="fa-stack"><i class="fal fa-%s fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>',
        'icon-fab-ban'             => '<span class="fa-stack"><i class="fab fa-%s fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>',
    ];

    /**
     * @return bool|string
     */
    public function __invoke(string $tag)
    {
        $split = explode('::', $tag);

        if (isset($split[1], self::ICONS[$split[0]])) {
            return sprintf(self::ICONS[$split[0]], $split[1]);
        }

        return false;
    }
}
