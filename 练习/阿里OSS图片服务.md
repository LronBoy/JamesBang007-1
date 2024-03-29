
# 阿里OSS图片服务

阿里云OSS图片处理服务（Image Processing，简称 IMG） ，是阿里云OSS对外提供的海量、安全、低成本、高可靠的图片处理服务。您可以将原始图片上传保存在 OSS 上，通过简单的 RESTful 接口，在任何时间、任何地点、任何互联网设备上对图片进行处理。图片处理服务提供图片处理接口，图片上传请使用 OSS 上传接口。基于 IMG，您可以搭建出跟图片相关的服务。




## 图片服务基础功能

图片处理提供以下功能：
- 获取图片信息
- 图片格式转换
- 图片缩放、裁剪、旋转
- 图片添加图片、文字、图文混合水印
- 自定义图片处理样式
- 通过管道顺序调用多种图片处理功能




## 图片缩放


### 图片缩放参数

操作名称：`resize`

__ 指定宽高缩放 __

名称  | 描述 | 取值范围
---|---
m | 指定缩略的模式： | lfit、mfit、fill、pad、fixed，默认为 lfit。
w | 指定目标缩略图的宽度。 | 1-4096
h | 指定目标缩略图的高度。 | 1-4096
l | 指定目标缩略图的最长边。 |  1-4096
s | 指定目标缩略图的最短边。 | 1-4096
limit | 指定当目标缩略图大于原图时是否处理。值是 1 表示不处理；值是 0 表示处理。 | 0/1, 默认是 1
color | 当缩放模式选择为 pad（缩略填充）时，可以选择填充的颜色(默认是白色)参数的填写方式：采用 16 进制颜色码表示，如 00FF00（绿色）。 | [000000-FFFFFF]

  - lfit：等比缩放，限制在指定w与h的矩形内的最大图片。
  - mfit：等比缩放，延伸出指定w与h的矩形框外的最小图片。
  - fill：固定宽高，将延伸出指定w与h的矩形框外的最小图片进行居中裁剪。
  - pad：固定宽高，缩略填充。
  - fixed：固定宽高，强制缩略。


__ 按比例缩放 __

名称 | 描述 | 取值范围
---|---
p | 倍数百分比。 小于 100，即是缩小，大于 100 即是放大。 | 1-1000


`.`
