<?php
/**
 * This file is part of the maintenance package.
 *
 * @author (c) Friends Of REDAXO
 * @author <friendsof@redaxo.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (!$this->hasConfig()) {
    $this->setConfig('ip', '');
    $this->setConfig('frontend_aktiv', 'Deaktivieren');
    $this->setConfig('redirect_frontend', '');
    $this->setConfig('redirect_backend', '');
    $this->setConfig('backend_aktiv', '0');
    $this->setConfig('blockSession', 'Inaktiv');
    $this->setConfig('secret', '');
}
