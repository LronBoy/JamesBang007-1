# pointer-events

[pointer-events 作者：静子 日期：2016-04-05](https://www.w3cplus.com/css3/css-reference/pointer-events.html)

[CSS3 pointer-events:none 应用举例及扩展](https://www.zhangxinxu.com/wordpress/2011/12/css3-pointer-events-none-javascript/)



`pointer-events` CSS 属性指定在什么情况下 (如果有) 某个特定的图形元素可以成为鼠标事件的 `target`(目标)。

```
/* Keyword values */
pointer-events: auto;
pointer-events: none;
pointer-events: visiblePainted; /* SVG only */
pointer-events: visibleFill;    /* SVG only */
pointer-events: visibleStroke;  /* SVG only */
pointer-events: visible;        /* SVG only */
pointer-events: painted;        /* SVG only */
pointer-events: fill;           /* SVG only */
pointer-events: stroke;         /* SVG only */
pointer-events: all;            /* SVG only */

/* Global values */
pointer-events: inherit;
pointer-events: initial;
pointer-events: unset;
```

当此属性未指定时，`visiblePainted`值的相同特征适用于 SVG（可缩放矢量图形） 内容。

除了指示该元素不是鼠标事件的目标之外，值`none`表示鼠标事件“穿透”该元素，并且指定该元素“下面”的任何东西。

-----------------------------------------------------------

`pointer-events`属性用于在特定情况下，将图形元素指定为鼠标事件的 `target`(目标)。

<!-- ~~请注意这是一个SVG属性，在任何CSS规范中并没有定义。~~
~~`pointer-events`属性应用于SVG元素的值有许多个，但是只有三个值可以应用于HTML元素。~~ -->

它是CSS3中又一冉冉的属性，其支持的值牛毛般多，不过大多都与SVG元素相关，我们可以不用理会。当下，对于我们来讲，与SVG划开界线值得一提的就是`[none|auto]`两个属性值了。<!-- ~~其中”auto”的感觉与width属性的”auto”类似，一般在一些特殊场合露一手，平时闺门不出，没什么说头。因此，一轮筛选下来，我们需要留意的只是`pointer-events: none`而已。~~ -->

当`pointer-events`应用于HTML元素上时，可以用来指定元素是否可以响应鼠标(触摸)事件。它可以用来阻止点击、状态(CSS `active`、`focus`、`hover`状态)，和游标事件(例如:在链接上显示`pointer`光标)

你也可以让元素响应于指针事件(`auto`)，或者阻止响应(`none`)。如果你阻止元素响应于指针事件，那么该元素的子节点的元素将会成为这些事件的目标。如果你单击元素，其子节点元素将会接收该单击事件。这种情况同样适用于hover和一些其他游标操作。例如，利用`pointer-events: none`你可以获取一个元素的子元素中的文本(可以参考下面的实例)。

`pointer-events`属性在不同场景中都可以十分有用。这个属性一个很好的优点是，允许你利用`pointer-events: none`创建`60fps` 的滚动。关于它是如何工作的，Ryan Seddon写了一篇<a href="http://www.thecssninja.com/javascript/pointer-events-60fps">很值得一读的文章</a>。


`pointer-events: none`顾名思意，就是鼠标事件拜拜的意思。元素应用了该CSS属性，链接啊，点击啊什么的都变成了“浮云牌酱油”。

唠叨到嘴巴打结还不如一个明快的例子给力，下面是例子大放送时间。



