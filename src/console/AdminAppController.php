<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 29/7/18
 * Time: 5:38 PM
 */

namespace codexten\admin\dev\console;

/**
 * Class AdminAppController
 *
 * @package entero\admin\dev\console
 * @author Jomon Johnson <jomon@entero.in>
 */
class AdminAppController extends \hidev\base\Controller
{
    public $defaultAction = 'deploy';

    public function actionDeploy()
    {
        return $this->take('adminApp')->save();
    }
}