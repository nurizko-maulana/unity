<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
	<title>Unity</title>
	<style>
	
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
	body {
		width: 100%;
		margin: 0;
		padding: 0;
	}

	/layout nav dan body/
	#background{
		background-image:url('img/Backgroundoverlay.jpg');
		height: 750px;
		width:100%;
	}

	/* NAVIGATOR */
	#navigator {
		display:flex;
		box-sizing:border-box;
		margin:0;
		padding:0;

		
		justify-content:flex-start;
		align-items:center;
		

		
	}
	li{
		font-family: "Montserrat", sans-serif;
		font-weight:500;
		font-size: 16px;
		color: #edf0f1;
		text-decoration:none;
	}
	
	.logo{
		cursor:pointer;
		
	}
	.nav_links{
		list-style:none;
		margin-left:30px;
	}
	.nav_links li{
		display:inline-block;
		padding: 10px 20px;
	}
	.nav_link li a{
		transition: all 0.3s ease 0;
	}
	.link-li  a:hover{
		color: #0088a9;
		
	}
	button {
		padding: 4px 23px;
		background-color: rgba(255,206,137,1);
		border: none;
		border-radius: 50px;
		cursor: pointer;
		transition: all 0.3s ease 0;
	}
	button:hover{
		background-color: rgba(0,136,169,0.8);
	}
	.cta{
		margin-left:auto;
		font-family: "Montserrat", sans-serif;
		color: #black;
		text-decoration:none;
	}

	/* BODY */
	#content-body {
		width: 100%;
		color: white;
		height: 700px;
        text-align: center;
        
        
        
	}

	#content-container {
		width: 780px;
		height: 200px;
        margin: 163px auto ;
        position: relative;
	}

	.content-body-title {
		 
	}

	.content-body-paragraph {
        margin-top: 50px;

	}

	.content-body-cta {
		
		border: 2px white solid;
		border-radius: 10px;
		cursor: pointer;
		transition: all 0.3s ease 0;
		border-style: 5px solid red;
		width: 145px;
		height: 43px;
		position: relative;
		
	}
	.text-in-cta{
		position: absolute;
		top: 13%;
		left: 15%;
	}
	/* Section */
	.content-grandparent{
		width:100%;
		height: 700px;
	}
	.content-parent{
		
	}
	.card{
		width: 310px;
		height: 340px;
	}
	.foot{
		width:100%;
	}

	/* text Keren*/
	cool-text{
		font-family: "Montserrat", sans-serif;
	}
	</style>
</head>
<body>
<!--Navigasi ampe body learn More-->
<div id="background" style="background-image:url('img/Backgroundoverlay.jpg'); height: 750px; width:100%;" >
	<!-- Navigasi bar -->
	<header id="navigator">
		<img  src="img/LOGO.png" alt="logo"  width="72" height="68" ><p class="text-3xl font-serif text-white" >U-nity</p>
		<nav>
		<!--	<ul class="nav_links">
				<li class="link-li"><a href="#">Home<a></li>
				<li class="link-li"><a href="#">Contact US<a></li>
				<li class="link-li"><a href="#">Gallery<a></li>	
			</ul>-->
		</nav>
		<a class="cta text-black" href="{{ route('login') }}"><button class="bg-white">Log In</button></a>
		<a class="mr-2 ml-5 font-sans font-medium text-base text-gray-200" href="{{ route('register') }}"><button class="bg-green-500">Register</button></a>
	</header>

	<!-- Body -->
	<div id="content-body">
		<div id="content-container">
			<div class="content-body-title">
				<h1 class="text-6xl text-white uppercase">Society at the speed of thought</h1>
			</div>
			<div class="content-body-paragraph">
				<p>We want realize with the advancement of technology community are getting few and far between,<br> so with that in mind we want to use the technology to connects among community who part of <br>neighborhood with different background and the high committee itself</p>
			</div>
			<div class="content-body-cta  my-8 mx-auto ">
				<a class="text-in-cta font-serif  text-xl" href="{{ route('login') }}">Learn More</a>
			</div>
		</div>
	</div>
</div>

<!-- Section -->
	
<section class="content-grandparent  bg-gradient-to-b from-gray-300 via-gray-400 to-gray-800  border-white  flex  justify-center">
<div class="content-parent lg:px-16 lg:w-3/5 lg:h-3/4 mt-20 bg-gradient-to-r from-green-400 to-blue-500 shadow-2xl rounded-lg ">

<!-- Card goes here -->
<div class="lg:grid grid-cols-3 gap-10 mt-20">
	<div class="card bg-transparent rounded overflow-hidden  mt-8">
	<img src="img/diversity.png" alt="community"  class=" w-full h-32 sm:h-48 object-contain">
		<div class="m-4 text-center ">
			<span class="font-bold text-keren  uppercase text-white">Bounding Community</span>
			<span class="lg:p-2 lg:m-2 block bg-white rounded shadow-md  text-gray-500 text-sm">We want this project to promote unity in a given community</span>
		</div>
	</div>
	<div class="card bg-transparent rounded overflow-hidden mt-8">
	<img src="img/quick.png" alt="performance" class=" w-full h-32 sm:h-48 object-contain">
		<div class="m-4   text-center ">
			<span class="font-bold text-keren uppercase text-white">High Performance</span>
			<span class="lg:p-2 lg:m-2 block bg-white rounded shadow-md text-gray-500 text-sm">Real Time Upate for Report and event within community</span>
		</div>
	</div>
	<div class= "card bg-transparent rounded overflow-hidden mt-8">
	<img src="img/lock.png" alt="Security" class=" w-full h-32 sm:h-48 object-contain">
		<div class="m-4  text-center ">
			<span class="font-bold text-keren  uppercase text-white">Real Secure</span>
			<span class="lg:p-2 lg:m-2 block bg-white rounded shadow-md  text-gray-500 text-sm">just don't worry about your personal data, boomer</span>
		</div>
	</div>
</div>
</div>
</section>

		<!-- FOOTER  -->
<div class="w-full  bg-black ">
      <div class="flex flex-wrap text-center text-white border-white">

        <!-- ABOUT COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-gray-900  md:text-left">
          <div class="my-6 ml-3 text-xl font-semibold">ABOUT US</div>
          <p class="p-3 text-gray-400">We are student from University technology Malaysia</p>
          {{-- <p class="p-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa. Donec eget elementum sapien, tincidunt tempor nunc. Cras sodales id ipsum at convallis</p> --}}
        </div>

        <!-- CONTACTS COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-gray-900 ">
          <div class="my-6 text-xl font-semibold">CONTACT US</div>
          <p class="mt-8 text-gray-400">
		  Sultan Ibrahim Chancellery Building <br>
		  Jalan Iman, 81310 Johor <br>
            Malaysia <br>
            <strong>Phone:</strong> +60 11 1752 2414 <br>
            <strong>Email:</strong> info@unity.com
          </p>
          <div class="relative w-20 h-20 mx-auto my-12 bg-blue-300 rotate-45">
            <div class="flex justify-center items-center absolute left-0 top-0 w-10 h-10 hover:-ml-1 hover:-mt-1 bg-blue-800 cursor-pointer">
              <a href="https://www.facebook.com/univteknologimalaysia" target="_blank" ><i class="fab fa-facebook-f fa-lg text-blue-500 -rotate-45"></i></a>
            </div>
            <div class="flex justify-center items-center absolute top-0 right-0 w-10 h-10 hover:-mt-1 hover:-mr-1 bg-blue-800 cursor-pointer">
			<a href="https://twitter.com/utm_my" target="_blank" ><i class="fab fa-twitter fa-lg text-blue-500 -rotate-45"></i></a>
            </div>
            <div class="flex justify-center items-center absolute right-0 bottom-0 w-10 h-10 hover:-mr-1 hover:-mb-1 bg-blue-800 cursor-pointer">
			<a href="https://www.utm.my/" target="_blank" ><i class="fab fa-google-plus-g fa-lg text-blue-500 -rotate-45"></i></a>
            </div>
            <div class="flex justify-center items-center absolute bottom-0 left-0 w-10 h-10 hover:-mb-1 hover:-ml-1 bg-blue-800 cursor-pointer">
			<a href="https://www.linkedin.com/school/universiti-teknologi-malaysia/" target="_blank" > <i class="fab fa-linkedin-in fa-lg text-blue-500 -rotate-45"></i></a>
            </div>
          </div>
        </div>

        <!-- FORM COLUMN -->

        <div class="w-full md:w-1/3 p-5">
          <div class="mt-6 text-xl font-semibold">INQUIRES?</div>
          <form class="w-4/5 mx-auto mt-2 px-6 pt-6 pb-4 rounded">
            <div class="flex items-center mb-4">
              <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Username">
            </div>
            <div class="flex items-center mb-4">
              <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Email">
            </div>
            <div class="mb-6">
              <textarea class="w-full h-24 px-2 pt-2 border-b-2 border-blue-800 bg-blue-900 text-white" placeholder="Message"></textarea>
            </div>
            <div class="flex justify-between items-center">
              <button class="w-full py-2 px-4 rounded bg-orange-600 hover:bg-orange-700 text-white font-bold" type="button">SEND</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</body>
</html>