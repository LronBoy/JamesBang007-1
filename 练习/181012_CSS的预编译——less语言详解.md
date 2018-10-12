<!-- # 10分钟学会 Less -->

<!-- ![Less的LOGO](http://www.bootcss.com/p/lesscss/img/logo.png) -->
![Less的LOGO](https://less.bootcss.com/public/img/less_logo.png)

`Less` 做为 `CSS` 的一种形式的扩展，它并没有阉割 `CSS` 的功能，而是在现有的 `CSS` 语法上，添加了很多额外的功能，将 `CSS` 赋予了动态语言的特性，如变量、继承、运算、函数等。
`Less` 既可以在 客户端 上运行 (支持IE 6+, Webkit, Firefox)，也可以借助`Node.js`在服务端运行。
所以学习 `Less` 是一件轻而易举的事情，下面我们就来看看具体语法。



## Less 语法

### 变量
很容易理解:
```
@nice-blue: #2A98DA;
@light-blue: @nice-blue + #111;

#header { color: @light-blue; }
```
输出:
```
#header { color: #6c94be; }
```
