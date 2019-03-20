<?php

namespace Hofff\Contao\IconFont;

/**
 * @author Nicky Hoff <nick@hofff.com>
 */
class InsertTags
{
  /**
   * @param string $tag
   * @return bool|string
   */
  public function hookReplaceInsertTags($tag)
  {
    $split = explode('::', $tag);

    // Icons Standard
    if ($split[0] == 'icon-fas' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . '" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . '" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . '" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . '" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon' && isset($split[1])) {
      return '<i class="icon ' . $split[1] . '" aria-hidden="true"></i>'; }

    // Icons mit fester Breite
    elseif ($split[0] == 'icon-fas-fw' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-fw" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-fw' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-fw" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-fw' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-fw" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-fw' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-fw" aria-hidden="true"></i>'; }

    // Icons im Textfluss (links)
    elseif ($split[0] == 'icon-fas-left' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-2x fa-pull-left" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-left' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-2x fa-pull-left" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-left' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-2x fa-pull-left" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-left' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-2x fa-pull-left" aria-hidden="true"></i>'; }

    // Icons im Textfluss (rechts)
    elseif ($split[0] == 'icon-fas-right' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-2x fa-pull-right" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-right' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-2x fa-pull-right" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-right' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-2x fa-pull-right" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-right' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-2x fa-pull-right" aria-hidden="true"></i>'; }

    // Icons mit Rahmen im Textfluss (links)
    elseif ($split[0] == 'icon-fas-border-left' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-2x fa-pull-left fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-border-left' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-2x fa-pull-left fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-border-left' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-2x fa-pull-left fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-border-left' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-2x fa-pull-left fa-border" aria-hidden="true"></i>'; }

    // Icons mit Rahmen im Textfluss (rechts)
    elseif ($split[0] == 'icon-fas-border-right' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-2x fa-pull-right fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-border-right' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-2x fa-pull-right fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-border-right' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-2x fa-pull-right fa-border" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-border-right' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-2x fa-pull-right fa-border" aria-hidden="true"></i>'; }

    // Icons drehend
    elseif ($split[0] == 'icon-fas-spin' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-spin" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-spin' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-spin" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-spin' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-spin" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-spin' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-spin" aria-hidden="true"></i>'; }

    // Icons pulsierend
    elseif ($split[0] == 'icon-fas-pulse' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-pulse" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-pulse' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-pulse" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-pulse' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-pulse" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-pulse' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-pulse" aria-hidden="true"></i>'; }

    // Icons rotieren um 90° im Uhrzeigersinn
    elseif ($split[0] == 'icon-fas-rotate-90' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-rotate-90" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-rotate-90' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-rotate-90" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-rotate-90' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-rotate-90" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-rotate-90' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-rotate-90" aria-hidden="true"></i>'; }

    // Icons rotieren um 180° im Uhrzeigersinn
    elseif ($split[0] == 'icon-fas-rotate-180' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-rotate-180" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-rotate-180' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-rotate-180" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-rotate-180' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-rotate-180" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-rotate-180' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-rotate-180" aria-hidden="true"></i>'; }

    // Icons rotieren um 270° im Uhrzeigersinn
    elseif ($split[0] == 'icon-fas-rotate-270' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-rotate-270" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-rotate-270' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-rotate-270" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-rotate-270' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-rotate-270" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-rotate-270' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-rotate-270" aria-hidden="true"></i>'; }

    // Icons horizontal spiegeln
    elseif ($split[0] == 'icon-fas-flip-horizontal' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-flip-horizontal" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-flip-horizontal' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-flip-horizontal" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-flip-horizontal' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-flip-horizontal" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-flip-horizontal' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-flip-horizontal" aria-hidden="true"></i>'; }

    // Icons vertikal spiegeln
    elseif ($split[0] == 'icon-fas-flip-vertical' && isset($split[1])) {
      return '<i class="fas fa-' . $split[1] . ' fa-flip-vertical" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-far-flip-vertical' && isset($split[1])) {
      return '<i class="far fa-' . $split[1] . ' fa-flip-vertical" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fal-flip-vertical' && isset($split[1])) {
      return '<i class="fal fa-' . $split[1] . ' fa-flip-vertical" aria-hidden="true"></i>'; }
    elseif ($split[0] == 'icon-fab-flip-vertical' && isset($split[1])) {
      return '<i class="fab fa-' . $split[1] . ' fa-flip-vertical" aria-hidden="true"></i>'; }

    // Icons mit quadratischem Hintergrund
    elseif ($split[0] == 'icon-fas-square' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fas fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-far-square' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="far fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fal-square' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fal fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fab-square' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-square fa-stack-2x" aria-hidden="true"></i><i class="fab fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }

    // Icons mit quadratischem Hintergrund - nur Umrandung
    elseif ($split[0] == 'icon-fas-square-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fas fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-far-square-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="far fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fal-square-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fal fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fab-square-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-square fa-stack-2x" aria-hidden="true"></i><i class="fab fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }

    // Icons mit rundem Hintergrund
    elseif ($split[0] == 'icon-fas-circle' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fas fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-far-circle' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="far fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fal-circle' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fal fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fab-circle' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fab fa-' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>'; }

    // Icons mit rundem Hintergrund - nur Umrandung
    elseif ($split[0] == 'icon-fas-circle-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fas fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-far-circle-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="far fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fal-circle-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fal fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fab-circle-border' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fab fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>'; }

    // Icons mit Verbotsschild (Farbe für .fa-ban muss per CSS gesetzt werden)
    elseif ($split[0] == 'icon-fas-ban' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fas fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-far-ban' && isset($split[1])) {
      return '<span class="fa-stack"><i class="far fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fal-ban' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fal fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>'; }
    elseif ($split[0] == 'icon-fab-ban' && isset($split[1])) {
      return '<span class="fa-stack"><i class="fab fa-' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i><i class="fas fa-ban fa-stack-2x" aria-hidden="true"></i></span>'; }

    return false;
  }
}
