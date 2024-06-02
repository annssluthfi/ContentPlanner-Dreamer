<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Content Plan and Content Brief</title>
		<link rel="stylesheet" href="{{ asset('css/detail.css')}}" />
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
			<img class="logo" src="{{ asset('img/logo.svg') }}" alt="" />
			<p id="logo-name">Dreamer</p>
		</nav>
		<div class="container">
			<div class="content-plan">
                <form action="{{ route('planner.update', $planner->id) }}" method="post">
                @csrf
                @method('PUT')
                    <h2>Content Plan</h2>
				    <input type="date" name="date" class="form-control" placeholder="Date" value="{{$planner->date}}">
				<div class="details">
                    <div class="details-platform">
                        <label for="platform">Platform:</label>
                        <input type="text" id="platform" value="{{$planner->platforms}}" />
                    </div>

                    <div class="details-main-focus">
                        <label for="main-focus">Main Focus/Goals:</label>
                        <input type="text" name="goals" value="{{ $planner->goals }}">
                    </div>

                    <div class="details-topic">
                        <label for="topic">Topic/Idea:</label>
                        <textarea name="idea" id="topic" rows="5">{{ $planner->idea }}</textarea
                        >
                    </div>

                    <div class="content-pillars">
                        <label for="content-pillars">Content Pillars:</label>
                        <input type="text" name="content_pillar" id="content-pillars" value="{{ $planner->content_pillar }}" />
                    </div>

                    <div class="details-type">
                        <label for="type">Type:</label>
                        <input type="text" name="type" id="type" value="{{ $planner->type }}" />
                    </div>
				</div>
			</div>

			<div class="content-brief">
				<h2>Content Brief</h2>
				<div class="details">
                    
                    <div>
                        <label for="visual">Visual/Visual Reference:</label>
                        <input
                            type="text"
                            name="visual_det"
                            id="visual"
                            value="{{ $planner->visual_det }}"
                        />
                    </div>

                    <div>
                        <label for="copywriting">Copywriting/Caption:</label>
                        <textarea name="caption" id="copywriting" rows="8">{{ $planner->caption }}</textarea
                        >
                    </div>

                    <div class="content">
                        <div>
                            <label for="status">Status:</label>
                            <select name="status" id="status">
                                <option value="{{$planner->status}}">{{ $planner->status }}</option>
                                <option value="review">Review</option>
                                <option value="in_progress">In Progress</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
    
                        <div>
                            <label for="progress">Progress Tracking</label>
                            <select name="progress" id="progress">
                                <option value="{{$planner->progress}}">{{ $planner->progress }}</option>
                                <option value="review">Review</option>
                                <option value="in_progress">In Progress</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="hashtag">Hastag:</label>
                        <input type="text" name="hastag" id="hashtag" value="{{$planner->hastag}}" />
                    </div>
				</div>
				<div class="actions">
                    <button class="button"><p>Save</p></button>
            </form>
            <form action="{{ route('planner.destroy', $planner->id) }}" method="post" type="button" onsubmit="return confirm('delete?')">
                @csrf
                @method('DELETE')
                <button class="delete-btn"><p>Delete</p></button>
            </form>
            </div>
			</div>
		</div>
	</body>
</html>
