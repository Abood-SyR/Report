<?php
include 'inc/conn.php';
include 'inc/form.php';
include 'inc/getdata.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم تقرير | سوريا</title>
</head>

<body>
    <div id="container">
    <div id="containerbody">
        <br>
        <h1>رأيكم بوصل</h1>
    <form action="inc/form.php" method="POST">
        <input
        type="text"
        name="username"
        placeholder="الاسم الكامل"
        >
        <input
        type="text"
        name="phonenumber"
        placeholder="رقم الهاتف"
        >
        <br>
        <select>
            <option value="">دمشق</option>
            <option value="">ريف دمشق</option>
            <option value="">السويداء</option>
            <option value="">درعا</option>
            <option value="">حماة</option>
            <option value="">حمص</option>
            <option value="">حلب</option>
            <option value="">ادلب</option>
            <option value="">اللاذقية</option>
            <option value="">طرطوس</option>
            <option value="">ديرالزور</option>
            <option value="">الرقة</option>
            <option value="">الحسكة</option>
        </select>
        <select>
            <option value="">المزة</option>
        </select>
        <br>
        <input
        type="text"
        name="subject"
        placeholder="عنوان التقرير"
        >
        
        <textarea name="reportmassage" 
        placeholder="تفاصيل التقرير"></textarea>

        <input
        type="text"
        name="becausewho"
        placeholder="المسبب للمشكلة (ان وجد)"
        >
        <textarea 
        name="whythisreport"
        placeholder="بماذا تؤثر عليك (اختياري)"></textarea>

        <div id="submit">
        <input type="submit" name="submit"  value="تقديم">
        <a href=""><button>استعلام تقرير</button></a>
    </div>
    </form>
</div>
<p><a href="https://wa.me/+963981082693"><span>عبدالرحمن عبدالله </span></a>  عمل تطوعي من قبل </p>
</div>

  
    
</body>
</html>
