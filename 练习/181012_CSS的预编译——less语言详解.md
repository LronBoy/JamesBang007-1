<!-- # 10分钟学会 Less -->

<!-- ![Less的LOGO](http://www.bootcss.com/p/lesscss/img/logo.png) -->
![Less的LOGO](https://less.bootcss.com/public/img/less_logo.png)

`Less` 做为 `CSS` 的一种形式的扩展，它并没有阉割 `CSS` 的功能，而是在现有的 `CSS` 语法上，添加了很多额外的功能，将 `CSS` 赋予了动态语言的特性，如变量、继承、运算、函数等。
`Less` 既可以在 客户端 上运行 (支持IE 6+, Webkit, Firefox)，也可以借助`Node.js`在服务端运行。
所以学习 `Less` 是一件轻而易举的事情，下面我们就来看看具体语法。



## Less 语法

#### 变量

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



#### 混合使用

在 Less 中我们可以定义一些通用的属性集为一个class，然后在另一个class中去调用这些属性。 下面有这样一个class:

```
//设置通用的属性集
.bordered {
  margin-bottom: 15px; padding-bottom: 5px; border-bottom: solid 1px #ccc;
}
```
当我们需要在其他class中引入通用的属性集时，我们只需要在任何class中像下面这样调用就可以了：
```
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
`.bordered` class里面的属性样式都会在 `.title` 和 `.desc` 中体现出来:
```
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
任何 CSS `class`, `id` 或者 元素 属性集都可以以同样的方式引入。



#### 带参数的混合

在 Less 中，还可以像函数一样定义一个带参数的属性集合:
```
.border-radius (@radius) {
  border-radius: @radius;
  -moz-border-radius: @radius;
  -webkit-border-radius: @radius;
}
```

然后在其他class中像这样调用它:
```
.button {
  .border-radius(6px);  
}
.con {
  .border-radius(10px);
}
```



#### 嵌套规则

LESS 可以让我们以嵌套的方式编写CSS，我们先看下下面这段 CSS:
```
#header .logo {
  width: 200px;
}
#header .nav {
  background: #f8f8f8;
  overflow: hidden;
}
#header .nav li {
  float: left;
  padding: 0 20px;
  line-height: 30px;
  transition: all 0.5s;
}
#header .nav li:hover {
  background: #ccc;
}
```

在 LESS 中, 我们就可以这样写:
```
#header{
    .logo{ width: 200px; }
    .nav{
        background: #f8f8f8; overflow: hidden;
        li{
            float: left; padding: 0 20px; line-height: 30px; transition: all .5s;
            &:hover{
                background: #ccc;
            }
        }
    }
}
```
这样代码更简洁了，而且感觉跟DOM结构格式有点像。

注意 `&` 符号的使用—如果你想写串联选择器，而不是写后代选择器，就可以用到`&`了。 这对伪类尤其有用，如 `:hover` 和 `:before`等。




#### 运算

Less中任何数字、颜色或者变量都可以参与运算（加、减、乘、除），这样就可以实现属性值之间的复杂关系。下面我们来看一组例子:
```
@base: 5;
@filler: @base * 2;

.demo4{
    padding: 5px * @base;
    width: 100% / 2 + @filler;
    color: #333 - #111;
    background-color: #e6ebf9;
}
```
编译后输出:
```
.demo4 {
  padding: 25px;
  width: 60%;
  font-size: 16px;
  color: #222222;
  background-color: #e6ebf9;
}
```
括号也同样允许使用：
```
.demo4{
    border: (@base + 2px)/2 solid #333;
}
```



#### 注释

CSS 形式的注释在 LESS 中是依然保留的:
```
/* Hello, I'm a CSS-style comment */
.class { color: black }
```
LESS 同样也支持双斜线的注释, 但是编译成 CSS 的时候自动过滤掉:
```
// Hi, I'm a silent comment, I won't show up in your CSS
.class { color: white }
```



#### Importing

我们可以在main文件中通过下面的形势引入 .less 文件, .less 后缀可带可不带:
```
@import "lib.less";
@import "lib";
```
如果想导入一个CSS文件，并且不想LESS对它进行处理，只需要使用.css后缀即可:
```
@import "lib.css";
```
这样LESS就会跳过它不去处理它.



## Less编译工具

#### 1、Koala

![前端预处理器语言编译工具koala](http://koala-app.com/img/screenshot.png)

一款可视化的前端预处理器语言图形编译工具，优点是操作比较简便，多语言支持，监听文件实时编译，可以批量操作，Windows、Linux、Mac都能完美运行。

http://koala-app.com/index-zh.html


#### 2、Node.js 环境中使用 Less

![Node.js](http://nodejs.cn/assets/images/logo.svg)

1、<a href="http://nodejs.cn/">下载Windows 安装包(.msi)</a>，选择安装位置："D:\Program Files\nodejs\"，然后一路"Next "即可。

2、检测PATH环境变量是否配置了Node.js，点击开始 => 运行 => 输入"cmd" => 输入命令"`path`"。

3、检查Node.js版本
`node --version`

4、安装Less

4.1、在【Node.js command prompt】里输入以下命令
```
d:
cd D:\Program Files\nodejs\node_modules\npm
//下面命令是安装less，注意一定要有-g，否则还得做些其他工作
npm install less -g
//下面命令用于安装css压缩插件
npm install less-plugin-clean-css
```

4.2、安装完成后就可以使用lessc的命令了
```
//下面命令编译less文件生成css
lessc d:\styles.less d:\styles.css
//下面命令启用css压缩插件，生成压缩后的css文件
lessc d:\styles.less d:\styles.min.css -clean-css
```

4.3、IDE工具集成——HBuilder预编译less配置

    文件后缀    .less
    处罚命令    C:\Users\James\AppData\Roaming\npm\lessc.cmd
    命令参数    %FileName% %FileBaseName%.css
