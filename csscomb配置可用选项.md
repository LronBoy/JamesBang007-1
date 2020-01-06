# 创建自定义配置

您可以轻松编写自己的配置。唯一的要求是config是有效的JSON才能正常工作。

这是一个例子：
```json
{
    "exclude": ["node_modules/**"],
    "verbose": true,

    "always-semicolon": true,
    "color-case": "lower",
    "color-shorthand": true,
    "element-case": "lower",
    "eof-newline": true,
    "leading-zero": false,
    "quotes": "single",
    "remove-empty-rulesets": true,
    "strip-spaces": true,
    "unitless-zero": true,
    "vendor-prefix-align": true
}
```
查看可用选项，然后选择所需的选项。 您可以使用我们的可视化配置生成器来选择大多数选项。

```
{
  "always-semicolon": true,  // 总是显示分号
  "block-indent": "    ",  // 代码块缩进，可以是数字或字符串与空白和制表符等
  "color-case": "lower",  // 十六进制颜色统一，可选值'lower'全部小写；'upper'全部大写
  "color-shorthand": true,  // 十六进制颜色缩写与否
  "element-case": "lower",  // 选择器元素统一，可选值'lower'全部小写；'upper'全部大写
  "eof-newline": true,  // 文件结束后添换行
  "leading-zero": false,  // 是否需要小数点前的0
  "quotes": "single",  // 引号风格，可选值'single'单引号，'double'双引号
  "remove-empty-rulesets": true,  // 是否移除空规则集，为true时，如：'a{  }'这样的空规则集将被移除
  "space-after-colon": " ",  // 冒号后规则
  "space-after-combinator": " ",  // 选择符后规则
  "space-between-declarations": 1,  // 命名空间后规则
  "space-after-opening-brace": " ",  // '{' 之后的规则
  "space-after-selector-delimiter": " ",  // 选择器之后的规则
  "space-before-closing-brace": "\n",  // '}' 之后的规则
  "space-before-colon": "", // 冒号前的规则
  "space-before-combinator": " ", // 选择符前规则
  "space-before-opening-brace": " ",  // '{' 之前的规则
  "space-before-selector-delimiter": "", // 选择器之前的规则
  "strip-spaces": true, // 是否修剪尾随的空格
  "tab-size": 4, // 缩进大小
  "unitless-zero": true, // 是否移除0后的单位值，比如'0px'格式化为'0'
  "vendor-prefix-align": true, // 是否对齐属性和值中的前缀
  "lines-between-rulesets": 0, // 规则与规则之间的换行数
}
```


# 配置选项

您可以使用多种选项，默认情况下，所有这些功能都是关闭的。

以下是处理css时应用顺序的完整列表：

- [always-semicolon](#always-semicolon)
- [remove-empty-rulesets](#remove-empty-rulesets)
- [color-case](#color-case)
- [color-shorthand](#color-shorthand)
- [element-case](#element-case)
- [eof-newline](#eof-newline)
- [leading-zero](#leading-zero)
- [quotes](#quotes)
- [sort-order-fallback](#sort-order-fallback)
- [space-after-colon](#space-after-colon)
- [space-after-combinator](#space-after-combinator)
- [space-after-opening-brace](#space-after-opening-brace)
- [space-after-selector-delimiter](#space-after-selector-delimiter)
- [space-before-colon](#space-before-colon)
- [space-before-combinator](#space-before-combinator)
- [space-before-opening-brace](#space-before-opening-brace)
- [space-before-selector-delimiter](#space-before-selector-delimiter)
- [space-between-declarations](#space-between-declarations)
- [block-indent](#block-indent)
- [sort-order](#sort-order)
- [strip-spaces](#strip-spaces)
- [space-before-closing-brace](#space-before-closing-brace)
- [unitless-zero](#unitless-zero)
- [tab-size](#tab-size)
- [vendor-prefix-align](#vendor-prefix-align)
- [lines-between-rulesets](#lines-between-rulesets)

Following options are ignored while processing `*.sass` files:

- always-semicolon
- space-before-opening-brace
- space-after-opening-brace
- space-before-closing-brace
- space-between-declarations


## always-semicolon 总是显示分号

是否在 last value/mixin 之后添加分号。

可接受值: `true`.

例： `{ "always-semicolon": true }`

```css
/* before */
a { color: red; text-decoration: underline }

/* after */
a { color: red; text-decoration: underline; }
```

### 预处理器

In `*.scss` and `*.less` files semicolons are not added after `}`
even if it's part of a value.

在`*.scss`和`*.less`文件中，即使分号是值的一部分，也不会在`}`之后添加分号。

例： `{ "always-semicolon": true }`

```scss
// before
div {
    color: tomato;
    font: {
        family: fantasy;
        size: 16px
        }
    }

// after
div {
    color: tomato;
    font: {
        family: fantasy;
        size: 16px;
        }
    }
```

## block-indent 代码块缩进

设置代码块内的缩进量，包括媒体查询和嵌套规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带有空格和制表符的字符串。请注意，此处不允许换行。

例： `{ "block-indent": 4 }`

```scss
// Before:
a {
top: 0;
  p {
      color: tomato;
position: happy;
 }
}

// After:
a {
    top: 0;
    p {
        color: tomato;
        position: happy;
        }
    }
```

例： `{ "block-indent": "" }`

```scss
// Before:
a {
top: 0;
  p {
      color: tomato;
position: happy;
 }
}

// After:
a {
top: 0;
p {
color: tomato;
position: happy;
}
}
```

## color-case   颜色大小写

统一十六进制颜色的大小写。

可接受的值：

* `lower` — 全部小写,
* `upper` — 全部大写.

例： `{ "color-case": "lower" }`

```css
/* before */
a { color: #FFF }

/* after */
a { color: #fff }
```

## color-shorthand  颜色简写

是否扩展十六进制颜色或使用简写。

可接受的值：

* `true` — use shorthands;
* `false` — expand hexadecimal colors to 6 symbols.

例： `{ "color-shorthand": true }`

```css
/* before */
b { color: #ffcc00 }

/* after */
b { color: #fc0 }
```

例： `{ "color-shorthand": false }`

```css
/* before */
b { color: #fc0 }

/* after */
b { color: #ffcc00 }
```

## element-case 标签元素大小写

统一标签元素选择器的大小写。

可接受的值：

* `lower` — 全部小写,
* `upper` — 全部大写.

例： `{ "element-case": "upper" }`

```css
/* before */
li > a { color: red }

/* after */
LI > A { color: red }
```

## eof-newline  换行符

Add/remove line break at EOF.

可接受的值：

* `true` — 添加换行符;
* `false` – 删除换行符.

例： `{ "eof-newline": true }`

`a { color: red }` &rarr; `a { color: red }\n`

例： `{ "eof-newline": false }`

`a { color: red }\n` &rarr; `a { color: red }`

## exclude  排除

列出在梳理时应忽略的文件。

可接受的值：

* `{String[]}` — [Ant 路径模式的数组](http://ant.apache.org/manual/dirtasks.html#patterns).

例： `{ "exclude": ["node_modules/**"] }` — 排除`node_modules`目录下的所有文件和目录。

## leading-zero 小数点前的0

添加/删除 小数点前的0。

可接受的值：

* `true` — 添加;
* `false` — 删除.

例： `{ "leading-zero": false }`

```css
/* before */
p { padding: 0.5em }

/* after */
p { padding: .5em }
```

## quotes   引号风格

统一引号风格。

可接受的值：

* `single` — 单引号，将所有 `"` 变换为 `'`;
* `double` — 双引号，将所有 `'` 变换为 `"`.

例： `{ "quotes": "single" }`

```css
/* before */
p[href^="https://"]:before { content: "secure" }

/* after */
p[href^='https://']:before { content: 'secure' }
```

## remove-empty-rulesets    移除空规则集

移除所有只包含空格的规则集。 是否移除空规则集，为true时，如：'a{  }'这样的空规则集将被移除

可接受的值： `true`

例： `{ "remove-empty-rulesets": true }`.

`a { color: red; } p { /* hey */ } b { }` &rarr; `a { color: red; } p { /* hey */ } `

## sort-order   排序

设置排序规则。

**注意：**: 使用[预定义的配置](https://github.com/csscomb/csscomb.js/tree/master/config)之一作为示例。 

可接受的值：

* `{Array}` of rules
* `{Array}` of arrays of rules for groups separation 用于组分离的规则数组

例： `{ "sort-order": [ "margin", "padding" ] }`

```css
/* before */
p {
    padding: 0;
    margin: 0;
}

/* after */
p {
    margin: 0;
    padding: 0;
}
```

例： `{ "sort-order": [ [ "margin", "padding" ], [ "border", "background" ] ] }`

```css
/* before */
p {
    background: none;
    border: 0;
    margin: 0;
    padding: 0;
}

/* after */
p {
    margin: 0;
    padding: 0;

    border: 0;
    background: none;
}
```

### sort-order vs. preprocessors    顺序与预处理器

If you sort properties in `*.scss` or `*.less` files, you can use one of 3 keywords in your config:
如果您在 `*.scss` 或 `*.less` 文件中，对属性进行排序，则可以在配置中使用3个关键字之一：

* `$variable` — 用于变量声明（例如Sass中的 `$var` 或LESS中的 `@var`）；
* `$include` — 适用于所有已指定的混合器 (例如 `@include ...` in Sass or `.mixin()` in LESS); 
* `$include mixin-name` — 用于具有指定名称的混合器 (例如 `@include mixin-name` in Sass or `.mixin-name()` in LESS);
* `$extend` — 用于扩展 (例如 `@extend .foo` in Sass or `&:extend(.foo)` in LESS);
* `$import` — 用于 `@import` 规则。

例： `{ "sort-order": [ [ "$variable" ], [ "$include" ], [ "top", "padding" ], [ "$include media" ] ] }`

```scss
/* before */
p {
    padding: 0;
    @include mixin($color);
    $color: tomato;
    @include media("desktop") {
        color: black;
    }
    top: 0;
}

/* after */
p {
    $color: tomato;

    @include mixin($color);

    top: 0;
    padding: 0;

    @include media("desktop") {
        color: black;
    }
}
```

### sort-order vs. leftovers    顺序与剩余属性

当某些属性未在`sort-order`选项中提及时，它们将以与源样式表中相同的顺序插入新组中所有已排序的属性之后。

您可以通过使用“剩余”标记覆盖此标记：`...`- 只需将其放置在其自己的组中，或放置在任何其他组的其他属性附近，CSSComb 会将所有未排序的属性放置在`...`处于`sort-order`中的位置。

因此，有了这个值：

``` json
{
    "sort-order": [
        ["$variable"],
        ["position"],
        ["...", "border"],
        ["$include"],
        ["font"]
    ]
}
```

一切属性将分为五组：`$variable`，然后`position`分组，然后将所有剩余属性和`border`分组，然后`$include`所包含项和`font`分组。

## sort-order-fallback 排序的补充

对 `sort-order` 列表中未指定的属性应用特殊排序规则。对[leftovers](#sort-order-vs-leftovers)很有效。**注意：**: 仅当提供[sort order](#sort-order)列表时，此选项才适用。

可接受的值：

* `abc` - 对未知选项，按字母顺序进行排序。

例： `{ "sort-order-fallback": "abc", "sort-order": ["top"] }`

```scss
// Before:
a {
    height: 100px;
    color: tomato;
    top: 0;
}

// After:
a {
    top:0;

    color:tomato;
    height: 100px;
}
```

例： `{ "sort-order-fallback": "abc", "sort-order": ["..."] }`

```scss
// Before:
a {
    height: 100px;
    color: tomato;
    top: 0;
}

// After:
a {
    color:tomato;
    height: 100px;
    top:0;
}
```

## space-after-colon    冒号后规则

声明在 `:` 之后的空格规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-after-colon": "" }`

```scss
// Before:
a {
    top: 0;
    color: tomato;
}

// After:
a {
    top:0;
    color:tomato;
}
```

例： `{ "space-after-colon": 1 }`

```scss
// Before:
a {
    top:0;
    color:tomato;
}

// After:
a {
    top: 0;
    color: tomato;
}
```

## space-after-combinator 选择符后规则

设置在选择器之后的规则(例如，在类似 `p > a` 的选择器中)。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-after-combinator": 1 }`

```scss
// Before:
p>a { color: panda; }

// After:
p> a { color: panda; }
```

例： `{ "space-after-combinator": "\n  " }`

```scss
// Before:
p > a { color: panda; }

// After:
p >
  a { color: panda; }
```

## space-between-declarations   声明之间规则

在声明之间的规则（即 `color: tomato`）。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-between-declarations": 1 }`

```scss
// Before:
a {
    color: panda; /* comment */
    top: 0;
    /* comment */
    right: 0;
    position: absolute
    }

// After:
a {
    color: panda; /* comment */ top: 0;
    /* comment */
    right: 0; position: absolute
    }
```

例： `{ "space-between-declarations": "\n  " }`

```scss
// Before:
a {
  color: panda; top: 0; right: 0}

// After:
a {
  color: panda;
  top: 0;
  right: 0;}
```


## space-after-opening-brace    左大括号后的规则

设置在 `{` 之后的规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-after-opening-brace": 1 }`

```scss
// Before:
a {color: panda;}

// After:
a { color: panda;}
```

例： `{ "space-after-opening-brace": "\n" }`

```scss
// Before:
a{color: panda;}

// After:
a{
color: panda;}
```

## space-after-selector-delimiter 选择器分隔符之后的规则

设置在选择器分隔符之后的空间规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-after-selector-delimiter": 1 }`

```scss
// Before:
a,b{
    color: panda;
    }

// After:
a, b {
    color: panda;
    }
```

例： `{ "space-after-selector-delimiter": "\n" }`

```scss
// Before:
a, b{
    color: panda;
    }

// After:
a,
b{
    color: panda;
    }
```

## space-before-closing-brace   右大括号前的规则

设置在 `}` 之前的空间规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-before-closing-brace": 1 }`

```scss
// Before:
a {
    top: 0;
    color: tomato;
}

// After:
a {
    top: 0;
    color: tomato; }
```

例： `{ "space-before-closing-brace": "\n" }`

```scss
// Before:
a {
    top: 0;
    color: tomato;}

// After:
a {
    top: 0;
    color: tomato;
}
```

## space-before-colon   冒号前的规则

设置在 `:` 之前的空间规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-before-colon": "" }`

```scss
// Before:
a {
    top : 0;
    color : tomato;
}

// After:
a {
    top: 0;
    color: tomato;
}
```

例： `{ "space-before-colon": 1 }`

```scss
// Before:
a {
    top:0;
    color:tomato;
}

// After:
a {
    top :0;
    color :tomato;
}
```

## space-before-combinator  选择符前规则

设置在选择器之前的规则(例如，在类似 `p > a` 的选择器中)。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-before-combinator": 1 }`

```scss
// Before:
p>a { color: panda; }

// After:
p >a { color: panda; }
```

例： `{ "space-before-combinator": "\n" }`

```scss
// Before:
p > a { color: panda; }

// After:
p
> a { color: panda; }
```

## space-before-opening-brace

设置在 `{` 之前的规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-before-opening-brace": 1 }`

```scss
// Before:
a{
    color: panda;
    }

// After:
a {
    color: panda;
    }
```

例： `{ "space-before-opening-brace": "\n" }`

```scss
// Before:
a{
    color: panda;
    }

// After:
a
{
    color: panda;
    }
```

## space-before-selector-delimiter  选择器分隔符之前的规则

设置在选择器分隔符之前的空间规则。

可接受的值：

* `{Number}` — 空格数;
* `{String}` — 带空格、制表符或换行符的字符串。

例： `{ "space-before-selector-delimiter": 0 }`

```scss
// Before:
a , b{
    color: panda;
    }

// After:
a, b {
    color: panda;
    }
```

例： `{ "space-before-selector-delimiter": "\n" }`

```scss
// Before:
a, b{
    color: panda;
    }

// After:
a
,b{
    color: panda;
    }
```

## strip-spaces 尾随空格

是否修剪尾随的空格。

可接受的值： `true`.

例： `{ "strip-spaces": true }`

`a { color: red } \n \n \n` &rarr; `a { color: red }\n`

`a { color: red }\t` &rarr; `a { color: red }`

## tab-size tab缩进大小

设置制表符大小（替换制表符的空格数）。

可接受的值：

* `{Number}` — 空格数;

例： `{ "tab-size": 2 }`

```scss
// Before:
a{
	color: panda;
	}

// After:
a {
  color: panda;
  }
```

## template

**注意**：有关更多信息，请参阅[配置文档](configuration.md#override-templates-settings)。

可接受的值：

* `{String}` — path to the `.css` file.

例： `{ "template": "example.css" }`

## unitless-zero    0后的单位值

是否移除0后的单位值。

可接受的值： `true`.

例： `{ "unitless-zero": true }`

```css
/* before */
img { border: 0px }

/* after */
img { border: 0 }
```

## vendor-prefix-align  前缀对齐

是否对齐属性和值中的前缀。

可接受的值： `true`.

例： `{ "vendor-prefix-align": true }`

```css
/* before */
a
{
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: -webkit-linear-gradient(top, #fff 0, #eee 100%);
    background: -moz-linear-gradient(top, #fff 0, #eee 100%);
    background: linear-gradient(to bottom, #fff 0, #eee 100%);
}

/* after */
a
{
    -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
            border-radius: 3px;
    background: -webkit-linear-gradient(top, #fff 0, #eee 100%);
    background:    -moz-linear-gradient(top, #fff 0, #eee 100%);
    background:         linear-gradient(to bottom, #fff 0, #eee 100%);
}
```

## lines-between-rulesets

规则集与规则集之间的换行数。

可接受的值：

* `{Number}` — 换行数;

例： `{ "lines-between-rulesets":  1}`

```scss
// Before:
.foo {
    @include border-radius(5px);
    background: red;
    .baz {
        .test {
            height: 50px;
        }
    }
}.bar {
    border: 1px solid red;
    @media (min-width: 500px) {
        width: 50px;
    }
}

// After:
.foo {
    @include border-radius(5px);
    background: red;

    .baz {
        .test {
            height: 50px;
        }
    }
}

.bar {
    border: 1px solid red;

    @media (min-width: 500px) {
        width: 50px;
    }
}
```

## verbose

是否在CLI中使用 `--verbose` 选项。

可接受的值： `true`.

例： `{ "verbose": true }`

```bash
csscomb ./test

✓ test/integral.origin.css
  test/integral.expect.css

2 files processed
1 file fixed
96 ms spent
```
