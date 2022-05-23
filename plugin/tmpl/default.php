<?php
/**
 * @package    MOD_WEBSHELL
 *
 * @author     Podalirius <podalirius@protonmail.com>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://podalirius.net/
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<a href="<?php echo $domain; ?>">
	<?php echo '[PROJECT_NAME]'; ?>
</a>