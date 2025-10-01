# دليل رفع الموقع على GitHub Pages

## 🚀 خطوات رفع الموقع على GitHub Pages

### 1. إنشاء حساب GitHub (إذا لم يكن لديك)
1. اذهب إلى [github.com](https://github.com)
2. اضغط على "Sign up"
3. املأ البيانات المطلوبة
4. تأكيد الحساب عبر البريد الإلكتروني

### 2. إنشاء Repository جديد
1. اضغط على "New repository" أو "+" في الأعلى
2. اكتب اسم الـ repository: `omar-aljarrah-website`
3. اختر "Public" (مهم لـ GitHub Pages)
4. **لا تضع علامة** على "Add a README file"
5. اضغط "Create repository"

### 3. رفع الملفات إلى GitHub

#### الطريقة الأولى: عبر GitHub Desktop
1. حمل [GitHub Desktop](https://desktop.github.com/)
2. سجل دخولك بحساب GitHub
3. اضغط "Clone a repository from the Internet"
4. اختر الـ repository الذي أنشأته
5. انسخ جميع ملفات الموقع إلى مجلد الـ repository
6. اضغط "Commit to main"
7. اضغط "Push origin"

#### الطريقة الثانية: عبر Command Line
```bash
# 1. افتح Command Prompt أو Terminal في مجلد الموقع
cd C:\Users\tarek\Desktop\new-omar-website

# 2. ابدأ Git repository
git init

# 3. أضف جميع الملفات
git add .

# 4. اعمل commit
git commit -m "Initial commit - Omar Al-Jarrah website"

# 5. اربط بالـ repository على GitHub
git remote add origin https://github.com/yourusername/omar-aljarrah-website.git

# 6. ارفع الملفات
git push -u origin main
```

#### الطريقة الثالثة: عبر GitHub Website
1. اذهب إلى الـ repository على GitHub
2. اضغط "uploading an existing file"
3. اسحب جميع ملفات الموقع إلى الصفحة
4. اكتب رسالة commit: "Initial commit"
5. اضغط "Commit changes"

### 4. تفعيل GitHub Pages
1. اذهب إلى الـ repository على GitHub
2. اضغط على "Settings" (في شريط القائمة)
3. انتقل إلى "Pages" في القائمة الجانبية
4. تحت "Source" اختر "Deploy from a branch"
5. اختر "main" branch
6. اختر "/ (root)" folder
7. اضغط "Save"
8. انتظر بضع دقائق حتى يتم النشر

### 5. الوصول للموقع
- سيكون الموقع متاح على: `https://yourusername.github.io/omar-aljarrah-website`
- قد يستغرق النشر 5-10 دقائق في المرة الأولى

## 📁 الملفات المطلوبة للرفع

### الملفات الأساسية:
- ✅ `index.html` - الصفحة الرئيسية
- ✅ `style.css` - ملف التصميم
- ✅ `script.js` - ملف JavaScript
- ✅ `omar.jpg` - الصورة الشخصية
- ✅ `logo.jpg` - الشعار
- ✅ `main.jpg` - صورة الخلفية
- ✅ `omar_jarrah_photos/` - مجلد الصور

### الملفات الإضافية:
- ✅ `README.md` - وصف المشروع
- ✅ `.gitignore` - ملف Git ignore
- ✅ `GITHUB_PAGES_GUIDE.md` - هذا الدليل

## ⚠️ نصائح مهمة

### 1. أسماء الملفات
- استخدم أسماء ملفات باللغة الإنجليزية
- تجنب المسافات في أسماء الملفات
- استخدم أحرف صغيرة

### 2. حجم الملفات
- تأكد أن حجم الصور مناسب (أقل من 2MB لكل صورة)
- استخدم أدوات ضغط الصور إذا لزم الأمر

### 3. الروابط
- جميع الروابط في الموقع ستكون نسبية
- لا تحتاج لتغيير مسارات الصور

### 4. التحديثات
- عند تحديث الموقع، ارفع الملفات الجديدة
- GitHub Pages سيتحدث تلقائياً

## 🔧 استكشاف الأخطاء

### المشكلة: الموقع لا يظهر
**الحل:**
1. تأكد أن الـ repository هو "Public"
2. انتظر 10-15 دقيقة
3. تأكد من تفعيل GitHub Pages في Settings

### المشكلة: الصور لا تظهر
**الحل:**
1. تأكد من وجود مجلد `omar_jarrah_photos/`
2. تأكد من أسماء الصور صحيحة
3. تحقق من مسارات الصور في `index.html`

### المشكلة: التصميم لا يعمل
**الحل:**
1. تأكد من وجود `style.css`
2. تأكد من ربط الملف في `index.html`
3. تحقق من مسار الملف

## 📞 الدعم

إذا واجهت أي مشاكل:
1. تحقق من [GitHub Pages Documentation](https://docs.github.com/en/pages)
2. تأكد من اتباع الخطوات بدقة
3. انتظر بضع دقائق بعد كل خطوة

## 🎉 تهانينا!

بعد اتباع هذه الخطوات، سيكون موقع عمر الجراح متاح على الإنترنت مجاناً عبر GitHub Pages!
