<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Doctor</title>


     <link rel="stylesheet" type="text/css" href="{{asset('styling/css/findAdoctor.CSS')}}">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
    

</head>
<body>
    <div id="home" class="Header"> 
       
   

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{asset('uploads/pictures/'.'doctor-appoint.mp4')}}" type="video/mp4">
    </video>

    <div class="navbar">
    <img src="{{asset('uploads/pictures/'.'logo.png')}}" class="logo">
    <input type='checkbox' id='mmeennuu'>
    <label class='menu' for='mmeennuu'>
    
    <div class='barry'>
        <span class='bar'></span>
        <span class='bar'></span>
        <span class='bar'></span>
        <span class='bar'></span>
    </div>
       
    <ul>
        <li><a id='Home'    href='#Home'>    <i class="fa fa-home"></i> Home</a></li>
        <li><a id='about'   href='#about'>  <i class="fa fa-university"></i> About us</a></li>
        <li><a id='spec'    href='#spec'>   <i class="fa fa-list"></i> specialties</a></li>
        <li><a id='media'   href='#media'>   <i class="fa fa-photo"></i> Media center</a></li>
        <li><a id='patient' href='#patient'>  <i class="fa fa-user"></i>  Patient area </a></li>
        <li><a id='contact' href='#contact'>  <i class="fa fa-envelope"></i> contact us</a></li> 
    
    </ul>
    
    </label>
    </div>

        <div class="item">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line"></div>
                        <div class="animated-title">
                            <div class="text-top">
                              <div>
                                <span><h2>With our Surgical Specialists,</h2></span>
                                <span><h1>Find a doctor who specializes in your case</h1></span>
                              </div>
                            </div>
                            <div class="text-bottom">
                            <div><h4>We have doctors and specialists that you can make an appointment with on the schedule.</h4></div>
                            </div>
                        </div>        
                     </div>
                </div>
             </div>
        </div> 
        </div>

<!-- <div class="space"></div> -->

        <div class="container3">
            
                
                <ul class="mcd-menu">
                        
                 <li class="active"><a href='#first'><i class="fa fa-user-md"></i><strong><b>Cardiothoracic Surgery</b></strong></a></li>
                       
                 <li><a href='#second'><i class="fa fa-user-md"></i><strong><b>Neurosurgery</b></strong></a></li>
                            
                 <li><a href='#third'><i class="fa fa-user-md"></i><strong><b>Orthopaedic Surgery</b></strong></a></li>
  
                 <li><a href='#fourth'><i class="fa fa-user-md"></i><strong><b>Urologist</b></strong></a></li>
                   
                 <li><a href='#fifth'><i class="fa fa-user-md"></i> <strong><b>dental</b></strong></a></li>
                         
                 <li><a href='#sixth'><i class="fa fa-user-md"></i><strong><b>Obstetrics and Gynecology</b></strong></a></li>
                 
                 
                 <!-- search -->
                            
                 <!-- <li class="float">
                    <a class="search">
                        <input type="text" value="search ...">
                        <button><i class="fa fa-search"></i></button>
                    </a>
                    <a href="" class="search-mobile">
                        <i class="fa fa-search"></i>
                    </a>
                </li> -->

                    </ul>
                
            </div>

   
         <div class= 'container2'>


           <section id= 'first'>
            @foreach ($members as $member)
                @if($member['specialization'] == 'cardiothoracic')
            
            <div class="container6">
                <div class="card6">
                  <div class="imgBx6">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx6">
                    <h2>{{($member->fname)}} {{($member->mname)}}</h2>
                    <div class="size6">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color6">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach

              {{-- <div class="container6">
                <div class="card6">
                  <div class="imgBx6">
                    <img src="{{asset('uploads/pictures/'.'ahmed helmy-modified.png')}}">
                  </div>
                  <div class="contentBx6">
                    <h2>Ahmed Helmy </h2>
                    <div class="size6">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color6">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    
                  </div>
                </div>
              </div> --}}

             <!-- <h1>First</h1> -->
           </section>
           
           <section id= 'second'>
             
            @foreach ($members as $member)
            @if($member['specialization'] == 'neurological')
        

            <div class="container5">
                <div class="card5">
                  <div class="imgBx5">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx5">
                    <h2>{{($member->fname)}} {{($member->mname)}}</h2>
                    <div class="size5">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color5">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach

              {{-- <div class="container5">
                <div class="card5">
                  <div class="imgBx5">
                    <img src="{{asset('uploads/pictures/'.'dr.-Mohammed-Nabeel-scaled-modified.png')}}">
                  </div>
                  <div class="contentBx5">
                    <h2> Muhammad Nabeel </h2>
                    <div class="size5">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color5">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    <a href="#"> Book </a>
                  </div>
                </div>
              </div> --}}



           </section>
           
          <section id= 'third'>
            
            @foreach ($members as $member)
                @if($member['specialization'] == 'orthopaedic')

            <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx7">
                    <h2>{{($member->fname)}} {{($member->mname)}}</h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach


              {{-- <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.'MostafaEzzat-modified.png')}}">
                  </div>
                  <div class="contentBx7">
                    <h2>Mostafa Ezzat </h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    <a href="#"> Book </a>
                  </div>
                </div>
              </div> --}}


           </section>
           
          <section id= 'fourth'>
 
            @foreach ($members as $member)
            @if($member['specialization'] == 'urology')

            <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx7">
                    <h2>{{($member->fname)}} {{($member->mname)}}</h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach

              {{-- <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.'Ghonim-modified.png')}}">
                  </div>
                  <div class="contentBx7">
                    <h2>Mohamed Ghoneim</h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    <a href="#"> Book </a>
                  </div>
                </div>
              </div> --}}


           </section>

           <section id= 'fifth'>
            
            @foreach ($members as $member)
            @if($member['specialization'] == 'dental')

            <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx7">
                    <h2>{{($member->fname)}} {{($member->mname)}}</h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach

              {{-- <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.'ahmed-mohamed-kassem-modified.png')}}">
                  </div>
                  <div class="contentBx7">
                    <h2>Ahmed Mohamed </h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    <a href="#"> Book </a>
                  </div>
                </div>
              </div> --}}


           </section>

           <section id= 'sixth'>
            
            @foreach ($members as $member)
            @if($member['specialization'] == 'Obstetrics')


            <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.$member['profile_image'])}}">
                  </div>
                  <div class="contentBx7">
                    <h2>>{{($member->fname)}} {{($member->fname)}}</h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Sunday</span>
                      <span>Wednesday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 2pm-5pm }</span>
                    </div>
                    <a href="{{ route('register') }}"> Book </a>
                  </div>
                </div>
              </div>
              @endif
              @endforeach


              {{-- <div class="container7">
                <div class="card7">
                  <div class="imgBx7">
                    <img src="{{asset('uploads/pictures/'.'Dr.Aida_-modified.png')}}">
                  </div>
                  <div class="contentBx7">
                    <h2>Aida saad </h2>
                    <div class="size7">
                      <h3>Days :</h3>
                      <span>Monday</span>
                      <span>Thursday</span>
                    </div>
                    <div class="color7">
                      <h3>Time :</h3>
                      <span> After Noon { 1pm-6pm }</span>
                    </div>
                    <a href="#"> Book </a>
                  </div>
                </div>
              </div> --}}


           </section>
         </div>
         

        
        

        


      <!-- footer================================================================================== -->

  <div class="footer">
    <div class="row">


       <div class="col">
            <img src="{{asset('uploads/pictures/'.'logo.png')}}" alt="" class="foot-logo">
            <p> We are here to fill in the widening gap within the health care sector. Our facilities, equipment, and physicians are of the highest standards.</p>
       </div>

        <div class="col">
            <h3> Office <div class="underline"><div class="fill"></div></h3>
            <p>Admin</p><br>
            <p>Doctors</p><br>
            <P class="email-id" >Our-Email</P><br>
            <h4>Our-Number</h4>
        </div>


        <div class="col">
            <h3>Links <div class="underline"><div class="fill"></div></h3>
            </h3>
            <ul>

                <li><a href="">Join us</a></li>
                <li><a href="">Services</a></li> 
                <li><a href="">Contact us</a></li>
                <li><a href="">Our Location</a></li>

           </ul>
        </div>
        <div class="col">
            <h3>complaint<div class="underline"><div class="fill"></div></h3>
            <form>
                <i class="far fa-envelope"></i>
                <input type="email" placeholder="Enter your email " required> 
               <div class="form"><button type="submit"><i class="fas fa-arrow-right"></i></button></div>
            </form>
            <div class="social-icons">
               <i class="fab fa-facebook-f"></i>
               <i class="fab fa-twitter"></i>
               <i class="fab fa-whatsapp"></i>
               <i class="fab fa-linkedin"></i>

            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">Department of Surgery website by Team 4</p>
 </div>

    
    

<script src="{{asset("/Java Script/script.js")}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script type="text/javascript">
    $(document).on('click', '.mcd-menu li', function(){
        $(this).addClass('active').siblings().removeClass('active')
    })

</script>








</body>
</html>