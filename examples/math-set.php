<?php
/**
 * 数学-集合 Math-Set
 * User: ttt
 * Date: 2018/11/14
 * Time: 11:04
 */

require_once __DIR__.'/../vendor/autoload.php';

use Phpml\Math\Set;

//创建集合
$set = new Set([1, 2, 2, 3, 1.1, -1, -10]);
$set->toArray(); //转换成数组
// return [-10, -1, 1, 1.1, 2, 3]

$set = new Set(['B', '', 'A']);
$set->toArray(); 
// return ['', 'A', 'B']

// *注入的数组按SORT_ASC排序，删除重复项并重写索引。

//并集 Union
$union = Set::union(new Set([1, 3]), new Set([1, 2]));
$union->toArray();
//return [1, 2, 3]

//交集 Intersection
$intersection = Set::intersection(new Set(['A', 'C']), new Set(['B', 'C']));
$intersection->toArray();
//return ['C']

//差集 Complement
$difference = Set::difference(new Set(['A', 'B', 'C']), new Set(['A']));
$union->toArray();
//return ['B', 'C']

//添加新元素 
$set = new Set([1, 2]);
$set->addAll([3]);
$set->add(4);
$set->toArray();
//return [1, 2, 3, 4]

//移除元素
$set = new Set([1, 2]);
$set->removeAll([2]);
$set->remove(1);
$set->toArray();
//return []

//检查元素是否存在

$set = new Set([1, 2]);
$set->containsAll([2, 3]);
//return false
$set->contains(1);
//return true

//计算元素个数
$set = new Set([1, 2]);
$set->cardinality();
//return 2

//判断是否为空
$set = new Set();
$set->isEmpty();
//return true

//在循环中使用
$set = new Set(['A', 'B', 'C']);
foreach($set as $element) {
    echo "$element, ";
}
// echoes A, B, C

//排列组合
$set = new Set([1, 2]);
var_dump(Set::power($set));
// array(4) {
//     [0]=>
//     object(Phpml\Math\Set)#2 (1) {
//       ["elements":"Phpml\Math\Set":private]=>
//       array(0) {
//       }
//     }
//     [1]=>
//     object(Phpml\Math\Set)#9 (1) {
//       ["elements":"Phpml\Math\Set":private]=>
//       array(1) {
//         [0]=>
//         int(1)
//       }
//     }
//     [2]=>
//     object(Phpml\Math\Set)#10 (1) {
//       ["elements":"Phpml\Math\Set":private]=>
//       array(1) {
//         [0]=>
//         int(2)
//       }
//     }
//     [3]=>
//     object(Phpml\Math\Set)#11 (1) {
//       ["elements":"Phpml\Math\Set":private]=>
//       array(2) {
//         [0]=>
//         int(1)
//         [1]=>
//         int(2)
//       }
//     }
//   }