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
 * @var float $support 支持度 训练样本中频繁项集的最小相对量
 * @var float $confidence 置信度 在频繁项集中设置的项目的最小相对量
 */
$associator = new Apriori($support = 0.5, $confidence = 0.5);


/**
 * 训练
 *
 * @var array $samples 训练样本
 * @var array $labels
 */
//$samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
$samples=[
    ['鸟类','鸟笼','鸟食','猫粮','猫砂'],
    ['鱼食','鸟','鸟笼'],
    ['猫粮','狗粮','宠物玩具'],
    ['鸟','鸟笼','鸟食'],
    ['鸟','鸟笼'],
    ['猫粮','猫砂','宠物玩具'],
];
$labels  = [];

$associator->train($samples, $labels);

/**
 * 预测
 *
 * @param array $samples 样本
 */
//$samples = ['alpha','theta'];
$samples = ['鸟'];
$res = $associator->predict($samples);
var_dump($res);


