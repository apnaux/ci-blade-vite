<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  {{-- @vite() --}}
  {{-- <link href="index.css" rel="stylesheet"> --}}

  {{-- Development (hot reload) --}}
  @if (ENVIRONMENT === 'development')
    <script type="module" src="http://localhost:5173/app/Resources/app.js"></script>
    <link rel="stylesheet" href="http://localhost:5173/app/Resources/app.css" />
  @else
    {{-- Production (manifest-based) --}}
    @php $manifest = json_decode(file_get_contents(ROOTPATH . 'public/build/.vite/manifest.json'), true); @endphp
    <script type="module" src="{{ base_url('public/build/' . $manifest['app/Resources/app.js']['file']) }}"></script>
    <link rel="stylesheet" href="{{ base_url('public/build/' . $manifest['app/Resources/app.css']['file']) }}" />
  @endif
</head>
<body>
  @yield('body')
</body>
</html>