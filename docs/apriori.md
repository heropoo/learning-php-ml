# 关联性规则学习 - Apriori算法


[http://blog.csdn.net/php_ajaxx/article/details/78880952](http://blog.csdn.net/php_ajaxx/article/details/78880952)


[https://www.cnblogs.com/qwertWZ/p/4510857.html](https://www.cnblogs.com/qwertWZ/p/4510857.html)

// todo 待会写个php的实现

从大规模数据集中寻找物品间的隐含关系被称作**关联分析(association analysis)**或者**关联规则学习(association rule learning)**

### 关联分析
关联分析是在大规模数据集中寻找有趣关系的任务。这些关系可以有两种形式：
* 频繁项集(frequent item sets): 是经常出现在一块儿的物品的集合
* 关联规则(association rules): 暗示两种物品之间可能存在很强的关系

假设目前宠物商店的交易系统中一下表中的几张顾客购物清单

| 交易订单号     | 顾客购物清单 |
| --------  | ----: |
| 001         | 鸟、鸟笼、鸟食、猫粮、猫砂 |   
| 002         | 鱼食、鸟、鸟笼       |  
| 003         | 猫粮、狗粮、宠物玩具  |
| 004         | 鸟、鸟笼、鸟食  |
| 005         | 猫粮、猫砂、宠物玩具  |


### Apriori算法

是最常用的关联规则挖掘算法。Apriori原理是说如果某个项集是频繁的，那么它的所有子集也是频繁的。更常用的是它的逆否命题，即如果一个项集是非频繁的，那么它的所有超集也是非频繁的。


* 置信度(Confidence)
* 支持度(Support)
