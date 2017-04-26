<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <i class="fa fa-television"></i>
                        </span>Canales</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        @foreach($channels as $channel)
                            <tr>
                                <td>
                                    <i class="fa fa-television"></i>
                                    <a href="{{route('channel.show',[$channel->id,$channel->slug])}}"> {{$channel->name}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <i class="glyphicon glyphicon-bullhorn"></i>
                        </span>Emisoras</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <i class="glyphicon glyphicon-volume-up"></i>
                                <a href="/radioCaracasRadio">Radio Caracas Radio</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>