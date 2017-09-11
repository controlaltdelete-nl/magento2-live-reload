<?php
/**
 *    ______            __             __
 *   / ____/___  ____  / /__________  / /
 *  / /   / __ \/ __ \/ __/ ___/ __ \/ /
 * / /___/ /_/ / / / / /_/ /  / /_/ / /
 * \______________/_/\__/_/   \____/_/
 *    /   |  / / /_
 *   / /| | / / __/
 *  / ___ |/ / /_
 * /_/ _|||_/\__/ __     __
 *    / __ \___  / /__  / /____
 *   / / / / _ \/ / _ \/ __/ _ \
 *  / /_/ /  __/ /  __/ /_/  __/
 * /_____/\___/_/\___/\__/\___/
 *
 */

namespace ControlAltDelete\LiveReload\Block;

use Magento\Framework\View\Element\Template;

class AddJavascript extends Template
{
    // @codingStandardsIgnoreLine
    public $_template = 'Javascript.phtml';

    /**
     * @var \Magento\Framework\App\State
     */
    private $appState;

    /**
     * @param Template\Context $context
     * @param \Magento\Framework\App\State $appState
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Magento\Framework\App\State $appState,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->appState = $appState;
    }

    /**
     * @return string
     */
    public function getHostUrl()
    {
        $scheme = $_SERVER['SERVER_PORT'] == 443 ? 'https' : 'http';

        return $scheme . '://' . $_SERVER['HTTP_HOST'] . ':35729';
    }

    /**
     * Only output the HTML if we are not in production mode
     *
     * @return string
     */
    // @codingStandardsIgnoreLine
    protected function _toHtml()
    {
        if ($this->_appState->getMode() == \Magento\Framework\App\State::MODE_PRODUCTION) {
            return '';
        }

        return parent::_toHtml();
    }
}
