<h3 class="title">New Client</h3>
@include('providers/clients/steps')

<a class="btn btn-primary pull-right" href="{{URL::to('provider/client/new/'.($currentStep+1))}}">Next Step<i class="fui-arrow-right"></i></a>