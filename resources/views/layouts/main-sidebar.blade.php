<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">{{ __('main_trans.Dashboard') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="index.html">Dashboard 01</a> </li>
                            <li> <a href="index-02.html">Dashboard 02</a> </li>
                            <li> <a href="index-03.html">Dashboard 03</a> </li>
                            <li> <a href="index-04.html">Dashboard 04</a> </li>
                            <li> <a href="index-05.html">Dashboard 05</a> </li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ trans('main_trans.Programname') }}
                    </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{ trans('main_trans.Grades') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('Grades.index') }}">{{ __('main_trans.Grades_list') }}</a></li>
                            <li><a href="alerts.html">Alerts</a></li>

                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ trans('main_trans.classes') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Classrooms.index') }}">{{ trans('main_trans.List_classes') }} </a>
                            </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="fas fa-chalkboard"></i><span class="right-nav-text">
                                    {{ trans('main_trans.sections') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Sections.index') }}">{{ trans('main_trans.List_sections') }}</a>
                            </li>
                            <li> <a href="chart-morris.html">Chart morris </a> </li>
                            <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>
                        </ul>
                    </li>

                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="fas fa-user-graduate"></i><span
                                    class="right-nav-text">{{ trans('main_trans.students') }}
                                </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#Student_information">{{ trans('main_trans.Student_information') }}
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="Student_information" class="collapse">
                                    <li> <a
                                            href="{{ route('Students.create') }}">{{ trans('main_trans.add_student') }}</a>
                                    </li>
                                    <li> <a
                                            href="{{ route('Students.index') }}">{{ trans('main_trans.list_students') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#Students_upgrade">{{ trans('main_trans.Students_Promotions') }}<div
                                        class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="Students_upgrade" class="collapse">
                                    <li> <a
                                            href="{{ route('Promotion.index') }}">{{ trans('main_trans.add_Promotion') }}</a>
                                    </li>
                                    <li> <a
                                            href="{{ route('Promotion.create') }}">{{ trans('main_trans.list_Promotions') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#Graduate students">{{ trans('main_trans.Graduate_students') }}<div
                                        class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="Graduate students" class="collapse">
                                    <li> <a
                                            href="{{ route('Graduated.create') }}">{{ trans('main_trans.add_Graduate') }}</a>
                                    </li>
                                    <li> <a
                                            href="{{ route('Graduated.index') }}">{{ trans('main_trans.list_Graduate') }}</a>
                                    </li>
                                </ul>
                            </li>






                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>












                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i><span
                                    class="right-nav-text">
                                    {{ trans('main_trans.Teachers') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Teachers.index') }}">{{ trans('main_trans.List_Teachers') }}</a>
                            </li>
                            <li> <a href="editor-markdown.html">Editor Markdown</a> </li>
                            <li> <a href="form-input.html">Form input</a> </li>

                        </ul>
                    </li>
                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="fas fa-user-tie"></i><span class="right-nav-text">
                                    {{ trans('main_trans.Parents') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ url('add_parent') }}">{{ trans('main_trans.List_Parents') }}</a> </li>
                            <li> <a href="{{ url('add_parent') }}">{{ trans('main_trans.Add_Parent') }}</a> </li>
                            <li> <a href="data-table.html">Data table</a> </li>
                        </ul>
                    </li>
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
                    <!-- menu item Custom pages-->




                    <!-- Accounts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                            <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                                    class="right-nav-text">{{ trans('main_trans.Accounts') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Fees.index') }}">الرسوم الدراسية</a> </li>
                            <li> <a href="{{ route('Fees_Invoices.index') }}">الفواتير</a> </li>
                            <li> <a href="{{ route('receipt_students.index') }}">سندات القبض</a> </li>
                            <li> <a href="{{ route('ProcessingFee.index') }}">استبعاد رسوم</a> </li>
                            <li> <a href="{{ route('Payment_students.index') }}">سندت الصرف</a> </li>
                        </ul>
                    </li>
                    <!-- Attendance-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span
                                    class="right-nav-text">{{ trans('main_trans.Attendance') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Attendance.index') }}">قائمة الطلاب</a> </li>
                        </ul>
                    </li>


                    <!-- Subjects-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span
                                    class="right-nav-text">المواد الدراسية</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('subjects.index') }}">قائمة المواد</a> </li>
                        </ul>
                    </li>


                    <!-- Quizzes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span
                                    class="right-nav-text">الاختبارات</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('Quizzes.index') }}">قائمة الاختبارات</a> </li>
                            <li> <a href="{{ route('questions.index') }}">قائمة الاسئلة</a> </li>
                        </ul>
                    </li>
                    <!---->
                    <!-- Online classes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                            <div class="pull-left"><i class="fas fa-video"></i><span
                                    class="right-nav-text">{{ trans('main_trans.Onlineclasses') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('online_classes.index') }}">حصص اونلاين مع زوم</a> </li>
                        </ul>
                    </li>
                    <!---->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                            <div class="pull-left"><i class="fas fa-book"></i><span class="right-nav-text">{{trans('main_trans.library')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('library.index')}}">قائمة الكتب</a> </li>
                        </ul>
                    </li>


                    <!---->
                     <!-- Settings-->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Settings-icon">
                            <div class="pull-left"><i class="fas fa-cogs"></i><span class="right-nav-text">{{trans('main_trans.Settings')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Settings-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="route('settings.index')">اعدادات</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
