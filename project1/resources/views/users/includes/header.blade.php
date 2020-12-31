<!--Markup for header-->

    <section id="header">
        <div class="container">
            <div class="text">
              <h2>Software Development</h2>
                <p>Assignment</p>
            </div>

            <nav>
                <ul type="none">
                    <li><a href="{{  URL::to('user') }}">Home</a></li>
                    <li><a href="{{  URL::to('logout')  }}">Logout</a></li>
                    <li><a href="{{  URL::to('show_data') }}">Show Data</a></li>
                    <li><a href="{{  URL::to('image') }}">Upload Image</a></li>
                </ul> 
            </nav>
        </div>
    </section>