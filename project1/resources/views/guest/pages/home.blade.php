<!--Markup for homepage-->

@extends('guest.layouts.default')
 
@section('content')
 
   <section id="demo-data">
    <p>Lorem Ipsum is simply dummy text of the printing
        and typesetting industry.
        Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s,
        when an unknown printer took a galley of
        type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the
        leap into electronic typesetting, remaining essentially
        unchanged. It was popularised in the 1960s with the
        release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop publishing
        software like Aldus PageMaker including versions of
        Lorem Ipsum.</p>

        <input class="submit" type="submit" id="dinner" value="Order for Dinner"/>

       <h3 id="demo"></h3>

       <input class="submit" type="submit" id="lunch" value="Order for Lunch"/>


        <script type="text/javascript" defer="defer">
<!-- 
    var enableDisable = function(){
    var UTC_hours = new Date().getHours();
    document.getElementById("demo").innerHTML =
        "The time is: " + UTC_hours;
    if (UTC_hours < 35){
        document.getElementById('dinner').disabled = true;
    }
    else
    {
        document.getElementById('dinner').disabled = false;
    }

    if (UTC_hours < 35){
        document.getElementById('lunch').disabled = false;
    }
    else
    {
        document.getElementById('lunch').disabled = true;
    }
    };
    setInterval(enableDisable, 1000*60);
    enableDisable();
// -->
    </script>
        <!-- <a href="{{ URL::to('/order') }}">Order Food</a> -->

        
    </section>
@stop


    