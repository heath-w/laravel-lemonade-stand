@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>My Games</h2>

                    <p><a href="#">Start a new game</a></p>

                    <div class="row">                        
                        <div class="col-sm-5">
                            <h4>Active Games</h4>
                            <ul class="gamesList">
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 4 - Day 8, $2500.87</a></li>
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 5 - Day 2, $25.87</a></li>
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 6 - Day 1, $5.00</a></li>
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 7 - Day 1, $5.00</a></li>
                                
                            </ul>
                        </div>

                        <div class="col-sm-5">
                            <h4>Ended Games</h4>
                            <ul class="gamesList">                                
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 1 - Day 14, $11125.17</a></li>
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 2 - Day 14, $5125.87</a></li>
                                <li> <i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Game 3 - Day 14, $25,000.00</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Leader Board</h2>

                            <ul class="leaderBoardList">
                                <li>Heath - $25,000</li>
                                <li>Mario - $12,000</li>
                                <li>Luigi - $11,999</li>
                            </ul>
                        </div>
                    </div>

                    <br />
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <p>You are logged in!</p>
                        </div>
                    </div>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
