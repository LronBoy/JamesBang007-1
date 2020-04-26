
在 JavaScript 中，`prototype` 对象是实现面向对象的一个重要机制。

每个函数就是一个对象（`Function`），函数对象都有一个子对象 prototype 对象，类是以函数的形式来定义的。prototype 表示该函数的原型，也表示一个类的成员的集合。



`Object.prototype`
可以为所有 `Object` 类型的对象添加属性。


## Object 实例和 Object 原型对象
[](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Object)

JavaScript中的所有对象都来自 `Object`；所有对象从`Object.prototype`继承方法和属性，尽管它们可能被覆盖。例如，其他构造函数的原型将覆盖 `constructor` 属性并提供自己的 `toString()` 方法。`Object` 原型对象的更改将传播到所有对象，除非受到这些更改的属性和方法将沿原型链进一步覆盖。





## Object.prototype
[MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Object/prototype)

`Object.prototype` 属性表示 `Object` 的原型对象。

### 描述

几乎所有的 JavaScript 对象都是 `Object` 的实例；一个典型的对象继承了`Object.prototype`的属性（包括方法），尽管这些属性可能被遮蔽（亦称为覆盖）。但是有时候可能故意创建不具有典型原型链继承的对象，比如通过`Object.create(null)`创建的对象，或者通过`Object.setPrototypeOf`方法改变原型链。

改变`Object`原型，会通过原型链改变所有对象；除非在原型链中进一步覆盖受这些变化影响的属性和方法。这提供了一个非常强大的、但有潜在危险的机制来覆盖或扩展对象行为。


### 属性

`Object.prototype.constructor`
    特定的函数，用于创建一个对象的原型。

`Object.prototype.__proto__ `
    指向当对象被实例化的时候，用作原型的对象。

`Object.prototype.__noSuchMethod__ `
    当未定义的对象成员被调用作方法的时候，允许定义并执行的函数。



## Function.prototype
[MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Function/prototype)

`Function.prototype` 属性存储了 `Function` 的原型对象。


### 描述

`Function`对象继承自 `Function.prototype` 属性。因此，`Function.prototype` 不能被修改。


### 属性

`Function.length`
    获取函数的接收参数个数。

`Function.prototype.constructor`
    声明函数的原型构造方法


### 方法

`Function.prototype.apply()`
    在一个对象的上下文中应用另一个对象的方法；参数能够以数组形式传入。
    
`Function.prototype.bind()`
    bind() 方法会创建一个新函数,称为绑定函数.当调用这个绑定函数时,绑定函数会以创建它时传入 bind()方法的第一个参数作为 this,传入 bind()方法的第二个以及以后的参数加上绑定函数运行时本身的参数按照顺序作为原函数的参数来调用原函数.

`Function.prototype.call()`
    在一个对象的上下文中应用另一个对象的方法；参数能够以列表形式传入。

`Function.prototype.toString()`
    获取函数的实现源码的字符串。覆盖了 Object.prototype.toString 方法。

