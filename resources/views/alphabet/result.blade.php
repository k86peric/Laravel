<!DOCTYPE html>
<html>
<head>
    <title>Alphabet Letters</title>
</head>
<body>
    <!--@foreach (str_split($word) as $letter)
        <strong>{{ $letter }}</strong><br>-->
        @foreach ($alphabet as $alphabetLetter)
            @if ($alphabetLetter === strtolower($letter))
                <strong>{{ $alphabetLetter }}</strong>
            @else
                {{ $alphabetLetter }}
            @endif
        @endforeach
        <br>
    <!--@endforeach-->
</body>
</html>