<li class="nav-item menu-open">
     <a href="#" class="nav-link active">
       <i class="nav-icon fas fa-tachometer-alt"></i>
       <p>
         الصفحه الرئيسيه
         <i class="right fas fa-angle-left"></i>
       </p>
     </a>
     <ul class="nav nav-treeview">
       <li class="nav-item">
         <a href="{{ URL('admin/') }}" class="nav-link active">
           <i class="far fa-circle nav-icon"></i>
           <p>الصفحه الرئيسيه</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="./index2.html" class="nav-link">
           <i class="far fa-circle nav-icon"></i>
           <p>Dashboard v2</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="./index3.html" class="nav-link">
           <i class="far fa-circle nav-icon"></i>
           <p>Dashboard v3</p>
         </a>
       </li>
     </ul>
   </li>
 
 
   <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa-solid fa-folder-open"></i>   
         <p>
        المقالات
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/blog') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل المقالات </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/blog/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه مقال جديد</p>
        </a>
      </li>
 
    </ul>
  </li>


  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa-solid fa-video"></i>   
         <p>
الفديوهات  
      <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/video') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الفديوهات </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/video/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه فديو جديد</p>
        </a>
      </li>
 
    </ul>
  </li>

  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa-solid fa-user"></i>   
         <p>
الاعضاء  
      <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/user') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الاعضاء </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/user/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه عضو جديد</p>
        </a>
      </li>
 
    </ul>
  </li>

    
    