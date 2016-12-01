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

		if ($split[0] == 'icon-fa' && isset($split[1])) {
			return '<i class="fa ' . $split[1] . '" aria-hidden="true"></i>';
		} elseif ($split[0] == 'icon-fa-square-o' && isset($split[1])) {
			return '<span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x" aria-hidden="true"></i><i class="fa ' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i></span>';
		} elseif ($split[0] == 'icon-fa-circle' && isset($split[1])) {
			return '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i><i class="fa ' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>';
		} elseif ($split[0] == 'icon-fa-square' && isset($split[1])) {
			return '<span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x" aria-hidden="true"></i><i class="fa ' . $split[1] . ' fa-stack-1x fa-inverse" aria-hidden="true"></i></span>';
		} elseif ($split[0] == 'icon-fa-ban' && isset($split[1])) {
			return '<span class="fa-stack fa-lg"><i class="fa ' . $split[1] . ' fa-stack-1x" aria-hidden="true"></i><i class="fa fa-ban fa-stack-2x text-danger" aria-hidden="true"></i></span>';
		} elseif ($split[0] == 'icon' && isset($split[1])) {
			return '<i class="icon icon-' . $split[1] . '" aria-hidden="true"></i>';
		}

		return false;
	}
}
