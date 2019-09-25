{
    "browsers.config" : {
        "Chrome.path" : "C:/Users/JamesBang/AppData/Local/Google/Chrome/Application/chrome.exe"
    },
    "editor.codeassist.px2rem.enabel" : false,
    "editor.colorScheme" : "Atom One Dark",
    "editor.fontFamily" : "Consolas",
    "editor.fontFmyCHS" : "微软雅黑 Light",
    "editor.fontSize" : 14,
    "editor.insertSpaces" : true,
    "editor.longLineIndicator" : true,
    "editor.longLineIndicatorColumn" : 150,
    "editor.saveOnFocusLost" : true,
    "editor.tabSize" : 2,
    "editor.wordWrap" : true,
    "explorer.iconTheme" : "vs-seti",
    "files.associations.contextmenu" : true,
    "files.associations.suffixs" : "md",
    "files.exclude" : "**/.git,**/.svn,**/.hg,**/CVS,**/.DS_Store,.settings,.project,.HBuilder,/node_modules"
}



module.exports = {
	parsers: {
		".js": "js",
		".json": "js",
		".njs": "js",
		".css": "css",
		".nss": "css",
		".wxss": "css",
		".html": "html",
		".ux": "html",
		".wxml": "html",
		".nml": "html",
		".vue": "html",
		".nvue": "html"
	},
	options: {
		"indent_size": "1",
		"indent_char": "\t",
		"indent_with_tabs": false, //使用tab缩进
		"eol": "\r\n", //行结束符
		"end_with_newline": false, //使用换行结束输出
		"indent_level": 0, //起始代码缩进数
		"preserve_newlines": true, //保留空行
		"max_preserve_newlines": 4, //最大连续保留换行符个数。比如设为2，则会将2行以上的空行删除为只保留1行
		"space_in_paren": false, //括弧添加空格 示例 f( a, b )
		"space_in_empty_paren": false, //函数的括弧内没有参数时插入空格 示例 f( )
		"jslint_happy": false, //启用jslint-strict模式
		"space_after_anon_function": false, //匿名函数的括号前加空格
		"brace_style": "collapse,preserve-inline", //代码样式，可选值 [collapse|expand|end-expand|none][,preserve-inline] [collapse,preserve-inline
		"unindent_chained_methods": false, //不缩进链式方法调用
		"break_chained_methods": false, //在随后的行中断开链式方法调用
		"keep_array_indentation": false, //保持数组缩进
		"unescape_strings": false, //使用xNN符号编码解码可显示的字符
		"wrap_line_length": 150,
		"e4x": false, //支持jsx
		"comma_first": false, //把逗号放在新行开头，而不是结尾
		"operator_position": "before-newline",
		"unformatted": ["wbr"],
		"html": {
			"indent_handlebars": true,
			"indent_inner_html": true,
			"indent-scripts": "normal", //[keep|separate|normal]
			"extra_liners": [] //配置标签列表，需要在这些标签前面额外加一空白行
		}
	}
}




{
    "name": "jsbeautify",
    "version": "1.0.0-2018122115",
    "external": {
        "type": "node"
    },
    "contributes": {
        "formator": {
            "name": "jsbeautify",
            "class": "js_beautify.js",
            "filetypes": [
                "json",
                "js",
                "njs",
                "html",
                "css",
                "vue",
                "nvue",
                "ux",
                "nml",
                "nss",
                "wxml",
                "wxss"
            ]
        }
    },
    "configurationFiles": [
        "jsbeautifyrc.js"
    ],
    "dependencies": {
        "js-beautify": "^1.8.8"
    }
}

## jsbeautify

```
module.exports = {
  parsers: {
    ".js": "js",
    ".json": "js",
    ".njs": "js",
    ".css": "css",
    ".nss": "css",
    ".wxss": "css",
    ".html": "html",
    ".ux": "html",
    ".wxml": "html",
    ".nml": "html",
    ".vue": "html",
    ".nvue": "html"
  },
  options: {
    "indent_size": "4",
    "indent_char": " ", //缩进字符
    "indent_with_tabs": false, //使用tab缩进
    "eol": "\r\n", //行结束符
    "end_with_newline": false, //使用换行结束输出
    "indent_level": 0, //起始代码缩进数
    "preserve_newlines": true, //保留空行
    "max_preserve_newlines": 4, //最大连续保留换行符个数。比如设为2，则会将2行以上的空行删除为只保留1行
    "space_in_paren": false, //括弧添加空格 示例 f( a, b )
    "space_in_empty_paren": false, //函数的括弧内没有参数时插入空格 示例 f( )
    "jslint_happy": false, //启用jslint-strict模式
    "space_after_anon_function": false, //匿名函数的括号前加空格
    "brace_style": "collapse,preserve-inline", //代码样式，可选值 [collapse|expand|end-expand|none][,preserve-inline] [collapse,preserve-inline
    "unindent_chained_methods": false, //不缩进链式方法调用
    "break_chained_methods": false, //在随后的行中断开链式方法调用
    "keep_array_indentation": false, //保持数组缩进
    "unescape_strings": false, //使用xNN符号编码解码可显示的字符
    "wrap_line_length": 120,
    "e4x": false, //支持jsx
    "comma_first": false, //把逗号放在新行开头，而不是结尾
    "operator_position": "before-newline",
    "unformatted": ["wbr"],
    "html": {
      "indent_handlebars": true, //格式和缩进 {{#foo}} and {{/foo}}. false
      "indent_body_inner_html": false, //缩进<body>中的元素，默认：true
      "indent_head_inner_html": false, //缩进<head>中的元素，默认：true
      "indent_inner_html": false, //缩进<head>和<body>中的元素（head和body也会缩进），默认：false
      "indent_scripts": "keep", //[keep|separate|normal] ---> 缩进<script> 标签里的代码，有三个值：“keep”(对齐<script>标签)、“separate”(对齐左边界)、“normal”(正常缩进)，默认：“normal”
      "extra_liners": [] //配置标签列表，需要在这些标签前面额外加一空白行
    }
  }
}
```

---------------------------------------

## format-prettier

默认
```
module.exports = {
    printWidth: 180,
    semi: true,
    tabWidth: 4,
    useTabs: false,
    singleQuote: true,
    trailingComma: "none",
    bracketSpacing: true,
    htmlWhitespaceSensitivity: "ignore",
    parsers: {
        ".jsx": "flow",
        ".scss": "scss",
        ".ts": "typescript",
        ".less": "css",
        ".vue": "vue",
        ".nvue": "vue",
        ".ux": "vue",
        ".yml": "yaml",
    }
}
```

修改
```
module.exports = {
  printWidth: 120, // 指定代码换行的行长度。单行代码宽度超过指定的最大宽度，将会换行，如果都不想换，可以添加 "proseWrap": "never"
  semi: true, // 是否在语句末尾打印分号
  tabWidth: 4,
  useTabs: false, // 使用制表符 (tab) 缩进行而不是空格 (space)。
  singleQuote: true, // 是否使用单引号，这里选择使用
  trailingComma: "none", // 多行时尽可能打印尾随逗号。"none" - 没有尾随逗号。
  bracketSpacing: true, // 是否在对象属性添加空格，这里选择是 { foo: bar }
  htmlWhitespaceSensitivity: "ignore",
  parsers: {
    ".jsx": "flow",
    ".scss": "scss",
    ".ts": "typescript",
    ".less": "css",
    ".vue": "vue",
    ".nvue": "vue",
    ".ux": "vue",
    ".yml": "yaml",
  }
}
```


### 腾讯前端代码格式化

```
"indent_size": 4,
"indent_char": " ",
"eol": "\n",
"indent_level": 0,
"indent_with_tabs": false,
"preserve_newlines": true,
"max_preserve_newlines": 10,
"jslint_happy": false,
"space_after_anon_function": false,
"brace_style": "collapse",
"keep_array_indentation": false,
    "keep_function_indentation": false, // [Bool] 保留函数缩进，默认：false
    "space_before_conditional": true, // [Bool] 条件语句和括号之间添加空格，默认：true
"break_chained_methods": false,
    "eval_code": false,
"unescape_strings": false,
    "wrap_line_length": 0, // [Int] 在N个字符后换行，默认：0（忽略）
    "wrap_attributes": "auto", // [String] 将属性换到新行，有5个值：“auto”(不换行)、“force”(第2个起换行)、 “force-aligned”(第2个起换行，与第1个属性对齐)、 “force-expand-multiline"或"align-multiple”(两个效果一样，所有属性都换行)，默认：“auto”
    "wrap_attributes_indent_size": 4, // [Int] 属性换行缩进大小,默认：indent_size
"end_with_newline": true
```








