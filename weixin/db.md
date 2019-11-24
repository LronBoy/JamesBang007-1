
```
db.collection('test')
  .where({
    price: _.gt(10)
  })
  .field({
    name: true,
    price: true,
  })
  .orderBy('price', 'desc')
  .skip(1)
  .limit(10)
  .get()

```
