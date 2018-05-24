<section class="engine"><a href="#"></a></section><section class="menu cid-qMTzqonYrU" once="menu" id="menu1-33">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <div class="hamburger">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </button>
         <div class="menu-logo">
             <div class="navbar-brand">
                 
                 
             </div>
         </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true">
                 <li class="nav-item">
                     <a class="nav-link link text-success display-8" href="/">HOME</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link link text-success display-8" href="about">ABOUT US&nbsp;</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link link text-success display-8" href="/">SERVICES</a></li>
                 <li class="nav-item">
                     <a class="nav-link link text-success display-8" href="projects">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-success display-8" href="ratecard">RATE CARD</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link link text-success display-8" href="contacts">CONTACTS</a>
                </li> --}}
            </ul>
            <div class="navbar-buttons mbr-section-btn"  style="width:auto;">
                @if (Auth::guest())
                
                {{-- <div class="navbar-buttons mbr-section-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
                    <a class="btn btn-sm btn-primary display-8" href="#id02"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Login</a>
                </div>  --}}

                <div class="navbar-buttons mbr-section-btn" style="width:auto;">
                   <a onclick="document.getElementById('id01').style.display='block'"  class="btn btn-sm btn-primary display-8" href="#id01"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Register</a>
                   <a onclick="document.getElementById('id02').style.display='block'"  class="btn btn-sm btn-success display-8" href="#id02" style="color: #000000;"><span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: #000000;"></span>Login</a>                   
                   {{-- <a onclick="document.getElementById('id03').style.display='block'"  class="btn btn-sm btn-success display-8" href="#id03" style="color: #000000;"><span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: #000000;"></span>Reseller</a>                                       --}}
               </div>
            
                @else
                   <a class="btn btn-sm btn-warning display-8" href="{{route('logout')}}" onclick="event.preventDefault() document.getElementById('logout-form').submit();"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Logout</a>
                   

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
                   {{-- <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                       @csrf
                   </form> --}}
                   @endif
               </div>   

            @include('inc.modal2')
            @include('inc.modal')
 
                
         </div>
     </nav>
 </section>