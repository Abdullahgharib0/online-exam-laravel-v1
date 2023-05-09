<!DOCTYPE html>
      <html lang="ar">
          <head>
              <meta charset="utf-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
              <meta name="description" content="" />
              <meta name="author" content="" />
              <title>Home page</title>
              <!-- Favicon-->
              <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
              <!-- Bootstrap icons-->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
              <link rel="preconnect" href="https://fonts.bunny.net">
              <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="{{ ('../css/bootstrap.min.css') }}">
              <link rel="stylesheet" href="{{  ('../css/welcome.css')}}">
          </head>
<body>
    <header class="rr">
        <!-- start navbar -->
        @include('layout.header')
        <!-- end navbar -->
    </header>
        <div class="desc">
          <br><h3 class="text-right fs-5 pt-3 fw-bold w-75 me-5">
             <span class="bg-info text-white p-2">مقدمة</span>
             <br><br>
             .إننا نهتم بشكل كبير بخصوصية زوار موقعنا، ونتعهد بحمايتها
             <br>
             
            </h3>
            <br><br>
          <h2 class="text1"> : الاختبارات الالكترونية لها عدة مميزات منها </h2>
          
          <h3 class="text2 text-right mt-5">
             سهولة اعدادها وتطبيقها ومراجعه النتائج -<br><br>
             التنوع في الأسئلة الموضوعية -<br><br>
             امكانيه تحديد وقت زمني تنازلي للاختبار -<br><br>
          </h3>
          
          <p class="desc1  text-right fs-5 pt-5 fw-bold w-75 me-5 ">سواء كنت جديدا في الاختبارات عبر الإنترنت أو تبحث فقط عن بعض النصائح الجديدة  سيوضح لك منشور المدونة هذا<br> كيفية وضع قواعد فعالة للاختبارات عبر الإنترنت التي تتجنب الارتباك وتوجه طلابك إلى تجربة اختبار ناجحة عبر الإنترنت <br>. دعنا نستكشف</p><br>
          <h2 class="text3">: القواعد التي يجب اتباعها خلال جميع الاختبارات المراقبة عبر الانترنت</h2>
          <br><br><p class="desc1  text-right fs-5  fw-bold w-75 me-5 ">
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .برنامج إنشاء اختبار إلكتروني على الويب (مجاناً) </h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .الحساب التلقائي لدرجة الاختبار الإلكتروني لكل متقدم للاختبار</h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .ترتيب أسئلة الاختبار الإلكتروني بشكل عشوائي </h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .ترتيب خيارات الأسئلة متعددة الخيارات بشكل عشوائي في الاختبار الإلكتروني </h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .ضبط تاريخ ووقت بدء ونهاية الاختبار الإلكتروني تلقائياً </h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .تقديم تقرير نتائج خاص لكل متقدم للاختبار </h4>
            <h4 class="desc1  text-right fs-5 pt-3 fw-bold w-75 me-5 "> .استخدام أحدث البنى والتقنيات في العالم لتحقيق استقرار إجراء أي عدد من الاختبارات الإلكترونية في الوقت نفسه </h4>
          </p>
          </div>
    <br><br>
    <footer>
      @include('layout.footer')
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>