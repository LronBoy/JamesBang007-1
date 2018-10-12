<!-- # 10分钟学会 Less -->

<!-- ![Less的LOGO](http://www.bootcss.com/p/lesscss/img/logo.png) -->
![Less的LOGO](https://less.bootcss.com/public/img/less_logo.png)

`Less` 做为 `CSS` 的一种形式的扩展，它并没有阉割 `CSS` 的功能，而是在现有的 `CSS` 语法上，添加了很多额外的功能，将 `CSS` 赋予了动态语言的特性，如变量、继承、运算、函数等。
`Less` 既可以在 客户端 上运行 (支持IE 6+, Webkit, Firefox)，也可以借助`Node.js`在服务端运行。
所以学习 `Less` 是一件轻而易举的事情，下面我们就来看看具体语法。



## Less 语法

### 1、变量

很容易理解:

```
//设置变量
@nice-blue: #2182e8;
@light-blue: @nice-blue + #333;
@font-size: 14px;

//使用变量
.p1 { font-size: @font-size; color: @nice-blue; }
.p2 { font-size: @font-size + 4; color: @light-blue; }
```
编译后输出:
```
.p1 {
  font-size: 14px;
  color: #2182e8;
}
.p2 {
  font-size: 18px;
  color: #54b5ff;
}
```
请注意 `Less` 中的变量为完全的 ‘常量’ ，所以只能定义一次。



### 混合使用

在 Less 中我们可以定义一些通用的属性集为一个class，然后在另一个class中去调用这些属性。 下面有这样一个class:

```
//设置通用的属性集
.bordered {
  margin-bottom: 15px; padding-bottom: 5px; border-bottom: solid 1px #ccc;
}

//调用通用属性集
.title{
    font-size: 18px; color: #333; font-weight: bold;
    .bordered
}
.desc{
    color: #666;
    .bordered
}
```
编译后输出:
```
.bordered {
  margin-bottom: 15px;
  padding-bottom: 5px;
  border-bottom: solid 1px #ccc;
}
.title {
  font-size: 18px;
  color: #333;
  font-weight: bold;
  margin-bottom: 15px;
  padding-bottom: 5px;
  border-bottom: solid 1px #ccc;
}
.desc {
  color: #666;
  margin-bottom: 15px;
  padding-bottom: 5px;
  border-bottom: solid 1px #ccc;
}
```
