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



## Audio 对象

Audio 对象是 HTML5 中的新对象。Audio 对象代表着 HTML `<audio>` 元素。

#### 访问 Audio 对象
您可以通过使用 `getElementById()` 来访问 `<audio>` 元素：
```
var x = document.getElementById("myAudio");
```

#### 创建 Audio 对象
您可以通过使用 `document.createElement()` 方法来创建 `<audio>` 元素：
```
var x = document.createElement("AUDIO");
```

#### Audio 对象属性
<table>
    <tbody>
        <tr class="firstRow">
            <th style="width: 20%;">
                属性
            </th>
            <th>
                描述
            </th>
        </tr>
        <tr>
            <td>
                audioTracks
            </td>
            <td>
                返回表示可用音频轨道的 AudioTrackList 对象
            </td>
        </tr>
        <tr>
            <td>
                autoplay
            </td>
            <td>
                设置或返回是否在加载完成后随即播放音频
            </td>
        </tr>
        <tr>
            <td>
                buffered
            </td>
            <td>
                返回表示音频已缓冲部分的 TimeRanges 对象
            </td>
        </tr>
        <tr>
            <td>
                controller
            </td>
            <td>
                返回表示音频当前媒体控制器的 MediaController 对象
            </td>
        </tr>
        <tr>
            <td>
                controls
            </td>
            <td>
                设置或返回音频是否显示控件（比如播放/暂停等）
            </td>
        </tr>
        <tr>
            <td>
                crossOrigin
            </td>
            <td>
                设置或返回音频的 CORS 设置
            </td>
        </tr>
        <tr>
            <td>
                currentSrc
            </td>
            <td>
                回当前音频的 URL
            </td>
        </tr>
        <tr>
            <td>
                currentTime
            </td>
            <td>
                设置或返回音频中的当前播放位置（以秒计）
            </td>
        </tr>
        <tr>
            <td>
                defaultMuted
            </td>
            <td>
                设置或返回音频默认是否静音
            </td>
        </tr>
        <tr>
            <td>
                defaultPlaybackRate
            </td>
            <td>
                设置或返回音频的默认播放速度
            </td>
        </tr>
        <tr>
            <td>
                duration
            </td>
            <td>
                返回当前音频的长度（以秒计）
            </td>
        </tr>
        <tr>
            <td>
                ended
            </td>
            <td>
                返回音频的播放是否已结束
            </td>
        </tr>
        <tr>
            <td>
                error
            </td>
            <td>
                返回表示音频错误状态的 MediaError 对象
            </td>
        </tr>
        <tr>
            <td>
                loop
            </td>
            <td>
                设置或返回音频是否应在结束时重新播放
            </td>
        </tr>
        <tr>
            <td>
                mediaGroup
            </td>
            <td>
                设置或返回音频所属的组合（用于连接多个音频元素）
            </td>
        </tr>
        <tr>
            <td>
                muted
            </td>
            <td>
                设置或返回音频是否静音
            </td>
        </tr>
        <tr>
            <td>
                networkState
            </td>
            <td>
                返回音频的当前网络状态
            </td>
        </tr>
        <tr>
            <td>
                paused
            </td>
            <td>
                设置或返回音频是否暂停
            </td>
        </tr>
        <tr>
            <td>
                playbackRate
            </td>
            <td>
                设置或返回音频播放的速度
            </td>
        </tr>
        <tr>
            <td>
                played
            </td>
            <td>
                返回表示音频已播放部分的 TimeRanges 对象
            </td>
        </tr>
        <tr>
            <td>
                preload
            </td>
            <td>
                设置或返回音频是否应该在页面加载后进行加载
            </td>
        </tr>
        <tr>
            <td>
                readyState
            </td>
            <td>
                返回音频当前的就绪状态
            </td>
        </tr>
        <tr>
            <td>
                seekable
            </td>
            <td>
                返回表示音频可寻址部分的 TimeRanges 对象
            </td>
        </tr>
        <tr>
            <td>
                seeking
            </td>
            <td>
                返回用户是否正在音频中进行查找
            </td>
        </tr>
        <tr>
            <td>
                src
            </td>
            <td>
                设置或返回音频元素的当前来源
            </td>
        </tr>
        <tr>
            <td>
                textTracks
            </td>
            <td>
                返回表示可用文本轨道的 TextTrackList 对象
            </td>
        </tr>
        <tr>
            <td>
                volume
            </td>
            <td>
                设置或返回音频的音量
            </td>
        </tr>
    </tbody>
</table>


#### Audio 对象方法
<table>
<tr>
<th style="width:20%;">方法</th>
<th>描述</th>
</tr>

<tr>
<td>addTextTrack()</td>
<td>向音频添加新的文本轨道。</td>
</tr>

<tr>
<td>canPlayType()</td>
<td>检查浏览器是否能够播放指定的音频类型。</td>
</tr>

<tr>
<td>fastSeek()</td>
<td>在音频播放器中指定播放时间。</td>
</tr>

<tr>
<td>getStartDate()</td>
<td>返回新的 Date 对象，表示当前时间线偏移量。</td>
</tr>

<tr>
<td>load()</td>
<td>重新加载音频元素。</td>
</tr>

<tr>
<td>play()</td>
<td>开始播放音频。</td>
</tr>

<tr>
<td>pause()</td>
<td>暂停当前播放的音频。</td>
</tr>
</table>







.
