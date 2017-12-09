<?php
/**
 * 关联规则学习 - Apriori算法
 * User: ttt
 * Date: 2017/12/9
 * Time: 21:20
 */

require dirname(__DIR__).'/vendor/autoload.php';

use \Phpml\Association\Apriori;

/**
 * @var float $support 最小相对频繁项目集的训练样本
 * @var float $confidence  最小相对数量的项目集频繁项集
 */
$associator = new Apriori($support = 0.5, $confidence = 0.5);


/**
 * 训练
 *
 * @var array $samples 训练样本
 * @var array $labels
 */
$samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
$labels  = [];

$associator->train($samples, $labels);

/**
 * 预测
 *
 * @param array $samples 样本
 */
$samples = ['alpha','theta'];
$res = $associator->predict($samples);
var_dump($res);


