# php_ser_Class
php反序列化靶场课程，基于课程制作的靶场,单独去看代码没有什么太大的意义

可以直接去bilibili.com上搜索橙子科技工作室的反序列化视频，对照视频进行学习
https://space.bilibili.com/271803648

也可以直接通过docker部署，建议通过docker，不然部分php环境匹配不对会导致实验结果不正常

docker pull mcc0624/ser:1.8

docker run -p 8002:80 -d  mcc0624/ser:1.8

将端口直接映射到8002，直接访问http://127.0.0.1:8002即可打开靶场
