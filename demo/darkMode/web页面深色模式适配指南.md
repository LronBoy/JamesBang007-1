# web页面深色模式（DarkMode）适配指南



## 背景

iOS 和安卓分别从 iOS 13 和 Android 10（不同厂商不尽相同，部分 Android 9 也支持） 开始加入深色模式的支持，各大浏览器纷纷开始支持深色模式，微信 iOS 客户端已于 7.0.12 支持了深色模式（安卓即将支持），网页端适配深色模式后将更进一步提高用户体验的一致性。



## 如何切换深色模式

iOS：“设置”--“显示与亮度”--“外观”，选择“深色”

Android（不同厂商可能略有差别，名字也不尽相同）：“系统设置”--“显示”--“深色模式”。



## 适配指南

微信内置浏览器基于 Web 标准实现了对深色模式的支持，可以用一般 Web 页面适配的方式进行适配，下面列举几种一般的适配方式：


### 一、 声明 color-scheme

有两种方式：

- meta

在head中声明`<meta name="color-scheme" content="light dark">`，声明当前页面支持 light 和 dark 两种模式，系统切换到深色模式时，浏览器默认样式也会切换到深色；

- css

下面的 css 同样可以实现上面 meta 声明的效果

```css
:root {
    color-scheme: light dark;
}
```

> 注意：此声明并非为页面做自动适配，只影响浏览器默认样式
> 
> 更多信息可查阅 W3C 文档 《[CSS Color Adjustment Module Level 1](https://drafts.csswg.org/css-color-adjust-1/)》


### 二、 通过 CSS 媒体查询

```css
:root {
    color-scheme: light dark;
    background: white;
    color: black;
}

@media (prefers-color-scheme: dark) {
    :root {
        background: black;
        color: white;
    }
}
```

颜色较多的情况，建议使用CSS变量对颜色值进行管理

```css
:root {
    color-scheme: light dark;
    --nav-bg-color: #F7F7F7;
    --content-bg-color: #FFFFFF;
    --font-color: rgba(0,0,0,.9);
}

@media (prefers-color-scheme: dark) {
    :root {
        --nav-bg-color: #2F2F2F;
        --content-bg-color: #2C2C2C;
        --font-color: rgba(255, 255, 255, .8);
    }
}

:root {
    color: var(--font-color)
}

.header {
    background-color: var(--nav-bg-color);
}

.content {
    background-color: var(--content-bg-color);
}
```


### 三、 图片适配

利用picture+source标签，设置不同模式下的图片 url。

```html
<picture>
    <!-- 深色模式下的图片 -->
    <source srcset="dark.jpg" media="(prefers-color-scheme: dark)" />
    <!-- 默认模式下的图片 -->
    <img src="light.jpg"/>
</picture>
```


### 四、 JavaScript中判断当前模式&监听模式变化

利用的是matchMedia方法，具体用法参考以下例子：

```js
const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)')

function darkModeHandler() {
    if (mediaQuery.matches) {
        console.log('现在是深色模式')
    } else {
        console.log('现在是浅色模式')
    }
}

// 判断当前模式
darkModeHandler()
// 监听模式变化
mediaQuery.addListener(darkModeHandler)
```

