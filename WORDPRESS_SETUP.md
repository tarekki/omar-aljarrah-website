# دليل رفع الموقع على WordPress

## 📁 هيكل المجلدات المطلوب

```
your-theme-folder/
├── style.css
├── index.php
├── header.php
├── footer.php
├── functions.php
├── images/
│   ├── certificates/
│   │   ├── iso-9001-certificate.jpg
│   │   ├── undp-certificate.jpg
│   │   ├── tot-certificate.jpg
│   │   └── quality-certificate.jpg
│   ├── events/
│   │   ├── conference-1.jpg
│   │   ├── workshop-1.jpg
│   │   ├── training-1.jpg
│   │   └── seminar-1.jpg
│   ├── case-studies/
│   │   ├── bunian-project.jpg
│   │   ├── al-nada-iso.jpg
│   │   └── al-afya-medical.jpg
│   ├── resources/
│   │   ├── hr-policy-template.jpg
│   │   ├── iso-checklist.jpg
│   │   └── kpi-template.jpg
│   ├── speaking/
│   │   └── omar-speaking-1.jpg
│   ├── testimonials/
│   │   └── omar-testimonial-1.jpg
│   ├── contact/
│   │   └── omar-contact-1.jpg
│   ├── book/
│   │   └── institutional-excellence-book.jpg
│   └── learning/
│       └── learning-journeys-1.jpg
├── js/
│   └── script.js
└── README.md
```

## 🚀 خطوات الرفع

### 1. إنشاء Theme جديد
1. اذهب إلى `wp-content/themes/`
2. أنشئ مجلد جديد باسم `omar-aljarrah-theme`
3. انسخ جميع الملفات إلى هذا المجلد

### 2. رفع الصور
1. انسخ الصور من مجلد `omar_jarrah_photos/` إلى المجلدات المناسبة
2. أعد تسمية الصور حسب الأسماء المطلوبة في الكود

### 3. تفعيل Theme
1. اذهب إلى `Appearance > Themes` في لوحة التحكم
2. فعّل الـ theme الجديد

## 📝 أسماء الصور المطلوبة

### الشهادات:
- `iso-9001-certificate.jpg`
- `undp-certificate.jpg`
- `tot-certificate.jpg`
- `quality-certificate.jpg`

### الأحداث:
- `conference-1.jpg`
- `workshop-1.jpg`
- `training-1.jpg`
- `seminar-1.jpg`

### دراسات الحالة:
- `bunian-project.jpg`
- `al-nada-iso.jpg`
- `al-afya-medical.jpg`

### الموارد:
- `hr-policy-template.jpg`
- `iso-checklist.jpg`
- `kpi-template.jpg`

### الصور الشخصية:
- `omar-speaking-1.jpg`
- `omar-testimonial-1.jpg`
- `omar-contact-1.jpg`
- `institutional-excellence-book.jpg`
- `learning-journeys-1.jpg`

## ⚠️ ملاحظات مهمة

1. **تأكد من أسماء الصور** - يجب أن تطابق الأسماء في الكود تماماً
2. **جودة الصور** - استخدم صور عالية الجودة (1920x1080 أو أعلى)
3. **تحسين الصور** - اضغط الصور لتقليل حجمها
4. **النسخ الاحتياطي** - احتفظ بنسخة احتياطية من الموقع قبل التغيير

## 🔧 إعدادات إضافية

### تحسين الأداء:
- استخدم إضافة تحسين الصور مثل `Smush`
- فعّل الـ caching
- استخدم CDN إذا أمكن

### SEO:
- أضف meta descriptions
- استخدم alt text للصور
- أضف schema markup

## 📞 الدعم

إذا واجهت أي مشاكل، تأكد من:
1. أسماء الملفات صحيحة
2. المسارات صحيحة
3. الصور موجودة في المجلدات المناسبة
4. الـ theme مفعل بشكل صحيح
