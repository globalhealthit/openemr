<?php

/**
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 *
 * @author    Brad Sharp <brad.sharp@claimrev.com>
<<<<<<< HEAD
 * @author    Jerry Padgett <sjpadgett@gmail.com>
 * @copyright Copyright (c) 2022-2025 Brad Sharp <brad.sharp@claimrev.com>
 * @copyright Copyright (c) 2024-2025 Jerry Padgett <sjpadgett@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

require_once __DIR__ . "/../../../../globals.php";
=======
 * @copyright Copyright (c) 2022 Brad Sharp <brad.sharp@claimrev.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

require_once "../../../../globals.php";
>>>>>>> d11e3347b (modules setup and UI changes)

use OpenEMR\Common\Csrf\CsrfUtils;
use OpenEMR\Modules\Dorn\LabCompendiumInstall;

if (!empty($_GET)) {
    if (!CsrfUtils::verifyCsrfToken($_GET["csrf_token_form"])) {
        CsrfUtils::csrfNotVerified();
    }
    $labGuid = $_REQUEST['labGuid'];
<<<<<<< HEAD
    echo "<div style='background-color: white; color: black'>" .
    "<div>" . xlt('Compendium Install') . "</div><ul>";
    LabCompendiumInstall::uninstall($labGuid);
    LabCompendiumInstall::install($labGuid);
    echo "</ul><div>" . xlt('Compendium Install Complete') . "</div></div>";
=======
    LabCompendiumInstall::uninstall($labGuid);
    LabCompendiumInstall::install($labGuid);
>>>>>>> d11e3347b (modules setup and UI changes)
}
