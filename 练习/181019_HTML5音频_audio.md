# HTML 5 音频（audio）


## HTML 5 `<audio>` 标签

** 定义：**

`<audio>` 标签定义声音，比如音乐或其他音频流。

通过使用HTML5中的audio功能，你可以实现与flash相同的功能，即回放、跳转、缓冲等。


** 实例：一段简单的 HTML 5 音频： **

```
<audio src="someaudio.mp3" controls>
您的浏览器不支持 audio 标签。
</audio>
```
或者
```
<audio controls>
  <source src="someaudio.ogg" type="audio/ogg">
  <source src="someaudio.mp3" type="audio/mpeg">
您的浏览器不支持 audio 元素。
</audio>
```

`control` 属性供添加播放、暂停和音量控件。

在`<audio>` 与 `</audio>` 之间，你需要插入浏览器不支持的`<audio>`元素的提示文本 。

`<audio>` 元素允许使用多个 `<source>` 元素，它可以链接不同的音频文件，浏览器将使用第一个支持的音频文件


** 音频格式及浏览器支持 **

浏览器 | MP3 | Wav | Ogg
---|---
Internet Explorer 9+ | YES | NO | NO
Chrome	| YES |	YES |	YES
Firefox | YES | YES |YES
Safari |	YES |	YES |	NO
Opera |	YES | YES | YES

注意: Internet Explorer 8 及更早IE版本不支持 <audio> 元素.


** 音频格式的MIME类型 **

Format | MIME-type
---|---
MP3 | audio/mpeg
Ogg | audio/ogg
Wav | audio/wav


** 属性 **

属性 | 值（默认值） | 描述
---|---
autoplay | autoplay | 如果出现该属性，则音频在就绪后马上播放。
controls | controls | 如果出现该属性，则向用户显示音频控件（比如播放/暂停按钮）。
loop | loop | 如果出现该属性，则每当音频结束时重新开始播放。
muted | muted | 如果出现该属性，则音频输出为静音。
preload | auto | 规定是否预加载音频。可能的值：<br>auto - 当页面加载后载入整个音频；<br>meta - 当页面加载后只载入元数据；<br>none - 当页面加载后不载入音频
metadata | none | 规定当网页加载时，音频是否默认被加载以及如何被加载。
src | URL| 规定音频文件的 URL。





.
