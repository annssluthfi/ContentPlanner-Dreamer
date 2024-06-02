<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dreamer - Create Idea</title>
        <link rel="stylesheet" href="{{ asset('css/create.css')}}">
    </head>
    <body>
        <section class="container">
            <header>New Idea</header>
            <form action="{{ route('planner.store') }}" class="form" method="post">
            @csrf
                <div class="input-box">
                    <label>Date</label>  <!--this should be "Date"-->
                    <input type="date" name="date" class="form-control" placeholder="Date">
                </div>
                
                <div class="input-box">
                    <label>Platform</label>
                    <input type="text" name="platforms" class="form-control" placeholder="Platform">
                </div>

                <div class="input-box">
                    <label>Main Focus/Goals</label>
                    <input type="text" name="goals" class="form-control" placeholder="Main Focus/Goals">
                </div>

                <div class="input-box">
                    <label>Topic/Idea</label>
                    <input type="text" name="idea" class="form-control" placeholder="Topic/Idea">
                </div>

                <div class="input-box">
                    <label>Content Pillars</label>
                    <input type="text" name="content_pillar" class="form-control" placeholder="Content Pillar">
                </div>

                <div class="input-box">
                    <label>Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type">
                </div>
                
                <div class="column">
                    <div class="input-box">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Status">
                    </div>
                    
                    <div class="input-box">
                        <label>Progress Tracking</label>
                        <input type="text" name="progress" class="form-control" placeholder="Progress Tracking">
                    </div>
                </div>
                
                <div class="buttons">
                    <button type="button" class="cancel-button" onclick="goBack()">Cancel</button>
                    <button type="submit" class="save-button">Save</button>
                </div>

            </form>
        </section>
    </body>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>

</html>