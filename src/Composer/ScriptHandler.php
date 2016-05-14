<?php
/**
 * Author: Toby Griffiths <toby@cubicmushroom.co.uk>
 * Date: 14/05/2016
 */

namespace CubicMushroom\ProjectBootstrap\Composer;

use Composer\Script\Event;

/**
 * Composer scripts to run during composer hooks
 *
 * @package CubicMushroom\ProjectBootstrap
 */
class ScriptHandler
{
    /**
     * Prompts the user for project details
     *
     * @param Event $event
     */
    public static function initialiseProject(Event $event)
    {
        $event->getIO()->write('Hello world');
    }
}