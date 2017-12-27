<?php
/**
 * Magento Messenger Chatbox
 * Copyright (C) 2017 Pablo Montenegro
 *
 * This file is part of Werules/MessengerChatbox.
 *
 * Werules/MessengerChatbox is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Werules\MessengerChatbox\Block\Adminhtml\System\Config\Form\Field;

class LanguageList implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $languages = $this->toArray();
        $result = array();
        foreach ($languages as $key => $language)
        {
            $arr = array(
                'value' => $key,
                'label' => $language
            );
            array_push($result, $arr);
        }

        return $result;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'af-ZA' => __("af-ZA"),
            'am-ET' => __("am-ET"),
            'ar-AE' => __("ar-AE"),
            'ar-BH' => __("ar-BH"),
            'ar-DZ' => __("ar-DZ"),
            'ar-EG' => __("ar-EG"),
            'ar-IQ' => __("ar-IQ"),
            'ar-JO' => __("ar-JO"),
            'ar-KW' => __("ar-KW"),
            'ar-LB' => __("ar-LB"),
            'ar-LY' => __("ar-LY"),
            'ar-MA' => __("ar-MA"),
            'arn-CL' => __("arn-CL"),
            'ar-OM' => __("ar-OM"),
            'ar-QA' => __("ar-QA"),
            'ar-SA' => __("ar-SA"),
            'ar-SY' => __("ar-SY"),
            'ar-TN' => __("ar-TN"),
            'ar-YE' => __("ar-YE"),
            'as-IN' => __("as-IN"),
            'az-Cyrl-AZ' => __("az-Cyrl-AZ"),
            'az-Latn-AZ' => __("az-Latn-AZ"),
            'ba-RU' => __("ba-RU"),
            'be-BY' => __("be-BY"),
            'bg-BG' => __("bg-BG"),
            'bn-BD' => __("bn-BD"),
            'bn-IN' => __("bn-IN"),
            'bo-CN' => __("bo-CN"),
            'br-FR' => __("br-FR"),
            'bs-Cyrl-BA' => __("bs-Cyrl-BA"),
            'bs-Latn-BA' => __("bs-Latn-BA"),
            'ca-ES' => __("ca-ES"),
            'co-FR' => __("co-FR"),
            'cs-CZ' => __("cs-CZ"),
            'cy-GB' => __("cy-GB"),
            'da-DK' => __("da-DK"),
            'de-AT' => __("de-AT"),
            'de-CH' => __("de-CH"),
            'de-DE' => __("de-DE"),
            'de-LI' => __("de-LI"),
            'de-LU' => __("de-LU"),
            'dsb-DE' => __("dsb-DE"),
            'dv-MV' => __("dv-MV"),
            'el-GR' => __("el-GR"),
            'en-029' => __("en-029"),
            'en-AU' => __("en-AU"),
            'en-BZ' => __("en-BZ"),
            'en-CA' => __("en-CA"),
            'en-GB' => __("en-GB"),
            'en-IE' => __("en-IE"),
            'en-IN' => __("en-IN"),
            'en-JM' => __("en-JM"),
            'en-MY' => __("en-MY"),
            'en-NZ' => __("en-NZ"),
            'en-PH' => __("en-PH"),
            'en-SG' => __("en-SG"),
            'en-TT' => __("en-TT"),
            'en-US' => __("en-US"),
            'en-ZA' => __("en-ZA"),
            'en-ZW' => __("en-ZW"),
            'es-AR' => __("es-AR"),
            'es-BO' => __("es-BO"),
            'es-CL' => __("es-CL"),
            'es-CO' => __("es-CO"),
            'es-CR' => __("es-CR"),
            'es-DO' => __("es-DO"),
            'es-EC' => __("es-EC"),
            'es-ES' => __("es-ES"),
            'es-GT' => __("es-GT"),
            'es-HN' => __("es-HN"),
            'es-MX' => __("es-MX"),
            'es-NI' => __("es-NI"),
            'es-PA' => __("es-PA"),
            'es-PE' => __("es-PE"),
            'es-PR' => __("es-PR"),
            'es-PY' => __("es-PY"),
            'es-SV' => __("es-SV"),
            'es-US' => __("es-US"),
            'es-UY' => __("es-UY"),
            'es-VE' => __("es-VE"),
            'et-EE' => __("et-EE"),
            'eu-ES' => __("eu-ES"),
            'fa-IR' => __("fa-IR"),
            'fi-FI' => __("fi-FI"),
            'fil-PH' => __("fil-PH"),
            'fo-FO' => __("fo-FO"),
            'fr-BE' => __("fr-BE"),
            'fr-CA' => __("fr-CA"),
            'fr-CH' => __("fr-CH"),
            'fr-FR' => __("fr-FR"),
            'fr-LU' => __("fr-LU"),
            'fr-MC' => __("fr-MC"),
            'fy-NL' => __("fy-NL"),
            'ga-IE' => __("ga-IE"),
            'gd-GB' => __("gd-GB"),
            'gl-ES' => __("gl-ES"),
            'gsw-FR' => __("gsw-FR"),
            'gu-IN' => __("gu-IN"),
            'ha-Latn-NG' => __("ha-Latn-NG"),
            'he-IL' => __("he-IL"),
            'hi-IN' => __("hi-IN"),
            'hr-BA' => __("hr-BA"),
            'hr-HR' => __("hr-HR"),
            'hsb-DE' => __("hsb-DE"),
            'hu-HU' => __("hu-HU"),
            'hy-AM' => __("hy-AM"),
            'id-ID' => __("id-ID"),
            'ig-NG' => __("ig-NG"),
            'ii-CN' => __("ii-CN"),
            'is-IS' => __("is-IS"),
            'it-CH' => __("it-CH"),
            'it-IT' => __("it-IT"),
            'iu-Cans-CA' => __("iu-Cans-CA"),
            'iu-Latn-CA' => __("iu-Latn-CA"),
            'ja-JP' => __("ja-JP"),
            'ka-GE' => __("ka-GE"),
            'kk-KZ' => __("kk-KZ"),
            'kl-GL' => __("kl-GL"),
            'km-KH' => __("km-KH"),
            'kn-IN' => __("kn-IN"),
            'kok-IN' => __("kok-IN"),
            'ko-KR' => __("ko-KR"),
            'ky-KG' => __("ky-KG"),
            'lb-LU' => __("lb-LU"),
            'lo-LA' => __("lo-LA"),
            'lt-LT' => __("lt-LT"),
            'lv-LV' => __("lv-LV"),
            'mi-NZ' => __("mi-NZ"),
            'mk-MK' => __("mk-MK"),
            'ml-IN' => __("ml-IN"),
            'mn-MN' => __("mn-MN"),
            'mn-Mong-CN' => __("mn-Mong-CN"),
            'moh-CA' => __("moh-CA"),
            'mr-IN' => __("mr-IN"),
            'ms-BN' => __("ms-BN"),
            'ms-MY' => __("ms-MY"),
            'mt-MT' => __("mt-MT"),
            'nb-NO' => __("nb-NO"),
            'ne-NP' => __("ne-NP"),
            'nl-BE' => __("nl-BE"),
            'nl-NL' => __("nl-NL"),
            'nn-NO' => __("nn-NO"),
            'nso-ZA' => __("nso-ZA"),
            'oc-FR' => __("oc-FR"),
            'or-IN' => __("or-IN"),
            'pa-IN' => __("pa-IN"),
            'pl-PL' => __("pl-PL"),
            'prs-AF' => __("prs-AF"),
            'ps-AF' => __("ps-AF"),
            'pt-BR' => __("pt-BR"),
            'pt-PT' => __("pt-PT"),
            'qut-GT' => __("qut-GT"),
            'quz-BO' => __("quz-BO"),
            'quz-EC' => __("quz-EC"),
            'quz-PE' => __("quz-PE"),
            'rm-CH' => __("rm-CH"),
            'ro-RO' => __("ro-RO"),
            'ru-RU' => __("ru-RU"),
            'rw-RW' => __("rw-RW"),
            'sah-RU' => __("sah-RU"),
            'sa-IN' => __("sa-IN"),
            'se-FI' => __("se-FI"),
            'se-NO' => __("se-NO"),
            'se-SE' => __("se-SE"),
            'si-LK' => __("si-LK"),
            'sk-SK' => __("sk-SK"),
            'sl-SI' => __("sl-SI"),
            'sma-NO' => __("sma-NO"),
            'sma-SE' => __("sma-SE"),
            'smj-NO' => __("smj-NO"),
            'smj-SE' => __("smj-SE"),
            'smn-FI' => __("smn-FI"),
            'sms-FI' => __("sms-FI"),
            'sq-AL' => __("sq-AL"),
            'sr-Cyrl-BA' => __("sr-Cyrl-BA"),
            'sr-Cyrl-CS' => __("sr-Cyrl-CS"),
            'sr-Cyrl-ME' => __("sr-Cyrl-ME"),
            'sr-Cyrl-RS' => __("sr-Cyrl-RS"),
            'sr-Latn-BA' => __("sr-Latn-BA"),
            'sr-Latn-CS' => __("sr-Latn-CS"),
            'sr-Latn-ME' => __("sr-Latn-ME"),
            'sr-Latn-RS' => __("sr-Latn-RS"),
            'sv-FI' => __("sv-FI"),
            'sv-SE' => __("sv-SE"),
            'sw-KE' => __("sw-KE"),
            'syr-SY' => __("syr-SY"),
            'ta-IN' => __("ta-IN"),
            'te-IN' => __("te-IN"),
            'tg-Cyrl-TJ' => __("tg-Cyrl-TJ"),
            'th-TH' => __("th-TH"),
            'tk-TM' => __("tk-TM"),
            'tn-ZA' => __("tn-ZA"),
            'tr-TR' => __("tr-TR"),
            'tt-RU' => __("tt-RU"),
            'tzm-Latn-DZ' => __("tzm-Latn-DZ"),
            'ug-CN' => __("ug-CN"),
            'uk-UA' => __("uk-UA"),
            'ur-PK' => __("ur-PK"),
            'uz-Cyrl-UZ' => __("uz-Cyrl-UZ"),
            'uz-Latn-UZ' => __("uz-Latn-UZ"),
            'vi-VN' => __("vi-VN"),
            'wo-SN' => __("wo-SN"),
            'xh-ZA' => __("xh-ZA"),
            'yo-NG' => __("yo-NG"),
            'zh-CN' => __("zh-CN"),
            'zh-HK' => __("zh-HK"),
            'zh-MO' => __("zh-MO"),
            'zh-SG' => __("zh-SG"),
            'zh-TW' => __("zh-TW"),
            'zu-ZA' => __("zu-ZA")
        );
    }
}