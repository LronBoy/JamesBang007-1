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
  "block-indent": "   ",  // 代码块缩进，可以是数字或字符串与空白和制表符等
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
  "space-before-closing-brace": "\n",  // '}'  之后的规则
  "space-before-colon": "", // 冒号前的规则
  "space-before-combinator": " ", // 选择符前规则
  "space-before-opening-brace": " ",  // '{' 之前的规则
  "space-before-selector-delimiter": "", // 选择器之前的规则
  "strip-spaces": true, // 是否修剪尾随的空格
  "tab-size": 2, // 缩进大小
  "unitless-zero": true, // 是否移除0后的单位值，比如'0px'格式化为'0'
  "vendor-prefix-align": true, // 是否对齐属性和值中的前缀
  "lines-between-rulesets": 0, // 规则与规则之间的换行数
}
```


# 配置选项

您可以使用多种选项，默认情况下，所有这些功能都是关闭的。

以下是处理css时应用顺序的完整列表：

- [总是分号](#总是分号)
- [删除空规则集](#删除空规则集)
- [颜色大小写](#颜色大小写)
- [彩色速记](#彩色速记)
- [标签大小写](#大小写)
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

例: `{ "always-semicolon": true }`

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

例: `{ "always-semicolon": true }`

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

可接受的值:

* `{Number}` — 空格数;
* `{String}` — 带有空格和制表符的字符串。请注意，此处不允许换行。

Example: `{ "block-indent": 4 }`

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

例: `{ "block-indent": "" }`

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

Acceptable values:

* `lower` — 全部小写,
* `upper` — 全部大写.

例: `{ "color-case": "lower" }`

```css
/* before */
a { color: #FFF }

/* after */
a { color: #fff }
```

## color-shorthand

Whether to expand hexadecimal colors or use shorthands.

Acceptable values:

* `true` — use shorthands;
* `false` — expand hexadecimal colors to 6 symbols.

Example: `{ "color-shorthand": true }`

```css
/* before */
b { color: #ffcc00 }

/* after */
b { color: #fc0 }
```

Example: `{ "color-shorthand": false }`

```css
/* before */
b { color: #fc0 }

/* after */
b { color: #ffcc00 }
```

## element-case

Unify case of element selectors.

Acceptable values:

* `lower` — for lowercase;
* `upper` — for uppercase.

Example: `{ "element-case": "upper" }`

```css
/* before */
li > a { color: red }

/* after */
LI > A { color: red }
```

## eof-newline

Add/remove line break at EOF.

Acceptable values:

* `true` — add line break;
* `false` – remove line break.

Example: `{ "eof-newline": true }`

`a { color: red }` &rarr; `a { color: red }\n`

Example: `{ "eof-newline": false }`

`a { color: red }\n` &rarr; `a { color: red }`

## exclude

List files that should be ignored while combing.

Acceptable value:

* `{String[]}` — array of
  [Ant path patterns](http://ant.apache.org/manual/dirtasks.html#patterns).

Example: `{ "exclude": ["node_modules/**"] }` — exclude all files and
directories under `node_modules` dir.

## leading-zero

Add/remove leading zero in dimensions.

Acceptable values:

* `true` — add leading zero;
* `false` — remove leading zero.

Example: `{ "leading-zero": false }`

```css
/* before */
p { padding: 0.5em }

/* after */
p { padding: .5em }
```

## quotes

Unify quotes style.

Acceptable values:

* `single` — transform all `"` to `'`;
* `double` — transform all `'` to `"`.

Example: `{ "quotes": "single" }`

```css
/* before */
p[href^="https://"]:before { content: "secure" }

/* after */
p[href^='https://']:before { content: 'secure' }
```

## remove-empty-rulesets

Remove all rulesets that contain nothing but spaces.

Acceptable value: `true`

Example: `{ "remove-empty-rulesets": true }`.

`a { color: red; } p { /* hey */ } b { }` &rarr; `a { color: red; } p { /* hey */ } `

## sort-order

Set sort order.

**Note**: Use one of [predefined
configs](https://github.com/csscomb/csscomb.js/tree/master/config)
as an example.

Acceptable values:

* `{Array}` of rules
* `{Array}` of arrays of rules for groups separation

Example: `{ "sort-order": [ "margin", "padding" ] }`

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

Example: `{ "sort-order": [ [ "margin", "padding" ], [ "border", "background" ] ] }`

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

### sort-order vs. preprocessors

If you sort properties in `*.scss` or `*.less` files, you can use one of 3
keywords in your config:

* `$variable` — for variable declarations (e.g. `$var` in Sass or `@var` in LESS);
* `$include` — for all mixins except those that have been specified (e.g. `@include ...` in Sass
  or `.mixin()` in LESS);
* `$include mixin-name` — for mixins with specified name (e.g. `@include mixin-name` in Sass
  or `.mixin-name()` in LESS);
* `$extend` — for extends (e.g. `@extend .foo` in Sass or `&:extend(.foo)` in LESS);
* `$import` — for `@import` rules.

Example: `{ "sort-order": [ [ "$variable" ], [ "$include" ], [ "top", "padding" ], [ "$include media" ] ] }`

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

### sort-order vs. leftovers

When there are properties that are not mentioned in the `sort-order` option, they are inserted after all the sorted properties in the new group in the same order they were in the source stylesheet.

You can override this by using a “leftovers” token: `...` — just place it either in its own group, or near other properties in any other group and CSSComb would place all the properties that were not sorted where the `...` was in `sort-order`.

So, with this value:

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

everything would go into five groups: variables, then group with `position`, then group containing all the leftovers plus the `border`, then group with all includes and then the `font`.

## sort-order-fallback

Apply a special sort order for properties that are not specified in `sort-order`
list.
Works great with [leftovers](#sort-order-vs-leftovers).
**Note:** This option is applied only if [sort order](#sort-order) list is
provided.

Acceptable values:

* `abc` - sort unknown options alphabetically.

Example: `{ "sort-order-fallback": "abc", "sort-order": ["top"] }`

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

Example: `{ "sort-order-fallback": "abc", "sort-order": ["..."] }`

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

## space-after-colon

Set space after `:` in declarations.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-after-colon": "" }`

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

Example: `{ "space-after-colon": 1 }`

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

## space-after-combinator

Set space after combinator (for example, in selectors like `p > a`).

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-after-combinator": 1 }`

```scss
// Before:
p>a { color: panda; }

// After:
p> a { color: panda; }
```

Example: `{ "space-after-combinator": "\n  " }`

```scss
// Before:
p > a { color: panda; }

// After:
p >
  a { color: panda; }
```

## space-between-declarations

Set space between declarations (i.e. `color: tomato`).

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-between-declarations": 1 }`

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

Example: `{ "space-between-declarations": "\n  " }`

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


## space-after-opening-brace

Set space after `{`.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-after-opening-brace": 1 }`

```scss
// Before:
a {color: panda;}

// After:
a { color: panda;}
```

Example: `{ "space-after-opening-brace": "\n" }`

```scss
// Before:
a{color: panda;}

// After:
a{
color: panda;}
```

## space-after-selector-delimiter

Set space after selector delimiter.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-after-selector-delimiter": 1 }`

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

Example: `{ "space-after-selector-delimiter": "\n" }`

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

## space-before-closing-brace

Set space before `}`.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-before-closing-brace": 1 }`

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

Example: `{ "space-before-closing-brace": "\n" }`

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

## space-before-colon

Set space before `:` in declarations.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-before-colon": "" }`

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

Example: `{ "space-before-colon": 1 }`

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

## space-before-combinator

Set space before combinator (for example, in selectors like `p > a`).

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-before-combinator": 1 }`

```scss
// Before:
p>a { color: panda; }

// After:
p >a { color: panda; }
```

Example: `{ "space-before-combinator": "\n" }`

```scss
// Before:
p > a { color: panda; }

// After:
p
> a { color: panda; }
```

## space-before-opening-brace

Set space before `{`.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-before-opening-brace": 1 }`

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

Example: `{ "space-before-opening-brace": "\n" }`

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

## space-before-selector-delimiter

Set space before selector delimiter.

Acceptable values:

* `{Number}` — number of whitespaces;
* `{String}` — string with whitespaces, tabs or line breaks.

Example: `{ "space-before-selector-delimiter": 0 }`

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

Example: `{ "space-before-selector-delimiter": "\n" }`

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

## strip-spaces

Whether to trim trailing spaces.

Acceptable value: `true`.

Example: `{ "strip-spaces": true }`

`a { color: red } \n \n \n` &rarr; `a { color: red }\n`

`a { color: red }\t` &rarr; `a { color: red }`

## tab-size

Set tab size (number of spaces to replace hard tabs).

Acceptable values:

* `{Number}` — number of whitespaces;

Example: `{ "tab-size": 2 }`

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

**Note:** See [configuration docs](configuration.md#override-templates-settings)
for more information.

Acceptable value:

* `{String}` — path to the `.css` file.

Example: `{ "template": "example.css" }`

## unitless-zero

Whether to remove units in zero-valued dimensions.

Acceptable value: `true`.

Example: `{ "unitless-zero": true }`

```css
/* before */
img { border: 0px }

/* after */
img { border: 0 }
```

## vendor-prefix-align

Whether to align prefixes in properties and values.

Acceptable value: `true`.

Example: `{ "vendor-prefix-align": true }`

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

Number of line breaks between rulesets or @rules.

Acceptable values:

* `{Number}` — number of newlines;

Example: `{ "lines-between-rulesets":  1}`

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

Whether to use `--verbose` option in CLI.

Acceptable value: `true`.

Example: `{ "verbose": true }`

```bash
csscomb ./test

✓ test/integral.origin.css
  test/integral.expect.css

2 files processed
1 file fixed
96 ms spent
```
