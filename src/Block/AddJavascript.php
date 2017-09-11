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

use Magento\Framework\App\State;
use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Request\Http as Request;

class AddJavascript extends Template
{
    // @codingStandardsIgnoreLine
    public $_template = 'Javascript.phtml';

    /**
     * @var State
     */
    private $appState;

    /**
     * @var Request
     */
    private $request;

    /**
     * @param Template\Context $context
     * @param Request $request
     * @param State $appState
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Request $request,
        State $appState,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->appState = $appState;
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function getHostUrl()
    {
        $scheme = $this->request->isSecure() ? 'https' : 'http';

        return $scheme . '://' . $this->request->getHttpHost() . ':35729';
    }

    /**
     * Only output the HTML if we are not in production mode
     *
     * @return string
     */
    // @codingStandardsIgnoreLine
    protected function _toHtml()
    {
        if ($this->_appState->getMode() == State::MODE_PRODUCTION) {
            return '';
        }

        return parent::_toHtml();
    }
}
