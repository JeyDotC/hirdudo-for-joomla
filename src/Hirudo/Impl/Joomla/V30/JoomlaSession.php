<?php

/**
 * «Copyright 2012 Jeysson José Guevara Mendivil(JeyDotC)» 
 * 
 * This file is part of Hirudo.
 * 
 * Hirudo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 *  Hirudo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 * 
 *  You should have received a copy of the GNU General Public License
 *  along with Hirudo.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Hirudo\Impl\Joomla\V30;

use Hirudo\Core\Context\Session;
use Hirudo\Core\Annotations\Export;

/**
 * Represents a session, this implementation delegates the session management to
 * the Joomla! JSession class.
 * 
 * @Export(id="session")
 */
class JoomlaSession implements Session {

    public function id() {
        return $this->getSessionObject()->getId();
    }

    /**
     *
     * @return JSession
     */
    private function &getSessionObject() {
        $session = \JFactory::getSession();
        return $session;
    }

    public function &get($key, $default = null) {
        $object = $this->getSessionObject()->get($key, $default);
        return $object;
    }

    public function put($key, $value) {
        return $this->getSessionObject()->set($key, $value);
    }

    public function remove($key) {
        return $this->getSessionObject()->clear($key);
    }

    public function has($key) {
        return $this->getSessionObject()->has($key);
    }

    public function state() {
        return $this->getSessionObject()->getState();
    }

}

?>
