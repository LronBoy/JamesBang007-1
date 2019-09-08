// 1. 获取数据库引用
const db = wx.cloud.database()

// 2. 构造查询语句
// collection 方法获取一个集合的引用
// where 方法传入一个对象，数据库返回集合中字段等于指定值的 JSON 文档。API 也支持高级的查询条件（比如大于、小于、in 等），具体见文档查看支持列表
// get 方法会触发网络请求，往数据库取数据
db.collection('books').where({
    publishInfo: {
        country: 'United States'
    }
}).get({
    success: function(res) {
        // 输出 [{ "title": "The Catcher in the Rye", ... }]
        console.log(res)
    }
})


// -------------------


// index.js 是入口文件，云函数被调用时会执行该文件导出的 main 方法
// event 包含了调用端（小程序端）调用该函数时传过来的参数，同时还包含了可以通过 getWXContext 方法获取的用户登录态 `openId` 和小程序 `appId` 信息
const cloud = require('wx-server-sdk')


