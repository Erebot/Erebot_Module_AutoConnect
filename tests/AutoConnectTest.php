<?php
/*
    This file is part of Erebot.

    Erebot is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Erebot is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Erebot.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(
    dirname(__FILE__) .
    DIRECTORY_SEPARATOR . 'testenv' .
    DIRECTORY_SEPARATOR . 'bootstrap.php'
);

class   AutoConnectTest
extends ErebotModuleTestCase
{
    /* Testing this module is quite meaningless for the time being
     * because it's pretty much empty. Therefore, we only check
     * whether we can actually load the module, nothing more. */
    public function testAutoConnect()
    {
        $this->_module = new Erebot_Module_AutoConnect(
            $this->_connection,
            NULL
        );
        $this->_module->reload( Erebot_Module_Base::RELOAD_ALL |
                                Erebot_Module_Base::RELOAD_INIT);
    }
}

