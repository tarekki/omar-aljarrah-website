#!/usr/bin/env python3
"""
سكريبت لتنظيم صور عمر الجراح للرفع على WordPress
"""

import os
import shutil
from pathlib import Path

def organize_images():
    """تنظيم الصور في مجلدات مناسبة لـ WordPress"""
    
    # إنشاء هيكل المجلدات
    folders = [
        'images/certificates',
        'images/events', 
        'images/case-studies',
        'images/resources',
        'images/speaking',
        'images/testimonials',
        'images/contact',
        'images/book',
        'images/learning'
    ]
    
    for folder in folders:
        os.makedirs(folder, exist_ok=True)
        print(f"✅ تم إنشاء مجلد: {folder}")
    
    # قائمة الصور المطلوبة مع أسماءها الجديدة
    image_mapping = {
        # الشهادات
        'omar_jarrah_photos/5895449767973079043.jpg': 'images/certificates/iso-9001-certificate.jpg',
        'omar_jarrah_photos/5895449767973079044.jpg': 'images/certificates/undp-certificate.jpg',
        'omar_jarrah_photos/5895449767973079045.jpg': 'images/certificates/tot-certificate.jpg',
        'omar_jarrah_photos/5895449767973079046.jpg': 'images/certificates/quality-certificate.jpg',
        
        # الأحداث
        'omar_jarrah_photos/5895449767973079047.jpg': 'images/events/conference-1.jpg',
        'omar_jarrah_photos/5895449767973079048.jpg': 'images/events/workshop-1.jpg',
        'omar_jarrah_photos/5895449767973079049.jpg': 'images/events/training-1.jpg',
        'omar_jarrah_photos/5895449767973079050.jpg': 'images/events/seminar-1.jpg',
        
        # دراسات الحالة
        'omar_jarrah_photos/5895449767973079051.jpg': 'images/case-studies/bunian-project.jpg',
        'omar_jarrah_photos/5895449767973079052.jpg': 'images/case-studies/al-nada-iso.jpg',
        'omar_jarrah_photos/5895449767973079053.jpg': 'images/case-studies/al-afya-medical.jpg',
        
        # الموارد
        'omar_jarrah_photos/5895449767973079054.jpg': 'images/resources/hr-policy-template.jpg',
        'omar_jarrah_photos/5895449767973079055.jpg': 'images/resources/iso-checklist.jpg',
        'omar_jarrah_photos/5895449767973079056.jpg': 'images/resources/kpi-template.jpg',
        
        # الصور الشخصية
        'omar_jarrah_photos/5895449767973079057.jpg': 'images/speaking/omar-speaking-1.jpg',
        'omar_jarrah_photos/5902241983873796960.jpg': 'images/testimonials/omar-testimonial-1.jpg',
        'omar_jarrah_photos/5902241983873796961.jpg': 'images/contact/omar-contact-1.jpg',
        'omar_jarrah_photos/5902241983873796962.jpg': 'images/book/institutional-excellence-book.jpg',
        'omar_jarrah_photos/5902241983873796963.jpg': 'images/learning/learning-journeys-1.jpg',
    }
    
    # نسخ الصور
    copied_count = 0
    for source, destination in image_mapping.items():
        if os.path.exists(source):
            shutil.copy2(source, destination)
            print(f"✅ تم نسخ: {source} → {destination}")
            copied_count += 1
        else:
            print(f"❌ لم يتم العثور على: {source}")
    
    print(f"\n🎉 تم نسخ {copied_count} صورة بنجاح!")
    print("\n📁 هيكل المجلدات:")
    for folder in folders:
        if os.path.exists(folder):
            files = os.listdir(folder)
            print(f"  {folder}/ ({len(files)} ملف)")

if __name__ == "__main__":
    print("🚀 بدء تنظيم الصور لـ WordPress...")
    organize_images()
    print("\n✅ تم الانتهاء! يمكنك الآن رفع الملفات على WordPress.")
