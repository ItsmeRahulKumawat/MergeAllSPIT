<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
</head>
<body>
  
    
    {{-- if proposal is set --}}
    @if (isset($proposal))
        <iframe src="{{ asset('storage/'.$proposal->proposal_file) }}" width="100%" height="1000px"></iframe>
    @else
        <iframe src="{{ asset('storage/'.$outreach->outreach_report) }}" width="100%" height="1000px"></iframe>
    @endif
</body>
</html>