<?php

/*
 * This file is part of the cfdi-xml project.
 *
 * (c) Kinedu
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kinedu\CfdiXML\Node;

use Kinedu\CfdiXML\Common\Node;

class Relacionado extends Node
{
    /**
     * Parent node name.
     *
     * @var string
     */
    protected $parentNodeName = 'cfdi:CfdiRelacionados';

    /**
     * Define the node name.
     *
     * @var string
     */
    protected $nodeName = 'cfdi:CfdiRelacionado';

    /**
     * Node valid attributes.
     *
     * @var array
     */
    protected $validAttributes = [
        'UUID',
    ];
}
