<?php

$segment2 = Request::segment(1);
$segment3 = Request::segment(2);

switch ($segment2)
   {
          case 'dashboard':
                             $dashboard_active    =    'active';

          break;

          case 'subject':
                             $subject_active      =    'menu-open';
                             $sub_view_active     =    'active';

                             if (!empty($segment3)):
                                $sub_view_active  =    '';
                                $sub_add_active   =    'active';
                             endif;

          break;


          case 'section':
                             $section_active      =    'menu-open';
                             $sec_view_active     =    'active';

                             if (!empty($segment3)):
                                $sec_view_active  =    '';
                                $sec_add_active   =    'active';
                             endif;

          break;



          case 'topic':
                             $topic_active        =    'menu-open';
                             $top_view_active     =    'active';

                             if (!empty($segment3)):
                                $top_view_active  =    '';
                                $top_add_active   =    'active';
                             endif;

          break;


          case 'interview':
                             $interview_active        =    'menu-open';
                             $int_view_active         =    'active';

                             if (!empty($segment3)):
                                $int_view_active     =    '';
                                $int_add_active      =    'active';
                             endif;

          break;



          case 'question':
                             $question_active        =    'menu-open';
                             $que_view_active        =    'active';

                             if (!empty($segment3)):
                                $que_view_active     =    '';
                                $que_add_active      =    'active';
                             endif;

          break;



          case 'image':
                             $image_active        =    'active';
          break;

          /*case 'category':
                             $category_active      =    'menu-open';

                             $segment4             =     Request::segment(4);

                             if (empty($segment4))
                             $catae_link_active    =    'activelink';

                             break;

          case 'categories':

                             $category_active      =    'menu-open';
                             $cat_link_active      =    'activelink';
                             break;

          case 'game':
                             $game_active      =    'menu-open';

                             $segment4             =     Request::segment(4);

                             if (empty($segment4))
                             $gamae_link_active    =    'activelink';

                             break;
          case 'games':

                             $game_active          =    'menu-open';
                             $gam_link_active     =    'activelink';
                             break;

          case 'banner':
                             $banner_active      =    'menu-open';

                             $segment4           =     Request::segment(4);

                             if (empty($segment4))
                             $banae_link_active    =    'activelink';

                             break;

          case 'banners':

                             $banner_active        =    'menu-open';
                             $ban_link_active      =    'activelink';
                             break;

          case 'users':

                             $users_active         =    'activelink';
                             break;
        */
       
   }

?>
<style>
 .activelink{color:#FFF !important;}
</style>

            <section class="sidebar">
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu" data-widget="tree">
                  <li class="header">MAIN NAVIGATION</li>
                  <li class="">
                     <a class="{{ isset($dashboard_active) ? 'activelink' : '' }}" href="{{ route('dashboard') }}"><span>Dashboard</span></a>
                  </li>

                  <li class="treeview {{ isset($subject_active) ? $subject_active : '' }}">
                     <a href="#">
                     <i class=""></i><span>Subject</span>
                       <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu" style="{{ isset($subject_active) ? 'display:block' : 'display:none' }}">
                        <li><a class="{{ !empty($sub_view_active) ? 'activelink' : '' }}" href="{{ route('subject.index') }}">View Subjects</a></li>
                        
                        <li>
                           <a class="{{ isset($sub_add_active) ? 'activelink' : '' }}" href="{{ route('subject.create') }}">Add Subject</a>
                        </li>
                     </ul>
                  </li>


                  <li class="treeview {{ isset($section_active) ? $section_active : '' }}">
                     <a href="#">
                     <i class=""></i><span>Section</span>
                       <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu" style="{{ isset($section_active) ? 'display:block' : 'display:none' }}">
                        <li><a class="{{ !empty($sec_view_active) ? 'activelink' : '' }}" href="{{ route('section.index') }}">View Section</a></li>
                        
                        <li>
                           <a class="{{ isset($sec_add_active) ? 'activelink' : '' }}" href="{{ route('section.create') }}">Add Section</a>
                        </li>
                     </ul>
                  </li>


                  <li class="treeview {{ isset($topic_active) ? $topic_active : '' }}">
                     <a href="#">
                     <i class=""></i><span>Topics</span>
                       <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu" style="{{ isset($topic_active) ? 'display:block' : 'display:none' }}">
                        <li><a class="{{ !empty($top_view_active) ? 'activelink' : '' }}" href="{{ route('topic.index') }}">View Topics</a></li>
                        
                        <li>
                           <a class="{{ isset($top_add_active) ? 'activelink' : '' }}" href="{{ route('topic.create') }}">Add Topic</a>
                        </li>
                     </ul>
                  </li>

                
                  <li class="treeview {{ isset($interview_active) ? $interview_active : '' }}">
                     <a href="#">
                     <i class=""></i><span>Interview Label</span>
                       <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu" style="{{ isset($interview_active) ? 'display:block' : 'display:none' }}">

                        <li><a class="{{ !empty($int_view_active) ? 'activelink' : '' }}" href="{{ route('interview.index') }}">View Interview Label</a></li>
                        
                        <li>
                           <a class="{{ isset($int_add_active) ? 'activelink' : '' }}" href="{{ route('interview.create') }}">Add Interview Label</a>
                        </li>

                     </ul>
                  </li>

                  <li class="treeview {{ isset($question_active) ? $question_active : '' }}">
                     <a href="#">
                     <i class=""></i><span>Questions</span>
                       <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu" style="{{ isset($question_active) ? 'display:block' : 'display:none' }}">

                      
                        <li><a class="{{ !empty($que_view_active) ? 'activelink' : '' }}" href="{{ route('question.index') }}">View Questions</a></li>
                        
                        <li>
                           <a class="{{ isset($que_add_active) ? 'activelink' : '' }}" href="{{ route('question.create') }}">Add Question</a>
                        </li>

                     </ul>
                  </li>

                  <li class="">
                     <a class="{{ isset($image_active) ? 'activelink' : '' }}" href="{{ route('image.index') }}">Images</a>
                  </li>

                   <li class="">
                     <a class="" href="{{ route('database') }}">Database Backup</a>
                  </li>


                  <li class="">
                     <a href="{{ SITE_URL }}cplogout">Logout</a>
                  </li>

               </ul>
            </section>