@extends('layouts.app')

@section('content')
<div class="container">
  <center>
    <div class="row">
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/winners.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="http://127.0.0.1:8000/admin/teams"> TEAMS</a></h3>
                    <a href="http://127.0.0.1:8000/admin/teams/create" class="btn btn-success">ADD A TEAM</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/soccer-player.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="http://127.0.0.1:8000/admin/players">PLAYERS</a></h3>
                    <a href="http://127.0.0.1:8000/admin/players/create" class="btn btn-success">ADD A PLAYER</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/soccer-game.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="http://127.0.0.1:8000/admin/matchs">MATCHS</a></h3>
                    <a href="http://127.0.0.1:8000/admin/matchs/create" class="btn btn-success">ADD A MATCH</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/podium.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="#">TEAMS STATS</a></h3>
                    <a href="http://127.0.0.1:8000/stats/teams" class="btn btn-success">SEE STATS</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row my-4">
      <div class="col">
          <div class="card cardCustom" style="width: 15rem;">
              <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/soccer-field.png" alt="Card image cap">
              <div class="card-body text-center">
                  <h3 class="card-title text-center"><a href='#'>PLACEMENTS</a></h3>
                  <a href="http://127.0.0.1:8000/admin/placements/create" class="btn btn-success">ADD A PLACEMENT</a>
              </div>
          </div>
      </div>
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/strategy.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="http://127.0.0.1:8000/admin/roles">ROLES</a></h3>
                    <a href="http://127.0.0.1:8000/admin/roles/create" class="btn btn-success">ADD A ROLE</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/match.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href="http://127.0.0.1:8000/admin/bets">BETS</a></h3>
                    <a href="http://127.0.0.1:8000/admin/matchs" class="btn btn-success">ADD A BET</a>
                </div>
            </div>
        </div>
      {{--  <div class="col">
            <div class="card cardCustom" style="width: 15rem;">
                <img class="card-img-top custom" src="http://127.0.0.1:8000/img/panel/soccer-field.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class="card-title text-center"><a href='#'>PLACEMENTS</a></h3>
                    <a href="http://127.0.0.1:8000/admin/placements/create" class="btn btn-success">ADD A PLACEMENT</a>
                </div>
            </div>
        </div> --}}
    </div>
  </center>
</div>
@endsection
