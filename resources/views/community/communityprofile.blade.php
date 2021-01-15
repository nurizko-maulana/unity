<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="w-full flex flex-row flex-wrap">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .round {
    border-radius: 75%;
  }
</style>

<div class="w-full bg-indigo-100 h-screen flex flex-row flex-wrap justify-center ">
  
  <!-- Begin Navbar -->    

  <div class="bg-white shadow-lg border-t-4 border-indigo-500 absolute bottom-0 w-full md:w-0 md:hidden flex flex-row flex-wrap">
    <div class="w-full text-right"><button class="p-2 fa fa-bars text-4xl text-gray-600"></button></div>
  </div>
  
  <div class="w-0 md:w-1/4 lg:w-1/5 h-0 md:h-screen overflow-y-hidden bg-white shadow-lg">
  <div class="p-5 bg-white sticky top-0">
      <img class="border border-indigo-100 shadow-lg round" src="https://scontent.fmkz1-1.fna.fbcdn.net/v/t31.0-8/13130908_570064926487713_2324086412903717092_o.jpg?_nc_cat=103&ccb=2&_nc_sid=19026a&_nc_ohc=K1NaOe6T6AYAX-2JoEx&_nc_ht=scontent.fmkz1-1.fna&oh=2ee5b714e6d51926df30090b6bd13cce&oe=602637E7"> 
      

      <div class="pt-2 border-t mt-5 w-full text-center text-xl text-gray-600">
      @foreach($Cdata as $i)
      Community Name :   {{$i->Community_name}}
       @endforeach
      <div class="pt-2 border-t mt-2 w-full text-center text-xl text-gray-600"></div>
      @foreach($Cdata as $i)
      Community Moto :   {{$i->Community_motto}}
       @endforeach
       <div class="pt-2 border-t mt-2 w-full text-center text-xl text-gray-600"></div>
       @foreach($Cdata as $i)
      High committee :   {{$i->Community_highcommite}}
       @endforeach
        <div class="pt-2 border-t mt-2 w-full text-center text-xl text-gray-600"></div>
        @foreach($Cdata as $i)
      High Commite Important Number goes here :   {{$i->Community_info}}
       @endforeach
        <div class="pt-2 border-t mt-2 w-full text-center text-xl text-gray-600"></div>
        Community Member:
        <ul>
            @foreach($data as $i)
            <li>{{$i->name}}</li>
            @endforeach
        </ul>

      </div>
    </div>
</div>
  <!-- End Navbar -->

  <div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 lg:24 h-full overflow-x-scroll antialiased">
    <div class="bg-white w-full shadow rounded-lg p-5">
      <textarea class="bg-gray-200 w-full rounded-lg shadow border p-2" rows="5" placeholder="Put News Here"></textarea>
      
      <div class="w-full flex flex-row flex-wrap mt-3">
        <div class="w-1/3">
          <select class="w-full p-2 rounded-lg bg-gray-200 shadow border float-left">
            <option>News</option>
            <option>Event</option>
          </select>
        </div>
        <div class="w-2/3">
          <button type="button" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg">Submit</button>
        </div>
      </div>
    </div>
    
    <div class="mt-3 flex flex-col">
      
      
      <div class="bg-white mt-3">
        <img class="border rounded-t-lg shadow-lg " src="https://previews.123rf.com/images/sodis/sodis1609/sodis160900101/66162440-merry-christmas-and-happy-new-year-xmas-poster-banner-printed-matter-greeting-card-lettering-calligr.jpg">
        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
          A Pretty Cool photo from the high community for this Chirmast Eve. Image credit to @willaimLau.
        </div>
        <div class="bg-white p-1 border shadow flex flex-row flex-wrap">
          <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">Share</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">Comment</div>
        </div>
        
        <div class="border-4 bg-gray-300 border-white rounded-b-lg shadow p-5 text-xl text-gray-700 content-center font-semibold flex flex-row flex-wrap">
          <div class="w-full">
            <div class="w-full text-left text-xl text-gray-600">
              @Arief Muhammad
            </div>
            Amazing for this year Chrismast from the event organizer and high community from this complex.
            thanks to god we can communicate everyone in this complex really good with the help of U-nity web application.
          </div>
        </div>
      </div>
      
      
      <div class="bg-white mt-3">
        <img class="border rounded-t-lg shadow-lg " src="https://www.who.int/images/default-source/searo---images/emergencies/covid19/follow-up-posts-02.jpg?sfvrsn=abcb7b09_2">
        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
        Appeal to the Complex Community against the covid-19 virus, please maintain and implement health protocols, Love your Family and The Community.
        </div>
        <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
          <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">Share</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">Comment</div>
        </div>
      </div>
      
      
      <div class="bg-white mt-3">
        <img class="border rounded-t-lg shadow-lg " src="https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20191219201254_5dfb775633e2d.jpg">
        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
          Let's Come And Enjoy This Year Open House and Don't forget to register your family because there will lots of fun games.
        </div>
        <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
          <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">Share</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">Comment</div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</x-app-layout>