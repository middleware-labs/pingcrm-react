<!DOCTYPE html>
<html class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    @routes
    @inertiaHead
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.tsx'])

    <script src="https://cdnjs.middleware.io/browser/libs/0.0.1/middleware-rum.min.js" type="text/javascript"></script>

    <script>
        if (window.Middleware) {
            Middleware.track({
                serviceName: "pingcrm",
                projectName: "pingcrm",
                accountKey: "lneevcqdcnzccpdpbhelkxpjffdxeznkryvb",
                target: "https://ruplp.middleware.io:443",
                defaultAttributes: {
                    "app.version": "1.0.0",
                },
            })
        }
    </script>
</head>

<body class="font-sans antialiased leading-none text-gray-800">
    @inertia
</body>

</html>