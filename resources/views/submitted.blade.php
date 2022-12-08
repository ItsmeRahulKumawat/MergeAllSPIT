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
      @if (isset($proposal))

      <p style="font-family: monospace;"><b>We received your proposal paper<br/> we'll be in touch shortly!</b></p>
      {{-- proposal id --}}
      <p style="font-family: monospace;"><b>Proposal ID: {{ $proposal_id }}</b></p>
      @else 
      <p style="font-family: monospace;"><b>We received your outreach report<br/> we'll be in touch shortly!</b></p>
      {{-- outreach id --}}
      <p style="font-family: monospace;"><b>Outreach ID: {{ $outreach_id }}</b></p>
      @endif
    </body>
</html>