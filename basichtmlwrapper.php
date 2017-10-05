<?php
/**
 * @package		Basic HTML Wrapper
 * @version		0.1
 * @author		James Collins (james.collins@outlook.com.au)
**/

/**
 * [Helper] htmlNode
 *
 * @param string sTag Text tag of HTML node
 * @param array aAttributes Attributes of HTML node
 * @param string sText Text inside the HTML node
 * @param boolean bTagCloses Boolean if the tag is required to be closed seperately
 *
 * @return string The result of the HTML node
 */
function __htmlNode($sTag, $aAttributes, $sText='', $bTagCloses = true) {
	$sOut = '<' . $sTag;

	if(is_array($aAttributes)) {
		foreach($aAttributes as $sKey=>$sValue) {
			$sOut .= ' ' . $sKey.='="';
			
			if(is_array($sValue)) {
				$sOut .= implode(' ', $sValue);
			} else {
				$sOut .= $sValue;
			}
			
			$sOut .= '"';
		}
	}
	
	if(!$bTagCloses) $sOut .= ' /';
	
	$sOut .= '>' . $sText;
	if($bTagCloses) $sOut .= '</' . $sTag . '>';
	
	return $sOut;
}

// Special HTML Tags
function _DOCTYPE($aAttributes) { return __htmlNode('!DOCTYPE', $aAttributes, '', false); }
function _COMMENT($sText) { return '<!-- ' . $sText . ' -->' . "\r\n"; }
function _CONDITIONAL($sCondition, $sText) { return '<!--['.$sCondition.']>'."\r\n".$sText.'<![endif]-->'."\r\n"; }

// Structural Tags
function _A($aAttributes, $sText) { return __htmlNode('A', $aAttributes, $sText); }
function _ARTICLE($aAttributes, $sText) { return __htmlNode('ARTICLE', $aAttributes, $sText); }
function _ASIDE($aAttributes, $sText) { return __htmlNode('ASIDE', $aAttributes, $sText); }
function _BODY($aAttributes, $sText) { return __htmlNode('BODY', $aAttributes, $sText); }
function _BR($aAttributes = null) { return __htmlNode('BR', $aAttributes, '', false); }
function _DETAILS($aAttributes, $sText) { return __htmlNode('DETAILS', $aAttributes, $sText); }
function _DIV($aAttributes, $sText) { return __htmlNode('DIV', $aAttributes, $sText); }
function _H1($aAttributes, $sText) { return __htmlNode('H1', $aAttributes, $sText); }
function _H2($aAttributes, $sText) { return __htmlNode('H2', $aAttributes, $sText); }
function _H3($aAttributes, $sText) { return __htmlNode('H3', $aAttributes, $sText); }
function _H4($aAttributes, $sText) { return __htmlNode('H4', $aAttributes, $sText); }
function _H5($aAttributes, $sText) { return __htmlNode('H5', $aAttributes, $sText); }
function _H6($aAttributes, $sText) { return __htmlNode('H6', $aAttributes, $sText); }
function _HEAD($aAttributes, $sText) { return __htmlNode('HEAD', $aAttributes, $sText); }
function _HEADER($aAttributes, $sText) { return __htmlNode('HEADER', $aAttributes, $sText); }
function _HGROUP($aAttributes, $sText) { return __htmlNode('HGROUP', $aAttributes, $sText); }
function _HR($aAttributes = null) { return __htmlNode('HR', $aAttributes, '', false); }
function _HTML($aAttributes, $sText) { return __htmlNode('HTML', $aAttributes, $sText); }
function _FOOTER($aAttributes, $sText) { return __htmlNode('FOOTER', $aAttributes, $sText); }
function _NAV($aAttributes, $sText) { return __htmlNode('NAV', $aAttributes, $sText); }
function _P($aAttributes, $sText) { return __htmlNode('P', $aAttributes, $sText); }
function _SECTION($aAttributes, $sText) { return __htmlNode('SECTION', $aAttributes, $sText); }
function _SPAN($aAttributes, $sText) { return __htmlNode('SPAN', $aAttributes, $sText); }
function _SUMMARY($aAttributes, $sText) { return __htmlNode('SUMMARY', $aAttributes, $sText); }

// Metadata Tags
function _BASE($aAttributes) { return __htmlNode('BASE', $aAttributes, '', false); }
function _LINK($aAttributes) { return __htmlNode('LINK', $aAttributes, '', false); }
function _META($aAttributes) { return __htmlNode('META', $aAttributes, '', false); }
function _STYLE($aAttributes, $sText) { return __htmlNode('STYLE', $aAttributes, $sText); }
function _TITLE($aAttributes, $sText) { return __htmlNode('TITLE', $aAttributes, $sText); }

// Form Tags
function _BUTTON($aAttributes, $sText) { return __htmlNode('BUTTON', $aAttributes, $sText); }
function _DATALIST($aAttributes, $sText) { return __htmlNode('DATALIST', $aAttributes, $sText); }
function _FIELDSET($aAttributes, $sText) { return __htmlNode('FIELDSET', $aAttributes, $sText); }
function _FORM($aAttributes, $sText) { return __htmlNode('FORM', $aAttributes, $sText); }
function _INPUT($aAttributes) { return __htmlNode('INPUT', $aAttributes, '', false); }
function _KEYGEN($aAttributes) { return __htmlNode('KEYGEN', $aAttributes, '', false); }
function _LABEL($aAttributes, $sText) { return __htmlNode('LABEL', $aAttributes, $sText); }
function _FIELDSET($aAttributes, $sText) { return __htmlNode('FIELDSET', $aAttributes, $sText); }
function _METER($aAttributes, $sText) { return __htmlNode('METER', $aAttributes, $sText); }
function _OPTGROUP($aAttributes, $sText) { return __htmlNode('OPTGROUP', $aAttributes, $sText); }
function _OPTION($aAttributes, $sText) { return __htmlNode('OPTION', $aAttributes, $sText); }
function _SELECT($aAttributes, $sText) { return __htmlNode('SELECT', $aAttributes, $sText); }
function _TEXTAREA($aAttributes, $sText) { return __htmlNode('TEXTAREA', $aAttributes, $sText); }

// Formatting Tags
function _ABBR($aAttributes, $sText) { return __htmlNode('ABBR', $aAttributes, $sText); }
function _ADDRESS($aAttributes, $sText) { return __htmlNode('ADDRESS', $aAttributes, $sText); }
function _B($aAttributes, $sText) { return __htmlNode('B', $aAttributes, $sText); }
function _BDI($aAttributes, $sText) { return __htmlNode('BDI', $aAttributes, $sText); }
function _BDO($aAttributes, $sText) { return __htmlNode('BDO', $aAttributes, $sText); }
function _BLOCKQUOTE($aAttributes, $sText) { return __htmlNode('BLOCKQUOTE', $aAttributes, $sText); }
function _CITE($aAttributes, $sText) { return __htmlNode('CITE', $aAttributes, $sText); }
function _CODE($aAttributes, $sText) { return __htmlNode('CODE', $aAttributes, $sText); }
function _DEL($aAttributes, $sText) { return __htmlNode('DEL', $aAttributes, $sText); }
function _DFN($aAttributes, $sText) { return __htmlNode('DFN', $aAttributes, $sText); }
function _EM($aAttributes, $sText) { return __htmlNode('EM', $aAttributes, $sText); }
function _I($aAttributes, $sText) { return __htmlNode('I', $aAttributes, $sText); }
function _INS($aAttributes, $sText) { return __htmlNode('INS', $aAttributes, $sText); }
function _KBD($aAttributes, $sText) { return __htmlNode('KBD', $aAttributes, $sText); }
function _MARK($aAttributes, $sText) { return __htmlNode('MARK', $aAttributes, $sText); }
function _OUTPUT($aAttributes, $sText) { return __htmlNode('OUTPUT', $aAttributes, $sText); }
function _PRE($aAttributes, $sText) { return __htmlNode('PRE', $aAttributes, $sText); }
function _PROGRESS($aAttributes, $sText) { return __htmlNode('PROGRESS', $aAttributes, $sText); }
function _Q($aAttributes, $sText) { return __htmlNode('Q', $aAttributes, $sText); }
function _RP($aAttributes, $sText) { return __htmlNode('RP', $aAttributes, $sText); }
function _RT($aAttributes, $sText) { return __htmlNode('RT', $aAttributes, $sText); }
function _RUBY($aAttributes, $sText) { return __htmlNode('RUBY', $aAttributes, $sText); }
function _SAMP($aAttributes, $sText) { return __htmlNode('SAMP', $aAttributes, $sText); }
function _SMALL($aAttributes, $sText) { return __htmlNode('SMALL', $aAttributes, $sText); }
function _STRONG($aAttributes, $sText) { return __htmlNode('STRONG', $aAttributes, $sText); }
function _SUB($aAttributes, $sText) { return __htmlNode('SUB', $aAttributes, $sText); }
function _SUP($aAttributes, $sText) { return __htmlNode('SUP', $aAttributes, $sText); }
function _VAR($aAttributes, $sText) { return __htmlNode('VAR', $aAttributes, $sText); }
function _WBR($aAttributes = null) { return __htmlNode('WBR', $aAttributes, '', false); }

// List Tags
function _DD($aAttributes, $sText) { return __htmlNode('DD', $aAttributes, $sText); }
function _DL($aAttributes, $sText) { return __htmlNode('DL', $aAttributes, $sText); }
function _DT($aAttributes, $sText) { return __htmlNode('DT', $aAttributes, $sText); }
function _LI($aAttributes, $sText) { return __htmlNode('LI', $aAttributes, $sText); }
function _OL($aAttributes, $sText) { return __htmlNode('OL', $aAttributes, $sText); }
function _UL($aAttributes, $sText) { return __htmlNode('UL', $aAttributes, $sText); }

// Table Tags
function _CAPTION($aAttributes, $sText) { return __htmlNode('CAPTION', $aAttributes, $sText); }
function _COL($aAttributes) { return __htmlNode('COL', $aAttributes, '', false); }
function _COLGROUP($aAttributes, $sText) { return __htmlNode('COLGROUP', $aAttributes, $sText); }
function _TABLE($aAttributes, $sText) { return __htmlNode('TABLE', $aAttributes, $sText); }
function _TBODY($aAttributes, $sText) { return __htmlNode('TBODY', $aAttributes, $sText); }
function _TD($aAttributes, $sText) { return __htmlNode('TD', $aAttributes, $sText); }
function _TFOOT($aAttributes, $sText) { return __htmlNode('TFOOT', $aAttributes, $sText); }
function _THEAD($aAttributes, $sText) { return __htmlNode('THEAD', $aAttributes, $sText); }
function _TH($aAttributes, $sText) { return __htmlNode('TH', $aAttributes, $sText); }
function _TR($aAttributes, $sText) { return __htmlNode('TR', $aAttributes, $sText); }

// Scripting Tags
function _NOSCRIPT($aAttributes, $sText) { return __htmlNode('NOSCRIPT', $aAttributes, $sText); }
function _SCRIPT($aAttributes, $sText) { return __htmlNode('SCRIPT', $aAttributes, $sText); }

// Embedded Content Tags
function _AREA($aAttributes) { return __htmlNode('AREA', $aAttributes, '', false); }
function _AUDIO($aAttributes, $sText) { return __htmlNode('AUDIO', $aAttributes, $sText); }
function _CANVAS($aAttributes, $sText) { return __htmlNode('CANVAS', $aAttributes, $sText); }
function _EMBED($aAttributes) { return __htmlNode('EMBED', $aAttributes, '', false); }
function _FIGCAPTION($aAttributes, $sText) { return __htmlNode('FIGCAPTION', $aAttributes, $sText); }
function _FIGURE($aAttributes, $sText) { return __htmlNode('FIGURE', $aAttributes, $sText); }
function _IFRAME($aAttributes, $sText) { return __htmlNode('IFRAME', $aAttributes, $sText); }
function _IMG($aAttributes) { return __htmlNode('IMG', $aAttributes, '', false); }
function _MAP($aAttributes, $sText) { return __htmlNode('MAP', $aAttributes, $sText); }
function _OBJECT($aAttributes, $sText) { return __htmlNode('OBJECT', $aAttributes, $sText); }
function _PARAM($aAttributes) { return __htmlNode('PARAM', $aAttributes, '', false); }
function _SOURCE($aAttributes) { return __htmlNode('SOURCE', $aAttributes, '', false); }
function _TIME($aAttributes, $sText) { return __htmlNode('TIME', $aAttributes, $sText); }
function _VIDEO($aAttributes, $sText) { return __htmlNode('VIDEO', $aAttributes, $sText); }
?>