<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/success.css') }}">
    
  </head>

    <body>

      <div class="circle">
        <div class="checkmark"></div>
      </div>
      <h1 style="font-family: monospace">Success</h1> 
      @if(!isset($edit))
        @if (isset($proposal_id))

          <p style="font-family: monospace;"><b>We received your proposal paper<br/> we'll be in touch shortly!</b></p>
        {{-- proposal id --}}
          <p style="font-family: monospace;"><b>Proposal ID: {{ $proposal_id }}</b></p>
          <a href="/proposal">Continue here</a>
        @else 
          <p style="font-family: monospace;"><b>We received your outreach report<br/> we'll be in touch shortly!</b></p>
        {{-- outreach id --}}
          <p style="font-family: monospace;"><b>Outreach ID: {{ $outreach_id }}</b></p>
          <a href="/outreach">Continue here</a>
        @endif
      @else 
        @if (isset($proposal_id))

          <p style="font-family: monospace;"><b>Proposal Paper edited successfully</b></p>
        {{-- proposal id --}}
          <p style="font-family: monospace;"><b>Proposal ID: {{ $proposal_id }}</b></p>
          <a href="{{route('report')}}">Continue here</a>
        @else 
          <p style="font-family: monospace;"><b>Outreach report  edited successfully</b></p>
        {{-- outreach id --}}
          <p style="font-family: monospace;"><b>Outreach ID: {{ $outreach_id }}</b></p>
          <a href="{{route('report')}}">Continue here</a>
        @endif
      @endif
      
    </body>
</html>