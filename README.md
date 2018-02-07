# Learning php-ml

## PHP-ML - PHP的机器学习库(Machine Learning library for PHP)

![PHP-ML - Machine Learning library for PHP](https://raw.githubusercontent.com/php-ai/php-ml/master/docs/assets/php-ml-logo.png)

## 相关文档

官方文档: [http://php-ml.readthedocs.org/](http://php-ml.readthedocs.org/)

官方的github地址: [https://github.com/php-ai/php-ml](https://github.com/php-ai/php-ml)

官方的示例: [https://github.com/php-ai/php-ml-examples](https://github.com/php-ai/php-ml-examples)

赛灵开源技术研发社区维护的中文文档: [http://doc.celerstar.com/website/soft/php-ml/](http://doc.celerstar.com/website/soft/php-ml/)

## 安装
PHP-ML 要求 `PHP >= 7.1`

目前这个库正在开发中，你可以通过`composer`安装:

```
composer require php-ai/php-ml
```

## 特性

* 关联规则学习-Association rule learning
    * [Apriori算法](./docs/apriori.md)
* 分类-Classification
    * [SVC](http://php-ml.readthedocs.io/en/latest/machine-learning/classification/svc/)
    * [k-Nearest Neighbors](http://php-ml.readthedocs.io/en/latest/machine-learning/classification/k-nearest-neighbors/)
    * [Naive Bayes](http://php-ml.readthedocs.io/en/latest/machine-learning/classification/naive-bayes/)
    * Decision Tree (CART)
    * Ensemble Algorithms
        * Bagging (Bootstrap Aggregating)
        * Random Forest
        * AdaBoost
    * Linear
        * Adaline
        * Decision Stump
        * Perceptron
        * LogisticRegression
* 回归-Regression
    * [Least Squares](http://php-ml.readthedocs.io/en/latest/machine-learning/regression/least-squares/)
    * [SVR](http://php-ml.readthedocs.io/en/latest/machine-learning/regression/svr/)
* 聚类-Clustering
    * [k-Means](http://php-ml.readthedocs.io/en/latest/machine-learning/clustering/k-means/)
    * [DBSCAN](http://php-ml.readthedocs.io/en/latest/machine-learning/clustering/dbscan/)
    * Fuzzy C-Means
* 度量-Metric
    * [Accuracy](http://php-ml.readthedocs.io/en/latest/machine-learning/metric/accuracy/)
    * [Confusion Matrix](http://php-ml.readthedocs.io/en/latest/machine-learning/metric/confusion-matrix/)
    * [Classification Report](http://php-ml.readthedocs.io/en/latest/machine-learning/metric/classification-report/)
* 工作流-Workflow
    * [Pipeline](http://php-ml.readthedocs.io/en/latest/machine-learning/workflow/pipeline)
* 神经网络-Neural Network
    * [Multilayer Perceptron Classifier](http://php-ml.readthedocs.io/en/latest/machine-learning/neural-network/multilayer-perceptron-classifier/)
* 交叉验证-Cross Validation
    * [Random Split](http://php-ml.readthedocs.io/en/latest/machine-learning/cross-validation/random-split/)
    * [Stratified Random Split](http://php-ml.readthedocs.io/en/latest/machine-learning/cross-validation/stratified-random-split/)
* 预处理-Preprocessing
    * [Normalization](http://php-ml.readthedocs.io/en/latest/machine-learning/preprocessing/normalization/)
    * [Imputation missing values](http://php-ml.readthedocs.io/en/latest/machine-learning/preprocessing/imputation-missing-values/)
* 特征提取-Feature Extraction
    * [Token Count Vectorizer](http://php-ml.readthedocs.io/en/latest/machine-learning/feature-extraction/token-count-vectorizer/)
    * [Tf-idf Transformer](http://php-ml.readthedocs.io/en/latest/machine-learning/feature-extraction/tf-idf-transformer/)
* 降维-Dimensionality Reduction
    * PCA (Principal Component Analysis)
    * Kernel PCA
    * LDA (Linear Discriminant Analysis)
* 数据集-Datasets
    * [Array](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/array-dataset/)
    * [CSV](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/csv-dataset/)
    * [Files](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/files-dataset/)
    * Ready to use:
        * [Iris](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/demo/iris/)
        * [Wine](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/demo/wine/)
        * [Glass](http://php-ml.readthedocs.io/en/latest/machine-learning/datasets/demo/glass/)
* 模型管理-Models management
    * [Persistency](http://php-ml.readthedocs.io/en/latest/machine-learning/model-manager/persistency/)
* 数学-Math
    * [Distance](http://php-ml.readthedocs.io/en/latest/math/distance/)
    * [Matrix](http://php-ml.readthedocs.io/en/latest/math/matrix/)
    * [Set](http://php-ml.readthedocs.io/en/latest/math/set/)
    * [Statistic](http://php-ml.readthedocs.io/en/latest/math/statistic/)
	* Linear Algebra


