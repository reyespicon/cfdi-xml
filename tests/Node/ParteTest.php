<?php

/*
 * This file is part of the cfdi-xml project.
 *
 * (c) Kinedu
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kinedu\CfdiXML\Tests\Node;

use Kinedu\CfdiXML\Node\Parte;
use Kinedu\CfdiXML\Tests\Common\NodeTest;

class ParteTest extends NodeTest
{
    /**
     * The node name.
     *
     * @var string
     */
    protected $nodeName = 'cfdi:Parte';

    public function setUp()
    {
        $this->node = new Parte([
            'ClaveProdServ' => '41116401',
            'NoIdentificacion' => '7501030283645',
            'Cantidad' => '10',
            'Unidad' => 'Piezas',
            'Descripcion' => 'Martillos de impacto',
        ]);
    }

    public function testValidAttributes()
    {
        $this->assertArraySubset($this->node->getValidAttributes(), [
            'ClaveProdServ',
            'NoIdentificacion',
            'Cantidad',
            'Unidad',
            'Descripcion',
            'ValorUnitario',
            'Importe',
        ]);
    }
}
