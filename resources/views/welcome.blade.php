<!DOCTYPE html>
      <html lang="ar">
          <head>
              <meta charset="utf-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
              <meta name="description" content="" />
              <meta name="author" content="" />
             <meta icon />
              <title>Home page</title>
              <!-- Favicon-->
              <link rel="icon" type="image/x-icon" href="../images/logo.png" />
              <!-- Bootstrap icons-->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
              <!-- Core theme CSS (includes Bootstrap)-->
              <link rel="preconnect" href="https://fonts.bunny.net">
              <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="{{ ('../css/bootstrap.min.css') }}">
              <link rel="stylesheet" href="{{  ('../css/welcome.css')}}">
          </head>
          <body class="d-flex flex-column">
              <main class="flex-shrink-0">
                @include('layout.header')

                <!-- Header-->
                <header class="bg-dark py-5">
                  <div class="container px-5">
                      <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="../images/10-Online-Examination.png" alt="..." /></div>
                          <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                  <h1 class="display-5 fw-bolder text-white mb-2">Online Exam System</h1>
                                  <p class="lead fw-normal text-white-50 mb-4">أداة إنشاء اختبارات إلكتروني أون لاين من برنامج سهل الاستخدام</p>
                                  <p class="lead fw-normal text-white-50 mb-4">ومستقر وكامل للاستخدام في الجامعات والمؤسسات التعليمية</p>
                                  <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                      <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/register">Get Started</a>
                                      <a class="btn btn-outline-light btn-lg px-4" href="/desc">Learn More</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </header>
                  <!-- Blog preview section-->
                  <section class="py-5">
                      <div class="container px-5 my-5">
                          <div class="row gx-5 justify-content-center">
                              <div class="col-lg-8 col-xl-6">
                                  <div class="text-center">
                                      <h3 class="fw-bolder">كيف تعمل أنظمة الامتحانات عبر الإنترنت؟</h3><br><br>
                                      <h3>_________<span class="fa fa-graduation-cap"></span>_________</h3><br><br>
                                  </div>
                              </div>
                          </div>
                          <div class="row gx-5">
                              <div class="col-lg-4 mb-5">
                                  <div class="card h-100 shadow border-0">
                                      <img class="card-img-top" src="../images/What Students Should Expect.jpg" alt="..." />
                                      <div class="card-body p-4">
                                          <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                          <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">ما قبل الامتحان</h5></a>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> جدولة الاختبارات وفقا للجدول الزمني وتعيين مراقبين عبر الإنترنت  </h6><br>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> تخطيط الأسئلة وإنشائها وإدارتها </h6>
                                      </div>
                                      <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                          <div class="d-flex align-items-end justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <img class="rounded-circle me-3" src="../images/logo.png" alt="..." />
                                                  <div class="small">
                                                      <div class="fw-bold">Online Exam</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 mb-5">
                                  <div class="card h-100 shadow border-0">
                                      <img class="card-img-top" src="../images/images.png" alt="..." />
                                      <div class="card-body p-4">
                                          <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                          <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">أثناء الامتحان                                           </h5></a>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> تظهر للامتحانات من أجهزة الكمبيوتر / الأجهزة المحمولة </h6><br>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> التحقق من تفاصيل الطالب وإدارة الحضور في الوقت الفعلي </h6><br>
                                      </div>
                                      <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                          <div class="d-flex align-items-end justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <img class="rounded-circle me-3" src="../images/logo.png" alt="..." />
                                                  <div class="small">
                                                      <div class="fw-bold">Online Exam</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 mb-5">
                                  <div class="card h-100 shadow border-0">
                                      <img class="card-img-top" src="../images/11.jpeg" alt="..." />
                                      <div class="card-body p-4">
                                          <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                          <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3"> ما بعد الامتحان </h5></a>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> تقييم الاختبارات وإعداد تقارير التقييم </h6><br>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span> النتيجة النهائية </h6><br>
                                          <h6 class="card-text mb-0"><span class="fa fa-chevron-circle-right"></span>  عرض النتائج عبر الرسائل القصيرة / البريد الإلكتروني وعلى موقع </h6><br>
                                      </div>
                                      <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                          <div class="d-flex align-items-end justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <img class="rounded-circle me-3" src="../images/logo.png" alt="..." />
                                                  <div class="small">
                                                      <div class="fw-bold">Online Exam</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </section>

                  <!--table preview section-->
                  <section class="py-5">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> نظام الامتحان التقليدي مقابل نظام الامتحان عبر الإنترنت </h5><br><br>
                                    <h3>_________<span class="fa fa-graduation-cap"></span>_________</h3><br><br>
                                </div>
                            </div>
                        </div>
                        
                            
                        <table class="table table-bordered p-3 margin-btm-40">
                          <thead>
                              <tr class="table-light">
                                  <th scope="col" _msttexthash="8560162" _msthash="106" style="direction: rtl; text-align: right;">نظام الامتحانات التقليدية</th>
                                  <th scope="col" _msttexthash="9799946" _msthash="107" style="direction: rtl; text-align: right;">نظام الامتحانات عبر الإنترنت</th>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td _msttexthash="28090101" _msthash="108" style="direction: rtl; text-align: right;">يطلب من الطلاب الوصول إلى مركز الامتحان في الوقت المحدد</td>
                                  <td _msttexthash="10491260" _msthash="109" style="direction: rtl; text-align: right;">يمكن محاولة الاختبار من أي مكان</td>
                              </tr>
                              <tr>
                                  <td _msttexthash="23984493" _msthash="110" style="direction: rtl; text-align: right;">يتطلب قلما وورقة وفصولا دراسية ومشرفين وما إلى ذلك. </td>
                                  <td _msttexthash="14087645" _msthash="111" style="direction: rtl; text-align: right;">يتطلب جهاز كمبيوتر واتصال بالإنترنت </td>
                              </tr>

                              <tr>
                                  <td _msttexthash="16564301" _msthash="112" style="direction: rtl; text-align: right;">يجب على الكلية التحقق من كل ورقة لتسجيلها </td>
                                  <td _msttexthash="14922323" _msthash="113" style="direction: rtl; text-align: right;">يقوم البرنامج بتقييم الطلاب وتسجيلهم </td>
                              </tr>

                              <tr>
                                  <td _msttexthash="11167468" _msthash="114" style="direction: rtl; text-align: right;">يتطلب من المشرفين مراقبة الطلاب </td>
                                  <td _msttexthash="20933406" _msthash="115" style="direction: rtl; text-align: right;"> يراقب نظام المراقبة عن بعد عبر الإنترنت الطلاب</td>
                              </tr>

                              <tr>
                                  <td _msttexthash="11147838" _msthash="116" style="direction: rtl; text-align: right;">يحصل الطلاب على النتائج بعد أشهر </td>
                                  <td _msttexthash="24859627" _msthash="117" style="direction: rtl; text-align: right;">يمكن للطلاب الحصول على النتائج مباشرة بعد الامتحان </td>
                              </tr>
                          </tbody>
                      </table>
                        
                        </div>
                        
                    </div>
                </section>
              </main>
              <!-- Footer-->
              <br><br>
              <footer>
                @include('layout.footer')
              </footer>
              <!-- Bootstrap core JS-->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
