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

class Parte extends Node
{
    /**
     * Node name.
     *
     * @var string
     */
    protected $nodeName = 'cfdi:Parte';

    /**
     * Node valid attributes.
     *
     * @var array
     */
    protected $validAttributes = [
        'ClaveProdServ',
        'NoIdentificacion',
        'Cantidad',
        'Unidad',
        'Descripcion',
        'ValorUnitario',
        'Importe',
    ];
}
