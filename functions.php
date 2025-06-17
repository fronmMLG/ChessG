<?php
function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	header("Location: login.php");
	die;
}
function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}
	$len = rand(4,$length);
	for ($i=0; $i < $len; $i++) { 
		$text .= rand(0,9);
	}
	return $text;
}
function get_lichess_data($con, $user_id)
{
    $query = "SELECT lichess_username FROM users WHERE user_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($lichess_username);
    $stmt->fetch();
    $stmt->close();
    if (!$lichess_username) {
        return ["error" => "You have not linked your Lichess account."];
    }
    $lichess_api_url = "https://lichess.org/api/user/" . urlencode($lichess_username);
    $response = file_get_contents($lichess_api_url);
    if ($response === false) {
        return ["error" => "Error requesting Lichess API"];
    }
    $data = json_decode($response, true);
    if (isset($data['error'])) {
        return ["error" => "error: " . $data['error']];
    }
    $registered = isset($data['createdAt']) ? date("d.m.Y H:i:s", $data['createdAt'] / 1000) : "No data";
    $last_online = isset($data['seenAt']) ? date("d.m.Y H:i:s", $data['seenAt'] / 1000) : "No data";
    $blitz_games = isset($data['perfs']['blitz']['games']) ? $data['perfs']['blitz']['games'] : "No data";
    $rapid_games = isset($data['perfs']['rapid']['games']) ? $data['perfs']['rapid']['games'] : "No data";
    $bullet_games = isset($data['perfs']['bullet']['games']) ? $data['perfs']['bullet']['games'] : "No data";
    $puzzle_games = isset($data['perfs']['puzzle']['games']) ? $data['perfs']['puzzle']['games'] : "No data";
    $puzzle_rating = isset($data['perfs']['puzzle']['rating']) ? $data['perfs']['puzzle']['rating'] :"No data"; 
    $total_games = 0;
    foreach ($data['perfs'] as $type => $perf) {
        if ($type !== 'puzzle' && isset($perf['games'])) {
            $total_games += $perf['games'];
        }
    }
    return [
        "username" => $data['username'] ?? "No data",
        "blitz_rating" => $data['perfs']['blitz']['rating'] ?? "No data",
        "rapid_rating" => $data['perfs']['rapid']['rating'] ?? "No data",
        "bullet_rating" => $data['perfs']['bullet']['rating'] ?? "No data",
        "registered" => $registered, 
        "games_played" => $total_games, 
        "last_online" => $last_online,
        "blitz_games" => $blitz_games,
        "rapid_games" => $rapid_games,
        "bullet_games" => $bullet_games,
        "puzzle_games" => $puzzle_games,
        "puzzle_rating" => $puzzle_rating 
    ];
}
