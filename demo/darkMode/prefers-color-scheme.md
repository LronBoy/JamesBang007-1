
## prefers-color-scheme

<!-- CSS（层叠样式表） ==>  @media ==>  prefers-color-scheme (喜欢的颜色方案)-->

`prefers-color-scheme` CSS 媒体特性用于检测用户是否有将系统的主题色设置为亮色或者暗色。


###语法

- no-preference
    表示系统未得知用户在这方面的选项。在布尔值上下文中，其执行结果为 false。<!-- “未得知”可理解为：浏览器的宿主系统不支持设置主题色，或者支持主题色并 默认为/被设为 了 未设置/无偏好。 -->
    
- light
    表示用户已告知系统他们选择使用浅色主题的界面。
    
- dark
    表示用户已告知系统他们选择使用暗色主题的界面。




### 样例

使用了一个有黑色背景和白色文字的元素，当用户使用浅色主题时，会翻转黑白颜色。


```html
<div class="row">
    <div class="day">Day (initial)</div>
    <div class="day light-scheme">Day (changes in light scheme)</div>
    <div class="day dark-scheme">Day (changes in dark scheme)</div> <br>
</div>

<div class="row">
    <div class="night">Night (initial)</div>
    <div class="night light-scheme">Night (changes in light scheme)</div>
    <div class="night dark-scheme">Night (changes in dark scheme)</div>
</div>
```

```css
.day {
    background: #eee;
    color: black;
}

.night {
    background: #333;
    color: white;
}

@media (prefers-color-scheme: dark) {
    .day.dark-scheme {
        background: #333;
        color: white;
    }

    .night.dark-scheme {
        background: black;
        color: #ddd;
    }
}

@media (prefers-color-scheme: light) {
    .day.light-scheme {
        background: white;
        color: #555;
    }

    .night.light-scheme {
        background: #eee;
        color: black;
    }
}

.row{
    display: flex;
}
.day,
.night {
    display: inline-block;
    box-sizing: border-box;
    padding: 1em;
    width: 33%;
    height: 7em;
    text-align: center;
    vertical-align: middle;
}
```

[](https://developer.mozilla.org/zh-CN/docs/Web/CSS/@media/prefers-color-scheme)


