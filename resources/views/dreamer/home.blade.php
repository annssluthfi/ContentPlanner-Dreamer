<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dreamer - home</title>
		<link rel="stylesheet" href="{{'css/home.css'}}" />
		<script src="js/script.js" defer></script>
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<nav>
			<div class="left">
				<img class="logo" src="img/logo.svg" alt="" />
				<p id="logo-name">Dreamer</p>
			</div>
			<div class="right">
			<form class="logout-form" action="/logout" method="post">
    				@csrf
    				<button class="logout-btn" type="submit"><a id="logout">Logout</a></button>
			</form>
				<p id="username">{{ auth()->user()->username }}</p>
			</div>
		</nav>
		<div class="container">
			<div id="data">
				<button class="up"><img src="img/up.svg" alt=""></button>

				<div class="content">
					<h1 id="title">Content Plan</h1>
					<h3 id="content-date"></h3>
		
					<div>
						<p class="title">Platform</p>
						<p class="desc" id="content-platforms"></p>
					</div>
		
					<div>
						<p class="title">Main Focus/Goals</p>
						<p class="desc"  id="content-goals"></p>
					</div>
		
					<div>
						<p class="title">Topic/Idea</p>
						<p class="desc" id="content-idea"></p>
					</div>
		
					<div>
						<p class="title">Content Pillars</p>
						<p class="desc" id="content-pillars"></p>
					</div>
		
					<div>
						<p class="title">Type</p>
						<p class="desc" id="content-type"></p>
					</div>
		
					<div class="status">
						<div class="status-div">
							<p class="title">Status</p>
							<p class="status-desc" id="content-status"></p>
						</div>
						<div class="status-div">
							<p class="title">Progress Tracking</p>
							<p class="status-desc" id="content-progress"></p>
						</div>
					</div>
	
				</div>
				<button class="down"><img src="img/down.svg" alt=""></button>
			</div>
			
			<div class="button">
                <form action="{{ route('edit') }}" method="post" type="button">
                @csrf
				<input type="hidden" name="id" id="content-id">
				<button class="edit"><img src="img/pencil.svg" alt=""></button>
            	</form>

            <form action="{{ route('planner.create') }}" method="get">
            @csrf
            <button class="update"><img src="img/plus.svg" alt=""></button>
            </form>
			</div>
		</div>

        <script>
        // Data awal
        var planners = {!! json_encode($planners) !!};
        var currentIndex = 0;

        // Fungsi untuk menampilkan data ke dalam HTML
        function displayData(index) {
            var planner = planners[index];
			var nilai = index + 1;
			document.getElementById('title').textContent = "Content Plan " + nilai;
			document.getElementById('content-id').value=planner.id;
            document.getElementById('content-date').textContent = planner.date;
            document.getElementById('content-platforms').textContent = planner.platforms;
            document.getElementById('content-goals').textContent = planner.goals;
            document.getElementById('content-idea').textContent = planner.idea;
			document.getElementById('content-type').textContent = planner.type;
            document.getElementById('content-status').textContent = planner.status;
			document.getElementById('content-progress').textContent = planner.progress;
            document.getElementById('content-pillars').textContent = planner.content_pillar;
            // Tambahkan logika untuk menampilkan data lainnya
        }

        // Saat halaman dimuat, tampilkan data pertama
        displayData(currentIndex);

        // Saat tombol up ditekan, tampilkan data sebelumnya
        document.querySelector('.up').addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                displayData(currentIndex);
            }
        });

        // Saat tombol down ditekan, tampilkan data selanjutnya
        document.querySelector('.down').addEventListener('click', function() {
            if (currentIndex < planners.length - 1) {
                currentIndex++;
                displayData(currentIndex);
            }
        });

    //     // Menangkap semua button edit
    //     var editButtons = document.querySelectorAll('.edit');

    //     // Menambahkan event listener ke setiap button edit
    //     editButtons.forEach(function(button) {
    //     button.addEventListener('click', function() {
    //         var plannerId = planners[currentIndex].id;
    //     console.log('Edit planner with ID:', plannerId);
        
    //             // Mengirim data ke URL "/edit" menggunakan fetch
    //     fetch('/edit', {
    //         method: 'POST',
    //         headers: {
    //             'Content-Type': 'application/json',
    //         },
    //         body: JSON.stringify({ planner_id: plannerId }), // Mengirimkan ID planner dalam bentuk JSON
    //     })
    //     .then(response => {
    //         // Memeriksa apakah responsenya berhasil
    //         if (!response.ok) {
    //             throw new Error('Failed to send data.');
    //         }
    //         // Jika berhasil, redirect ke halaman "/edit" dengan mengirimkan ID planner
    //         window.location.href = '/edit' + plannerId;
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //     });
    // });

    </script>
	</body>
</html>
