<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

    <header class="header">
        <h1>Website Header</h1>
    </header>

    <nav class="navigation">
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/contact">contact</a>
    </nav>

    <div class="main-container">
        
        <main class="main-content">
           @yield('content')
        </main>

        <aside class="sidebar">
            <h3>Sidebar</h3>
            <p>
                <ul>
                    <li>Recent Posts</li>
                    <li>Categories</li>
                    <li>Archives</li>
                    <li>Links</li>
                
                </ul>
            </p>
        </aside>

    </div>

    <footer class="footer">
        <p>&copy; 2025 Simple Layout. All Rights Reserved.</p>
    </footer>

</body>
</html>