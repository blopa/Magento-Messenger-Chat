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

namespace Werules\MessengerChatbox\Block;

class Messenger extends \Magento\Framework\View\Element\Template
{
    protected $_helper;
    protected $_store;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Api\Data\StoreInterface $store,
        \Werules\MessengerChatbox\Helper\Data $helperData,
        array $data = array()
    )
    {
        $this->_store = $store;
        $this->_helper = $helperData;
        parent::__construct($context, $data);
    }

    public function getFacebookPageId()
    {
        $pageId = $this->getConfigValue('werules_messenger_chatbox/general/page_id');
        return $pageId;
    }

    public function getFacebookAppId()
    {
        $appId = $this->getConfigValue('werules_messenger_chatbox/general/app_id');
        return $appId;
    }

    public function isChatboxEnabled()
    {
        $enable = $this->getConfigValue('werules_messenger_chatbox/general/enable');
        if ($enable)
            return true;

        return false;
    }

    private function getConfigValue($code)
    {
        return $this->_helper->getConfigValue($code);
    }

    public function getLocaleCode()
    {
        return $this->_store->getLocaleCode();
    }

//    private function setConfigValue($field, $value)
//    {
//        $this->_helper->setConfigValue($field, $value);
//    }
}
