# Laravel: sports site

The goal of this project was to learn MVC by making a sports website featuring one sport (we chose soccer). 

## Database
The database of the project is composed of the following tables:
* users
* players
* teams
* roles 
* placements (= locations)
* matchs
* stats
* bets

## Features
The visiting users can access most of the site. However, if they wish to bet on a match, they have to create an account.
The administrator administrates the content of the site (players, teams, matches...)

### Admin
The admin can create, edit, delete a team, add or remove a player in a team, create a match and chose the teams that are playing against each other. He can add/delete a location and a role. He can see the bets of everyone and can delete a bet. He can add statistics to a past match.

### Visiting user
The visiting user can see all teams, the players in the team, the details of a player, the past matches (on which he can see the statistics, like the score, the actions...) and the matches to come.

### Connected user
The connected user can do the same as the visiting user + placing a bet on a coming match.


## Built With

* [Laravel](https://laravel.com/) - The web framework used
* Inspiration from [FIFA.com](https://laravel.com/) 

