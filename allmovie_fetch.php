 <?php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM add_movie WHERE status = '1'";
	
	if(isset($_POST["categroy"]) && !empty($_POST["categroy"]))
	{
		$categroy_filter = implode("','", $_POST["categroy"]);
		$query .= " AND categroy IN('".$categroy_filter."')";
	}
	if(isset($_POST["language"]) && !empty($_POST["language"]))
	{
		$language_filter = implode("','", $_POST["language"]);
		$query .= " AND language IN('".$language_filter."')";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	
	if($total_row > 0)
	{
		$delay = 0.1;
		foreach($result as $row)
		{
			$button_text = ($row['action'] == "running") ? "Book Now" : "Upcoming";
			$button_class = ($row['action'] == "running") ? "btn-book" : "btn-upcoming";
			
			$output .= '
			<div class="movie-item" style="animation-delay: '.$delay.'s">
				<div class="movie-card">
					<div class="movie-poster">
						<img src="admin/image/'. $row['image'] .'" alt="'. $row['movie_name'] .'" class="poster-img">
						<div class="movie-overlay">
							<a href="movie_details.php?pass='.$row['id'].'" class="movie-btn '.$button_class.'">
								<span class="btn-text">'. $button_text .'</span>
								<span class="btn-icon">▶</span>
							</a>
						</div>
					</div>
					<div class="movie-info">
						<h4 class="movie-title">'. $row['movie_name'] .'</h4>
						<p class="movie-detail"><strong>Director:</strong> '. $row['directer'] .'</p>
						<p class="movie-detail"><strong>Category:</strong> '. $row['categroy'] .'</p>
						<p class="movie-detail"><strong>Language:</strong> '. $row['language'] .'</p>
					</div>
				</div>
			</div>
			';
			$delay += 0.05;
		}
	}
	else
	{
		$output = '<div style="grid-column: 1 / -1; text-align: center; padding: 50px; color: white; font-size: 1.2rem;"><h3>No Movies Found</h3></div>';
	}
	echo $output;
}

?>
<style>
	.movie-item {
		animation: fadeInScale 0.6s ease-out forwards;
	}

	@keyframes fadeInScale {
		from {
			opacity: 0;
			transform: scale(0.85) translateY(20px);
		}
		to {
			opacity: 1;
			transform: scale(1) translateY(0);
		}
	}

	.movie-card {
		background: white;
		overflow: hidden;
		box-shadow: 0 10px 35px rgba(0, 0, 0, 0.2);
		transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		height: 100%;
		display: flex;
		flex-direction: column;
		position: relative;
	}

	.movie-card::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 3px;
		background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
		z-index: 10;
	}

	.movie-card:hover {
		transform: translateY(-15px);
		box-shadow: 0 25px 70px rgba(102, 126, 234, 0.4);
	}

	.movie-poster {
		width: 100%;
		height: 480px;
		overflow: hidden;
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		position: relative;
	}

	.poster-img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
		display: block;
	}

	.movie-card:hover .poster-img {
		transform: scale(1.12) rotate(-2deg);
	}

	.movie-overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(135deg, rgba(102, 126, 234, 0.85) 0%, rgba(118, 75, 162, 0.85) 100%);
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;
		transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		backdrop-filter: blur(5px);
	}

	.movie-card:hover .movie-overlay {
		opacity: 1;
	}

	.movie-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		gap: 12px;
		padding: 14px 30px;
		background: white;
		color: #667eea;
		font-weight: 700;
		text-decoration: none;
		transition: all 0.3s ease;
		transform: scale(0.8);
		border: 2px solid white;
		position: relative;
		overflow: hidden;
	}

	.movie-btn::before {
		content: '';
		position: absolute;
		top: 50%;
		left: 50%;
		width: 0;
		height: 0;
		background: rgba(255, 255, 255, 0.2);
		border-radius: 50%;
		transform: translate(-50%, -50%);
		transition: width 0.5s, height 0.5s;
	}

	.movie-btn:hover::before {
		width: 300px;
		height: 300px;
	}

	.movie-card:hover .movie-btn {
		transform: scale(1);
	}

	.movie-btn:hover {
		background: transparent;
		color: white;
		border-color: white;
		gap: 15px;
	}

	.btn-book {
		background: linear-gradient(135deg, #10b981 0%, #059669 100%);
		color: white;
		border-color: #10b981;
	}

	.movie-card:hover .btn-book {
		background: white;
		color: #10b981;
		border-color: white;
	}

	.btn-upcoming {
		background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
		color: white;
		border-color: #f59e0b;
	}

	.movie-card:hover .btn-upcoming {
		background: white;
		color: #f59e0b;
		border-color: white;
	}

	.btn-icon {
		font-size: 0.8rem;
		transition: transform 0.3s ease;
	}

	.movie-btn:hover .btn-icon {
		transform: translateX(5px);
	}

	.movie-info {
		padding: 22px;
		flex-grow: 1;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.movie-title {
		font-size: 1.15rem;
		font-weight: 800;
		color: #1a1a2e;
		margin-bottom: 12px;
		line-height: 1.4;
		min-height: 45px;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}

	.movie-detail {
		font-size: 0.9rem;
		color: #666;
		margin: 6px 0;
		line-height: 1.4;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	.movie-detail strong {
		color: #667eea;
		font-weight: 700;
	}

	@media (max-width: 1200px) {
		.movie-poster {
			height: 430px;
		}
	}

	@media (max-width: 768px) {
		.movie-poster {
			height: 380px;
		}

		.movie-info {
			padding: 18px;
		}

		.movie-title {
			font-size: 1rem;
			min-height: 40px;
		}

		.movie-detail {
			font-size: 0.85rem;
			margin: 4px 0;
		}

		.movie-btn {
			padding: 12px 24px;
		}
	}

	@media (max-width: 480px) {
		.movie-poster {
			height: 320px;
		}

		.movie-info {
			padding: 14px;
		}

		.movie-detail {
			font-size: 0.8rem;
		}
	}

 	/* Grid layout: 4 cards per row on large screens */
 	.filter_data {
 		display: grid;
 		grid-template-columns: repeat(4, 1fr);
 		gap: 28px;
 		align-items: stretch;
 	}

 	/* Ensure each grid item fills its cell and cards are equal height */
 	.filter_data > .movie-item {
 		display: flex;
 		height: 100%;
 		width: 100%;
 	}
	
	/* -- Card visual enhancements for sparkle/glow -- */
	.movie-card {
		border-radius: 12px;
		overflow: hidden;
		position: relative;
		background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.04));
		border: 1px solid rgba(255,255,255,0.04);
		box-shadow: 0 10px 30px rgba(0,0,0,0.35), 0 2px 6px rgba(102,126,234,0.06) inset;
		transition: transform 320ms cubic-bezier(.2,.8,.2,1), box-shadow 320ms ease, filter 320ms ease;
	}

	.movie-card::after {
		content: '';
		position: absolute;
		inset: 0;
		pointer-events: none;
		background: linear-gradient(120deg, rgba(118,75,162,0.06), rgba(102,126,234,0.04));
		mix-blend-mode: screen;
		opacity: 0.9;
	}

	.movie-card:hover {
		transform: translateY(-18px) scale(1.02);
		box-shadow: 0 30px 90px rgba(102,126,234,0.18), 0 8px 30px rgba(0,0,0,0.45);
		filter: saturate(1.06) contrast(1.02);
	}

	.movie-poster { /* add subtle parallax shimmer */
		overflow: hidden;
		position: relative;
	}

	.poster-img {
		transition: transform 650ms cubic-bezier(.2,.8,.2,1), filter 650ms ease;
	}

	.movie-card:hover .poster-img {
		transform: scale(1.14) rotate(-1.6deg);
		filter: drop-shadow(0 30px 50px rgba(102,126,234,0.18));
	}

	.movie-overlay {
		background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.06), transparent 12%),
			linear-gradient(135deg, rgba(102,126,234,0.85) 0%, rgba(118,75,162,0.85) 100%);
		opacity: 0;
		transition: opacity 280ms ease, transform 280ms ease;
	}

	.movie-card:hover .movie-overlay {
		opacity: 1;
		transform: translateY(0) scale(1);
	}

	.movie-btn {
		box-shadow: 0 8px 30px rgba(102,126,234,0.12);
		border-radius: 999px;
	}

	.movie-btn:hover {
		box-shadow: 0 18px 40px rgba(102,126,234,0.22), 0 6px 18px rgba(0,0,0,0.25);
	}

	/* small glowing badge */
	.movie-badge {
		position: absolute;
		top: 12px;
		left: 12px;
		background: linear-gradient(90deg,#ffd166,#ff6b6b);
		color: #111;
		padding: 6px 10px;
		font-weight: 700;
		font-size: 0.85rem;
		border-radius: 999px;
		box-shadow: 0 6px 18px rgba(255,107,107,0.12);
	}

	/* gentle shimmer on load */
	@keyframes shimmer {
		0% { opacity: 0.35; transform: translateX(-30px); }
		50% { opacity: 0.95; transform: translateX(10px); }
		100% { opacity: 0.35; transform: translateX(-30px); }
	}

	.movie-card::before {
		content: '';
		position: absolute;
		top: 0; left: -50%; width: 60%; height: 100%;
		background: linear-gradient(90deg, transparent, rgba(255,255,255,0.06), transparent);
		transform: skewX(-18deg);
		opacity: 0.0;
		pointer-events: none;
		animation: shimmer 4.5s linear infinite;
	}

 	/* Make the card stretch to fill the grid item */
 	.movie-item .movie-card {
 		flex: 1 1 auto;
 		display: flex;
 		flex-direction: column;
 	}

 	@media (max-width: 1200px) {
 		.filter_data { grid-template-columns: repeat(3, 1fr); }
 		.movie-poster { height: 430px; }
 	}

 	@media (max-width: 992px) {
 		.filter_data { grid-template-columns: repeat(2, 1fr); }
 		.movie-poster { height: 380px; }
 	}

 	@media (max-width: 576px) {
 		.filter_data { grid-template-columns: 1fr; }
 		.movie-poster { height: 320px; }
 	}
</style>